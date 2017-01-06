<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TollFree.
 * 
 * @method TollFree setAdditionalType(Property\AdditionalType $additionalType)
 * @method TollFree setAlternateName(Property\AlternateName $alternateName)
 * @method TollFree setDescription(Property\Description $description)
 * @method TollFree setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TollFree setImage(Property\Image $image)
 * @method TollFree setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TollFree setName(Property\Name $name)
 * @method TollFree setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TollFree setSameAs(Property\SameAs $sameAs)
 * @method TollFree setUrl(Property\Url $url)
 */
class TollFree extends ContactPointOption {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TollFree';
	}
}