<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiReservationType.
 * 
 * @method TaxiReservationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TaxiReservationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TaxiReservationType setBookingTime(Property\BookingTimeProperty $bookingTime)
 * @method TaxiReservationType setBroker(Property\BrokerProperty $broker)
 * @method TaxiReservationType setDescription(Property\DescriptionProperty $description)
 * @method TaxiReservationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TaxiReservationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TaxiReservationType setImage(Property\ImageProperty $image)
 * @method TaxiReservationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TaxiReservationType setModifiedTime(Property\ModifiedTimeProperty $modifiedTime)
 * @method TaxiReservationType setName(Property\NameProperty $name)
 * @method TaxiReservationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TaxiReservationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method TaxiReservationType setProgramMembershipUsed(Property\ProgramMembershipUsedProperty $programMembershipUsed)
 * @method TaxiReservationType setProvider(Property\ProviderProperty $provider)
 * @method TaxiReservationType setReservationFor(Property\ReservationForProperty $reservationFor)
 * @method TaxiReservationType setReservationId(Property\ReservationIdProperty $reservationId)
 * @method TaxiReservationType setReservationStatus(Property\ReservationStatusProperty $reservationStatus)
 * @method TaxiReservationType setReservedTicket(Property\ReservedTicketProperty $reservedTicket)
 * @method TaxiReservationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TaxiReservationType setTotalPrice(Property\TotalPriceProperty $totalPrice)
 * @method TaxiReservationType setUnderName(Property\UnderNameProperty $underName)
 * @method TaxiReservationType setUrl(Property\UrlProperty $url)
 */
class TaxiReservationType extends ReservationType {

	/**
	 * @var Property\PartySizeProperty
	 */
	private $partySize;

	/**
	 * @var Property\PickupLocationProperty
	 */
	private $pickupLocation;

	/**
	 * @var Property\PickupTimeProperty
	 */
	private $pickupTime;

	/**
	 * Get party size.
	 * 
	 * @return Property\PartySizeProperty
	 */
	public function getPartySize() {
		return $this->partySize;
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
		return 'https://schema.org/TaxiReservation';
	}

	/**
	 * Set party size.
	 * 
	 * @param Property\PartySizeProperty $partySize
	 * @return TaxiReservationType
	 */
	public function setPartySize(Property\PartySizeProperty $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set pickup location.
	 * 
	 * @param Property\PickupLocationProperty $pickupLocation
	 * @return TaxiReservationType
	 */
	public function setPickupLocation(Property\PickupLocationProperty $pickupLocation) {
		$this->pickupLocation = $pickupLocation;

		return $this;
	}

	/**
	 * Set pickup time.
	 * 
	 * @param Property\PickupTimeProperty $pickupTime
	 * @return TaxiReservationType
	 */
	public function setPickupTime(Property\PickupTimeProperty $pickupTime) {
		$this->pickupTime = $pickupTime;

		return $this;
	}
}