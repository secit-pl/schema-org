<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VegetarianDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\VegetarianDietType instead.
 * 
 * @method VegetarianDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method VegetarianDiet setAlternateName(Property\AlternateName $alternateName)
 * @method VegetarianDiet setDescription(Property\Description $description)
 * @method VegetarianDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VegetarianDiet setIdentifier(Property\Identifier $identifier)
 * @method VegetarianDiet setImage(Property\Image $image)
 * @method VegetarianDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VegetarianDiet setName(Property\Name $name)
 * @method VegetarianDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VegetarianDiet setSameAs(Property\SameAs $sameAs)
 * @method VegetarianDiet setUrl(Property\Url $url)
 */
class VegetarianDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VegetarianDiet';
	}
}