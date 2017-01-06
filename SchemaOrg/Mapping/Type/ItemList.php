<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemList.
 * 
 * @method ItemList setAdditionalType(Property\AdditionalType $additionalType)
 * @method ItemList setAlternateName(Property\AlternateName $alternateName)
 * @method ItemList setDescription(Property\Description $description)
 * @method ItemList setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ItemList setImage(Property\Image $image)
 * @method ItemList setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ItemList setName(Property\Name $name)
 * @method ItemList setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ItemList setSameAs(Property\SameAs $sameAs)
 * @method ItemList setUrl(Property\Url $url)
 */
class ItemList extends Intangible {

	/**
	 * @var array|Property\ItemListElement[]
	 */
	private $itemListElement;

	/**
	 * @var Property\ItemListOrder
	 */
	private $itemListOrder;

	/**
	 * @var Property\NumberOfItems
	 */
	private $numberOfItems;

	/**
	 * ItemList constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		parent::__construct($id);
		$this->itemListElement = [];
	}

	/**
	 * Add an item list element.
	 * 
	 * @param Property\ItemListElement $itemListElement
	 * @return ItemList
	 */
	public function addItemListElement(Property\ItemListElement $itemListElement) {
		if (!$itemListElement instanceof Property\ItemListElement) {
		     throw new \Exception('Unexpected value type');
		}
		$this->itemListElement[] = $itemListElement;

		return $this;
	}

	/**
	 * Get item list elements.
	 * 
	 * @return array|Property\ItemListElement[]
	 */
	public function getItemListElements() {
		return $this->itemListElement;
	}

	/**
	 * Get item list order.
	 * 
	 * @return Property\ItemListOrder
	 */
	public function getItemListOrder() {
		return $this->itemListOrder;
	}

	/**
	 * Get number of items.
	 * 
	 * @return Property\NumberOfItems
	 */
	public function getNumberOfItems() {
		return $this->numberOfItems;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemList';
	}

	/**
	 * Set item list elements.
	 * 
	 * @param array|Property\ItemListElement[] $itemListElements
	 * @return ItemList
	 */
	public function setItemListElements($itemListElements) {
		if (!is_array($itemListElements)) {
		    throw new \Exception('The value is expected to be an array');
		}
		foreach ($itemListElements as $itemListElement) {
		    if (!$itemListElement instanceof Property\ItemListElement) {
		        throw new \Exception('Unexpected value type');
		    }
		}
		$this->itemListElement = $itemListElements;

		return $this;
	}

	/**
	 * Set item list order.
	 * 
	 * @param Property\ItemListOrder $itemListOrder
	 * @return ItemList
	 */
	public function setItemListOrder(Property\ItemListOrder $itemListOrder) {
		$this->itemListOrder = $itemListOrder;

		return $this;
	}

	/**
	 * Set number of items.
	 * 
	 * @param Property\NumberOfItems $numberOfItems
	 * @return ItemList
	 */
	public function setNumberOfItems(Property\NumberOfItems $numberOfItems) {
		$this->numberOfItems = $numberOfItems;

		return $this;
	}
}