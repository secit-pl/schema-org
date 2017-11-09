<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HinduDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HinduDietType instead.
 * 
 * @method HinduDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method HinduDiet setAlternateName(Property\AlternateName $alternateName)
 * @method HinduDiet setDescription(Property\Description $description)
 * @method HinduDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HinduDiet setIdentifier(Property\Identifier $identifier)
 * @method HinduDiet setImage(Property\Image $image)
 * @method HinduDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HinduDiet setName(Property\Name $name)
 * @method HinduDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HinduDiet setSameAs(Property\SameAs $sameAs)
 * @method HinduDiet setUrl(Property\Url $url)
 */
class HinduDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HinduDiet';
	}
}