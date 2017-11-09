<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LowLactoseDiet.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LowLactoseDietType instead.
 * 
 * @method LowLactoseDiet setAdditionalType(Property\AdditionalType $additionalType)
 * @method LowLactoseDiet setAlternateName(Property\AlternateName $alternateName)
 * @method LowLactoseDiet setDescription(Property\Description $description)
 * @method LowLactoseDiet setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LowLactoseDiet setIdentifier(Property\Identifier $identifier)
 * @method LowLactoseDiet setImage(Property\Image $image)
 * @method LowLactoseDiet setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LowLactoseDiet setName(Property\Name $name)
 * @method LowLactoseDiet setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LowLactoseDiet setSameAs(Property\SameAs $sameAs)
 * @method LowLactoseDiet setUrl(Property\Url $url)
 */
class LowLactoseDiet extends RestrictedDiet {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowLactoseDiet';
	}
}