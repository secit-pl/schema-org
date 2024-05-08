<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates the usage of the vehicle for driving school.
 * 
 * @method DrivingSchoolVehicleUsageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrivingSchoolVehicleUsageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrivingSchoolVehicleUsageType setDescription(Property\DescriptionProperty $description)
 * @method DrivingSchoolVehicleUsageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrivingSchoolVehicleUsageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrivingSchoolVehicleUsageType setImage(Property\ImageProperty $image)
 * @method DrivingSchoolVehicleUsageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrivingSchoolVehicleUsageType setName(Property\NameProperty $name)
 * @method DrivingSchoolVehicleUsageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrivingSchoolVehicleUsageType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrivingSchoolVehicleUsageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrivingSchoolVehicleUsageType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DrivingSchoolVehicleUsageType setUrl(Property\UrlProperty $url)
 */
class DrivingSchoolVehicleUsageType extends CarUsageType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrivingSchoolVehicleUsage';
	}
}