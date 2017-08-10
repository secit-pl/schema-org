<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Audience.
 */
class Audience {

	/**
	 * @var Property\AudienceType
	 */
	private $audienceType;

	/**
	 * @var Property\GeographicArea
	 */
	private $geographicArea;

	/**
	 */
	private $id;

	/**
	 * Audience constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get audience type.
	 * 
	 * @return Property\AudienceType
	 */
	public function getAudienceType() {
		return $this->audienceType;
	}

	/**
	 * Get geographic area.
	 * 
	 * @return Property\GeographicArea
	 */
	public function getGeographicArea() {
		return $this->geographicArea;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Audience';
	}

	/**
	 * Set audience type.
	 * 
	 * @param Property\AudienceType $audienceType
	 * @return Audience
	 */
	public function setAudienceType(Property\AudienceType $audienceType) {
		$this->audienceType = $audienceType;

		return $this;
	}

	/**
	 * Set geographic area.
	 * 
	 * @param Property\GeographicArea $geographicArea
	 * @return Audience
	 */
	public function setGeographicArea(Property\GeographicArea $geographicArea) {
		$this->geographicArea = $geographicArea;

		return $this;
	}
}