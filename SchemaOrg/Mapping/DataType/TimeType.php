<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * A point in time recurring on multiple days in the form hh:mm:ss[Z|(+|-)hh:mm] (see XML schema for details).
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