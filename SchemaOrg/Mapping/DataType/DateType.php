<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * A date value in ISO 8601 date format.
 * 
 * @method DateType setValue($value)
 */
class DateType extends DataType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Date';
	}
}