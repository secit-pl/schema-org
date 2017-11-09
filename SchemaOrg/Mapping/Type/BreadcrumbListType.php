<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BreadcrumbListType.
 * 
 * @method BreadcrumbListType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BreadcrumbListType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BreadcrumbListType setDescription(Property\DescriptionProperty $description)
 * @method BreadcrumbListType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BreadcrumbListType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BreadcrumbListType setImage(Property\ImageProperty $image)
 * @method BreadcrumbListType setItemListElements(array|Property\ItemListElementProperty[] $itemListElements)
 * @method BreadcrumbListType addItemListElement(Property\ItemListElementProperty $itemListElement)
 * @method BreadcrumbListType setItemListOrder(Property\ItemListOrderProperty $itemListOrder)
 * @method BreadcrumbListType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BreadcrumbListType setName(Property\NameProperty $name)
 * @method BreadcrumbListType setNumberOfItems(Property\NumberOfItemsProperty $numberOfItems)
 * @method BreadcrumbListType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BreadcrumbListType setSameAs(Property\SameAsProperty $sameAs)
 * @method BreadcrumbListType setUrl(Property\UrlProperty $url)
 */
class BreadcrumbListType extends ItemListType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BreadcrumbList';
	}
}