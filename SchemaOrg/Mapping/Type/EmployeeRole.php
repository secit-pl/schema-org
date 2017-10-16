<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmployeeRole.
 * 
 * @method EmployeeRole setAdditionalType(Property\AdditionalType $additionalType)
 * @method EmployeeRole setAlternateName(Property\AlternateName $alternateName)
 * @method EmployeeRole setDescription(Property\Description $description)
 * @method EmployeeRole setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EmployeeRole setEndDate(Property\EndDate $endDate)
 * @method EmployeeRole setIdentifier(Property\Identifier $identifier)
 * @method EmployeeRole setImage(Property\Image $image)
 * @method EmployeeRole setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EmployeeRole setName(Property\Name $name)
 * @method EmployeeRole setNumberedPosition(Property\NumberedPosition $numberedPosition)
 * @method EmployeeRole setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EmployeeRole setRoleName(Property\RoleName $roleName)
 * @method EmployeeRole setSameAs(Property\SameAs $sameAs)
 * @method EmployeeRole setStartDate(Property\StartDate $startDate)
 * @method EmployeeRole setUrl(Property\Url $url)
 */
class EmployeeRole extends OrganizationRole {

	/**
	 * @var Property\BaseSalary
	 */
	private $baseSalary;

	/**
	 * @var Property\SalaryCurrency
	 */
	private $salaryCurrency;

	/**
	 * Get base salary.
	 * 
	 * @return Property\BaseSalary
	 */
	public function getBaseSalary() {
		return $this->baseSalary;
	}

	/**
	 * Get salary currency.
	 * 
	 * @return Property\SalaryCurrency
	 */
	public function getSalaryCurrency() {
		return $this->salaryCurrency;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EmployeeRole';
	}

	/**
	 * Set base salary.
	 * 
	 * @param Property\BaseSalary $baseSalary
	 * @return EmployeeRole
	 */
	public function setBaseSalary(Property\BaseSalary $baseSalary) {
		$this->baseSalary = $baseSalary;

		return $this;
	}

	/**
	 * Set salary currency.
	 * 
	 * @param Property\SalaryCurrency $salaryCurrency
	 * @return EmployeeRole
	 */
	public function setSalaryCurrency(Property\SalaryCurrency $salaryCurrency) {
		$this->salaryCurrency = $salaryCurrency;

		return $this;
	}
}