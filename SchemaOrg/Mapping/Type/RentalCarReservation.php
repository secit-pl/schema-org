<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentalCarReservation.
 * 
 * @method RentalCarReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method RentalCarReservation setAlternateName(Property\AlternateName $alternateName)
 * @method RentalCarReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method RentalCarReservation setBroker(Property\Broker $broker)
 * @method RentalCarReservation setDescription(Property\Description $description)
 * @method RentalCarReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RentalCarReservation setIdentifier(Property\Identifier $identifier)
 * @method RentalCarReservation setImage(Property\Image $image)
 * @method RentalCarReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RentalCarReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method RentalCarReservation setName(Property\Name $name)
 * @method RentalCarReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RentalCarReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method RentalCarReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method RentalCarReservation setProvider(Property\Provider $provider)
 * @method RentalCarReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method RentalCarReservation setReservationId(Property\ReservationId $reservationId)
 * @method RentalCarReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method RentalCarReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method RentalCarReservation setSameAs(Property\SameAs $sameAs)
 * @method RentalCarReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method RentalCarReservation setUnderName(Property\UnderName $underName)
 * @method RentalCarReservation setUrl(Property\Url $url)
 */
class RentalCarReservation extends Reservation {

	/**
	 * @var Property\DropoffLocation
	 */
	private $dropoffLocation;

	/**
	 * @var Property\DropoffTime
	 */
	private $dropoffTime;

	/**
	 * @var Property\PickupLocation
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTime
	 */
	private $pickupTime;

	/**
	 * Get dropoff location.
	 * 
	 * @return Property\DropoffLocation
	 */
	public function getDropoffLocation() {
		return $this->dropoffLocation;
	}

	/**
	 * Get dropoff time.
	 * 
	 * @return Property\DropoffTime
	 */
	public function getDropoffTime() {
		return $this->dropoffTime;
	}

	/**
	 * Get pickup location.
	 * 
	 * @return Property\PickupLocation
	 */
	public function getPickupLocation() {
		return $this->pickupLocation;
	}

	/**
	 * Get pickup time.
	 * 
	 * @return Property\PickupTime
	 */
	public function getPickupTime() {
		return $this->pickupTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RentalCarReservation';
	}

	/**
	 * Set dropoff location.
	 * 
	 * @param Property\DropoffLocation $dropoffLocation
	 * @return RentalCarReservation
	 */
	public function setDropoffLocation(Property\DropoffLocation $dropoffLocation) {
		$this->dropoffLocation = $dropoffLocation;

		return $this;
	}

	/**
	 * Set dropoff time.
	 * 
	 * @param Property\DropoffTime $dropoffTime
	 * @return RentalCarReservation
	 */
	public function setDropoffTime(Property\DropoffTime $dropoffTime) {
		$this->dropoffTime = $dropoffTime;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocation $pickupLocation
	 * @return RentalCarReservation
	 */
	public function setPickupLocation(Property\PickupLocation $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTime $pickupTime
	 * @return RentalCarReservation
	 */
	public function setPickupTime(Property\PickupTime $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}