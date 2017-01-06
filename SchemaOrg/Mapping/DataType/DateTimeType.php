<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class DateTimeType.
 * 
 * @method DateTimeType setValue($value)
 */
class DateTimeType extends DataType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DateTime';
	}
}