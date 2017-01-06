<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HalalDiet.
 * 
 * @method HalalDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method HalalDiet setAlternateName(Property\AlternateName $alternateName)
 * @method HalalDiet setDescription(Property\Description $description)
 * @method HalalDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HalalDiet setImage(Property\Image $image)
 * @method HalalDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HalalDiet setName(Property\Name $name)
 * @method HalalDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HalalDiet setSameAs(Property\SameAs $sameAs)
 * @method HalalDiet setUrl(Property\Url $url)
 */
class HalalDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HalalDiet';
	}
}