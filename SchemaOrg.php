<?php

namespace SecIT;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Property;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * Class SchemaOrg.
 *
 * @author Tomasz Gemza
 */
class SchemaOrg
{
    /**
     * Convert schema.org type to the json-ld string.
     *
     * @param Type\TypeInterface $thing
     * @param bool               $addScriptTag Wrap returned json-ld with the <script type="application/ld+json"></script> tag
     *
     * @return string
     */
    public function toJsonLd($thing, $addScriptTag = true)
    {
        $return = json_encode($this->toJsonLdDataArray($thing));
        if ($addScriptTag) {
            return '<script type="application/ld+json">'.$return.'</script>';
        }

        return $return;
    }

    /**
     * Convert schema.org type to the json-ld data array.
     *
     * @param Type\TypeInterface $thing
     *
     * @return array
     */
    public function toJsonLdDataArray($thing)
    {
        $jsonLd = ['@context' => 'http://schema.org'];

        return $jsonLd + $this->typeToJsonLd($thing);
    }

    /**
     * Convert type to json-ld data array.
     *
     * @param Type\TypeInterface $type
     *
     * @return array
     */
    protected function typeToJsonLd($type)
    {
        $typeName = (new \ReflectionClass($type))->getShortName();
        if (strlen($typeName) > 4 && substr($typeName, -4) === 'Type') {
            $typeName = substr($typeName, 0, -4);
        }

        $jsonLd = [
            '@type' => $typeName,
        ];

        if ($type->getId()) {
            $jsonLd['@id'] = $type->getId();
        }

        $publicMethods = (new \ReflectionClass($type))->getMethods(\ReflectionMethod::IS_PUBLIC);
        foreach ($publicMethods as $method) {
            $methodName = $method->getName();
            if (substr($methodName, 0, 3) !== 'get') {
                continue;
            }

            $key = lcfirst(substr($methodName, 3));
            if ($key == 'itemListElements') {
                $key = 'itemListElement';
            }

            $value = $type->$methodName();
            if (in_array($methodName, ['getId', 'getSchemaUrl']) || $value === null) {
                continue;
            } elseif (is_array($value)) {
                $jsonLd[$key] = [];
                foreach ($value as $item) {
                    $jsonLd[$key][] = $this->valueToJsonLd($item);
                }
            } else {
                $jsonLd[$key] = $this->valueToJsonLd($value);
            }
        }

        return $jsonLd;
    }

    /**
     * Convert data type to json-ld to the value.
     *
     * @param DataType\DataTypeInterface $dataType
     *
     * @return string
     */
    protected function dataTypeToJsonLd($dataType)
    {
        return $dataType->getValue();
    }

    /**
     * Convert property to json-ld data array or string.
     *
     * @param Property\PropertyInterface $property
     *
     * @return array|string
     */
    protected function propertyToJsonLd($property)
    {
        return $this->valueToJsonLd($property->getValue());
    }

    /**
     * Convert value to json-ld format.
     *
     * @param mixed $value
     *
     * @return array|string
     *
     * @throws \Exception
     */
    protected function valueToJsonLd($value)
    {
        if (is_array($value)) {
            $return = [];
            foreach ($value as $item) {
                $return[] = $this->valueToJsonLd($item);
            }

            return $return;
        } elseif ($value instanceof Type\EnumerationType || $value instanceof Type\Enumeration) {
            return $value->getSchemaUrl();
        } elseif ($value instanceof Type\TypeInterface) {
            return $this->typeToJsonLd($value);
        } elseif ($value instanceof Property\PropertyInterface) {
            return $this->propertyToJsonLd($value);
        } elseif ($value instanceof DataType\DataTypeInterface) {
            return $this->dataTypeToJsonLd($value);
        }

        throw new \Exception('Unexpected data type '.gettype($value));
    }
}
