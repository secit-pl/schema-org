<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowSaltDiet.
 * 
 * @method LowSaltDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method LowSaltDiet setAlternateName(Property\AlternateName $alternateName)
 * @method LowSaltDiet setDescription(Property\Description $description)
 * @method LowSaltDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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