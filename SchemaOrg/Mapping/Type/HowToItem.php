<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToItem.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\HowToItemType instead.
 * 
 * @method HowToItem setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToItem setAlternateName(Property\AlternateName $alternateName)
 * @method HowToItem setDescription(Property\Description $description)
 * @method HowToItem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToItem setIdentifier(Property\Identifier $identifier)
 * @method HowToItem setImage(Property\Image $image)
 * @method HowToItem setItem(Property\Item $item)
 * @method HowToItem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToItem setName(Property\Name $name)
 * @method HowToItem setNextItem(Property\NextItem $nextItem)
 * @method HowToItem setPosition(Property\Position $position)
 * @method HowToItem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToItem setPreviousItem(Property\PreviousItem $previousItem)
 * @method HowToItem setSameAs(Property\SameAs $sameAs)
 * @method HowToItem setUrl(Property\Url $url)
 */
class HowToItem extends ListItem {

	/**
	 * @var Property\RequiredQuantity
	 */
	private $requiredQuantity;

	/**
	 * Get required quantity.
	 * 
	 * @return Property\RequiredQuantity
	 */
	public function getRequiredQuantity() {
		return $this->requiredQuantity;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToItem';
	}

	/**
	 * Set required quantity.
	 * 
	 * @param Property\RequiredQuantity $requiredQuantity
	 * @return HowToItem
	 */
	public function setRequiredQuantity(Property\RequiredQuantity $requiredQuantity) {
		$this->requiredQuantity = $requiredQuantity;

		return $this;
	}
}