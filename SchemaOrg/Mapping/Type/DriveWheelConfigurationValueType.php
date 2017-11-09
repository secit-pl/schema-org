<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DriveWheelConfigurationValueType.
 * 
 * @method DriveWheelConfigurationValueType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method DriveWheelConfigurationValueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DriveWheelConfigurationValueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DriveWheelConfigurationValueType setDescription(Property\DescriptionProperty $description)
 * @method DriveWheelConfigurationValueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DriveWheelConfigurationValueType setEqual(Property\EqualProperty $equal)
 * @method DriveWheelConfigurationValueType setGreater(Property\GreaterProperty $greater)
 * @method DriveWheelConfigurationValueType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method DriveWheelConfigurationValueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DriveWheelConfigurationValueType setImage(Property\ImageProperty $image)
 * @method DriveWheelConfigurationValueType setLesser(Property\LesserProperty $lesser)
 * @method DriveWheelConfigurationValueType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method DriveWheelConfigurationValueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DriveWheelConfigurationValueType setName(Property\NameProperty $name)
 * @method DriveWheelConfigurationValueType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method DriveWheelConfigurationValueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DriveWheelConfigurationValueType setSameAs(Property\SameAsProperty $sameAs)
 * @method DriveWheelConfigurationValueType setUrl(Property\UrlProperty $url)
 * @method DriveWheelConfigurationValueType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class DriveWheelConfigurationValueType extends QualitativeValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DriveWheelConfigurationValue';
	}
}