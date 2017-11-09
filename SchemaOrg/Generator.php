<?php

namespace SecIT\SchemaOrg;

use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpInterface;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;
use gossi\codegen\model\PhpProperty;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

/**
 * Class Generator.
 *
 * Monolithic and messy. Only for internal usage!
 *
 * @author Tomasz Gemza
 */
final class Generator
{
    /**
     * @var bool
     */
    protected $iKnowWhatIAmDoing = false;

    /**
     * @var bool
     */
    protected $backwardCompatibility = false;

    /**
     * @var bool
     */
    protected $php7ClassNames = true;

    /**
     * @var string
     */
    protected $dataTypeInterfaceName = 'DataTypeInterface';

    /**
     * @var string
     */
    protected $propertyInterfaceName = 'PropertyInterface';

    /**
     * @var string
     */
    protected $typeInterfaceName = 'TypeInterface';

    /**
     * Generate classes.
     *
     * @throws \Exception
     */
    public function generate()
    {
        if (!$this->iKnowWhatIAmDoing) {
            throw new \Exception('You don\'t know what you\'re doing!');
        }

        $this->cleanUp();

        $schema = $this->getSchema();

        echo "Interfaces generation...\r\n";
        $this->generateInterfaces();

        echo "Class generation...\r\n";
        $this->generateClasses($schema);

        if ($this->backwardCompatibility) {
            $this->php7ClassNames = false;
            $this->generateClasses($schema);
            $this->php7ClassNames = true;
        }
    }

    /**
     * Confirm that you know what you're doing.
     *
     * @param bool $iKnowWhatIAmDoing
     *
     * @return Generator
     */
    public function setIKnowWhatIAmDoing($iKnowWhatIAmDoing = false)
    {
        $this->iKnowWhatIAmDoing = $iKnowWhatIAmDoing;

        return $this;
    }

    /**
     * Set backward compatibility.
     *
     * @param bool $backwardCompatibility
     *
     * @return Generator
     */
    public function setBackwardCompatibility($backwardCompatibility)
    {
        $this->backwardCompatibility = $backwardCompatibility;

        return $this;
    }

    /**
     * Generate interfaces.
     */
    protected function generateInterfaces()
    {
        $this->generateDataTypeInterface();
        $this->generatePropertyInterface();
        $this->generateTypeInterface();
    }

    /**
     * Generate data type interface.
     */
    public function generateDataTypeInterface()
    {
        $interface = new PhpInterface($this->dataTypeInterfaceName);
        $interface
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\DataType\\'.$this->dataTypeInterfaceName)
            ->setDescription('Interface '.$this->dataTypeInterfaceName.'.')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
            )
            ->setMethod(PhpMethod::create('setValue')
                ->setDescription('Set value.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                )
                ->setType($this->dataTypeInterfaceName)
            )
            ->setMethod(PhpMethod::create('getValue')
                ->setDescription('Get value.')
            )
        ;

        $generator = new CodeGenerator();
        $code = $generator->generate($interface);

        $directory = $this->getMappingDirectory('DataType');
        file_put_contents($directory.$this->dataTypeInterfaceName.'.php', "<?php\n\n".$code);
    }

    /**
     * Generate property interface.
     */
    public function generatePropertyInterface()
    {
        $interface = new PhpInterface($this->propertyInterfaceName);
        $interface
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\Property\\'.$this->propertyInterfaceName)
            ->setDescription('Interface '.$this->propertyInterfaceName.'.')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
            )
            ->setMethod(PhpMethod::create('getValue')
                ->setDescription('Get value.')
                ->setType('string')
            )
            ->setMethod(PhpMethod::create('isValueValid')
                ->setDescription('Check is value valid.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                )
                ->setType('bool')
            )
        ;

        $generator = new CodeGenerator();
        $code = $generator->generate($interface);

        $directory = $this->getMappingDirectory('Property');
        file_put_contents($directory.$this->propertyInterfaceName.'.php', "<?php\n\n".$code);
    }

    /**
     * Generate type interface.
     */
    public function generateTypeInterface()
    {
        $interface = new PhpInterface($this->typeInterfaceName);
        $interface
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\Type\\'.$this->typeInterfaceName)
            ->setDescription('Interface '.$this->typeInterfaceName.'.')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
            )
            ->setMethod(PhpMethod::create('getId')
                ->setDescription('Get id.')
                ->setType('string')
            )
        ;

        $generator = new CodeGenerator();
        $code = $generator->generate($interface);

        $directory = $this->getMappingDirectory('Type');
        file_put_contents($directory.$this->typeInterfaceName.'.php', "<?php\n\n".$code);
    }

    /**
     * Generate classes.
     *
     * @param array $schema
     */
    protected function generateClasses(array $schema)
    {
        $this->generateDataTypes($schema);
        $this->generateProperties($schema);
        $this->generateTypes($schema);
    }

    /**
     * Generate data types.
     *
     * @param array $schema
     */
    protected function generateDataTypes(array $schema)
    {
        $directory = $this->getMappingDirectory('DataType');
        foreach ($schema['datatypes'] as $dataType => $data) {
            $this->generateDataType($dataType, $data, $directory);
        }
    }

    /**
     * Generate properties.
     *
     * @param array $schema
     */
    protected function generateProperties(array $schema)
    {
        $directory = $this->getMappingDirectory('Property');
        $this->generateAbstractProperty($directory);
        foreach ($schema['properties'] as $property => $data) {
            $this->generateProperty($property, $data, $directory, $schema['datatypes']);
        }
    }

    /**
     * Generate types.
     *
     * @param array $schema
     */
    protected function generateTypes(array $schema)
    {
        $directory = $this->getMappingDirectory('Type');
        foreach ($schema['types'] as $type => $data) {
            $this->generateType($type, $data, $directory, $schema);
        }
    }

    /**
     * Generate data type.
     *
     * @param string $dataType
     * @param array  $data
     * @param string $directory
     */
    protected function generateDataType($dataType, array $data, $directory)
    {
        $dataType = $this->getDataTypeClassName($dataType);

        $class = new PhpClass();
        $class
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\DataType\\'.$dataType)
            ->setDescription('Class '.$dataType.'.')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
                ->setBody('return \''.$data['url'].'\';')
            )
        ;

        if ($data['ancestors']) {
            $class->setParentClassName($this->getDataTypeClassName(end($data['ancestors'])));
            $class->setDescription($class->getDescription()."\n\n".'@method '.$dataType.' setValue($value)');
        } else {
            $constructorBody = 'if ($value !== null) {'."\n";
            $constructorBody .= '   $this->setValue($value);'."\n";
            $constructorBody .= '}';

            $class
                ->addInterface($this->dataTypeInterfaceName)
                ->setProperty(PhpProperty::create('value')
                    ->setVisibility('private')
                    ->setType('string')
                )
                ->setMethod(PhpMethod::create('__construct')
                    ->setDescription($dataType.' constructor.')
                    ->addParameter(PhpParameter::create('value')
                        ->setType('string')
                        ->setValue(null)
                    )
                    ->setBody($constructorBody)
                )
                ->setMethod(PhpMethod::create('setValue')
                    ->setDescription('Set value.')
                    ->addParameter(PhpParameter::create('value')
                        ->setType('string')
                    )
                    ->setType($dataType)
                    ->setBody('$this->value = $value;'."\n\n".'return $this;')
                )
                ->setMethod(PhpMethod::create('getValue')
                    ->setDescription('Get value.')
                    ->setBody('return $this->value;')
                )
            ;
        }

        $generator = new CodeGenerator();
        $code = $generator->generate($class);

        file_put_contents($directory.$dataType.'.php', "<?php\n\n".$code);
    }

    /**
     * Generate abstract property.
     *
     * @param string $directory
     */
    protected function generateAbstractProperty($directory)
    {
        $class = new PhpClass();
        $class
            ->setDescription('Abstract class AbstractProperty.')
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\Property\\AbstractProperty')
            ->addInterface($this->propertyInterfaceName)
            ->setAbstract(true)
        ;

        $constructorBody = 'if ($value !== null) {'."\n";
        $constructorBody .= '   $this->setValue($value);'."\n";
        $constructorBody .= '}';

        $setterBody = 'if (is_array($value)) {'."\n";
        $setterBody .= '    foreach ($value as $singleValue) {'."\n";
        $setterBody .= '        if (!$this->isValueValid($singleValue)) {'."\n";
        $setterBody .= '            throw new \\Exception(\'Unexpected value type\');'."\n";
        $setterBody .= '        }'."\n";
        $setterBody .= '    }'."\n";
        $setterBody .= '} elseif (!$this->isValueValid($value)) {'."\n";
        $setterBody .= '    throw new \\Exception(\'Unexpected value type\');'."\n";
        $setterBody .= '}'."\n";
        $setterBody .= '$this->value = $value;';

        $class
            ->setProperty(PhpProperty::create('value')
                ->setVisibility('private')
                ->setType('string')
            )
            ->setMethod(PhpMethod::create('__construct')
                ->setDescription('AbstractProperty constructor.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                    ->setValue(null)
                )
                ->setBody($constructorBody)
            )
            ->setMethod(PhpMethod::create('setValue')
                ->setDescription('Set value.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                )
                ->setType('AbstractProperty')
                ->setBody($setterBody."\n\n".'return $this;')
            )
            ->setMethod(PhpMethod::create('getValue')
                ->setDescription('Get value.')
                ->setType('string')
                ->setBody('return $this->value;')
            )
            ->setMethod(PhpMethod::create('isValueValid')
                ->setDescription('Check is value valid.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                )
                ->setType('bool')
                ->setAbstract(true)
            )
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
                ->setAbstract(true)
            )
        ;

        $generator = new CodeGenerator();
        $code = $generator->generate($class);

        file_put_contents($directory.'AbstractProperty.php', "<?php\n\n".$code);
    }

    /**
     * Generate property.
     *
     * @param string $propertyName
     * @param array  $data
     * @param string $directory
     * @param array  $dataTypes
     */
    protected function generateProperty($propertyName, array $data, $directory, array $dataTypes)
    {
        $property = $this->getPropertyClassName($propertyName);

        $class = new PhpClass();
        $class
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\Property\\'.$property)
            ->setParentClassName('AbstractProperty')
            ->setDescription($property.' class.'."\n\n".'@method '.$property.' setValue($value)')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
                ->setBody('return \''.$data['url'].'\';')
            )
        ;

        if ($this->backwardCompatibility && !$this->php7ClassNames) {
            $this->php7ClassNames = true;
            $deprecatedMessage = 'This class is deprecated and will be removed in release 3.4. Use SecIT\\SchemaOrg\\Mapping\\Property\\'.$this->getPropertyClassName($propertyName).' instead.';
            $this->php7ClassNames = false;
            $class->setDescription($class->getDescription()."\n\n".'@deprecated '.$deprecatedMessage);
        }

        $instanceCheckConditions = [];
        foreach ($data['ranges'] as $range) {
            if (isset($dataTypes[$range])) {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\DataType');
                $instanceCheckConditions[] = '$value instanceof DataType\\'.$this->getDataTypeClassName($range);
            } else {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Type');
                $instanceCheckConditions[] = '$value instanceof Type\\'.$this->getTypeClassName($range);
            }
        }

        // if no conditions than always return true
        if (!$instanceCheckConditions) {
            $instanceCheckConditions[] = 'true';
        }

        $class
            ->setMethod(PhpMethod::create('isValueValid')
                ->setDescription('Check is value valid.')
                ->addParameter(PhpParameter::create('value')
                    ->setType('string')
                )
                ->setType('bool')
                ->setBody('return '.implode(' || ', $instanceCheckConditions).';')
            )
        ;

        $generator = new CodeGenerator();
        $code = $generator->generate($class);

        file_put_contents($directory.$property.'.php', "<?php\n\n".$code);
    }

    /**
     * Generate type.
     *
     * @param string $typeName
     * @param array  $data
     * @param string $directory
     * @param array  $schema
     */
    protected function generateType($typeName, array $data, $directory, array $schema)
    {
        $type = $this->getTypeClassName($typeName);

        $class = new PhpClass();
        $class
            ->setQualifiedName('SecIT\\SchemaOrg\\Mapping\\Type\\'.$type)
            ->setDescription('Class '.$type.'.')
            ->setMethod(PhpMethod::create('getSchemaUrl')
                ->setDescription('Get schema URL.')
                ->setType('string')
                ->setBody('return \''.$data['url'].'\';')
            )
        ;

        if ($this->backwardCompatibility && !$this->php7ClassNames) {
            $this->php7ClassNames = true;
            $deprecatedMessage = 'This class is deprecated and will be removed in release 3.4. Use SecIT\\SchemaOrg\\Mapping\\Type\\'.$this->getTypeClassName($typeName).' instead.';
            $this->php7ClassNames = false;
            $class->setDescription($class->getDescription()."\n\n".'@deprecated '.$deprecatedMessage);
        }

        if ($data['ancestors']) {
            $class->setParentClassName($this->getTypeClassName(end($data['ancestors'])));

            $phpdocMethods = '';
            try {
                $inheritedProperties = $this->getInheritedProperties($typeName, $schema);
            } catch (\Exception $e) {
                printf("\n > Type %s declaration not found. Is it defined in extension?", $typeName);
                return;
            }

            foreach ($inheritedProperties as $inheritedProperty) {
                if ($inheritedProperty == 'itemListElement') {
                    $phpdocMethods .= '@method '.$type.' setItemListElements(array|Property\\'.$this->getPropertyClassName($inheritedProperty).'[] $itemListElements)'."\n";
                    $phpdocMethods .= '@method '.$type.' addItemListElement(Property\\'.$this->getPropertyClassName($inheritedProperty).' $itemListElement)'."\n";
                } else {
                    $phpdocMethods .= '@method '.$type.' set'.ucfirst($inheritedProperty).'(Property\\'.$this->getPropertyClassName($inheritedProperty).' $'.$inheritedProperty.')'."\n";
                }
            }

            $class->setDescription($class->getDescription()."\n\n".$phpdocMethods);
            if ($phpdocMethods) {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property');
            }
        } else {
            $class
                ->addInterface($this->typeInterfaceName)
                ->setProperty(PhpProperty::create('id')
                    ->setVisibility('private')
                    ->setType(null)
                )
                ->setMethod(PhpMethod::create('__construct')
                    ->setDescription($type.' constructor.')
                    ->addParameter(PhpParameter::create('id')
                        ->setType('string')
                        ->setValue(null)
                    )
                    ->setBody('$this->id = $id;')
                )
                ->setMethod(PhpMethod::create('getId')
                    ->setDescription('Get id.')
                    ->setType('string')
                    ->setBody('return $this->id;')
                )
            ;
        }

        foreach ($data['specific_properties'] as $property) {
            if (!isset($schema['properties'][$property])) {
                continue;
            }

            if ($property == 'itemListElement') {
                $setterBody = 'if (!is_array($itemListElements)) {'."\n";
                $setterBody .= '    throw new \\Exception(\'The value is expected to be an array\');'."\n";
                $setterBody .= '}'."\n";
                $setterBody .= 'foreach ($itemListElements as $itemListElement) {'."\n";
                $setterBody .= '    if (!$itemListElement instanceof Property\\'.$this->getPropertyClassName($property).') {'."\n";
                $setterBody .= '        throw new \\Exception(\'Unexpected value type\');'."\n";
                $setterBody .= '    }'."\n";
                $setterBody .= '}'."\n";
                $setterBody .= '$this->itemListElement = $itemListElements;'."\n";
                $setterBody .= "\n";
                $setterBody .= 'return $this;';

                $adderBody = 'if (!$itemListElement instanceof Property\\'.$this->getPropertyClassName($property).') {'."\n";
                $adderBody .= '     throw new \\Exception(\'Unexpected value type\');'."\n";
                $adderBody .= '}'."\n";
                $adderBody .= '$this->itemListElement[] = $itemListElement;'."\n";
                $adderBody .= "\n";
                $adderBody .= 'return $this;';

                $class
                    ->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property')
                    ->setProperty(PhpProperty::create('itemListElement')
                        ->setVisibility('private')
                        ->setType('array|Property\\'.$this->getPropertyClassName($property).'[]')
                    )
                    ->setMethod(PhpMethod::create('__construct')
                        ->setDescription($type.' constructor.')
                        ->addParameter(PhpParameter::create('id')
                            ->setType('string')
                            ->setValue(null)
                        )
                        ->setBody('parent::__construct($id);'."\n".'$this->'.$property.' = [];')
                    )
                    ->setMethod(PhpMethod::create('setItemListElements')
                        ->setDescription('Set item list elements.')
                        ->addParameter(PhpParameter::create('itemListElements')
                            ->setType('array|Property\\'.$this->getPropertyClassName($property).'[]')
                        )
                        ->setType($type)
                        ->setBody($setterBody)
                    )
                    ->setMethod(PhpMethod::create('addItemListElement')
                        ->setDescription('Add an item list element.')
                        ->addParameter(PhpParameter::create('itemListElement')
                            ->setType('Property\\'.$this->getPropertyClassName($property))
                        )
                        ->setType($type)
                        ->setBody($adderBody)
                    )
                    ->setMethod(PhpMethod::create('getItemListElements')
                        ->setDescription('Get item list elements.')
                        ->setType('array|Property\\'.$this->getPropertyClassName($property).'[]')
                        ->setBody('return $this->'.$property.';')
                    )
                ;
            } else {
                $class
                    ->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property')
                    ->setProperty(PhpProperty::create($property)
                        ->setVisibility('private')
                        ->setType('Property\\'.$this->getPropertyClassName($property))
                    )
                    ->setMethod(PhpMethod::create('set'.ucfirst($property))
                        ->setDescription('Set '.mb_strtolower(preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $property)).'.')
                        ->addParameter(PhpParameter::create($property)
                            ->setType('Property\\'.$this->getPropertyClassName($property))
                        )
                        ->setType($type)
                        ->setBody('$this->'.$property.' = $'.$property.';'."\n\n".'return $this;')
                    )
                    ->setMethod(PhpMethod::create('get'.ucfirst($property))
                        ->setDescription('Get '.mb_strtolower(preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $property)).'.')
                        ->setType('Property\\'.$this->getPropertyClassName($property))
                        ->setBody('return $this->'.$property.';')
                    )
                ;
            }
        }

        $generator = new CodeGenerator();
        $code = $generator->generate($class);

        file_put_contents($directory.$type.'.php', "<?php\n\n".$code);
    }

    /**
     * Get valid PHP7 data type class name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getDataTypeClassName($name)
    {
        if (substr($name, -4) == 'Type') {
            return $name;
        }

        return $name.'Type';
    }

    /**
     * Get valid PHP7 property class name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getPropertyClassName($name)
    {
        $name = ucfirst($name);
        if (!$this->php7ClassNames) {
            return $name;
        }

        if (substr($name, -8) == 'Property') {
            return $name;
        }

        return $name.'Property';
    }

    /**
     * Get valid PHP7 type class name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function getTypeClassName($name)
    {
        if (!$this->php7ClassNames) {
            return $name;
        }

        if (substr($name, -4) == 'Type') {
            return $name;
        }

        return $name.'Type';
    }

    /**
     * Get inherited properties.
     *
     * @param string $type
     * @param array  $schema
     * @param bool   $isRoot
     *
     * @return array
     *
     * @throws \Exception
     */
    protected function getInheritedProperties($type, array $schema, $isRoot = true)
    {
        if (!isset($schema['types'][$type])) {
            throw new \Exception('Unknown type '.$type);
        }

        $typeSchema = $schema['types'][$type];
        $properties = [];
        if (!$isRoot) {
            foreach ($typeSchema['specific_properties'] as $property) {
                if (!isset($schema['properties'][$property])) {
                    continue;
                }

                $properties[$property] = $property;
            }
        }

        if ($typeSchema['ancestors']) {
            $properties = array_merge(
                $properties,
                $this->getInheritedProperties(end($typeSchema['ancestors']), $schema, false)
            );
        }

        ksort($properties);

        return $properties;
    }

    /**
     * Get mapping directory.
     *
     * @param string $mappingType
     *
     * @return string
     */
    protected function getMappingDirectory($mappingType)
    {
        return __DIR__.DIRECTORY_SEPARATOR.'Mapping'.DIRECTORY_SEPARATOR.$mappingType.DIRECTORY_SEPARATOR;
    }

    /**
     * Remove previously generated files.
     */
    protected function cleanUp()
    {
        $files = glob(__DIR__.DIRECTORY_SEPARATOR.'Mapping'.DIRECTORY_SEPARATOR.'{DataType,Property,Type}'.DIRECTORY_SEPARATOR.'*.php', GLOB_BRACE);
        foreach ($files as $file) {
            unlink($file);
        }
    }

    /**
     * Get schema.
     *
     * @return array
     */
    protected function getSchema()
    {
        if (file_exists(__DIR__.'/../all.json')) {
            return json_decode(file_get_contents(__DIR__.'/../all.json'), true);
        }

        echo "Getting schema\n";

        $schema = [
            'datatypes' => [],
            'properties' => [],
            'types' => [],
        ];

        $client = new Client(['base_uri' => 'https://schema.org']);
        $response = $client->get('/docs/full.html');
        $crawler = new Crawler($response->getBody()->__toString());

        $dataTypes = $crawler->filter('#datatype_tree a');
        foreach ($dataTypes as $index => $dataType) {
            echo '['.($index + 1).'/'.$dataTypes->count().'] ';
            if (strpos($dataType->getAttribute('class'), 'ext') !== false) {
                echo 'Skipping extension datatype: '.$dataType->textContent."\n";
                continue;
            }

            echo 'Getting datatype: '.$dataType->textContent."\n";
            $schema['datatypes'][$dataType->textContent] = $this->getDataType($client, $dataType->getAttribute('href'));
        }

        $types = $crawler->filter('#thing_tree a');
        foreach ($types as $index => $type) {
            if (!isset($schema['types'][$type->textContent]) && substr($type->getAttribute('href'), 0, 1) !== '#') {
                echo '['.($index + 1).'/'.$types->count().'] ';
                if (strpos($type->getAttribute('class'), 'ext') !== false) {
                    echo 'Skipping extension type: '.$type->textContent."\n";
                    continue;
                }

                echo 'Getting type: '.$type->textContent."\n";
                $schema['types'][$type->textContent] = $this->getType($client, $type->getAttribute('href'));
            }
        }

        $specificProperties = [];
        foreach ($schema['types'] as $type) {
            foreach ($type['specific_properties'] as $specificProperty) {
                if (!isset($schema['properties'][$specificProperty])) {
                    $specificProperties[$specificProperty] = $specificProperty;
                }
            }
        }

        $specificPropertiesCount = count($specificProperties);
        foreach (array_values($specificProperties) as $index => $specificProperty) {
            echo '['.($index + 1).'/'.$specificPropertiesCount.'] Getting property: '.$specificProperty."\n";
            try {
                $schema['properties'][$specificProperty] = $this->getProperty($client, '/'.$specificProperty);
            } catch (\InvalidArgumentException $exception) {
                echo '   Failed: '.$exception->getMessage()."\n";
                echo "   Skipping...\n";
            }
        }

        $enumerationMembers = [];
        foreach ($schema['types'] as $type) {
            foreach ($type['enumeration_members'] as $enumerationMember) {
                if (!isset($schema['types'][$enumerationMember])) {
                    $enumerationMembers[$enumerationMember] = $enumerationMember;
                }
            }
        }

        $enumerationMembersCount = count($enumerationMembers);
        foreach (array_values($enumerationMembers) as $index => $enumerationMember) {
            echo '['.($index + 1).'/'.$enumerationMembersCount.'] Getting extra enumeration member: '.$enumerationMember."\n";
            $schema['types'][$enumerationMember] = $this->getType($client, '/'.$enumerationMember);
        }

        echo "Getting schema done!\n\n";

        file_put_contents(__DIR__.'/../all.json', json_encode($schema));

        return $schema;
    }

    /**
     * Get data type.
     *
     * @param Client $client
     * @param string $href
     *
     * @return array
     */
    protected function getDataType(Client $client, $href)
    {
        $response = $client->get($href);
        $crawler = new Crawler($response->getBody()->__toString());

        $ancestors = [];
        $subclasses = $crawler->filter('[property="rdfs:subClassOf"]');
        if ($subclasses->count() > 0) {
            $ancestors[] = ltrim(preg_replace('/http[s]*:\/\/schema.org\//', '', $subclasses->first()->attr('href')), '/');
        }

        return [
            'ancestors' => $ancestors,
            'comment' => $crawler->filter('[property="rdfs:comment"]')->first()->text(),
            'comment_plain' => strip_tags($crawler->filter('[property="rdfs:comment"]')->first()->text()),
            'id' => $crawler->filter('[property="rdfs:label"]')->first()->text(),
            'label' => $crawler->filter('[property="rdfs:label"]')->first()->text(),
            'url' => $client->getConfig('base_uri').$href,
        ];
    }

    /**
     * Get type.
     *
     * @param Client $client
     * @param string $href
     *
     * @return array
     */
    protected function getType(Client $client, $href)
    {
        $response = $client->get($href);
        $html = $response->getBody()->__toString();
        $crawler = new Crawler($html);

        $id = $crawler->filter('[property="rdfs:label"]')->first()->text();

        $ancestors = [];
        $subclasses = $crawler->filter('[property="rdfs:subClassOf"]');
        if ($subclasses->count() > 0) {
            $ancestors[] = ltrim(preg_replace('/http[s]*:\/\/schema.org\//', '', $subclasses->first()->attr('href')), '/');
        }

        // if no breadcrumbs try to determine subclasses from the properties table
        if (!$ancestors) {
            $subclasses = $crawler->filter('.supertype .supertype-name a');
            foreach ($subclasses as $subclass) {
                $supertypeHref = $subclass->getAttribute('href');
                if ($supertypeHref == $href) {
                    continue;
                }

                $ancestors[] = ltrim(preg_replace('/http[s]*:\/\/schema.org\//', '', $supertypeHref), '/');

                break;
            }
        }

        $specificProperties = [];
        $supertypeNames = $crawler->filter('.definition-table .supertype .supertype-name a');
        if ($supertypeNames->count() > 0 && $supertypeNames->first()->text() == $id) {
            $properties = $crawler->filter('.definition-table tbody.supertype')->first()->filter('.prop-nam a');
            foreach ($properties as $property) {
                if (strpos($property->getAttribute('class'), 'ext') === false) {
                    $specificProperties[] = ltrim(preg_replace('/http[s]*:\/\/(.*?)schema.org\//', '', $property->getAttribute('href')), '/');
                }
            }
        }

        $enumerationMembers = [];
        if (strpos($html, '<b>Enumeration members</b>') !== false) {
            $enumerationMembersList = $crawler->filter('ul')->last()->filter('a');
            foreach ($enumerationMembersList as $member) {
                if (strpos($member->getAttribute('class'), 'ext') === false) {
                    $enumerationMembers[] = ltrim(preg_replace('/http[s]*:\/\/schema.org\//', '', $member->getAttribute('href')), '/');
                }
            }
        }

        return [
            'ancestors' => $ancestors,
            'comment' => $crawler->filter('[property="rdfs:comment"]')->first()->text(),
            'comment_plain' => strip_tags($crawler->filter('[property="rdfs:comment"]')->first()->text()),
            'id' => $id,
            'label' => $id,
            'specific_properties' => $specificProperties,
            'enumeration_members' => $enumerationMembers,
            'url' => $client->getConfig('base_uri').$href,
        ];
    }

    /**
     * Get property.
     *
     * @param Client $client
     * @param string $href
     *
     * @return array
     */
    protected function getProperty(Client $client, $href)
    {
        $response = $client->get($href);
        $crawler = new Crawler($response->getBody()->__toString());

        $ranges = [];
        $rangeIncludes = $crawler->filter('[property="rangeIncludes"]');
        foreach ($rangeIncludes as $rangeInclude) {
            $ranges[] = ltrim(preg_replace('/http[s]*:\/\/schema.org\//', '', $rangeInclude->getAttribute('href')), '/');
        }

        return [
            'comment' => $crawler->filter('[property="rdfs:comment"]')->first()->text(),
            'comment_plain' => strip_tags($crawler->filter('[property="rdfs:comment"]')->first()->text()),
            'id' => $crawler->filter('[property="rdfs:label"]')->first()->text(),
            'label' => $crawler->filter('[property="rdfs:label"]')->first()->text(),
            'ranges' => $ranges,
            'url' => $client->getConfig('base_uri').$href,
        ];
    }
}
