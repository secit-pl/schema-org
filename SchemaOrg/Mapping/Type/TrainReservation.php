<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrainReservation.
 * 
 * @method TrainReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method TrainReservation setBroker(Property\Broker $broker)
 * @method TrainReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method TrainReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method TrainReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method TrainReservation setProvider(Property\Provider $provider)
 * @method TrainReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method TrainReservation setReservationId(Property\ReservationId $reservationId)
 * @method TrainReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method TrainReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method TrainReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method TrainReservation setUnderName(Property\UnderName $underName)
 */
class TrainReservation extends Reservation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrainReservation';
	}
}