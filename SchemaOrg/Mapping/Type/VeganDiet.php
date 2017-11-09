<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class VeganDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\VeganDietType instead.
 * 
 * @method VeganDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method VeganDiet setAlternateName(Property\AlternateName $alternateName)
 * @method VeganDiet setDescription(Property\Description $description)
 * @method VeganDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method VeganDiet setIdentifier(Property\Identifier $identifier)
 * @method VeganDiet setImage(Property\Image $image)
 * @method VeganDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method VeganDiet setName(Property\Name $name)
 * @method VeganDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method VeganDiet setSameAs(Property\SameAs $sameAs)
 * @method VeganDiet setUrl(Property\Url $url)
 */
class VeganDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VeganDiet';
	}
}