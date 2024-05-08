<?php

namespace SecIT\SchemaOrg\Mapping\Property;

use SecIT\SchemaOrg\Mapping\Type;

/**
 * An answer (possibly one of several, possibly incorrect) to a Question, e.g. on a Question/Answer site.
 * 
 * @method SuggestedAnswerProperty setValue($value)
 */
class SuggestedAnswerProperty extends AbstractProperty {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/suggestedAnswer';
	}

	/**
	 * Check is value valid.
	 *
	 * @param string $value
	 * @return bool
	 */
	public function isValueValid($value) {
		return $value instanceof Type\AnswerType || $value instanceof Type\ItemListType;
	}
}