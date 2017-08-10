<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessAudience.
 * 
 * @method BusinessAudience setAudienceType(Property\AudienceType $audienceType)
 * @method BusinessAudience setGeographicArea(Property\GeographicArea $geographicArea)
 */
class BusinessAudience extends Audience {

	/**
	 * @var Property\NumberOfEmployees
	 */
	private $numberOfEmployees;

	/**
	 * @var Property\YearlyRevenue
	 */
	private $yearlyRevenue;

	/**
	 * @var Property\YearsInOperation
	 */
	private $yearsInOperation;

	/**
	 * Get number of employees.
	 * 
	 * @return Property\NumberOfEmployees
	 */
	public function getNumberOfEmployees() {
		return $this->numberOfEmployees;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusinessAudience';
	}

	/**
	 * Get yearly revenue.
	 * 
	 * @return Property\YearlyRevenue
	 */
	public function getYearlyRevenue() {
		return $this->yearlyRevenue;
	}

	/**
	 * Get years in operation.
	 * 
	 * @return Property\YearsInOperation
	 */
	public function getYearsInOperation() {
		return $this->yearsInOperation;
	}

	/**
	 * Set number of employees.
	 * 
	 * @param Property\NumberOfEmployees $numberOfEmployees
	 * @return BusinessAudience
	 */
	public function setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees) {
		$this->numberOfEmployees = $numberOfEmployees;

		return $this;
	}

	/**
	 * Set yearly revenue.
	 * 
	 * @param Property\YearlyRevenue $yearlyRevenue
	 * @return BusinessAudience
	 */
	public function setYearlyRevenue(Property\YearlyRevenue $yearlyRevenue) {
		$this->yearlyRevenue = $yearlyRevenue;

		return $this;
	}

	/**
	 * Set years in operation.
	 * 
	 * @param Property\YearsInOperation $yearsInOperation
	 * @return BusinessAudience
	 */
	public function setYearsInOperation(Property\YearsInOperation $yearsInOperation) {
		$this->yearsInOperation = $yearsInOperation;

		return $this;
	}
}