<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class TimeType.
 * 
 * @method TimeType setValue($value)
 */
class TimeType extends DataType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Time';
	}
}