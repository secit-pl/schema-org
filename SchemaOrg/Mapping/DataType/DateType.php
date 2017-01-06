<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Class DateType.
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