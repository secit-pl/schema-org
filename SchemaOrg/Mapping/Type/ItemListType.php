<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A list of items of any sort—for example, Top 10 Movies About Weathermen, or Top 100 Party Songs. Not to be confused with HTML lists, which are often used only for formatting.
 * 
 * @method ItemListType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemListType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemListType setDescription(Property\DescriptionProperty $description)
 * @method ItemListType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemListType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemListType setImage(Property\ImageProperty $image)
 * @method ItemListType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemListType setName(Property\NameProperty $name)
 * @method ItemListType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemListType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemListType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ItemListType setUrl(Property\UrlProperty $url)
 */
class ItemListType extends IntangibleType {

	/**
	 * @var array|Property\ItemListElementProperty[]
	 */
	private $itemListElement;

	/**
	 * @var Property\ItemListOrderProperty
	 */
	private $itemListOrder;

	/**
	 * @var Property\NumberOfItemsProperty
	 */
	private $numberOfItems;

	/**
	 * ItemListType constructor.
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
	 * @param Property\ItemListElementProperty $itemListElement
	 * @return ItemListType
	 */
	public function addItemListElement(Property\ItemListElementProperty $itemListElement) {
		if (!$itemListElement instanceof Property\ItemListElementProperty) {
		     throw new \Exception('Unexpected value type');
		}
		$this->itemListElement[] = $itemListElement;

		return $this;
	}

	/**
	 * Get item list elements.
	 *
	 * @return array|Property\ItemListElementProperty[]
	 */
	public function getItemListElements() {
		return $this->itemListElement;
	}

	/**
	 * Get item list order.
	 *
	 * @return Property\ItemListOrderProperty
	 */
	public function getItemListOrder() {
		return $this->itemListOrder;
	}

	/**
	 * Get number of items.
	 *
	 * @return Property\NumberOfItemsProperty
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
	 * @param array|Property\ItemListElementProperty[] $itemListElements
	 * @return ItemListType
	 */
	public function setItemListElements($itemListElements) {
		if (!is_array($itemListElements)) {
		    throw new \Exception('The value is expected to be an array');
		}
		foreach ($itemListElements as $itemListElement) {
		    if (!$itemListElement instanceof Property\ItemListElementProperty) {
		        throw new \Exception('Unexpected value type');
		    }
		}
		$this->itemListElement = $itemListElements;

		return $this;
	}

	/**
	 * Set item list order.
	 *
	 * @param Property\ItemListOrderProperty $itemListOrder
	 * @return ItemListType
	 */
	public function setItemListOrder(Property\ItemListOrderProperty $itemListOrder) {
		$this->itemListOrder = $itemListOrder;

		return $this;
	}

	/**
	 * Set number of items.
	 *
	 * @param Property\NumberOfItemsProperty $numberOfItems
	 * @return ItemListType
	 */
	public function setNumberOfItems(Property\NumberOfItemsProperty $numberOfItems) {
		$this->numberOfItems = $numberOfItems;

		return $this;
	}
}