<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PublicationEvent.
 */
class PublicationEvent {

	/**
	 */
	private $id;

	/**
	 * @var Property\IsAccessibleForFree
	 */
	private $isAccessibleForFree;

	/**
	 * @var Property\PublishedOn
	 */
	private $publishedOn;

	/**
	 * PublicationEvent constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get is accessible for free.
	 * 
	 * @return Property\IsAccessibleForFree
	 */
	public function getIsAccessibleForFree() {
		return $this->isAccessibleForFree;
	}

	/**
	 * Get published on.
	 * 
	 * @return Property\PublishedOn
	 */
	public function getPublishedOn() {
		return $this->publishedOn;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicationEvent';
	}

	/**
	 * Set is accessible for free.
	 * 
	 * @param Property\IsAccessibleForFree $isAccessibleForFree
	 * @return PublicationEvent
	 */
	public function setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree) {
		$this->isAccessibleForFree = $isAccessibleForFree;

		return $this;
	}

	/**
	 * Set published on.
	 * 
	 * @param Property\PublishedOn $publishedOn
	 * @return PublicationEvent
	 */
	public function setPublishedOn(Property\PublishedOn $publishedOn) {
		$this->publishedOn = $publishedOn;

		return $this;
	}
}