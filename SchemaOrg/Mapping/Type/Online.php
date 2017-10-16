<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Online.
 * 
 * @method Online setAdditionalType(Property\AdditionalType $additionalType)
 * @method Online setAlternateName(Property\AlternateName $alternateName)
 * @method Online setDescription(Property\Description $description)
 * @method Online setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Online setIdentifier(Property\Identifier $identifier)
 * @method Online setImage(Property\Image $image)
 * @method Online setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Online setName(Property\Name $name)
 * @method Online setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Online setSameAs(Property\SameAs $sameAs)
 * @method Online setUrl(Property\Url $url)
 */
class Online extends GameServerStatus {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Online';
	}
}