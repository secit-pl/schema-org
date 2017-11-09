<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmployeeRoleType.
 * 
 * @method EmployeeRoleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EmployeeRoleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EmployeeRoleType setDescription(Property\DescriptionProperty $description)
 * @method EmployeeRoleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EmployeeRoleType setEndDate(Property\EndDateProperty $endDate)
 * @method EmployeeRoleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EmployeeRoleType setImage(Property\ImageProperty $image)
 * @method EmployeeRoleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EmployeeRoleType setName(Property\NameProperty $name)
 * @method EmployeeRoleType setNumberedPosition(Property\NumberedPositionProperty $numberedPosition)
 * @method EmployeeRoleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EmployeeRoleType setRoleName(Property\RoleNameProperty $roleName)
 * @method EmployeeRoleType setSameAs(Property\SameAsProperty $sameAs)
 * @method EmployeeRoleType setStartDate(Property\StartDateProperty $startDate)
 * @method EmployeeRoleType setUrl(Property\UrlProperty $url)
 */
class EmployeeRoleType extends OrganizationRoleType {

	/**
	 * @var Property\BaseSalaryProperty
	 */
	private $baseSalary;

	/**
	 * @var Property\SalaryCurrencyProperty
	 */
	private $salaryCurrency;

	/**
	 * Get base salary.
	 * 
	 * @return Property\BaseSalaryProperty
	 */
	public function getBaseSalary() {
		return $this->baseSalary;
	}

	/**
	 * Get salary currency.
	 * 
	 * @return Property\SalaryCurrencyProperty
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
	 * @param Property\BaseSalaryProperty $baseSalary
	 * @return EmployeeRoleType
	 */
	public function setBaseSalary(Property\BaseSalaryProperty $baseSalary) {
		$this->baseSalary = $baseSalary;

		return $this;
	}

	/**
	 * Set salary currency.
	 * 
	 * @param Property\SalaryCurrencyProperty $salaryCurrency
	 * @return EmployeeRoleType
	 */
	public function setSalaryCurrency(Property\SalaryCurrencyProperty $salaryCurrency) {
		$this->salaryCurrency = $salaryCurrency;

		return $this;
	}
}