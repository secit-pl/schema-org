<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 * 
 * @method ReservationPackageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReservationPackageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReservationPackageType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method ReservationPackageType setBroker(Property\BrokerProperty $broker)
 * @method ReservationPackageType setDescription(Property\DescriptionProperty $description)
 * @method ReservationPackageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReservationPackageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReservationPackageType setImage(Property\ImageProperty $image)
 * @method ReservationPackageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReservationPackageType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method ReservationPackageType setName(Property\NameProperty $name)
 * @method ReservationPackageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReservationPackageType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method ReservationPackageType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method ReservationPackageType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method ReservationPackageType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method ReservationPackageType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method ReservationPackageType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method ReservationPackageType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReservationPackageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReservationPackageType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method ReservationPackageType setUnderName(Property\UnderNameProperty $underName)
 * @method ReservationPackageType setUrl(Property\UrlProperty $url)
 */
class ReservationPackageType extends ReservationType {

	/**
	 * @var Property\SubReservationProperty
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
	 * @return Property\SubReservationProperty
	 */
	public function getSubReservation() {
		return $this->subReservation;
	}

	/**
	 * Set sub reservation.
	 *
	 * @param Property\SubReservationProperty $subReservation
	 * @return ReservationPackageType
	 */
	public function setSubReservation(Property\SubReservationProperty $subReservation) {
		$this->subReservation = $subReservation;

		return $this;
	}
}