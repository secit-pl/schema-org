<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EmployeeRole.
 */
class EmployeeRole {

	/**
	 * @var Property\BaseSalary
	 */
	private $baseSalary;

	/**
	 */
	private $id;

	/**
	 * @var Property\SalaryCurrency
	 */
	private $salaryCurrency;

	/**
	 * EmployeeRole constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get base salary.
	 * 
	 * @return Property\BaseSalary
	 */
	public function getBaseSalary() {
		return $this->baseSalary;
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