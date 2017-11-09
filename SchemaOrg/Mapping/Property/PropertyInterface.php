<?php

namespace SecIT\SchemaOrg\Mapping\Property;

/**
 * Interface PropertyInterface.
 */
interface PropertyInterface {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl();

	/**
	 * Get value.
	 * 
	 * @return string
	 */
	public function getValue();

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value);
}