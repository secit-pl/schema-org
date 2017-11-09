<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OutOfStock.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\OutOfStockType instead.
 * 
 * @method OutOfStock setAdditionalType(Property\AdditionalType $additionalType)
 * @method OutOfStock setAlternateName(Property\AlternateName $alternateName)
 * @method OutOfStock setDescription(Property\Description $description)
 * @method OutOfStock setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OutOfStock setIdentifier(Property\Identifier $identifier)
 * @method OutOfStock setImage(Property\Image $image)
 * @method OutOfStock setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OutOfStock setName(Property\Name $name)
 * @method OutOfStock setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OutOfStock setSameAs(Property\SameAs $sameAs)
 * @method OutOfStock setUrl(Property\Url $url)
 */
class OutOfStock extends ItemAvailability {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutOfStock';
	}
}