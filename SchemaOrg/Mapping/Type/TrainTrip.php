<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrainTrip.
 * 
 * @method TrainTrip setAdditionalType(Property\AdditionalType $additionalType)
 * @method TrainTrip setAlternateName(Property\AlternateName $alternateName)
 * @method TrainTrip setDescription(Property\Description $description)
 * @method TrainTrip setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TrainTrip setIdentifier(Property\Identifier $identifier)
 * @method TrainTrip setImage(Property\Image $image)
 * @method TrainTrip setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TrainTrip setName(Property\Name $name)
 * @method TrainTrip setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TrainTrip setSameAs(Property\SameAs $sameAs)
 * @method TrainTrip setUrl(Property\Url $url)
 */
class TrainTrip extends Intangible {

	/**
	 * @var Property\ArrivalPlatform
	 */
	private $arrivalPlatform;

	/**
	 * @var Property\ArrivalStation
	 */
	private $arrivalStation;

	/**
	 * @var Property\ArrivalTime
	 */
	private $arrivalTime;

	/**
	 * @var Property\DeparturePlatform
	 */
	private $departurePlatform;

	/**
	 * @var Property\DepartureStation
	 */
	private $departureStation;

	/**
	 * @var Property\DepartureTime
	 */
	private $departureTime;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\TrainName
	 */
	private $trainName;

	/**
	 * @var Property\TrainNumber
	 */
	private $trainNumber;

	/**
	 * Get arrival platform.
	 * 
	 * @return Property\ArrivalPlatform
	 */
	public function getArrivalPlatform() {
		return $this->arrivalPlatform;
	}

	/**
	 * Get arrival station.
	 * 
	 * @return Property\ArrivalStation
	 */
	public function getArrivalStation() {
		return $this->arrivalStation;
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
	 * Get departure platform.
	 * 
	 * @return Property\DeparturePlatform
	 */
	public function getDeparturePlatform() {
		return $this->departurePlatform;
	}

	/**
	 * Get departure station.
	 * 
	 * @return Property\DepartureStation
	 */
	public function getDepartureStation() {
		return $this->departureStation;
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
		return 'https://schema.org/TrainTrip';
	}

	/**
	 * Get train name.
	 * 
	 * @return Property\TrainName
	 */
	public function getTrainName() {
		return $this->trainName;
	}

	/**
	 * Get train number.
	 * 
	 * @return Property\TrainNumber
	 */
	public function getTrainNumber() {
		return $this->trainNumber;
	}

	/**
	 * Set arrival platform.
	 * 
	 * @param Property\ArrivalPlatform $arrivalPlatform
	 * @return TrainTrip
	 */
	public function setArrivalPlatform(Property\ArrivalPlatform $arrivalPlatform) {
		$this->arrivalPlatform = $arrivalPlatform;

		return $this;
	}

	/**
	 * Set arrival station.
	 * 
	 * @param Property\ArrivalStation $arrivalStation
	 * @return TrainTrip
	 */
	public function setArrivalStation(Property\ArrivalStation $arrivalStation) {
		$this->arrivalStation = $arrivalStation;

		return $this;
	}

	/**
	 * Set arrival time.
	 * 
	 * @param Property\ArrivalTime $arrivalTime
	 * @return TrainTrip
	 */
	public function setArrivalTime(Property\ArrivalTime $arrivalTime) {
		$this->arrivalTime = $arrivalTime;

		return $this;
	}

	/**
	 * Set departure platform.
	 * 
	 * @param Property\DeparturePlatform $departurePlatform
	 * @return TrainTrip
	 */
	public function setDeparturePlatform(Property\DeparturePlatform $departurePlatform) {
		$this->departurePlatform = $departurePlatform;

		return $this;
	}

	/**
	 * Set departure station.
	 * 
	 * @param Property\DepartureStation $departureStation
	 * @return TrainTrip
	 */
	public function setDepartureStation(Property\DepartureStation $departureStation) {
		$this->departureStation = $departureStation;

		return $this;
	}

	/**
	 * Set departure time.
	 * 
	 * @param Property\DepartureTime $departureTime
	 * @return TrainTrip
	 */
	public function setDepartureTime(Property\DepartureTime $departureTime) {
		$this->departureTime = $departureTime;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return TrainTrip
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set train name.
	 * 
	 * @param Property\TrainName $trainName
	 * @return TrainTrip
	 */
	public function setTrainName(Property\TrainName $trainName) {
		$this->trainName = $trainName;

		return $this;
	}

	/**
	 * Set train number.
	 * 
	 * @param Property\TrainNumber $trainNumber
	 * @return TrainTrip
	 */
	public function setTrainNumber(Property\TrainNumber $trainNumber) {
		$this->trainNumber = $trainNumber;

		return $this;
	}
}