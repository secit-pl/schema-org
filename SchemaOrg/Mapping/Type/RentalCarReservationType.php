<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentalCarReservationType.
 * 
 * @method RentalCarReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RentalCarReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RentalCarReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method RentalCarReservationType setBroker(Property\BrokerProperty $broker)
 * @method RentalCarReservationType setDescription(Property\DescriptionProperty $description)
 * @method RentalCarReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RentalCarReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RentalCarReservationType setImage(Property\ImageProperty $image)
 * @method RentalCarReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RentalCarReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method RentalCarReservationType setName(Property\NameProperty $name)
 * @method RentalCarReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RentalCarReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method RentalCarReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method RentalCarReservationType setProvider(Property\ProviderProperty $provider)
 * @method RentalCarReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method RentalCarReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method RentalCarReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method RentalCarReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method RentalCarReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method RentalCarReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method RentalCarReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method RentalCarReservationType setUrl(Property\UrlProperty $url)
 */
class RentalCarReservationType extends ReservationType {

	/**
	 * @var Property\DropoffLocationProperty
	 */
	private $dropoffLocation;

	/**
	 * @var Property\DropoffTimeProperty
	 */
	private $dropoffTime;

	/**
	 * @var Property\PickupLocationProperty
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTimeProperty
	 */
	private $pickupTime;

	/**
	 * Get dropoff location.
	 * 
	 * @return Property\DropoffLocationProperty
	 */
	public function getDropoffLocation() {
		return $this->dropoffLocation;
	}

	/**
	 * Get dropoff time.
	 * 
	 * @return Property\DropoffTimeProperty
	 */
	public function getDropoffTime() {
		return $this->dropoffTime;
	}

	/**
	 * Get pickup location.
	 * 
	 * @return Property\PickupLocationProperty
	 */
	public function getPickupLocation() {
		return $this->pickupLocation;
	}

	/**
	 * Get pickup time.
	 * 
	 * @return Property\PickupTimeProperty
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
	 * @param Property\DropoffLocationProperty $dropoffLocation
	 * @return RentalCarReservationType
	 */
	public function setDropoffLocation(Property\DropoffLocationProperty $dropoffLocation) {
		$this->dropoffLocation = $dropoffLocation;

		return $this;
	}

	/**
	 * Set dropoff time.
	 * 
	 * @param Property\DropoffTimeProperty $dropoffTime
	 * @return RentalCarReservationType
	 */
	public function setDropoffTime(Property\DropoffTimeProperty $dropoffTime) {
		$this->dropoffTime = $dropoffTime;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocationProperty $pickupLocation
	 * @return RentalCarReservationType
	 */
	public function setPickupLocation(Property\PickupLocationProperty $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTimeProperty $pickupTime
	 * @return RentalCarReservationType
	 */
	public function setPickupTime(Property\PickupTimeProperty $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}