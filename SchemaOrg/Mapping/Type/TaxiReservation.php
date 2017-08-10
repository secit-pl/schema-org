<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiReservation.
 * 
 * @method TaxiReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method TaxiReservation setBroker(Property\Broker $broker)
 * @method TaxiReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method TaxiReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method TaxiReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method TaxiReservation setProvider(Property\Provider $provider)
 * @method TaxiReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method TaxiReservation setReservationId(Property\ReservationId $reservationId)
 * @method TaxiReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method TaxiReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method TaxiReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method TaxiReservation setUnderName(Property\UnderName $underName)
 */
class TaxiReservation extends Reservation {

	/**
	 * @var Property\PartySize
	 */
	private $partySize;

	/**
	 * @var Property\PickupLocation
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTime
	 */
	private $pickupTime;

	/**
	 * Get party size.
	 * 
	 * @return Property\PartySize
	 */
	public function getPartySize() {
		return $this->partySize;
	}

	/**
	 * Get pickup location.
	 * 
	 * @return Property\PickupLocation
	 */
	public function getPickupLocation() {
		return $this->pickupLocation;
	}

	/**
	 * Get pickup time.
	 * 
	 * @return Property\PickupTime
	 */
	public function getPickupTime() {
		return $this->pickupTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiReservation';
	}

	/**
	 * Set party size.
	 * 
	 * @param Property\PartySize $partySize
	 * @return TaxiReservation
	 */
	public function setPartySize(Property\PartySize $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocation $pickupLocation
	 * @return TaxiReservation
	 */
	public function setPickupLocation(Property\PickupLocation $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTime $pickupTime
	 * @return TaxiReservation
	 */
	public function setPickupTime(Property\PickupTime $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}