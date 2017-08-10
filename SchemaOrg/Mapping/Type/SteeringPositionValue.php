<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SteeringPositionValue.
 * 
 * @method SteeringPositionValue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SteeringPositionValue setEqual(Property\Equal $equal)
 * @method SteeringPositionValue setGreater(Property\Greater $greater)
 * @method SteeringPositionValue setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method SteeringPositionValue setLesser(Property\Lesser $lesser)
 * @method SteeringPositionValue setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method SteeringPositionValue setNonEqual(Property\NonEqual $nonEqual)
 * @method SteeringPositionValue setValueReference(Property\ValueReference $valueReference)
 */
class SteeringPositionValue extends QualitativeValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SteeringPositionValue';
	}
}