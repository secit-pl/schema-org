<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FourWheelDriveConfigurationType.
 * 
 * @method FourWheelDriveConfigurationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FourWheelDriveConfigurationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FourWheelDriveConfigurationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FourWheelDriveConfigurationType setDescription(Property\DescriptionProperty $description)
 * @method FourWheelDriveConfigurationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FourWheelDriveConfigurationType setEqual(Property\EqualProperty $equal)
 * @method FourWheelDriveConfigurationType setGreater(Property\GreaterProperty $greater)
 * @method FourWheelDriveConfigurationType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method FourWheelDriveConfigurationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FourWheelDriveConfigurationType setImage(Property\ImageProperty $image)
 * @method FourWheelDriveConfigurationType setLesser(Property\LesserProperty $lesser)
 * @method FourWheelDriveConfigurationType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method FourWheelDriveConfigurationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FourWheelDriveConfigurationType setName(Property\NameProperty $name)
 * @method FourWheelDriveConfigurationType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method FourWheelDriveConfigurationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FourWheelDriveConfigurationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FourWheelDriveConfigurationType setUrl(Property\UrlProperty $url)
 * @method FourWheelDriveConfigurationType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class FourWheelDriveConfigurationType extends DriveWheelConfigurationValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FourWheelDriveConfiguration';
	}
}