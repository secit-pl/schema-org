<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InvestmentOrDeposit.
 */
class InvestmentOrDeposit {

	/**
	 * @var Property\Amount
	 */
	private $amount;

	/**
	 */
	private $id;

	/**
	 * InvestmentOrDeposit constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get amount.
	 * 
	 * @return Property\Amount
	 */
	public function getAmount() {
		return $this->amount;
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
		return 'https://schema.org/InvestmentOrDeposit';
	}

	/**
	 * Set amount.
	 * 
	 * @param Property\Amount $amount
	 * @return InvestmentOrDeposit
	 */
	public function setAmount(Property\Amount $amount) {
		$this->amount = $amount;

		return $this;
	}
}