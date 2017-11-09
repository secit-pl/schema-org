<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowCalorieDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LowCalorieDietType instead.
 * 
 * @method LowCalorieDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method LowCalorieDiet setAlternateName(Property\AlternateName $alternateName)
 * @method LowCalorieDiet setDescription(Property\Description $description)
 * @method LowCalorieDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LowCalorieDiet setIdentifier(Property\Identifier $identifier)
 * @method LowCalorieDiet setImage(Property\Image $image)
 * @method LowCalorieDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LowCalorieDiet setName(Property\Name $name)
 * @method LowCalorieDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LowCalorieDiet setSameAs(Property\SameAs $sameAs)
 * @method LowCalorieDiet setUrl(Property\Url $url)
 */
class LowCalorieDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowCalorieDiet';
	}
}