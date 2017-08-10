<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationPackage.
 * 
 * @method ReservationPackage setBookingTime(Property\BookingTime $bookingTime)
 * @method ReservationPackage setBroker(Property\Broker $broker)
 * @method ReservationPackage setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method ReservationPackage setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method ReservationPackage setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method ReservationPackage setProvider(Property\Provider $provider)
 * @method ReservationPackage setReservationFor(Property\ReservationFor $reservationFor)
 * @method ReservationPackage setReservationId(Property\ReservationId $reservationId)
 * @method ReservationPackage setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method ReservationPackage setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method ReservationPackage setTotalPrice(Property\TotalPrice $totalPrice)
 * @method ReservationPackage setUnderName(Property\UnderName $underName)
 */
class ReservationPackage extends Reservation {

	/**
	 * @var Property\SubReservation
	 */
	private $subReservation;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReservationPackage';
	}

	/**
	 * Get sub reservation.
	 * 
	 * @return Property\SubReservation
	 */
	public function getSubReservation() {
		return $this->subReservation;
	}

	/**
	 * Set sub reservation.
	 * 
	 * @param Property\SubReservation $subReservation
	 * @return ReservationPackage
	 */
	public function setSubReservation(Property\SubReservation $subReservation) {
		$this->subReservation = $subReservation;

		return $this;
	}
}