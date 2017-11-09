<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrainReservation.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TrainReservationType instead.
 * 
 * @method TrainReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method TrainReservation setAlternateName(Property\AlternateName $alternateName)
 * @method TrainReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method TrainReservation setBroker(Property\Broker $broker)
 * @method TrainReservation setDescription(Property\Description $description)
 * @method TrainReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TrainReservation setIdentifier(Property\Identifier $identifier)
 * @method TrainReservation setImage(Property\Image $image)
 * @method TrainReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TrainReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method TrainReservation setName(Property\Name $name)
 * @method TrainReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TrainReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method TrainReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method TrainReservation setProvider(Property\Provider $provider)
 * @method TrainReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method TrainReservation setReservationId(Property\ReservationId $reservationId)
 * @method TrainReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method TrainReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method TrainReservation setSameAs(Property\SameAs $sameAs)
 * @method TrainReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method TrainReservation setUnderName(Property\UnderName $underName)
 * @method TrainReservation setUrl(Property\Url $url)
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