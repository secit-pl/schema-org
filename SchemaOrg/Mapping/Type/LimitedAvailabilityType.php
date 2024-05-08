<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item has limited availability.
 * 
 * @method LimitedAvailabilityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LimitedAvailabilityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LimitedAvailabilityType setDescription(Property\DescriptionProperty $description)
 * @method LimitedAvailabilityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LimitedAvailabilityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LimitedAvailabilityType setImage(Property\ImageProperty $image)
 * @method LimitedAvailabilityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LimitedAvailabilityType setName(Property\NameProperty $name)
 * @method LimitedAvailabilityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LimitedAvailabilityType setSameAs(Property\SameAsProperty $sameAs)
 * @method LimitedAvailabilityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LimitedAvailabilityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LimitedAvailabilityType setUrl(Property\UrlProperty $url)
 */
class LimitedAvailabilityType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LimitedAvailability';
	}
}