<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Ticket.
 */
class Ticket extends Intangible {

	/**
	 * @var Property\DateIssued
	 */
	private $dateIssued;

	/**
	 * @var Property\IssuedBy
	 */
	private $issuedBy;

	/**
	 * @var Property\PriceCurrency
	 */
	private $priceCurrency;

	/**
	 * @var Property\TicketedSeat
	 */
	private $ticketedSeat;

	/**
	 * @var Property\TicketNumber
	 */
	private $ticketNumber;

	/**
	 * @var Property\TicketToken
	 */
	private $ticketToken;

	/**
	 * @var Property\TotalPrice
	 */
	private $totalPrice;

	/**
	 * @var Property\UnderName
	 */
	private $underName;

	/**
	 * Get date issued.
	 * 
	 * @return Property\DateIssued
	 */
	public function getDateIssued() {
		return $this->dateIssued;
	}

	/**
	 * Get issued by.
	 * 
	 * @return Property\IssuedBy
	 */
	public function getIssuedBy() {
		return $this->issuedBy;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Ticket';
	}

	/**
	 * Get ticketed seat.
	 * 
	 * @return Property\TicketedSeat
	 */
	public function getTicketedSeat() {
		return $this->ticketedSeat;
	}

	/**
	 * Get ticket number.
	 * 
	 * @return Property\TicketNumber
	 */
	public function getTicketNumber() {
		return $this->ticketNumber;
	}

	/**
	 * Get ticket token.
	 * 
	 * @return Property\TicketToken
	 */
	public function getTicketToken() {
		return $this->ticketToken;
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
	 * Set date issued.
	 * 
	 * @param Property\DateIssued $dateIssued
	 * @return Ticket
	 */
	public function setDateIssued(Property\DateIssued $dateIssued) {
		$this->dateIssued = $dateIssued;

		return $this;
	}

	/**
	 * Set issued by.
	 * 
	 * @param Property\IssuedBy $issuedBy
	 * @return Ticket
	 */
	public function setIssuedBy(Property\IssuedBy $issuedBy) {
		$this->issuedBy = $issuedBy;

		return $this;
	}

	/**
	 * Set price currency.
	 * 
	 * @param Property\PriceCurrency $priceCurrency
	 * @return Ticket
	 */
	public function setPriceCurrency(Property\PriceCurrency $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set ticketed seat.
	 * 
	 * @param Property\TicketedSeat $ticketedSeat
	 * @return Ticket
	 */
	public function setTicketedSeat(Property\TicketedSeat $ticketedSeat) {
		$this->ticketedSeat = $ticketedSeat;

		return $this;
	}

	/**
	 * Set ticket number.
	 * 
	 * @param Property\TicketNumber $ticketNumber
	 * @return Ticket
	 */
	public function setTicketNumber(Property\TicketNumber $ticketNumber) {
		$this->ticketNumber = $ticketNumber;

		return $this;
	}

	/**
	 * Set ticket token.
	 * 
	 * @param Property\TicketToken $ticketToken
	 * @return Ticket
	 */
	public function setTicketToken(Property\TicketToken $ticketToken) {
		$this->ticketToken = $ticketToken;

		return $this;
	}

	/**
	 * Set total price.
	 * 
	 * @param Property\TotalPrice $totalPrice
	 * @return Ticket
	 */
	public function setTotalPrice(Property\TotalPrice $totalPrice) {
		$this->totalPrice = $totalPrice;

		return $this;
	}

	/**
	 * Set under name.
	 * 
	 * @param Property\UnderName $underName
	 * @return Ticket
	 */
	public function setUnderName(Property\UnderName $underName) {
		$this->underName = $underName;

		return $this;
	}
}