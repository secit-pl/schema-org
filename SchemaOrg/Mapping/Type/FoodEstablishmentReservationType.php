<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A reservation to dine at a food-related business. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * 
 * @method FoodEstablishmentReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FoodEstablishmentReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FoodEstablishmentReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method FoodEstablishmentReservationType setBroker(Property\BrokerProperty $broker)
 * @method FoodEstablishmentReservationType setDescription(Property\DescriptionProperty $description)
 * @method FoodEstablishmentReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FoodEstablishmentReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FoodEstablishmentReservationType setImage(Property\ImageProperty $image)
 * @method FoodEstablishmentReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FoodEstablishmentReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method FoodEstablishmentReservationType setName(Property\NameProperty $name)
 * @method FoodEstablishmentReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FoodEstablishmentReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method FoodEstablishmentReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method FoodEstablishmentReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method FoodEstablishmentReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method FoodEstablishmentReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method FoodEstablishmentReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method FoodEstablishmentReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method FoodEstablishmentReservationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FoodEstablishmentReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method FoodEstablishmentReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method FoodEstablishmentReservationType setUrl(Property\UrlProperty $url)
 */
class FoodEstablishmentReservationType extends ReservationType {

	/**
	 * @var Property\EndTimeProperty
	 */
	private $endTime;

	/**
	 * @var Property\PartySizeProperty
	 */
	private $partySize;

	/**
	 * @var Property\StartTimeProperty
	 */
	private $startTime;

	/**
	 * Get end time.
	 *
	 * @return Property\EndTimeProperty
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Get party size.
	 *
	 * @return Property\PartySizeProperty
	 */
	public function getPartySize() {
		return $this->partySize;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishmentReservation';
	}

	/**
	 * Get start time.
	 *
	 * @return Property\StartTimeProperty
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Set end time.
	 *
	 * @param Property\EndTimeProperty $endTime
	 * @return FoodEstablishmentReservationType
	 */
	public function setEndTime(Property\EndTimeProperty $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set party size.
	 *
	 * @param Property\PartySizeProperty $partySize
	 * @return FoodEstablishmentReservationType
	 */
	public function setPartySize(Property\PartySizeProperty $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set start time.
	 *
	 * @param Property\StartTimeProperty $startTime
	 * @return FoodEstablishmentReservationType
	 */
	public function setStartTime(Property\StartTimeProperty $startTime) {
		$this->startTime = $startTime;

		return $this;
	}
}