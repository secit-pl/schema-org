<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DiabeticDiet.
 * 
 * @method DiabeticDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method DiabeticDiet setAlternateName(Property\AlternateName $alternateName)
 * @method DiabeticDiet setDescription(Property\Description $description)
 * @method DiabeticDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DiabeticDiet setIdentifier(Property\Identifier $identifier)
 * @method DiabeticDiet setImage(Property\Image $image)
 * @method DiabeticDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DiabeticDiet setName(Property\Name $name)
 * @method DiabeticDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DiabeticDiet setSameAs(Property\SameAs $sameAs)
 * @method DiabeticDiet setUrl(Property\Url $url)
 */
class DiabeticDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiabeticDiet';
	}
}