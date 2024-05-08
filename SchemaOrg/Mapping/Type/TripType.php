<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A trip or journey. An itinerary of visits to one or more places.
 * 
 * @method TripType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TripType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TripType setDescription(Property\DescriptionProperty $description)
 * @method TripType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TripType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TripType setImage(Property\ImageProperty $image)
 * @method TripType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TripType setName(Property\NameProperty $name)
 * @method TripType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TripType setSameAs(Property\SameAsProperty $sameAs)
 * @method TripType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TripType setUrl(Property\UrlProperty $url)
 */
class TripType extends IntangibleType {

	/**
	 * @var Property\ArrivalTimeProperty
	 */
	private $arrivalTime;

	/**
	 * @var Property\DepartureTimeProperty
	 */
	private $departureTime;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\TripOriginProperty
	 */
	private $tripOrigin;

	/**
	 * Get arrival time.
	 *
	 * @return Property\ArrivalTimeProperty
	 */
	public function getArrivalTime() {
		return $this->arrivalTime;
	}

	/**
	 * Get departure time.
	 *
	 * @return Property\DepartureTimeProperty
	 */
	public function getDepartureTime() {
		return $this->departureTime;
	}

	/**
	 * Get offers.
	 *
	 * @return Property\OffersProperty
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Trip';
	}

	/**
	 * Get trip origin.
	 *
	 * @return Property\TripOriginProperty
	 */
	public function getTripOrigin() {
		return $this->tripOrigin;
	}

	/**
	 * Set arrival time.
	 *
	 * @param Property\ArrivalTimeProperty $arrivalTime
	 * @return TripType
	 */
	public function setArrivalTime(Property\ArrivalTimeProperty $arrivalTime) {
		$this->arrivalTime = $arrivalTime;

		return $this;
	}

	/**
	 * Set departure time.
	 *
	 * @param Property\DepartureTimeProperty $departureTime
	 * @return TripType
	 */
	public function setDepartureTime(Property\DepartureTimeProperty $departureTime) {
		$this->departureTime = $departureTime;

		return $this;
	}

	/**
	 * Set offers.
	 *
	 * @param Property\OffersProperty $offers
	 * @return TripType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set trip origin.
	 *
	 * @param Property\TripOriginProperty $tripOrigin
	 * @return TripType
	 */
	public function setTripOrigin(Property\TripOriginProperty $tripOrigin) {
		$this->tripOrigin = $tripOrigin;

		return $this;
	}
}