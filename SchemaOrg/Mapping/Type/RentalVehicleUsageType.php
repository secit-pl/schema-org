<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates the usage of the vehicle as a rental car.
 * 
 * @method RentalVehicleUsageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RentalVehicleUsageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RentalVehicleUsageType setDescription(Property\DescriptionProperty $description)
 * @method RentalVehicleUsageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RentalVehicleUsageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RentalVehicleUsageType setImage(Property\ImageProperty $image)
 * @method RentalVehicleUsageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RentalVehicleUsageType setName(Property\NameProperty $name)
 * @method RentalVehicleUsageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RentalVehicleUsageType setSameAs(Property\SameAsProperty $sameAs)
 * @method RentalVehicleUsageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RentalVehicleUsageType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RentalVehicleUsageType setUrl(Property\UrlProperty $url)
 */
class RentalVehicleUsageType extends CarUsageType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RentalVehicleUsage';
	}
}