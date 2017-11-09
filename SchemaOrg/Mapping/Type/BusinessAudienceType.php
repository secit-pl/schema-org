<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusinessAudienceType.
 * 
 * @method BusinessAudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusinessAudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusinessAudienceType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method BusinessAudienceType setDescription(Property\DescriptionProperty $description)
 * @method BusinessAudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusinessAudienceType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method BusinessAudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusinessAudienceType setImage(Property\ImageProperty $image)
 * @method BusinessAudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusinessAudienceType setName(Property\NameProperty $name)
 * @method BusinessAudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusinessAudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusinessAudienceType setUrl(Property\UrlProperty $url)
 */
class BusinessAudienceType extends AudienceType {

	/**
	 * @var Property\NumberOfEmployeesProperty
	 */
	private $numberOfEmployees;

	/**
	 * @var Property\YearlyRevenueProperty
	 */
	private $yearlyRevenue;

	/**
	 * @var Property\YearsInOperationProperty
	 */
	private $yearsInOperation;

	/**
	 * Get number of employees.
	 * 
	 * @return Property\NumberOfEmployeesProperty
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
	 * @return Property\YearlyRevenueProperty
	 */
	public function getYearlyRevenue() {
		return $this->yearlyRevenue;
	}

	/**
	 * Get years in operation.
	 * 
	 * @return Property\YearsInOperationProperty
	 */
	public function getYearsInOperation() {
		return $this->yearsInOperation;
	}

	/**
	 * Set number of employees.
	 * 
	 * @param Property\NumberOfEmployeesProperty $numberOfEmployees
	 * @return BusinessAudienceType
	 */
	public function setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees) {
		$this->numberOfEmployees = $numberOfEmployees;

		return $this;
	}

	/**
	 * Set yearly revenue.
	 * 
	 * @param Property\YearlyRevenueProperty $yearlyRevenue
	 * @return BusinessAudienceType
	 */
	public function setYearlyRevenue(Property\YearlyRevenueProperty $yearlyRevenue) {
		$this->yearlyRevenue = $yearlyRevenue;

		return $this;
	}

	/**
	 * Set years in operation.
	 * 
	 * @param Property\YearsInOperationProperty $yearsInOperation
	 * @return BusinessAudienceType
	 */
	public function setYearsInOperation(Property\YearsInOperationProperty $yearsInOperation) {
		$this->yearsInOperation = $yearsInOperation;

		return $this;
	}
}