<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A reservation for lodging at a hotel, motel, inn, etc. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.
 * 
 * @method LodgingReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LodgingReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LodgingReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method LodgingReservationType setBroker(Property\BrokerProperty $broker)
 * @method LodgingReservationType setDescription(Property\DescriptionProperty $description)
 * @method LodgingReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LodgingReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LodgingReservationType setImage(Property\ImageProperty $image)
 * @method LodgingReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LodgingReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method LodgingReservationType setName(Property\NameProperty $name)
 * @method LodgingReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LodgingReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method LodgingReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method LodgingReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method LodgingReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method LodgingReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method LodgingReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method LodgingReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method LodgingReservationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LodgingReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method LodgingReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method LodgingReservationType setUrl(Property\UrlProperty $url)
 */
class LodgingReservationType extends ReservationType {

	/**
	 * @var Property\CheckinTimeProperty
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTimeProperty
	 */
	private $checkoutTime;

	/**
	 * @var Property\LodgingUnitDescriptionProperty
	 */
	private $lodgingUnitDescription;

	/**
	 * @var Property\LodgingUnitTypeProperty
	 */
	private $lodgingUnitType;

	/**
	 * @var Property\NumAdultsProperty
	 */
	private $numAdults;

	/**
	 * @var Property\NumChildrenProperty
	 */
	private $numChildren;

	/**
	 * Get checkin time.
	 *
	 * @return Property\CheckinTimeProperty
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 *
	 * @return Property\CheckoutTimeProperty
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
	}

	/**
	 * Get lodging unit description.
	 *
	 * @return Property\LodgingUnitDescriptionProperty
	 */
	public function getLodgingUnitDescription() {
		return $this->lodgingUnitDescription;
	}

	/**
	 * Get lodging unit type.
	 *
	 * @return Property\LodgingUnitTypeProperty
	 */
	public function getLodgingUnitType() {
		return $this->lodgingUnitType;
	}

	/**
	 * Get num adults.
	 *
	 * @return Property\NumAdultsProperty
	 */
	public function getNumAdults() {
		return $this->numAdults;
	}

	/**
	 * Get num children.
	 *
	 * @return Property\NumChildrenProperty
	 */
	public function getNumChildren() {
		return $this->numChildren;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LodgingReservation';
	}

	/**
	 * Set checkin time.
	 *
	 * @param Property\CheckinTimeProperty $checkinTime
	 * @return LodgingReservationType
	 */
	public function setCheckinTime(Property\CheckinTimeProperty $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 *
	 * @param Property\CheckoutTimeProperty $checkoutTime
	 * @return LodgingReservationType
	 */
	public function setCheckoutTime(Property\CheckoutTimeProperty $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set lodging unit description.
	 *
	 * @param Property\LodgingUnitDescriptionProperty $lodgingUnitDescription
	 * @return LodgingReservationType
	 */
	public function setLodgingUnitDescription(Property\LodgingUnitDescriptionProperty $lodgingUnitDescription) {
		$this->lodgingUnitDescription = $lodgingUnitDescription;

		return $this;
	}

	/**
	 * Set lodging unit type.
	 *
	 * @param Property\LodgingUnitTypeProperty $lodgingUnitType
	 * @return LodgingReservationType
	 */
	public function setLodgingUnitType(Property\LodgingUnitTypeProperty $lodgingUnitType) {
		$this->lodgingUnitType = $lodgingUnitType;

		return $this;
	}

	/**
	 * Set num adults.
	 *
	 * @param Property\NumAdultsProperty $numAdults
	 * @return LodgingReservationType
	 */
	public function setNumAdults(Property\NumAdultsProperty $numAdults) {
		$this->numAdults = $numAdults;

		return $this;
	}

	/**
	 * Set num children.
	 *
	 * @param Property\NumChildrenProperty $numChildren
	 * @return LodgingReservationType
	 */
	public function setNumChildren(Property\NumChildrenProperty $numChildren) {
		$this->numChildren = $numChildren;

		return $this;
	}
}