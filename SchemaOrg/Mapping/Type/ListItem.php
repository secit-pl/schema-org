<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ListItem.
 * 
 * @method ListItem setAdditionalType(Property\AdditionalType $additionalType)
 * @method ListItem setAlternateName(Property\AlternateName $alternateName)
 * @method ListItem setDescription(Property\Description $description)
 * @method ListItem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ListItem setIdentifier(Property\Identifier $identifier)
 * @method ListItem setImage(Property\Image $image)
 * @method ListItem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ListItem setName(Property\Name $name)
 * @method ListItem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ListItem setSameAs(Property\SameAs $sameAs)
 * @method ListItem setUrl(Property\Url $url)
 */
class ListItem extends Intangible {

	/**
	 * @var Property\Item
	 */
	private $item;

	/**
	 * @var Property\NextItem
	 */
	private $nextItem;

	/**
	 * @var Property\Position
	 */
	private $position;

	/**
	 * @var Property\PreviousItem
	 */
	private $previousItem;

	/**
	 * Get item.
	 * 
	 * @return Property\Item
	 */
	public function getItem() {
		return $this->item;
	}

	/**
	 * Get next item.
	 * 
	 * @return Property\NextItem
	 */
	public function getNextItem() {
		return $this->nextItem;
	}

	/**
	 * Get position.
	 * 
	 * @return Property\Position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Get previous item.
	 * 
	 * @return Property\PreviousItem
	 */
	public function getPreviousItem() {
		return $this->previousItem;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ListItem';
	}

	/**
	 * Set item.
	 * 
	 * @param Property\Item $item
	 * @return ListItem
	 */
	public function setItem(Property\Item $item) {
		$this->item = $item;

		return $this;
	}

	/**
	 * Set next item.
	 * 
	 * @param Property\NextItem $nextItem
	 * @return ListItem
	 */
	public function setNextItem(Property\NextItem $nextItem) {
		$this->nextItem = $nextItem;

		return $this;
	}

	/**
	 * Set position.
	 * 
	 * @param Property\Position $position
	 * @return ListItem
	 */
	public function setPosition(Property\Position $position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Set previous item.
	 * 
	 * @param Property\PreviousItem $previousItem
	 * @return ListItem
	 */
	public function setPreviousItem(Property\PreviousItem $previousItem) {
		$this->previousItem = $previousItem;

		return $this;
	}
}