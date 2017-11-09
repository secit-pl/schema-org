<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrainReservationType.
 * 
 * @method TrainReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TrainReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TrainReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method TrainReservationType setBroker(Property\BrokerProperty $broker)
 * @method TrainReservationType setDescription(Property\DescriptionProperty $description)
 * @method TrainReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TrainReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TrainReservationType setImage(Property\ImageProperty $image)
 * @method TrainReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TrainReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method TrainReservationType setName(Property\NameProperty $name)
 * @method TrainReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TrainReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method TrainReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method TrainReservationType setProvider(Property\ProviderProperty $provider)
 * @method TrainReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method TrainReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method TrainReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method TrainReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method TrainReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TrainReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method TrainReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method TrainReservationType setUrl(Property\UrlProperty $url)
 */
class TrainReservationType extends ReservationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrainReservation';
	}
}