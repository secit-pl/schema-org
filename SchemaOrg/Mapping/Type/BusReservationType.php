<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BusReservationType.
 * 
 * @method BusReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BusReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BusReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method BusReservationType setBroker(Property\BrokerProperty $broker)
 * @method BusReservationType setDescription(Property\DescriptionProperty $description)
 * @method BusReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BusReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BusReservationType setImage(Property\ImageProperty $image)
 * @method BusReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BusReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method BusReservationType setName(Property\NameProperty $name)
 * @method BusReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BusReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method BusReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method BusReservationType setProvider(Property\ProviderProperty $provider)
 * @method BusReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method BusReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method BusReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method BusReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method BusReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method BusReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method BusReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method BusReservationType setUrl(Property\UrlProperty $url)
 */
class BusReservationType extends ReservationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BusReservation';
	}
}