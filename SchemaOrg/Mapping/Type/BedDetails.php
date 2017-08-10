<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BedDetails.
 */
class BedDetails {

	/**
	 */
	private $id;

	/**
	 * @var Property\NumberOfBeds
	 */
	private $numberOfBeds;

	/**
	 * @var Property\TypeOfBed
	 */
	private $typeOfBed;

	/**
	 * BedDetails constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get number of beds.
	 * 
	 * @return Property\NumberOfBeds
	 */
	public function getNumberOfBeds() {
		return $this->numberOfBeds;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedDetails';
	}

	/**
	 * Get type of bed.
	 * 
	 * @return Property\TypeOfBed
	 */
	public function getTypeOfBed() {
		return $this->typeOfBed;
	}

	/**
	 * Set number of beds.
	 * 
	 * @param Property\NumberOfBeds $numberOfBeds
	 * @return BedDetails
	 */
	public function setNumberOfBeds(Property\NumberOfBeds $numberOfBeds) {
		$this->numberOfBeds = $numberOfBeds;

		return $this;
	}

	/**
	 * Set type of bed.
	 * 
	 * @param Property\TypeOfBed $typeOfBed
	 * @return BedDetails
	 */
	public function setTypeOfBed(Property\TypeOfBed $typeOfBed) {
		$this->typeOfBed = $typeOfBed;

		return $this;
	}
}