<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LimitedAvailability.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LimitedAvailabilityType instead.
 * 
 * @method LimitedAvailability setAdditionalType(Property\AdditionalType $additionalType)
 * @method LimitedAvailability setAlternateName(Property\AlternateName $alternateName)
 * @method LimitedAvailability setDescription(Property\Description $description)
 * @method LimitedAvailability setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LimitedAvailability setIdentifier(Property\Identifier $identifier)
 * @method LimitedAvailability setImage(Property\Image $image)
 * @method LimitedAvailability setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LimitedAvailability setName(Property\Name $name)
 * @method LimitedAvailability setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LimitedAvailability setSameAs(Property\SameAs $sameAs)
 * @method LimitedAvailability setUrl(Property\Url $url)
 */
class LimitedAvailability extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LimitedAvailability';
	}
}