<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventReservation.
 * 
 * @method EventReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method EventReservation setBroker(Property\Broker $broker)
 * @method EventReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method EventReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method EventReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method EventReservation setProvider(Property\Provider $provider)
 * @method EventReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method EventReservation setReservationId(Property\ReservationId $reservationId)
 * @method EventReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method EventReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method EventReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method EventReservation setUnderName(Property\UnderName $underName)
 */
class EventReservation extends Reservation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventReservation';
	}
}