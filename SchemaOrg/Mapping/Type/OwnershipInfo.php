<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OwnershipInfo.
 */
class OwnershipInfo extends StructuredValue {

	/**
	 * @var Property\AcquiredFrom
	 */
	private $acquiredFrom;

	/**
	 * @var Property\OwnedFrom
	 */
	private $ownedFrom;

	/**
	 * @var Property\OwnedThrough
	 */
	private $ownedThrough;

	/**
	 * @var Property\TypeOfGood
	 */
	private $typeOfGood;

	/**
	 * Get acquired from.
	 * 
	 * @return Property\AcquiredFrom
	 */
	public function getAcquiredFrom() {
		return $this->acquiredFrom;
	}

	/**
	 * Get owned from.
	 * 
	 * @return Property\OwnedFrom
	 */
	public function getOwnedFrom() {
		return $this->ownedFrom;
	}

	/**
	 * Get owned through.
	 * 
	 * @return Property\OwnedThrough
	 */
	public function getOwnedThrough() {
		return $this->ownedThrough;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OwnershipInfo';
	}

	/**
	 * Get type of good.
	 * 
	 * @return Property\TypeOfGood
	 */
	public function getTypeOfGood() {
		return $this->typeOfGood;
	}

	/**
	 * Set acquired from.
	 * 
	 * @param Property\AcquiredFrom $acquiredFrom
	 * @return OwnershipInfo
	 */
	public function setAcquiredFrom(Property\AcquiredFrom $acquiredFrom) {
		$this->acquiredFrom = $acquiredFrom;

		return $this;
	}

	/**
	 * Set owned from.
	 * 
	 * @param Property\OwnedFrom $ownedFrom
	 * @return OwnershipInfo
	 */
	public function setOwnedFrom(Property\OwnedFrom $ownedFrom) {
		$this->ownedFrom = $ownedFrom;

		return $this;
	}

	/**
	 * Set owned through.
	 * 
	 * @param Property\OwnedThrough $ownedThrough
	 * @return OwnershipInfo
	 */
	public function setOwnedThrough(Property\OwnedThrough $ownedThrough) {
		$this->ownedThrough = $ownedThrough;

		return $this;
	}

	/**
	 * Set type of good.
	 * 
	 * @param Property\TypeOfGood $typeOfGood
	 * @return OwnershipInfo
	 */
	public function setTypeOfGood(Property\TypeOfGood $typeOfGood) {
		$this->typeOfGood = $typeOfGood;

		return $this;
	}
}