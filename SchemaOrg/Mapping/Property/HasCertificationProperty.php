<?php

namespace SecIT\SchemaOrg\Mapping\Property;

/**
 * Certification information about a product, organization, service, place, or person.
 * 
 * @method HasCertificationProperty setValue($value)
 */
class HasCertificationProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/hasCertification';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return true;
	}
}