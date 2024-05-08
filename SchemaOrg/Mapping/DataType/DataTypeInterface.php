<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Interface DataTypeInterface.
 */
interface DataTypeInterface {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl();

	/**
	 * Get value.
	 */
	public function getValue();

	/**
	 * Set value.
	 *
	 * @param string $value
	 * @return DataTypeInterface
	 */
	public function setValue($value);
}