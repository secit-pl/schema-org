<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VenueMap.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\VenueMapType instead.
 * 
 * @method VenueMap setAdditionalType(Property\AdditionalType $additionalType)
 * @method VenueMap setAlternateName(Property\AlternateName $alternateName)
 * @method VenueMap setDescription(Property\Description $description)
 * @method VenueMap setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VenueMap setIdentifier(Property\Identifier $identifier)
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