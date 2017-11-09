<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowSaltDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LowSaltDietType instead.
 * 
 * @method LowSaltDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method LowSaltDiet setAlternateName(Property\AlternateName $alternateName)
 * @method LowSaltDiet setDescription(Property\Description $description)
 * @method LowSaltDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LowSaltDiet setIdentifier(Property\Identifier $identifier)
 * @method LowSaltDiet setImage(Property\Image $image)
 * @method LowSaltDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LowSaltDiet setName(Property\Name $name)
 * @method LowSaltDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LowSaltDiet setSameAs(Property\SameAs $sameAs)
 * @method LowSaltDiet setUrl(Property\Url $url)
 */
class LowSaltDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowSaltDiet';
	}
}