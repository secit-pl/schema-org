<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToSectionType.
 * 
 * @method HowToSectionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToSectionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToSectionType setDescription(Property\DescriptionProperty $description)
 * @method HowToSectionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToSectionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToSectionType setImage(Property\ImageProperty $image)
 * @method HowToSectionType setItemListElements(array|Property\ItemListElementProperty[] $itemListElements)
 * @method HowToSectionType addItemListElement(Property\ItemListElementProperty $itemListElement)
 * @method HowToSectionType setItemListOrder(Property\ItemListOrderProperty $itemListOrder)
 * @method HowToSectionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToSectionType setName(Property\NameProperty $name)
 * @method HowToSectionType setNumberOfItems(Property\NumberOfItemsProperty $numberOfItems)
 * @method HowToSectionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToSectionType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToSectionType setUrl(Property\UrlProperty $url)
 */
class HowToSectionType extends ItemListType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToSection';
	}
}