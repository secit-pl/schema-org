<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToSection.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HowToSectionType instead.
 * 
 * @method HowToSection setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToSection setAlternateName(Property\AlternateName $alternateName)
 * @method HowToSection setDescription(Property\Description $description)
 * @method HowToSection setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToSection setIdentifier(Property\Identifier $identifier)
 * @method HowToSection setImage(Property\Image $image)
 * @method HowToSection setItemListElements(array|Property\ItemListElement[] $itemListElements)
 * @method HowToSection addItemListElement(Property\ItemListElement $itemListElement)
 * @method HowToSection setItemListOrder(Property\ItemListOrder $itemListOrder)
 * @method HowToSection setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToSection setName(Property\Name $name)
 * @method HowToSection setNumberOfItems(Property\NumberOfItems $numberOfItems)
 * @method HowToSection setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToSection setSameAs(Property\SameAs $sameAs)
 * @method HowToSection setUrl(Property\Url $url)
 */
class HowToSection extends ItemList {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToSection';
	}
}