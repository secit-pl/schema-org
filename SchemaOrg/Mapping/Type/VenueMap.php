<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VenueMap.
 * 
 * @method VenueMap setAdditionalType(Property\AdditionalType $additionalType)
 * @method VenueMap setAlternateName(Property\AlternateName $alternateName)
 * @method VenueMap setDescription(Property\Description $description)
 * @method VenueMap setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VenueMap setImage(Property\Image $image)
 * @method VenueMap setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VenueMap setName(Property\Name $name)
 * @method VenueMap setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VenueMap setSameAs(Property\SameAs $sameAs)
 * @method VenueMap setUrl(Property\Url $url)
 */
class VenueMap extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VenueMap';
	}
}