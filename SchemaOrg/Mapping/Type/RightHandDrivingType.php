<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RightHandDrivingType.
 * 
 * @method RightHandDrivingType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RightHandDrivingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RightHandDrivingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RightHandDrivingType setDescription(Property\DescriptionProperty $description)
 * @method RightHandDrivingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RightHandDrivingType setEqual(Property\EqualProperty $equal)
 * @method RightHandDrivingType setGreater(Property\GreaterProperty $greater)
 * @method RightHandDrivingType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method RightHandDrivingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RightHandDrivingType setImage(Property\ImageProperty $image)
 * @method RightHandDrivingType setLesser(Property\LesserProperty $lesser)
 * @method RightHandDrivingType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method RightHandDrivingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RightHandDrivingType setName(Property\NameProperty $name)
 * @method RightHandDrivingType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method RightHandDrivingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RightHandDrivingType setSameAs(Property\SameAsProperty $sameAs)
 * @method RightHandDrivingType setUrl(Property\UrlProperty $url)
 * @method RightHandDrivingType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class RightHandDrivingType extends SteeringPositionValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RightHandDriving';
	}
}