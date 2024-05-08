<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A reservation for an event like a concert, sporting event, or lecture. Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use Offer.
 * 
 * @method EventReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EventReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EventReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method EventReservationType setBroker(Property\BrokerProperty $broker)
 * @method EventReservationType setDescription(Property\DescriptionProperty $description)
 * @method EventReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EventReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EventReservationType setImage(Property\ImageProperty $image)
 * @method EventReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EventReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method EventReservationType setName(Property\NameProperty $name)
 * @method EventReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EventReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method EventReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method EventReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method EventReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method EventReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method EventReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method EventReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EventReservationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EventReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method EventReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method EventReservationType setUrl(Property\UrlProperty $url)
 */
class EventReservationType extends ReservationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventReservation';
	}
}