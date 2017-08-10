<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LeftHandDriving.
 * 
 * @method LeftHandDriving setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LeftHandDriving setEqual(Property\Equal $equal)
 * @method LeftHandDriving setGreater(Property\Greater $greater)
 * @method LeftHandDriving setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method LeftHandDriving setLesser(Property\Lesser $lesser)
 * @method LeftHandDriving setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method LeftHandDriving setNonEqual(Property\NonEqual $nonEqual)
 * @method LeftHandDriving setValueReference(Property\ValueReference $valueReference)
 */
class LeftHandDriving extends SteeringPositionValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LeftHandDriving';
	}
}