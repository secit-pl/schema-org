<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReservationPackage.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReservationPackageType instead.
 * 
 * @method ReservationPackage setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReservationPackage setAlternateName(Property\AlternateName $alternateName)
 * @method ReservationPackage setBookingTime(Property\BookingTime $bookingTime)
 * @method ReservationPackage setBroker(Property\Broker $broker)
 * @method ReservationPackage setDescription(Property\Description $description)
 * @method ReservationPackage setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReservationPackage setIdentifier(Property\Identifier $identifier)
 * @method ReservationPackage setImage(Property\Image $image)
 * @method ReservationPackage setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReservationPackage setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method ReservationPackage setName(Property\Name $name)
 * @method ReservationPackage setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReservationPackage setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method ReservationPackage setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method ReservationPackage setProvider(Property\Provider $provider)
 * @method ReservationPackage setReservationFor(Property\ReservationFor $reservationFor)
 * @method ReservationPackage setReservationId(Property\ReservationId $reservationId)
 * @method ReservationPackage setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method ReservationPackage setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method ReservationPackage setSameAs(Property\SameAs $sameAs)
 * @method ReservationPackage setTotalPrice(Property\TotalPrice $totalPrice)
 * @method ReservationPackage setUnderName(Property\UnderName $underName)
 * @method ReservationPackage setUrl(Property\Url $url)
 */
class ReservationPackage extends Reservation {

	/**
	 * @var Property\SubReservation
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
	 * @return Property\SubReservation
	 */
	public function getSubReservation() {
		return $this->subReservation;
	}

	/**
	 * Set sub reservation.
	 * 
	 * @param Property\SubReservation $subReservation
	 * @return ReservationPackage
	 */
	public function setSubReservation(Property\SubReservation $subReservation) {
		$this->subReservation = $subReservation;

		return $this;
	}
}