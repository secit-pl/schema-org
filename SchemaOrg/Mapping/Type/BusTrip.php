<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusTrip.
 */
class BusTrip extends Intangible {

	/**
	 * @var Property\ArrivalBusStop
	 */
	private $arrivalBusStop;

	/**
	 * @var Property\ArrivalTime
	 */
	private $arrivalTime;

	/**
	 * @var Property\BusName
	 */
	private $busName;

	/**
	 * @var Property\BusNumber
	 */
	private $busNumber;

	/**
	 * @var Property\DepartureBusStop
	 */
	private $departureBusStop;

	/**
	 * @var Property\DepartureTime
	 */
	private $departureTime;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * Get arrival bus stop.
	 * 
	 * @return Property\ArrivalBusStop
	 */
	public function getArrivalBusStop() {
		return $this->arrivalBusStop;
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
	 * Get bus name.
	 * 
	 * @return Property\BusName
	 */
	public function getBusName() {
		return $this->busName;
	}

	/**
	 * Get bus number.
	 * 
	 * @return Property\BusNumber
	 */
	public function getBusNumber() {
		return $this->busNumber;
	}

	/**
	 * Get departure bus stop.
	 * 
	 * @return Property\DepartureBusStop
	 */
	public function getDepartureBusStop() {
		return $this->departureBusStop;
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
		return 'https://schema.org/BusTrip';
	}

	/**
	 * Set arrival bus stop.
	 * 
	 * @param Property\ArrivalBusStop $arrivalBusStop
	 * @return BusTrip
	 */
	public function setArrivalBusStop(Property\ArrivalBusStop $arrivalBusStop) {
		$this->arrivalBusStop = $arrivalBusStop;

		return $this;
	}

	/**
	 * Set arrival time.
	 * 
	 * @param Property\ArrivalTime $arrivalTime
	 * @return BusTrip
	 */
	public function setArrivalTime(Property\ArrivalTime $arrivalTime) {
		$this->arrivalTime = $arrivalTime;

		return $this;
	}

	/**
	 * Set bus name.
	 * 
	 * @param Property\BusName $busName
	 * @return BusTrip
	 */
	public function setBusName(Property\BusName $busName) {
		$this->busName = $busName;

		return $this;
	}

	/**
	 * Set bus number.
	 * 
	 * @param Property\BusNumber $busNumber
	 * @return BusTrip
	 */
	public function setBusNumber(Property\BusNumber $busNumber) {
		$this->busNumber = $busNumber;

		return $this;
	}

	/**
	 * Set departure bus stop.
	 * 
	 * @param Property\DepartureBusStop $departureBusStop
	 * @return BusTrip
	 */
	public function setDepartureBusStop(Property\DepartureBusStop $departureBusStop) {
		$this->departureBusStop = $departureBusStop;

		return $this;
	}

	/**
	 * Set departure time.
	 * 
	 * @param Property\DepartureTime $departureTime
	 * @return BusTrip
	 */
	public function setDepartureTime(Property\DepartureTime $departureTime) {
		$this->departureTime = $departureTime;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return BusTrip
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}
}