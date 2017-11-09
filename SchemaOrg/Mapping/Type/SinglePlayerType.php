<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SinglePlayerType.
 * 
 * @method SinglePlayerType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SinglePlayerType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SinglePlayerType setDescription(Property\DescriptionProperty $description)
 * @method SinglePlayerType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SinglePlayerType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SinglePlayerType setImage(Property\ImageProperty $image)
 * @method SinglePlayerType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SinglePlayerType setName(Property\NameProperty $name)
 * @method SinglePlayerType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SinglePlayerType setSameAs(Property\SameAsProperty $sameAs)
 * @method SinglePlayerType setUrl(Property\UrlProperty $url)
 */
class SinglePlayerType extends GamePlayModeType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SinglePlayer';
	}
}