<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DataFeedItem.
 * 
 * @method DataFeedItem setAdditionalType(Property\AdditionalType $additionalType)
 * @method DataFeedItem setAlternateName(Property\AlternateName $alternateName)
 * @method DataFeedItem setDescription(Property\Description $description)
 * @method DataFeedItem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DataFeedItem setImage(Property\Image $image)
 * @method DataFeedItem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DataFeedItem setName(Property\Name $name)
 * @method DataFeedItem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DataFeedItem setSameAs(Property\SameAs $sameAs)
 * @method DataFeedItem setUrl(Property\Url $url)
 */
class DataFeedItem extends Intangible {

	/**
	 * @var Property\DateCreated
	 */
	private $dateCreated;

	/**
	 * @var Property\DateDeleted
	 */
	private $dateDeleted;

	/**
	 * @var Property\DateModified
	 */
	private $dateModified;

	/**
	 * @var Property\Item
	 */
	private $item;

	/**
	 * Get date created.
	 * 
	 * @return Property\DateCreated
	 */
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	 * Get date deleted.
	 * 
	 * @return Property\DateDeleted
	 */
	public function getDateDeleted() {
		return $this->dateDeleted;
	}

	/**
	 * Get date modified.
	 * 
	 * @return Property\DateModified
	 */
	public function getDateModified() {
		return $this->dateModified;
	}

	/**
	 * Get item.
	 * 
	 * @return Property\Item
	 */
	public function getItem() {
		return $this->item;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DataFeedItem';
	}

	/**
	 * Set date created.
	 * 
	 * @param Property\DateCreated $dateCreated
	 * @return DataFeedItem
	 */
	public function setDateCreated(Property\DateCreated $dateCreated) {
		$this->dateCreated = $dateCreated;

		return $this;
	}

	/**
	 * Set date deleted.
	 * 
	 * @param Property\DateDeleted $dateDeleted
	 * @return DataFeedItem
	 */
	public function setDateDeleted(Property\DateDeleted $dateDeleted) {
		$this->dateDeleted = $dateDeleted;

		return $this;
	}

	/**
	 * Set date modified.
	 * 
	 * @param Property\DateModified $dateModified
	 * @return DataFeedItem
	 */
	public function setDateModified(Property\DateModified $dateModified) {
		$this->dateModified = $dateModified;

		return $this;
	}

	/**
	 * Set item.
	 * 
	 * @param Property\Item $item
	 * @return DataFeedItem
	 */
	public function setItem(Property\Item $item) {
		$this->item = $item;

		return $this;
	}
}