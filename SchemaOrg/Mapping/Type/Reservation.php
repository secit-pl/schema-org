<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Reservation.
 */
class Reservation {

	/**
	 * @var Property\BookingTime
	 */
	private $bookingTime;

	/**
	 * @var Property\Broker
	 */
	private $broker;

	/**
	 */
	private $id;

	/**
	 * @var Property\ModifiedTime
	 */
	private $modifiedTime;

	/**
	 * @var Property\PriceCurrency
	 */
	private $priceCurrency;

	/**
	 * @var Property\ProgramMembershipUsed
	 */
	private $programMembershipUsed;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\ReservationFor
	 */
	private $reservationFor;

	/**
	 * @var Property\ReservationId
	 */
	private $reservationId;

	/**
	 * @var Property\ReservationStatus
	 */
	private $reservationStatus;

	/**
	 * @var Property\ReservedTicket
	 */
	private $reservedTicket;

	/**
	 * @var Property\TotalPrice
	 */
	private $totalPrice;

	/**
	 * @var Property\UnderName
	 */
	private $underName;

	/**
	 * Reservation constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get booking time.
	 * 
	 * @return Property\BookingTime
	 */
	public function getBookingTime() {
		return $this->bookingTime;
	}

	/**
	 * Get broker.
	 * 
	 * @return Property\Broker
	 */
	public function getBroker() {
		return $this->broker;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get modified time.
	 * 
	 * @return Property\ModifiedTime
	 */
	public function getModifiedTime() {
		return $this->modifiedTime;
	}

	/**
	 * Get price currency.
	 * 
	 * @return Property\PriceCurrency
	 */
	public function getPriceCurrency() {
		return $this->priceCurrency;
	}

	/**
	 * Get program membership used.
	 * 
	 * @return Property\ProgramMembershipUsed
	 */
	public function getProgramMembershipUsed() {
		return $this->programMembershipUsed;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get reservation for.
	 * 
	 * @return Property\ReservationFor
	 */
	public function getReservationFor() {
		return $this->reservationFor;
	}

	/**
	 * Get reservation id.
	 * 
	 * @return Property\ReservationId
	 */
	public function getReservationId() {
		return $this->reservationId;
	}

	/**
	 * Get reservation status.
	 * 
	 * @return Property\ReservationStatus
	 */
	public function getReservationStatus() {
		return $this->reservationStatus;
	}

	/**
	 * Get reserved ticket.
	 * 
	 * @return Property\ReservedTicket
	 */
	public function getReservedTicket() {
		return $this->reservedTicket;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Reservation';
	}

	/**
	 * Get total price.
	 * 
	 * @return Property\TotalPrice
	 */
	public function getTotalPrice() {
		return $this->totalPrice;
	}

	/**
	 * Get under name.
	 * 
	 * @return Property\UnderName
	 */
	public function getUnderName() {
		return $this->underName;
	}

	/**
	 * Set booking time.
	 * 
	 * @param Property\BookingTime $bookingTime
	 * @return Reservation
	 */
	public function setBookingTime(Property\BookingTime $bookingTime) {
		$this->bookingTime = $bookingTime;

		return $this;
	}

	/**
	 * Set broker.
	 * 
	 * @param Property\Broker $broker
	 * @return Reservation
	 */
	public function setBroker(Property\Broker $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set modified time.
	 * 
	 * @param Property\ModifiedTime $modifiedTime
	 * @return Reservation
	 */
	public function setModifiedTime(Property\ModifiedTime $modifiedTime) {
		$this->modifiedTime = $modifiedTime;

		return $this;
	}

	/**
	 * Set price currency.
	 * 
	 * @param Property\PriceCurrency $priceCurrency
	 * @return Reservation
	 */
	public function setPriceCurrency(Property\PriceCurrency $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set program membership used.
	 * 
	 * @param Property\ProgramMembershipUsed $programMembershipUsed
	 * @return Reservation
	 */
	public function setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed) {
		$this->programMembershipUsed = $programMembershipUsed;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return Reservation
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set reservation for.
	 * 
	 * @param Property\ReservationFor $reservationFor
	 * @return Reservation
	 */
	public function setReservationFor(Property\ReservationFor $reservationFor) {
		$this->reservationFor = $reservationFor;

		return $this;
	}

	/**
	 * Set reservation id.
	 * 
	 * @param Property\ReservationId $reservationId
	 * @return Reservation
	 */
	public function setReservationId(Property\ReservationId $reservationId) {
		$this->reservationId = $reservationId;

		return $this;
	}

	/**
	 * Set reservation status.
	 * 
	 * @param Property\ReservationStatus $reservationStatus
	 * @return Reservation
	 */
	public function setReservationStatus(Property\ReservationStatus $reservationStatus) {
		$this->reservationStatus = $reservationStatus;

		return $this;
	}

	/**
	 * Set reserved ticket.
	 * 
	 * @param Property\ReservedTicket $reservedTicket
	 * @return Reservation
	 */
	public function setReservedTicket(Property\ReservedTicket $reservedTicket) {
		$this->reservedTicket = $reservedTicket;

		return $this;
	}

	/**
	 * Set total price.
	 * 
	 * @param Property\TotalPrice $totalPrice
	 * @return Reservation
	 */
	public function setTotalPrice(Property\TotalPrice $totalPrice) {
		$this->totalPrice = $totalPrice;

		return $this;
	}

	/**
	 * Set under name.
	 * 
	 * @param Property\UnderName $underName
	 * @return Reservation
	 */
	public function setUnderName(Property\UnderName $underName) {
		$this->underName = $underName;

		return $this;
	}
}