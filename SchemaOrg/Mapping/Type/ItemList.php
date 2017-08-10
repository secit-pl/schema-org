<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ItemList.
 */
class ItemList {

	/**
	 */
	private $id;

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
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
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