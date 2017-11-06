<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowFatDiet.
 * 
 * @method LowFatDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method LowFatDiet setAlternateName(Property\AlternateName $alternateName)
 * @method LowFatDiet setDescription(Property\Description $description)
 * @method LowFatDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LowFatDiet setIdentifier(Property\Identifier $identifier)
 * @method LowFatDiet setImage(Property\Image $image)
 * @method LowFatDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LowFatDiet setName(Property\Name $name)
 * @method LowFatDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LowFatDiet setSameAs(Property\SameAs $sameAs)
 * @method LowFatDiet setUrl(Property\Url $url)
 */
class LowFatDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowFatDiet';
	}
}