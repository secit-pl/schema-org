<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GamePlayMode.
 * 
 * @method GamePlayMode setAdditionalType(Property\AdditionalType $additionalType)
 * @method GamePlayMode setAlternateName(Property\AlternateName $alternateName)
 * @method GamePlayMode setDescription(Property\Description $description)
 * @method GamePlayMode setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GamePlayMode setIdentifier(Property\Identifier $identifier)
 * @method GamePlayMode setImage(Property\Image $image)
 * @method GamePlayMode setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GamePlayMode setName(Property\Name $name)
 * @method GamePlayMode setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GamePlayMode setSameAs(Property\SameAs $sameAs)
 * @method GamePlayMode setUrl(Property\Url $url)
 */
class GamePlayMode extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GamePlayMode';
	}
}