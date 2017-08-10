<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyPromise.
 */
class WarrantyPromise extends StructuredValue {

	/**
	 * @var Property\DurationOfWarranty
	 */
	private $durationOfWarranty;

	/**
	 * @var Property\WarrantyScope
	 */
	private $warrantyScope;

	/**
	 * Get duration of warranty.
	 * 
	 * @return Property\DurationOfWarranty
	 */
	public function getDurationOfWarranty() {
		return $this->durationOfWarranty;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WarrantyPromise';
	}

	/**
	 * Get warranty scope.
	 * 
	 * @return Property\WarrantyScope
	 */
	public function getWarrantyScope() {
		return $this->warrantyScope;
	}

	/**
	 * Set duration of warranty.
	 * 
	 * @param Property\DurationOfWarranty $durationOfWarranty
	 * @return WarrantyPromise
	 */
	public function setDurationOfWarranty(Property\DurationOfWarranty $durationOfWarranty) {
		$this->durationOfWarranty = $durationOfWarranty;

		return $this;
	}

	/**
	 * Set warranty scope.
	 * 
	 * @param Property\WarrantyScope $warrantyScope
	 * @return WarrantyPromise
	 */
	public function setWarrantyScope(Property\WarrantyScope $warrantyScope) {
		$this->warrantyScope = $warrantyScope;

		return $this;
	}
}