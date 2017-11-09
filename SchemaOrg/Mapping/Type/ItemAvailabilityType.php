<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemAvailabilityType.
 * 
 * @method ItemAvailabilityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemAvailabilityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemAvailabilityType setDescription(Property\DescriptionProperty $description)
 * @method ItemAvailabilityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemAvailabilityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemAvailabilityType setImage(Property\ImageProperty $image)
 * @method ItemAvailabilityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemAvailabilityType setName(Property\NameProperty $name)
 * @method ItemAvailabilityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemAvailabilityType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemAvailabilityType setUrl(Property\UrlProperty $url)
 */
class ItemAvailabilityType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemAvailability';
	}
}