<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToStepType.
 * 
 * @method HowToStepType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HowToStepType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HowToStepType setDescription(Property\DescriptionProperty $description)
 * @method HowToStepType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HowToStepType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HowToStepType setImage(Property\ImageProperty $image)
 * @method HowToStepType setItemListElements(array|Property\ItemListElementProperty[] $itemListElements)
 * @method HowToStepType addItemListElement(Property\ItemListElementProperty $itemListElement)
 * @method HowToStepType setItemListOrder(Property\ItemListOrderProperty $itemListOrder)
 * @method HowToStepType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HowToStepType setName(Property\NameProperty $name)
 * @method HowToStepType setNumberOfItems(Property\NumberOfItemsProperty $numberOfItems)
 * @method HowToStepType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HowToStepType setSameAs(Property\SameAsProperty $sameAs)
 * @method HowToStepType setUrl(Property\UrlProperty $url)
 */
class HowToStepType extends ItemListType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToStep';
	}
}