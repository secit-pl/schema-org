<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ListItemType.
 * 
 * @method ListItemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ListItemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ListItemType setDescription(Property\DescriptionProperty $description)
 * @method ListItemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ListItemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ListItemType setImage(Property\ImageProperty $image)
 * @method ListItemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ListItemType setName(Property\NameProperty $name)
 * @method ListItemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ListItemType setSameAs(Property\SameAsProperty $sameAs)
 * @method ListItemType setUrl(Property\UrlProperty $url)
 */
class ListItemType extends IntangibleType {

	/**
	 * @var Property\ItemProperty
	 */
	private $item;

	/**
	 * @var Property\NextItemProperty
	 */
	private $nextItem;

	/**
	 * @var Property\PositionProperty
	 */
	private $position;

	/**
	 * @var Property\PreviousItemProperty
	 */
	private $previousItem;

	/**
	 * Get item.
	 * 
	 * @return Property\ItemProperty
	 */
	public function getItem() {
		return $this->item;
	}

	/**
	 * Get next item.
	 * 
	 * @return Property\NextItemProperty
	 */
	public function getNextItem() {
		return $this->nextItem;
	}

	/**
	 * Get position.
	 * 
	 * @return Property\PositionProperty
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Get previous item.
	 * 
	 * @return Property\PreviousItemProperty
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
	 * @param Property\ItemProperty $item
	 * @return ListItemType
	 */
	public function setItem(Property\ItemProperty $item) {
		$this->item = $item;

		return $this;
	}

	/**
	 * Set next item.
	 * 
	 * @param Property\NextItemProperty $nextItem
	 * @return ListItemType
	 */
	public function setNextItem(Property\NextItemProperty $nextItem) {
		$this->nextItem = $nextItem;

		return $this;
	}

	/**
	 * Set position.
	 * 
	 * @param Property\PositionProperty $position
	 * @return ListItemType
	 */
	public function setPosition(Property\PositionProperty $position) {
		$this->position = $position;

		return $this;
	}

	/**
	 * Set previous item.
	 * 
	 * @param Property\PreviousItemProperty $previousItem
	 * @return ListItemType
	 */
	public function setPreviousItem(Property\PreviousItemProperty $previousItem) {
		$this->previousItem = $previousItem;

		return $this;
	}
}