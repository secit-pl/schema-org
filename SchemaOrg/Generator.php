<?php

namespace SecIT\SchemaOrg;

use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\PhpClass;
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
    protected $iKnowWhatIAmDoing = false;

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

        echo 'Class generation...';
        $this->generateDataTypes($schema);
        $this->generateProperties($schema);
        $this->generateTypes($schema);
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
        $dataType = $this->fixDataTypeClassName($dataType);

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
            $class->setParentClassName($this->fixDataTypeClassName(end($data['ancestors'])));
            $class->setDescription($class->getDescription()."\n\n".'@method '.$dataType.' setValue($value)');
        } else {
            $constructorBody = 'if ($value !== null) {'."\n";
            $constructorBody .= '   $this->setValue($value);'."\n";
            $constructorBody .= '}';

            $class
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
     * @param string $property
     * @param array  $data
     * @param string $directory
     * @param array  $dataTypes
     */
    protected function generateProperty($property, array $data, $directory, array $dataTypes)
    {
        $property = ucfirst($property);

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

        $instanceCheckConditions = [];
        foreach ($data['ranges'] as $range) {
            if (isset($dataTypes[$range])) {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\DataType');
                $instanceCheckConditions[] = '$value instanceof DataType\\'.$this->fixDataTypeClassName($range);
            } else {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Type');
                $instanceCheckConditions[] = '$value instanceof Type\\'.$range;
            }
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
     * @param string $type
     * @param array  $data
     * @param string $directory
     * @param array  $schema
     */
    protected function generateType($type, array $data, $directory, array $schema)
    {
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

        if ($data['ancestors']) {
            $class->setParentClassName(end($data['ancestors']));

            $phpdocMethods = '';
            try {
                $inheritedProperties = $this->getInheritedProperties($type, $schema);
            } catch (\Exception $e) {
                printf("\n > Type %s declaration not found. Is it defined in extension?", $type);
                return;
            }

            foreach ($inheritedProperties as $inheritedProperty) {
                if ($inheritedProperty == 'itemListElement') {
                    $phpdocMethods .= '@method '.$type.' setItemListElements(array|Property\\'.ucfirst($inheritedProperty).'[] $itemListElements)'."\n";
                    $phpdocMethods .= '@method '.$type.' addItemListElement(Property\\'.ucfirst($inheritedProperty).' $itemListElement)'."\n";
                } else {
                    $phpdocMethods .= '@method '.$type.' set'.ucfirst($inheritedProperty).'(Property\\'.ucfirst($inheritedProperty).' $'.$inheritedProperty.')'."\n";
                }
            }

            $class->setDescription($class->getDescription()."\n\n".$phpdocMethods);
            if ($phpdocMethods) {
                $class->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property');
            }
        } else {
            $class
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
            if ($property == 'itemListElement') {
                $setterBody = 'if (!is_array($itemListElements)) {'."\n";
                $setterBody .= '    throw new \\Exception(\'The value is expected to be an array\');'."\n";
                $setterBody .= '}'."\n";
                $setterBody .= 'foreach ($itemListElements as $itemListElement) {'."\n";
                $setterBody .= '    if (!$itemListElement instanceof Property\\'.ucfirst($property).') {'."\n";
                $setterBody .= '        throw new \\Exception(\'Unexpected value type\');'."\n";
                $setterBody .= '    }'."\n";
                $setterBody .= '}'."\n";
                $setterBody .= '$this->itemListElement = $itemListElements;'."\n";
                $setterBody .= "\n";
                $setterBody .= 'return $this;';

                $adderBody = 'if (!$itemListElement instanceof Property\\'.ucfirst($property).') {'."\n";
                $adderBody .= '     throw new \\Exception(\'Unexpected value type\');'."\n";
                $adderBody .= '}'."\n";
                $adderBody .= '$this->itemListElement[] = $itemListElement;'."\n";
                $adderBody .= "\n";
                $adderBody .= 'return $this;';

                $class
                    ->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property')
                    ->setProperty(PhpProperty::create('itemListElement')
                        ->setVisibility('private')
                        ->setType('array|Property\\'.ucfirst($property).'[]')
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
                            ->setType('array|Property\\'.ucfirst($property).'[]')
                        )
                        ->setType($type)
                        ->setBody($setterBody)
                    )
                    ->setMethod(PhpMethod::create('addItemListElement')
                        ->setDescription('Add an item list element.')
                        ->addParameter(PhpParameter::create('itemListElement')
                            ->setType('Property\\'.ucfirst($property))
                        )
                        ->setType($type)
                        ->setBody($adderBody)
                    )
                    ->setMethod(PhpMethod::create('getItemListElements')
                        ->setDescription('Get item list elements.')
                        ->setType('array|Property\\'.ucfirst($property).'[]')
                        ->setBody('return $this->'.$property.';')
                    )
                ;
            } else {
                $class
                    ->addUseStatement('SecIT\\SchemaOrg\\Mapping\\Property')
                    ->setProperty(PhpProperty::create($property)
                        ->setVisibility('private')
                        ->setType('Property\\'.ucfirst($property))
                    )
                    ->setMethod(PhpMethod::create('set'.ucfirst($property))
                        ->setDescription('Set '.mb_strtolower(preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $property)).'.')
                        ->addParameter(PhpParameter::create($property)
                            ->setType('Property\\'.ucfirst($property))
                        )
                        ->setType($type)
                        ->setBody('$this->'.$property.' = $'.$property.';'."\n\n".'return $this;')
                    )
                    ->setMethod(PhpMethod::create('get'.ucfirst($property))
                        ->setDescription('Get '.mb_strtolower(preg_replace('/(?!^)[A-Z]{2,}(?=[A-Z][a-z])|[A-Z][a-z]/', ' $0', $property)).'.')
                        ->setType('Property\\'.ucfirst($property))
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
     * Fix data type class name to the valid PHP7 class name.
     *
     * @param string $name
     *
     * @return string
     */
    protected function fixDataTypeClassName($name)
    {
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
            $schema['properties'][$specificProperty] = $this->getProperty($client, '/'.$specificProperty);
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

        $specificProperties = [];
        $supertypeNames = $crawler->filter('.definition-table .supertype .supertype-name a');
        if ($supertypeNames->count() > 0 && $supertypeNames->first()->text() == $id) {
            $properties = $crawler->filter('.definition-table tbody.supertype')->first()->filter('.prop-nam a');
            foreach ($properties as $property) {
                if (strpos($property->getAttribute('class'), 'ext') === false) {
                    $specificProperties[] = ltrim($property->getAttribute('href'), '/');
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
