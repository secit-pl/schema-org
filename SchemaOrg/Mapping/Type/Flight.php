<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Flight.
 */
class Flight extends Intangible {

	/**
	 * @var Property\Aircraft
	 */
	private $aircraft;

	/**
	 * @var Property\ArrivalAirport
	 */
	private $arrivalAirport;

	/**
	 * @var Property\ArrivalGate
	 */
	private $arrivalGate;

	/**
	 * @var Property\ArrivalTerminal
	 */
	private $arrivalTerminal;

	/**
	 * @var Property\ArrivalTime
	 */
	private $arrivalTime;

	/**
	 * @var Property\BoardingPolicy
	 */
	private $boardingPolicy;

	/**
	 * @var Property\DepartureAirport
	 */
	private $departureAirport;

	/**
	 * @var Property\DepartureGate
	 */
	private $departureGate;

	/**
	 * @var Property\DepartureTerminal
	 */
	private $departureTerminal;

	/**
	 * @var Property\DepartureTime
	 */
	private $departureTime;

	/**
	 * @var Property\EstimatedFlightDuration
	 */
	private $estimatedFlightDuration;

	/**
	 * @var Property\FlightDistance
	 */
	private $flightDistance;

	/**
	 * @var Property\FlightNumber
	 */
	private $flightNumber;

	/**
	 * @var Property\MealService
	 */
	private $mealService;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\Seller
	 */
	private $seller;

	/**
	 * @var Property\WebCheckinTime
	 */
	private $webCheckinTime;

	/**
	 * Get aircraft.
	 * 
	 * @return Property\Aircraft
	 */
	public function getAircraft() {
		return $this->aircraft;
	}

	/**
	 * Get arrival airport.
	 * 
	 * @return Property\ArrivalAirport
	 */
	public function getArrivalAirport() {
		return $this->arrivalAirport;
	}

	/**
	 * Get arrival gate.
	 * 
	 * @return Property\ArrivalGate
	 */
	public function getArrivalGate() {
		return $this->arrivalGate;
	}

	/**
	 * Get arrival terminal.
	 * 
	 * @return Property\ArrivalTerminal
	 */
	public function getArrivalTerminal() {
		return $this->arrivalTerminal;
	}

	/**
	 * Get arrival time.
	 * 
	 * @return Property\ArrivalTime
	 */
	public function getArrivalTime() {
		return $this->arrivalTime;
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
	 * Get departure airport.
	 * 
	 * @return Property\DepartureAirport
	 */
	public function getDepartureAirport() {
		return $this->departureAirport;
	}

	/**
	 * Get departure gate.
	 * 
	 * @return Property\DepartureGate
	 */
	public function getDepartureGate() {
		return $this->departureGate;
	}

	/**
	 * Get departure terminal.
	 * 
	 * @return Property\DepartureTerminal
	 */
	public function getDepartureTerminal() {
		return $this->departureTerminal;
	}

	/**
	 * Get departure time.
	 * 
	 * @return Property\DepartureTime
	 */
	public function getDepartureTime() {
		return $this->departureTime;
	}

	/**
	 * Get estimated flight duration.
	 * 
	 * @return Property\EstimatedFlightDuration
	 */
	public function getEstimatedFlightDuration() {
		return $this->estimatedFlightDuration;
	}

	/**
	 * Get flight distance.
	 * 
	 * @return Property\FlightDistance
	 */
	public function getFlightDistance() {
		return $this->flightDistance;
	}

	/**
	 * Get flight number.
	 * 
	 * @return Property\FlightNumber
	 */
	public function getFlightNumber() {
		return $this->flightNumber;
	}

	/**
	 * Get meal service.
	 * 
	 * @return Property\MealService
	 */
	public function getMealService() {
		return $this->mealService;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Flight';
	}

	/**
	 * Get seller.
	 * 
	 * @return Property\Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Get web checkin time.
	 * 
	 * @return Property\WebCheckinTime
	 */
	public function getWebCheckinTime() {
		return $this->webCheckinTime;
	}

	/**
	 * Set aircraft.
	 * 
	 * @param Property\Aircraft $aircraft
	 * @return Flight
	 */
	public function setAircraft(Property\Aircraft $aircraft) {
		$this->aircraft = $aircraft;

		return $this;
	}

	/**
	 * Set arrival airport.
	 * 
	 * @param Property\ArrivalAirport $arrivalAirport
	 * @return Flight
	 */
	public function setArrivalAirport(Property\ArrivalAirport $arrivalAirport) {
		$this->arrivalAirport = $arrivalAirport;

		return $this;
	}

	/**
	 * Set arrival gate.
	 * 
	 * @param Property\ArrivalGate $arrivalGate
	 * @return Flight
	 */
	public function setArrivalGate(Property\ArrivalGate $arrivalGate) {
		$this->arrivalGate = $arrivalGate;

		return $this;
	}

	/**
	 * Set arrival terminal.
	 * 
	 * @param Property\ArrivalTerminal $arrivalTerminal
	 * @return Flight
	 */
	public function setArrivalTerminal(Property\ArrivalTerminal $arrivalTerminal) {
		$this->arrivalTerminal = $arrivalTerminal;

		return $this;
	}

	/**
	 * Set arrival time.
	 * 
	 * @param Property\ArrivalTime $arrivalTime
	 * @return Flight
	 */
	public function setArrivalTime(Property\ArrivalTime $arrivalTime) {
		$this->arrivalTime = $arrivalTime;

		return $this;
	}

	/**
	 * Set boarding policy.
	 * 
	 * @param Property\BoardingPolicy $boardingPolicy
	 * @return Flight
	 */
	public function setBoardingPolicy(Property\BoardingPolicy $boardingPolicy) {
		$this->boardingPolicy = $boardingPolicy;

		return $this;
	}

	/**
	 * Set departure airport.
	 * 
	 * @param Property\DepartureAirport $departureAirport
	 * @return Flight
	 */
	public function setDepartureAirport(Property\DepartureAirport $departureAirport) {
		$this->departureAirport = $departureAirport;

		return $this;
	}

	/**
	 * Set departure gate.
	 * 
	 * @param Property\DepartureGate $departureGate
	 * @return Flight
	 */
	public function setDepartureGate(Property\DepartureGate $departureGate) {
		$this->departureGate = $departureGate;

		return $this;
	}

	/**
	 * Set departure terminal.
	 * 
	 * @param Property\DepartureTerminal $departureTerminal
	 * @return Flight
	 */
	public function setDepartureTerminal(Property\DepartureTerminal $departureTerminal) {
		$this->departureTerminal = $departureTerminal;

		return $this;
	}

	/**
	 * Set departure time.
	 * 
	 * @param Property\DepartureTime $departureTime
	 * @return Flight
	 */
	public function setDepartureTime(Property\DepartureTime $departureTime) {
		$this->departureTime = $departureTime;

		return $this;
	}

	/**
	 * Set estimated flight duration.
	 * 
	 * @param Property\EstimatedFlightDuration $estimatedFlightDuration
	 * @return Flight
	 */
	public function setEstimatedFlightDuration(Property\EstimatedFlightDuration $estimatedFlightDuration) {
		$this->estimatedFlightDuration = $estimatedFlightDuration;

		return $this;
	}

	/**
	 * Set flight distance.
	 * 
	 * @param Property\FlightDistance $flightDistance
	 * @return Flight
	 */
	public function setFlightDistance(Property\FlightDistance $flightDistance) {
		$this->flightDistance = $flightDistance;

		return $this;
	}

	/**
	 * Set flight number.
	 * 
	 * @param Property\FlightNumber $flightNumber
	 * @return Flight
	 */
	public function setFlightNumber(Property\FlightNumber $flightNumber) {
		$this->flightNumber = $flightNumber;

		return $this;
	}

	/**
	 * Set meal service.
	 * 
	 * @param Property\MealService $mealService
	 * @return Flight
	 */
	public function setMealService(Property\MealService $mealService) {
		$this->mealService = $mealService;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return Flight
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set seller.
	 * 
	 * @param Property\Seller $seller
	 * @return Flight
	 */
	public function setSeller(Property\Seller $seller) {
		$this->seller = $seller;

		return $this;
	}

	/**
	 * Set web checkin time.
	 * 
	 * @param Property\WebCheckinTime $webCheckinTime
	 * @return Flight
	 */
	public function setWebCheckinTime(Property\WebCheckinTime $webCheckinTime) {
		$this->webCheckinTime = $webCheckinTime;

		return $this;
	}
}