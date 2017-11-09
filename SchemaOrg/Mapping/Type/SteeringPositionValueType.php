<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SteeringPositionValueType.
 * 
 * @method SteeringPositionValueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SteeringPositionValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SteeringPositionValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SteeringPositionValueType setDescription(Property\DescriptionProperty $description)
 * @method SteeringPositionValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SteeringPositionValueType setEqual(Property\EqualProperty $equal)
 * @method SteeringPositionValueType setGreater(Property\GreaterProperty $greater)
 * @method SteeringPositionValueType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method SteeringPositionValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SteeringPositionValueType setImage(Property\ImageProperty $image)
 * @method SteeringPositionValueType setLesser(Property\LesserProperty $lesser)
 * @method SteeringPositionValueType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method SteeringPositionValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SteeringPositionValueType setName(Property\NameProperty $name)
 * @method SteeringPositionValueType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method SteeringPositionValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SteeringPositionValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method SteeringPositionValueType setUrl(Property\UrlProperty $url)
 * @method SteeringPositionValueType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class SteeringPositionValueType extends QualitativeValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SteeringPositionValue';
	}
}