<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * The class of infectious agent (bacteria, prion, etc.) that causes the disease.
 * 
 * @method InfectiousAgentClassProperty setValue($value)
 */
class InfectiousAgentClassProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/infectiousAgentClass';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\InfectiousAgentClassType;
	}
}