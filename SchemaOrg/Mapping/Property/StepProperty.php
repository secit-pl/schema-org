<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\DataType;
use SecIT\SchemaOrg\Mapping\Type;

/**
 * A single step item (as HowToStep, text, document, video, etc.) or a HowToSection.
 * 
 * @method StepProperty setValue($value)
 */
class StepProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/step';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\CreativeWorkType || $value instanceof Type\HowToSectionType || $value instanceof Type\HowToStepType || $value instanceof DataType\TextType;
	}
}