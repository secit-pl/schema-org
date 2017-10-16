<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SinglePlayer.
 * 
 * @method SinglePlayer setAdditionalType(Property\AdditionalType $additionalType)
 * @method SinglePlayer setAlternateName(Property\AlternateName $alternateName)
 * @method SinglePlayer setDescription(Property\Description $description)
 * @method SinglePlayer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SinglePlayer setIdentifier(Property\Identifier $identifier)
 * @method SinglePlayer setImage(Property\Image $image)
 * @method SinglePlayer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SinglePlayer setName(Property\Name $name)
 * @method SinglePlayer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SinglePlayer setSameAs(Property\SameAs $sameAs)
 * @method SinglePlayer setUrl(Property\Url $url)
 */
class SinglePlayer extends GamePlayMode {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SinglePlayer';
	}
}