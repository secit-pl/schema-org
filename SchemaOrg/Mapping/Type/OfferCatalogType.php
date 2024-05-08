<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An OfferCatalog is an ItemList that contains related Offers and/or further OfferCatalogs that are offeredBy the same provider.
 * 
 * @method OfferCatalogType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OfferCatalogType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OfferCatalogType setDescription(Property\DescriptionProperty $description)
 * @method OfferCatalogType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OfferCatalogType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OfferCatalogType setImage(Property\ImageProperty $image)
 * @method OfferCatalogType setItemListElements(array|Property\ItemListElementProperty[] $itemListElements)
 * @method OfferCatalogType addItemListElement(Property\ItemListElementProperty $itemListElement)
 * @method OfferCatalogType setItemListOrder(Property\ItemListOrderProperty $itemListOrder)
 * @method OfferCatalogType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OfferCatalogType setName(Property\NameProperty $name)
 * @method OfferCatalogType setNumberOfItems(Property\NumberOfItemsProperty $numberOfItems)
 * @method OfferCatalogType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OfferCatalogType setSameAs(Property\SameAsProperty $sameAs)
 * @method OfferCatalogType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OfferCatalogType setUrl(Property\UrlProperty $url)
 */
class OfferCatalogType extends ItemListType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OfferCatalog';
	}
}