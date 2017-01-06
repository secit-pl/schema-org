<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemAvailability.
 * 
 * @method ItemAvailability setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemAvailability setAlternateName(Property\AlternateName $alternateName)
 * @method ItemAvailability setDescription(Property\Description $description)
 * @method ItemAvailability setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemAvailability setImage(Property\Image $image)
 * @method ItemAvailability setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemAvailability setName(Property\Name $name)
 * @method ItemAvailability setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemAvailability setSameAs(Property\SameAs $sameAs)
 * @method ItemAvailability setUrl(Property\Url $url)
 */
class ItemAvailability extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemAvailability';
	}
}