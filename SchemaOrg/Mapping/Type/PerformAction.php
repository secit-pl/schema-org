<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformAction.
 */
class PerformAction {

	/**
	 * @var Property\EntertainmentBusiness
	 */
	private $entertainmentBusiness;

	/**
	 */
	private $id;

	/**
	 * PerformAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get entertainment business.
	 * 
	 * @return Property\EntertainmentBusiness
	 */
	public function getEntertainmentBusiness() {
		return $this->entertainmentBusiness;
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
		return 'https://schema.org/PerformAction';
	}

	/**
	 * Set entertainment business.
	 * 
	 * @param Property\EntertainmentBusiness $entertainmentBusiness
	 * @return PerformAction
	 */
	public function setEntertainmentBusiness(Property\EntertainmentBusiness $entertainmentBusiness) {
		$this->entertainmentBusiness = $entertainmentBusiness;

		return $this;
	}
}