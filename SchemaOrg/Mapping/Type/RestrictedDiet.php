<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RestrictedDiet.
 * 
 * @method RestrictedDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method RestrictedDiet setAlternateName(Property\AlternateName $alternateName)
 * @method RestrictedDiet setDescription(Property\Description $description)
 * @method RestrictedDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RestrictedDiet setIdentifier(Property\Identifier $identifier)
 * @method RestrictedDiet setImage(Property\Image $image)
 * @method RestrictedDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RestrictedDiet setName(Property\Name $name)
 * @method RestrictedDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RestrictedDiet setSameAs(Property\SameAs $sameAs)
 * @method RestrictedDiet setUrl(Property\Url $url)
 */
class RestrictedDiet extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RestrictedDiet';
	}
}