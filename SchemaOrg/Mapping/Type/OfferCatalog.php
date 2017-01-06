<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OfferCatalog.
 * 
 * @method OfferCatalog setAdditionalType(Property\AdditionalType $additionalType)
 * @method OfferCatalog setAlternateName(Property\AlternateName $alternateName)
 * @method OfferCatalog setDescription(Property\Description $description)
 * @method OfferCatalog setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OfferCatalog setImage(Property\Image $image)
 * @method OfferCatalog setItemListElements(array|Property\ItemListElement[] $itemListElements)
 * @method OfferCatalog addItemListElement(Property\ItemListElement $itemListElement)
 * @method OfferCatalog setItemListOrder(Property\ItemListOrder $itemListOrder)
 * @method OfferCatalog setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OfferCatalog setName(Property\Name $name)
 * @method OfferCatalog setNumberOfItems(Property\NumberOfItems $numberOfItems)
 * @method OfferCatalog setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OfferCatalog setSameAs(Property\SameAs $sameAs)
 * @method OfferCatalog setUrl(Property\Url $url)
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