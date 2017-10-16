<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Airline.
 */
class Airline {

	/**
	 * @var Property\BoardingPolicy
	 */
	private $boardingPolicy;

	/**
	 * @var Property\IataCode
	 */
	private $iataCode;

	/**
	 */
	private $id;

	/**
	 * Airline constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get boarding policy.
	 * 
	 * @return Property\BoardingPolicy
	 */
	public function getBoardingPolicy() {
		return $this->boardingPolicy;
	}

	/**
	 * Get iata code.
	 * 
	 * @return Property\IataCode
	 */
	public function getIataCode() {
		return $this->iataCode;
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
		return 'https://schema.org/Airline';
	}

	/**
	 * Set boarding policy.
	 * 
	 * @param Property\BoardingPolicy $boardingPolicy
	 * @return Airline
	 */
	public function setBoardingPolicy(Property\BoardingPolicy $boardingPolicy) {
		$this->boardingPolicy = $boardingPolicy;

		return $this;
	}

	/**
	 * Set iata code.
	 * 
	 * @param Property\IataCode $iataCode
	 * @return Airline
	 */
	public function setIataCode(Property\IataCode $iataCode) {
		$this->iataCode = $iataCode;

		return $this;
	}
}