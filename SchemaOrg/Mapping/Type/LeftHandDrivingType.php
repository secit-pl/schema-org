<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LeftHandDrivingType.
 * 
 * @method LeftHandDrivingType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method LeftHandDrivingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LeftHandDrivingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LeftHandDrivingType setDescription(Property\DescriptionProperty $description)
 * @method LeftHandDrivingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LeftHandDrivingType setEqual(Property\EqualProperty $equal)
 * @method LeftHandDrivingType setGreater(Property\GreaterProperty $greater)
 * @method LeftHandDrivingType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method LeftHandDrivingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LeftHandDrivingType setImage(Property\ImageProperty $image)
 * @method LeftHandDrivingType setLesser(Property\LesserProperty $lesser)
 * @method LeftHandDrivingType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method LeftHandDrivingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LeftHandDrivingType setName(Property\NameProperty $name)
 * @method LeftHandDrivingType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method LeftHandDrivingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LeftHandDrivingType setSameAs(Property\SameAsProperty $sameAs)
 * @method LeftHandDrivingType setUrl(Property\UrlProperty $url)
 * @method LeftHandDrivingType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class LeftHandDrivingType extends SteeringPositionValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LeftHandDriving';
	}
}