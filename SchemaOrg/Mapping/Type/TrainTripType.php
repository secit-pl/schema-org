<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trip on a commercial train line.
 * 
 * @method TrainTripType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TrainTripType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TrainTripType setArrivalTime(Property\ArrivalTimeProperty $arrivalTime)
 * @method TrainTripType setDepartureTime(Property\DepartureTimeProperty $departureTime)
 * @method TrainTripType setDescription(Property\DescriptionProperty $description)
 * @method TrainTripType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TrainTripType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TrainTripType setImage(Property\ImageProperty $image)
 * @method TrainTripType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TrainTripType setName(Property\NameProperty $name)
 * @method TrainTripType setOffers(Property\OffersProperty $offers)
 * @method TrainTripType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TrainTripType setSameAs(Property\SameAsProperty $sameAs)
 * @method TrainTripType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TrainTripType setTripOrigin(Property\TripOriginProperty $tripOrigin)
 * @method TrainTripType setUrl(Property\UrlProperty $url)
 */
class TrainTripType extends TripType {

	/**
	 * @var Property\ArrivalPlatformProperty
	 */
	private $arrivalPlatform;

	/**
	 * @var Property\ArrivalStationProperty
	 */
	private $arrivalStation;

	/**
	 * @var Property\DeparturePlatformProperty
	 */
	private $departurePlatform;

	/**
	 * @var Property\DepartureStationProperty
	 */
	private $departureStation;

	/**
	 * @var Property\TrainNameProperty
	 */
	private $trainName;

	/**
	 * @var Property\TrainNumberProperty
	 */
	private $trainNumber;

	/**
	 * Get arrival platform.
	 *
	 * @return Property\ArrivalPlatformProperty
	 */
	public function getArrivalPlatform() {
		return $this->arrivalPlatform;
	}

	/**
	 * Get arrival station.
	 *
	 * @return Property\ArrivalStationProperty
	 */
	public function getArrivalStation() {
		return $this->arrivalStation;
	}

	/**
	 * Get departure platform.
	 *
	 * @return Property\DeparturePlatformProperty
	 */
	public function getDeparturePlatform() {
		return $this->departurePlatform;
	}

	/**
	 * Get departure station.
	 *
	 * @return Property\DepartureStationProperty
	 */
	public function getDepartureStation() {
		return $this->departureStation;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrainTrip';
	}

	/**
	 * Get train name.
	 *
	 * @return Property\TrainNameProperty
	 */
	public function getTrainName() {
		return $this->trainName;
	}

	/**
	 * Get train number.
	 *
	 * @return Property\TrainNumberProperty
	 */
	public function getTrainNumber() {
		return $this->trainNumber;
	}

	/**
	 * Set arrival platform.
	 *
	 * @param Property\ArrivalPlatformProperty $arrivalPlatform
	 * @return TrainTripType
	 */
	public function setArrivalPlatform(Property\ArrivalPlatformProperty $arrivalPlatform) {
		$this->arrivalPlatform = $arrivalPlatform;

		return $this;
	}

	/**
	 * Set arrival station.
	 *
	 * @param Property\ArrivalStationProperty $arrivalStation
	 * @return TrainTripType
	 */
	public function setArrivalStation(Property\ArrivalStationProperty $arrivalStation) {
		$this->arrivalStation = $arrivalStation;

		return $this;
	}

	/**
	 * Set departure platform.
	 *
	 * @param Property\DeparturePlatformProperty $departurePlatform
	 * @return TrainTripType
	 */
	public function setDeparturePlatform(Property\DeparturePlatformProperty $departurePlatform) {
		$this->departurePlatform = $departurePlatform;

		return $this;
	}

	/**
	 * Set departure station.
	 *
	 * @param Property\DepartureStationProperty $departureStation
	 * @return TrainTripType
	 */
	public function setDepartureStation(Property\DepartureStationProperty $departureStation) {
		$this->departureStation = $departureStation;

		return $this;
	}

	/**
	 * Set train name.
	 *
	 * @param Property\TrainNameProperty $trainName
	 * @return TrainTripType
	 */
	public function setTrainName(Property\TrainNameProperty $trainName) {
		$this->trainName = $trainName;

		return $this;
	}

	/**
	 * Set train number.
	 *
	 * @param Property\TrainNumberProperty $trainNumber
	 * @return TrainTripType
	 */
	public function setTrainNumber(Property\TrainNumberProperty $trainNumber) {
		$this->trainNumber = $trainNumber;

		return $this;
	}
}