<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BreadcrumbList.
 * 
 * @method BreadcrumbList setAdditionalType(Property\AdditionalType $additionalType)
 * @method BreadcrumbList setAlternateName(Property\AlternateName $alternateName)
 * @method BreadcrumbList setDescription(Property\Description $description)
 * @method BreadcrumbList setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BreadcrumbList setIdentifier(Property\Identifier $identifier)
 * @method BreadcrumbList setImage(Property\Image $image)
 * @method BreadcrumbList setItemListElements(array|Property\ItemListElement[] $itemListElements)
 * @method BreadcrumbList addItemListElement(Property\ItemListElement $itemListElement)
 * @method BreadcrumbList setItemListOrder(Property\ItemListOrder $itemListOrder)
 * @method BreadcrumbList setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BreadcrumbList setName(Property\Name $name)
 * @method BreadcrumbList setNumberOfItems(Property\NumberOfItems $numberOfItems)
 * @method BreadcrumbList setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BreadcrumbList setSameAs(Property\SameAs $sameAs)
 * @method BreadcrumbList setUrl(Property\Url $url)
 */
class BreadcrumbList extends ItemList {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BreadcrumbList';
	}
}