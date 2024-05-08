<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A BreadcrumbList is an ItemList consisting of a chain of linked Web pages, typically described using at least their URL and their name, and typically ending with the current page. The position property is used to reconstruct the order of the items in a BreadcrumbList. The convention is that a breadcrumb list has an itemListOrder of ItemListOrderAscending (lower values listed first), and that the first items in this list correspond to the "top" or beginning of the breadcrumb trail, e.g. with a site or section homepage. The specific values of 'position' are not assigned meaning for a BreadcrumbList, but they should be integers, e.g. beginning with '1' for the first item in the list.
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
 * @method BreadcrumbListType setSubjectOf(Property\SubjectOfProperty $subjectOf)
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