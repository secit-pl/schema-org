<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * The basic data types such as Integers, Strings, etc.
 */
class DataType implements DataTypeInterface {

	/**
	 * @var string
	 */
	private $value;

	/**
	 * DataType constructor.
	 *
	 * @param string $value
	 */
	public function __construct($value = null) {
		if ($value !== null) {
		   $this->setValue($value);
		}
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DataType';
	}

	/**
	 * Get value.
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Set value.
	 *
	 * @param string $value
	 * @return DataType
	 */
	public function setValue($value) {
		$this->value = $value;

		return $this;
	}
}