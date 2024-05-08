<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trip on a commercial bus line.
 * 
 * @method BusTripType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusTripType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusTripType setArrivalTime(Property\ArrivalTimeProperty $arrivalTime)
 * @method BusTripType setDepartureTime(Property\DepartureTimeProperty $departureTime)
 * @method BusTripType setDescription(Property\DescriptionProperty $description)
 * @method BusTripType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusTripType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusTripType setImage(Property\ImageProperty $image)
 * @method BusTripType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusTripType setName(Property\NameProperty $name)
 * @method BusTripType setOffers(Property\OffersProperty $offers)
 * @method BusTripType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusTripType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusTripType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BusTripType setTripOrigin(Property\TripOriginProperty $tripOrigin)
 * @method BusTripType setUrl(Property\UrlProperty $url)
 */
class BusTripType extends TripType {

	/**
	 * @var Property\ArrivalBusStopProperty
	 */
	private $arrivalBusStop;

	/**
	 * @var Property\BusNameProperty
	 */
	private $busName;

	/**
	 * @var Property\BusNumberProperty
	 */
	private $busNumber;

	/**
	 * @var Property\DepartureBusStopProperty
	 */
	private $departureBusStop;

	/**
	 * Get arrival bus stop.
	 *
	 * @return Property\ArrivalBusStopProperty
	 */
	public function getArrivalBusStop() {
		return $this->arrivalBusStop;
	}

	/**
	 * Get bus name.
	 *
	 * @return Property\BusNameProperty
	 */
	public function getBusName() {
		return $this->busName;
	}

	/**
	 * Get bus number.
	 *
	 * @return Property\BusNumberProperty
	 */
	public function getBusNumber() {
		return $this->busNumber;
	}

	/**
	 * Get departure bus stop.
	 *
	 * @return Property\DepartureBusStopProperty
	 */
	public function getDepartureBusStop() {
		return $this->departureBusStop;
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
	 * @param Property\ArrivalBusStopProperty $arrivalBusStop
	 * @return BusTripType
	 */
	public function setArrivalBusStop(Property\ArrivalBusStopProperty $arrivalBusStop) {
		$this->arrivalBusStop = $arrivalBusStop;

		return $this;
	}

	/**
	 * Set bus name.
	 *
	 * @param Property\BusNameProperty $busName
	 * @return BusTripType
	 */
	public function setBusName(Property\BusNameProperty $busName) {
		$this->busName = $busName;

		return $this;
	}

	/**
	 * Set bus number.
	 *
	 * @param Property\BusNumberProperty $busNumber
	 * @return BusTripType
	 */
	public function setBusNumber(Property\BusNumberProperty $busNumber) {
		$this->busNumber = $busNumber;

		return $this;
	}

	/**
	 * Set departure bus stop.
	 *
	 * @param Property\DepartureBusStopProperty $departureBusStop
	 * @return BusTripType
	 */
	public function setDepartureBusStop(Property\DepartureBusStopProperty $departureBusStop) {
		$this->departureBusStop = $departureBusStop;

		return $this;
	}
}