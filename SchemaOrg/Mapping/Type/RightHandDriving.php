<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RightHandDriving.
 * 
 * @method RightHandDriving setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RightHandDriving setEqual(Property\Equal $equal)
 * @method RightHandDriving setGreater(Property\Greater $greater)
 * @method RightHandDriving setGreaterOrEqual(Property\GreaterOrEqual $greaterOrEqual)
 * @method RightHandDriving setLesser(Property\Lesser $lesser)
 * @method RightHandDriving setLesserOrEqual(Property\LesserOrEqual $lesserOrEqual)
 * @method RightHandDriving setNonEqual(Property\NonEqual $nonEqual)
 * @method RightHandDriving setValueReference(Property\ValueReference $valueReference)
 */
class RightHandDriving extends SteeringPositionValue {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RightHandDriving';
	}
}