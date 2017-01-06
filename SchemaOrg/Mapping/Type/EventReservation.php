<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventReservation.
 * 
 * @method EventReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventReservation setAlternateName(Property\AlternateName $alternateName)
 * @method EventReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method EventReservation setBroker(Property\Broker $broker)
 * @method EventReservation setDescription(Property\Description $description)
 * @method EventReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventReservation setImage(Property\Image $image)
 * @method EventReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method EventReservation setName(Property\Name $name)
 * @method EventReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method EventReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method EventReservation setProvider(Property\Provider $provider)
 * @method EventReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method EventReservation setReservationId(Property\ReservationId $reservationId)
 * @method EventReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method EventReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method EventReservation setSameAs(Property\SameAs $sameAs)
 * @method EventReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method EventReservation setUnderName(Property\UnderName $underName)
 * @method EventReservation setUrl(Property\Url $url)
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