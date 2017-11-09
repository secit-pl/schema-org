<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LodgingReservation.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LodgingReservationType instead.
 * 
 * @method LodgingReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method LodgingReservation setAlternateName(Property\AlternateName $alternateName)
 * @method LodgingReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method LodgingReservation setBroker(Property\Broker $broker)
 * @method LodgingReservation setDescription(Property\Description $description)
 * @method LodgingReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LodgingReservation setIdentifier(Property\Identifier $identifier)
 * @method LodgingReservation setImage(Property\Image $image)
 * @method LodgingReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LodgingReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method LodgingReservation setName(Property\Name $name)
 * @method LodgingReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LodgingReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method LodgingReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method LodgingReservation setProvider(Property\Provider $provider)
 * @method LodgingReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method LodgingReservation setReservationId(Property\ReservationId $reservationId)
 * @method LodgingReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method LodgingReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method LodgingReservation setSameAs(Property\SameAs $sameAs)
 * @method LodgingReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method LodgingReservation setUnderName(Property\UnderName $underName)
 * @method LodgingReservation setUrl(Property\Url $url)
 */
class LodgingReservation extends Reservation {

	/**
	 * @var Property\CheckinTime
	 */
	private $checkinTime;

	/**
	 * @var Property\CheckoutTime
	 */
	private $checkoutTime;

	/**
	 * @var Property\LodgingUnitDescription
	 */
	private $lodgingUnitDescription;

	/**
	 * @var Property\LodgingUnitType
	 */
	private $lodgingUnitType;

	/**
	 * @var Property\NumAdults
	 */
	private $numAdults;

	/**
	 * @var Property\NumChildren
	 */
	private $numChildren;

	/**
	 * Get checkin time.
	 * 
	 * @return Property\CheckinTime
	 */
	public function getCheckinTime() {
		return $this->checkinTime;
	}

	/**
	 * Get checkout time.
	 * 
	 * @return Property\CheckoutTime
	 */
	public function getCheckoutTime() {
		return $this->checkoutTime;
	}

	/**
	 * Get lodging unit description.
	 * 
	 * @return Property\LodgingUnitDescription
	 */
	public function getLodgingUnitDescription() {
		return $this->lodgingUnitDescription;
	}

	/**
	 * Get lodging unit type.
	 * 
	 * @return Property\LodgingUnitType
	 */
	public function getLodgingUnitType() {
		return $this->lodgingUnitType;
	}

	/**
	 * Get num adults.
	 * 
	 * @return Property\NumAdults
	 */
	public function getNumAdults() {
		return $this->numAdults;
	}

	/**
	 * Get num children.
	 * 
	 * @return Property\NumChildren
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
	 * @param Property\CheckinTime $checkinTime
	 * @return LodgingReservation
	 */
	public function setCheckinTime(Property\CheckinTime $checkinTime) {
		$this->checkinTime = $checkinTime;

		return $this;
	}

	/**
	 * Set checkout time.
	 * 
	 * @param Property\CheckoutTime $checkoutTime
	 * @return LodgingReservation
	 */
	public function setCheckoutTime(Property\CheckoutTime $checkoutTime) {
		$this->checkoutTime = $checkoutTime;

		return $this;
	}

	/**
	 * Set lodging unit description.
	 * 
	 * @param Property\LodgingUnitDescription $lodgingUnitDescription
	 * @return LodgingReservation
	 */
	public function setLodgingUnitDescription(Property\LodgingUnitDescription $lodgingUnitDescription) {
		$this->lodgingUnitDescription = $lodgingUnitDescription;

		return $this;
	}

	/**
	 * Set lodging unit type.
	 * 
	 * @param Property\LodgingUnitType $lodgingUnitType
	 * @return LodgingReservation
	 */
	public function setLodgingUnitType(Property\LodgingUnitType $lodgingUnitType) {
		$this->lodgingUnitType = $lodgingUnitType;

		return $this;
	}

	/**
	 * Set num adults.
	 * 
	 * @param Property\NumAdults $numAdults
	 * @return LodgingReservation
	 */
	public function setNumAdults(Property\NumAdults $numAdults) {
		$this->numAdults = $numAdults;

		return $this;
	}

	/**
	 * Set num children.
	 * 
	 * @param Property\NumChildren $numChildren
	 * @return LodgingReservation
	 */
	public function setNumChildren(Property\NumChildren $numChildren) {
		$this->numChildren = $numChildren;

		return $this;
	}
}