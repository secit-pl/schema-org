<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Front-wheel drive is a transmission layout where the engine drives the front wheels.
 * 
 * @method FrontWheelDriveConfigurationType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method FrontWheelDriveConfigurationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FrontWheelDriveConfigurationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FrontWheelDriveConfigurationType setDescription(Property\DescriptionProperty $description)
 * @method FrontWheelDriveConfigurationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FrontWheelDriveConfigurationType setEqual(Property\EqualProperty $equal)
 * @method FrontWheelDriveConfigurationType setGreater(Property\GreaterProperty $greater)
 * @method FrontWheelDriveConfigurationType setGreaterOrEqual(Property\GreaterOrEqualProperty $greaterOrEqual)
 * @method FrontWheelDriveConfigurationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FrontWheelDriveConfigurationType setImage(Property\ImageProperty $image)
 * @method FrontWheelDriveConfigurationType setLesser(Property\LesserProperty $lesser)
 * @method FrontWheelDriveConfigurationType setLesserOrEqual(Property\LesserOrEqualProperty $lesserOrEqual)
 * @method FrontWheelDriveConfigurationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FrontWheelDriveConfigurationType setName(Property\NameProperty $name)
 * @method FrontWheelDriveConfigurationType setNonEqual(Property\NonEqualProperty $nonEqual)
 * @method FrontWheelDriveConfigurationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FrontWheelDriveConfigurationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FrontWheelDriveConfigurationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FrontWheelDriveConfigurationType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FrontWheelDriveConfigurationType setUrl(Property\UrlProperty $url)
 * @method FrontWheelDriveConfigurationType setValueReference(Property\ValueReferenceProperty $valueReference)
 */
class FrontWheelDriveConfigurationType extends DriveWheelConfigurationValueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FrontWheelDriveConfiguration';
	}
}