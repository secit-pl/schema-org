<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * A combination of date and time of day in the form [-]CCYY-MM-DDThh:mm:ss[Z|(+|-)hh:mm] (see Chapter 5.4 of ISO 8601).
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