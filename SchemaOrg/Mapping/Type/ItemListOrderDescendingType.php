<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemListOrderDescendingType.
 * 
 * @method ItemListOrderDescendingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemListOrderDescendingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemListOrderDescendingType setDescription(Property\DescriptionProperty $description)
 * @method ItemListOrderDescendingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemListOrderDescendingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemListOrderDescendingType setImage(Property\ImageProperty $image)
 * @method ItemListOrderDescendingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemListOrderDescendingType setName(Property\NameProperty $name)
 * @method ItemListOrderDescendingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemListOrderDescendingType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemListOrderDescendingType setUrl(Property\UrlProperty $url)
 */
class ItemListOrderDescendingType extends ItemListOrderType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderDescending';
	}
}