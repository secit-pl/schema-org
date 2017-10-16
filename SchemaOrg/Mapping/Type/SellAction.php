<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SellAction.
 */
class SellAction {

	/**
	 * @var Property\Buyer
	 */
	private $buyer;

	/**
	 */
	private $id;

	/**
	 * SellAction constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get buyer.
	 * 
	 * @return Property\Buyer
	 */
	public function getBuyer() {
		return $this->buyer;
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
		return 'https://schema.org/SellAction';
	}

	/**
	 * Set buyer.
	 * 
	 * @param Property\Buyer $buyer
	 * @return SellAction
	 */
	public function setBuyer(Property\Buyer $buyer) {
		$this->buyer = $buyer;

		return $this;
	}
}