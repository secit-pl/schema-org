<?php

namespace SecIT\SchemaOrg\Mapping\DataType;

/**
 * Data type: Number. Usage guidelines: Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT NINE' (U+0039)) rather than superficially similar Unicode symbols. Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a decimal point. Avoid using these symbols as a readability separator.
 * 
 * @method NumberType setValue($value)
 */
class NumberType extends DataType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Number';
	}
}