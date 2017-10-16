<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MultiPlayer.
 * 
 * @method MultiPlayer setAdditionalType(Property\AdditionalType $additionalType)
 * @method MultiPlayer setAlternateName(Property\AlternateName $alternateName)
 * @method MultiPlayer setDescription(Property\Description $description)
 * @method MultiPlayer setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MultiPlayer setIdentifier(Property\Identifier $identifier)
 * @method MultiPlayer setImage(Property\Image $image)
 * @method MultiPlayer setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MultiPlayer setName(Property\Name $name)
 * @method MultiPlayer setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MultiPlayer setSameAs(Property\SameAs $sameAs)
 * @method MultiPlayer setUrl(Property\Url $url)
 */
class MultiPlayer extends GamePlayMode {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MultiPlayer';
	}
}