<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OutOfStockType.
 * 
 * @method OutOfStockType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OutOfStockType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OutOfStockType setDescription(Property\DescriptionProperty $description)
 * @method OutOfStockType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OutOfStockType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OutOfStockType setImage(Property\ImageProperty $image)
 * @method OutOfStockType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OutOfStockType setName(Property\NameProperty $name)
 * @method OutOfStockType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OutOfStockType setSameAs(Property\SameAsProperty $sameAs)
 * @method OutOfStockType setUrl(Property\UrlProperty $url)
 */
class OutOfStockType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OutOfStock';
	}
}