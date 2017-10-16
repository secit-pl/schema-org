<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SeatingMap.
 * 
 * @method SeatingMap setAdditionalType(Property\AdditionalType $additionalType)
 * @method SeatingMap setAlternateName(Property\AlternateName $alternateName)
 * @method SeatingMap setDescription(Property\Description $description)
 * @method SeatingMap setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SeatingMap setIdentifier(Property\Identifier $identifier)
 * @method SeatingMap setImage(Property\Image $image)
 * @method SeatingMap setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SeatingMap setName(Property\Name $name)
 * @method SeatingMap setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SeatingMap setSameAs(Property\SameAs $sameAs)
 * @method SeatingMap setUrl(Property\Url $url)
 */
class SeatingMap extends MapCategoryType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SeatingMap';
	}
}