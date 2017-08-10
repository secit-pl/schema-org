<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreativeWorkSeries.
 */
class CreativeWorkSeries {

	/**
	 * @var Property\EndDate
	 */
	private $endDate;

	/**
	 */
	private $id;

	/**
	 * @var Property\StartDate
	 */
	private $startDate;

	/**
	 * CreativeWorkSeries constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get end date.
	 * 
	 * @return Property\EndDate
	 */
	public function getEndDate() {
		return $this->endDate;
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
		return 'https://schema.org/CreativeWorkSeries';
	}

	/**
	 * Get start date.
	 * 
	 * @return Property\StartDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set end date.
	 * 
	 * @param Property\EndDate $endDate
	 * @return CreativeWorkSeries
	 */
	public function setEndDate(Property\EndDate $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set start date.
	 * 
	 * @param Property\StartDate $startDate
	 * @return CreativeWorkSeries
	 */
	public function setStartDate(Property\StartDate $startDate) {
		$this->startDate = $startDate;

		return $this;
	}
}