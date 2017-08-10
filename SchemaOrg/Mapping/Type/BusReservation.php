<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusReservation.
 * 
 * @method BusReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method BusReservation setBroker(Property\Broker $broker)
 * @method BusReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method BusReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method BusReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method BusReservation setProvider(Property\Provider $provider)
 * @method BusReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method BusReservation setReservationId(Property\ReservationId $reservationId)
 * @method BusReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method BusReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method BusReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method BusReservation setUnderName(Property\UnderName $underName)
 */
class BusReservation extends Reservation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusReservation';
	}
}