<?php

namespace SecIT\SchemaOrg\Mapping\Property;

/**
 * Abstract class AbstractProperty.
 */
abstract class AbstractProperty {

	/**
	 * @var string
	 */
	private $value;

	/**
	 * AbstractProperty constructor.
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
	abstract public function getSchemaUrl();

	/**
	 * Get value.
	 * 
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Check is value valid.
	 * 
	 * @param string $value
	 * @return bool
	 */
	abstract public function isValueValid($value);

	/**
	 * Set value.
	 * 
	 * @param string $value
	 * @return AbstractProperty
	 */
	public function setValue($value) {
		if (is_array($value)) {
		    foreach ($value as $singleValue) {
		        if (!$this->isValueValid($singleValue)) {
		            throw new \Exception('Unexpected value type');
		        }
		    }
		} elseif (!$this->isValueValid($value)) {
		    throw new \Exception('Unexpected value type');
		}
		$this->value = $value;

		return $this;
	}
}