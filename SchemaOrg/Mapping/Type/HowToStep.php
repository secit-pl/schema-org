<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToStep.
 * 
 * @method HowToStep setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToStep setAlternateName(Property\AlternateName $alternateName)
 * @method HowToStep setDescription(Property\Description $description)
 * @method HowToStep setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToStep setIdentifier(Property\Identifier $identifier)
 * @method HowToStep setImage(Property\Image $image)
 * @method HowToStep setItemListElements(array|Property\ItemListElement[] $itemListElements)
 * @method HowToStep addItemListElement(Property\ItemListElement $itemListElement)
 * @method HowToStep setItemListOrder(Property\ItemListOrder $itemListOrder)
 * @method HowToStep setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToStep setName(Property\Name $name)
 * @method HowToStep setNumberOfItems(Property\NumberOfItems $numberOfItems)
 * @method HowToStep setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToStep setSameAs(Property\SameAs $sameAs)
 * @method HowToStep setUrl(Property\Url $url)
 */
class HowToStep extends ItemList {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToStep';
	}
}