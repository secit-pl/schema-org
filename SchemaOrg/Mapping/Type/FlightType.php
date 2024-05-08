<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An airline flight.
 * 
 * @method FlightType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FlightType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FlightType setArrivalTime(Property\ArrivalTimeProperty $arrivalTime)
 * @method FlightType setDepartureTime(Property\DepartureTimeProperty $departureTime)
 * @method FlightType setDescription(Property\DescriptionProperty $description)
 * @method FlightType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FlightType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FlightType setImage(Property\ImageProperty $image)
 * @method FlightType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FlightType setName(Property\NameProperty $name)
 * @method FlightType setOffers(Property\OffersProperty $offers)
 * @method FlightType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FlightType setSameAs(Property\SameAsProperty $sameAs)
 * @method FlightType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FlightType setTripOrigin(Property\TripOriginProperty $tripOrigin)
 * @method FlightType setUrl(Property\UrlProperty $url)
 */
class FlightType extends TripType {

	/**
	 * @var Property\AircraftProperty
	 */
	private $aircraft;

	/**
	 * @var Property\ArrivalAirportProperty
	 */
	private $arrivalAirport;

	/**
	 * @var Property\ArrivalGateProperty
	 */
	private $arrivalGate;

	/**
	 * @var Property\ArrivalTerminalProperty
	 */
	private $arrivalTerminal;

	/**
	 * @var Property\BoardingPolicyProperty
	 */
	private $boardingPolicy;

	/**
	 * @var Property\DepartureAirportProperty
	 */
	private $departureAirport;

	/**
	 * @var Property\DepartureGateProperty
	 */
	private $departureGate;

	/**
	 * @var Property\DepartureTerminalProperty
	 */
	private $departureTerminal;

	/**
	 * @var Property\EstimatedFlightDurationProperty
	 */
	private $estimatedFlightDuration;

	/**
	 * @var Property\FlightDistanceProperty
	 */
	private $flightDistance;

	/**
	 * @var Property\FlightNumberProperty
	 */
	private $flightNumber;

	/**
	 * @var Property\MealServiceProperty
	 */
	private $mealService;

	/**
	 * @var Property\SellerProperty
	 */
	private $seller;

	/**
	 * @var Property\WebCheckinTimeProperty
	 */
	private $webCheckinTime;

	/**
	 * Get aircraft.
	 *
	 * @return Property\AircraftProperty
	 */
	public function getAircraft() {
		return $this->aircraft;
	}

	/**
	 * Get arrival airport.
	 *
	 * @return Property\ArrivalAirportProperty
	 */
	public function getArrivalAirport() {
		return $this->arrivalAirport;
	}

	/**
	 * Get arrival gate.
	 *
	 * @return Property\ArrivalGateProperty
	 */
	public function getArrivalGate() {
		return $this->arrivalGate;
	}

	/**
	 * Get arrival terminal.
	 *
	 * @return Property\ArrivalTerminalProperty
	 */
	public function getArrivalTerminal() {
		return $this->arrivalTerminal;
	}

	/**
	 * Get boarding policy.
	 *
	 * @return Property\BoardingPolicyProperty
	 */
	public function getBoardingPolicy() {
		return $this->boardingPolicy;
	}

	/**
	 * Get departure airport.
	 *
	 * @return Property\DepartureAirportProperty
	 */
	public function getDepartureAirport() {
		return $this->departureAirport;
	}

	/**
	 * Get departure gate.
	 *
	 * @return Property\DepartureGateProperty
	 */
	public function getDepartureGate() {
		return $this->departureGate;
	}

	/**
	 * Get departure terminal.
	 *
	 * @return Property\DepartureTerminalProperty
	 */
	public function getDepartureTerminal() {
		return $this->departureTerminal;
	}

	/**
	 * Get estimated flight duration.
	 *
	 * @return Property\EstimatedFlightDurationProperty
	 */
	public function getEstimatedFlightDuration() {
		return $this->estimatedFlightDuration;
	}

	/**
	 * Get flight distance.
	 *
	 * @return Property\FlightDistanceProperty
	 */
	public function getFlightDistance() {
		return $this->flightDistance;
	}

	/**
	 * Get flight number.
	 *
	 * @return Property\FlightNumberProperty
	 */
	public function getFlightNumber() {
		return $this->flightNumber;
	}

	/**
	 * Get meal service.
	 *
	 * @return Property\MealServiceProperty
	 */
	public function getMealService() {
		return $this->mealService;
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
	 * @return Property\SellerProperty
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Get web checkin time.
	 *
	 * @return Property\WebCheckinTimeProperty
	 */
	public function getWebCheckinTime() {
		return $this->webCheckinTime;
	}

	/**
	 * Set aircraft.
	 *
	 * @param Property\AircraftProperty $aircraft
	 * @return FlightType
	 */
	public function setAircraft(Property\AircraftProperty $aircraft) {
		$this->aircraft = $aircraft;

		return $this;
	}

	/**
	 * Set arrival airport.
	 *
	 * @param Property\ArrivalAirportProperty $arrivalAirport
	 * @return FlightType
	 */
	public function setArrivalAirport(Property\ArrivalAirportProperty $arrivalAirport) {
		$this->arrivalAirport = $arrivalAirport;

		return $this;
	}

	/**
	 * Set arrival gate.
	 *
	 * @param Property\ArrivalGateProperty $arrivalGate
	 * @return FlightType
	 */
	public function setArrivalGate(Property\ArrivalGateProperty $arrivalGate) {
		$this->arrivalGate = $arrivalGate;

		return $this;
	}

	/**
	 * Set arrival terminal.
	 *
	 * @param Property\ArrivalTerminalProperty $arrivalTerminal
	 * @return FlightType
	 */
	public function setArrivalTerminal(Property\ArrivalTerminalProperty $arrivalTerminal) {
		$this->arrivalTerminal = $arrivalTerminal;

		return $this;
	}

	/**
	 * Set boarding policy.
	 *
	 * @param Property\BoardingPolicyProperty $boardingPolicy
	 * @return FlightType
	 */
	public function setBoardingPolicy(Property\BoardingPolicyProperty $boardingPolicy) {
		$this->boardingPolicy = $boardingPolicy;

		return $this;
	}

	/**
	 * Set departure airport.
	 *
	 * @param Property\DepartureAirportProperty $departureAirport
	 * @return FlightType
	 */
	public function setDepartureAirport(Property\DepartureAirportProperty $departureAirport) {
		$this->departureAirport = $departureAirport;

		return $this;
	}

	/**
	 * Set departure gate.
	 *
	 * @param Property\DepartureGateProperty $departureGate
	 * @return FlightType
	 */
	public function setDepartureGate(Property\DepartureGateProperty $departureGate) {
		$this->departureGate = $departureGate;

		return $this;
	}

	/**
	 * Set departure terminal.
	 *
	 * @param Property\DepartureTerminalProperty $departureTerminal
	 * @return FlightType
	 */
	public function setDepartureTerminal(Property\DepartureTerminalProperty $departureTerminal) {
		$this->departureTerminal = $departureTerminal;

		return $this;
	}

	/**
	 * Set estimated flight duration.
	 *
	 * @param Property\EstimatedFlightDurationProperty $estimatedFlightDuration
	 * @return FlightType
	 */
	public function setEstimatedFlightDuration(Property\EstimatedFlightDurationProperty $estimatedFlightDuration) {
		$this->estimatedFlightDuration = $estimatedFlightDuration;

		return $this;
	}

	/**
	 * Set flight distance.
	 *
	 * @param Property\FlightDistanceProperty $flightDistance
	 * @return FlightType
	 */
	public function setFlightDistance(Property\FlightDistanceProperty $flightDistance) {
		$this->flightDistance = $flightDistance;

		return $this;
	}

	/**
	 * Set flight number.
	 *
	 * @param Property\FlightNumberProperty $flightNumber
	 * @return FlightType
	 */
	public function setFlightNumber(Property\FlightNumberProperty $flightNumber) {
		$this->flightNumber = $flightNumber;

		return $this;
	}

	/**
	 * Set meal service.
	 *
	 * @param Property\MealServiceProperty $mealService
	 * @return FlightType
	 */
	public function setMealService(Property\MealServiceProperty $mealService) {
		$this->mealService = $mealService;

		return $this;
	}

	/**
	 * Set seller.
	 *
	 * @param Property\SellerProperty $seller
	 * @return FlightType
	 */
	public function setSeller(Property\SellerProperty $seller) {
		$this->seller = $seller;

		return $this;
	}

	/**
	 * Set web checkin time.
	 *
	 * @param Property\WebCheckinTimeProperty $webCheckinTime
	 * @return FlightType
	 */
	public function setWebCheckinTime(Property\WebCheckinTimeProperty $webCheckinTime) {
		$this->webCheckinTime = $webCheckinTime;

		return $this;
	}
}