<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * All-wheel Drive is a transmission layout where the engine drives all four wheels.
 * 
 * @method AllWheelDriveConfigurationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method AllWheelDriveConfigurationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AllWheelDriveConfigurationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AllWheelDriveConfigurationType setDescription(Property\DescriptionProperty $description)
 * @method AllWheelDriveConfigurationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AllWheelDriveConfigurationType setEqual(Property\EqualProperty $equal)
 * @method AllWheelDriveConfigurationType setGreater(Property\GreaterProperty $greater)
 * @method AllWheelDriveConfigurationType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method AllWheelDriveConfigurationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AllWheelDriveConfigurationType setImage(Property\ImageProperty $image)
 * @method AllWheelDriveConfigurationType setLesser(Property\LesserProperty $lesser)
 * @method AllWheelDriveConfigurationType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method AllWheelDriveConfigurationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AllWheelDriveConfigurationType setName(Property\NameProperty $name)
 * @method AllWheelDriveConfigurationType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method AllWheelDriveConfigurationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AllWheelDriveConfigurationType setSameAs(Property\SameAsProperty $sameAs)
 * @method AllWheelDriveConfigurationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AllWheelDriveConfigurationType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AllWheelDriveConfigurationType setUrl(Property\UrlProperty $url)
 * @method AllWheelDriveConfigurationType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class AllWheelDriveConfigurationType extends DriveWheelConfigurationValueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AllWheelDriveConfiguration';
	}
}