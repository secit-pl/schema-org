<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfferCatalog.
 * 
 * @method OfferCatalog setItemListElements(array|Property\ItemListElement[] $itemListElements)
 * @method OfferCatalog addItemListElement(Property\ItemListElement $itemListElement)
 * @method OfferCatalog setItemListOrder(Property\ItemListOrder $itemListOrder)
 * @method OfferCatalog setNumberOfItems(Property\NumberOfItems $numberOfItems)
 */
class OfferCatalog extends ItemList {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfferCatalog';
	}
}