<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InStockType.
 * 
 * @method InStockType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InStockType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InStockType setDescription(Property\DescriptionProperty $description)
 * @method InStockType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InStockType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InStockType setImage(Property\ImageProperty $image)
 * @method InStockType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InStockType setName(Property\NameProperty $name)
 * @method InStockType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InStockType setSameAs(Property\SameAsProperty $sameAs)
 * @method InStockType setUrl(Property\UrlProperty $url)
 */
class InStockType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStock';
	}
}