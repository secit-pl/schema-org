<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A single item within a larger data feed.
 * 
 * @method DataFeedItemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DataFeedItemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DataFeedItemType setDescription(Property\DescriptionProperty $description)
 * @method DataFeedItemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DataFeedItemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DataFeedItemType setImage(Property\ImageProperty $image)
 * @method DataFeedItemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DataFeedItemType setName(Property\NameProperty $name)
 * @method DataFeedItemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DataFeedItemType setSameAs(Property\SameAsProperty $sameAs)
 * @method DataFeedItemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DataFeedItemType setUrl(Property\UrlProperty $url)
 */
class DataFeedItemType extends IntangibleType {

	/**
	 * @var Property\DateCreatedProperty
	 */
	private $dateCreated;

	/**
	 * @var Property\DateDeletedProperty
	 */
	private $dateDeleted;

	/**
	 * @var Property\DateModifiedProperty
	 */
	private $dateModified;

	/**
	 * @var Property\ItemProperty
	 */
	private $item;

	/**
	 * Get date created.
	 *
	 * @return Property\DateCreatedProperty
	 */
	public function getDateCreated() {
		return $this->dateCreated;
	}

	/**
	 * Get date deleted.
	 *
	 * @return Property\DateDeletedProperty
	 */
	public function getDateDeleted() {
		return $this->dateDeleted;
	}

	/**
	 * Get date modified.
	 *
	 * @return Property\DateModifiedProperty
	 */
	public function getDateModified() {
		return $this->dateModified;
	}

	/**
	 * Get item.
	 *
	 * @return Property\ItemProperty
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
	 * @param Property\DateCreatedProperty $dateCreated
	 * @return DataFeedItemType
	 */
	public function setDateCreated(Property\DateCreatedProperty $dateCreated) {
		$this->dateCreated = $dateCreated;

		return $this;
	}

	/**
	 * Set date deleted.
	 *
	 * @param Property\DateDeletedProperty $dateDeleted
	 * @return DataFeedItemType
	 */
	public function setDateDeleted(Property\DateDeletedProperty $dateDeleted) {
		$this->dateDeleted = $dateDeleted;

		return $this;
	}

	/**
	 * Set date modified.
	 *
	 * @param Property\DateModifiedProperty $dateModified
	 * @return DataFeedItemType
	 */
	public function setDateModified(Property\DateModifiedProperty $dateModified) {
		$this->dateModified = $dateModified;

		return $this;
	}

	/**
	 * Set item.
	 *
	 * @param Property\ItemProperty $item
	 * @return DataFeedItemType
	 */
	public function setItem(Property\ItemProperty $item) {
		$this->item = $item;

		return $this;
	}
}