<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusReservation.
 * 
 * @method BusReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method BusReservation setAlternateName(Property\AlternateName $alternateName)
 * @method BusReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method BusReservation setBroker(Property\Broker $broker)
 * @method BusReservation setDescription(Property\Description $description)
 * @method BusReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BusReservation setIdentifier(Property\Identifier $identifier)
 * @method BusReservation setImage(Property\Image $image)
 * @method BusReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BusReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method BusReservation setName(Property\Name $name)
 * @method BusReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BusReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method BusReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method BusReservation setProvider(Property\Provider $provider)
 * @method BusReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method BusReservation setReservationId(Property\ReservationId $reservationId)
 * @method BusReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method BusReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method BusReservation setSameAs(Property\SameAs $sameAs)
 * @method BusReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method BusReservation setUnderName(Property\UnderName $underName)
 * @method BusReservation setUrl(Property\Url $url)
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