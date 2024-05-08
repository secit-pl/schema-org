<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates the usage of the car as a taxi.
 * 
 * @method TaxiVehicleUsageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TaxiVehicleUsageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TaxiVehicleUsageType setDescription(Property\DescriptionProperty $description)
 * @method TaxiVehicleUsageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TaxiVehicleUsageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TaxiVehicleUsageType setImage(Property\ImageProperty $image)
 * @method TaxiVehicleUsageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TaxiVehicleUsageType setName(Property\NameProperty $name)
 * @method TaxiVehicleUsageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TaxiVehicleUsageType setSameAs(Property\SameAsProperty $sameAs)
 * @method TaxiVehicleUsageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TaxiVehicleUsageType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method TaxiVehicleUsageType setUrl(Property\UrlProperty $url)
 */
class TaxiVehicleUsageType extends CarUsageType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiVehicleUsage';
	}
}