<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RearWheelDriveConfigurationType.
 * 
 * @method RearWheelDriveConfigurationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method RearWheelDriveConfigurationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RearWheelDriveConfigurationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RearWheelDriveConfigurationType setDescription(Property\DescriptionProperty $description)
 * @method RearWheelDriveConfigurationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RearWheelDriveConfigurationType setEqual(Property\EqualProperty $equal)
 * @method RearWheelDriveConfigurationType setGreater(Property\GreaterProperty $greater)
 * @method RearWheelDriveConfigurationType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method RearWheelDriveConfigurationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RearWheelDriveConfigurationType setImage(Property\ImageProperty $image)
 * @method RearWheelDriveConfigurationType setLesser(Property\LesserProperty $lesser)
 * @method RearWheelDriveConfigurationType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method RearWheelDriveConfigurationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RearWheelDriveConfigurationType setName(Property\NameProperty $name)
 * @method RearWheelDriveConfigurationType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method RearWheelDriveConfigurationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RearWheelDriveConfigurationType setSameAs(Property\SameAsProperty $sameAs)
 * @method RearWheelDriveConfigurationType setUrl(Property\UrlProperty $url)
 * @method RearWheelDriveConfigurationType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class RearWheelDriveConfigurationType extends DriveWheelConfigurationValueType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RearWheelDriveConfiguration';
	}
}