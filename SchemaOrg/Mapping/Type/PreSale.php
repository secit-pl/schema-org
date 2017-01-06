<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PreSale.
 * 
 * @method PreSale setAdditionalType(Property\AdditionalType $additionalType)
 * @method PreSale setAlternateName(Property\AlternateName $alternateName)
 * @method PreSale setDescription(Property\Description $description)
 * @method PreSale setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PreSale setImage(Property\Image $image)
 * @method PreSale setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PreSale setName(Property\Name $name)
 * @method PreSale setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PreSale setSameAs(Property\SameAs $sameAs)
 * @method PreSale setUrl(Property\Url $url)
 */
class PreSale extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreSale';
	}
}