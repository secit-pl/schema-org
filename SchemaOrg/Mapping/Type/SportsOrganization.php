<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsOrganization.
 */
class SportsOrganization {

	/**
	 */
	private $id;

	/**
	 * @var Property\Sport
	 */
	private $sport;

	/**
	 * SportsOrganization constructor.
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsOrganization';
	}

	/**
	 * Get sport.
	 * 
	 * @return Property\Sport
	 */
	public function getSport() {
		return $this->sport;
	}

	/**
	 * Set sport.
	 * 
	 * @param Property\Sport $sport
	 * @return SportsOrganization
	 */
	public function setSport(Property\Sport $sport) {
		$this->sport = $sport;

		return $this;
	}
}