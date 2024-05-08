<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 * 
 * @method TicketType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TicketType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TicketType setDescription(Property\DescriptionProperty $description)
 * @method TicketType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TicketType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TicketType setImage(Property\ImageProperty $image)
 * @method TicketType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TicketType setName(Property\NameProperty $name)
 * @method TicketType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TicketType setSameAs(Property\SameAsProperty $sameAs)
 * @method TicketType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TicketType setUrl(Property\UrlProperty $url)
 */
class TicketType extends IntangibleType {

	/**
	 * @var Property\DateIssuedProperty
	 */
	private $dateIssued;

	/**
	 * @var Property\IssuedByProperty
	 */
	private $issuedBy;

	/**
	 * @var Property\PriceCurrencyProperty
	 */
	private $priceCurrency;

	/**
	 * @var Property\TicketedSeatProperty
	 */
	private $ticketedSeat;

	/**
	 * @var Property\TicketNumberProperty
	 */
	private $ticketNumber;

	/**
	 * @var Property\TicketTokenProperty
	 */
	private $ticketToken;

	/**
	 * @var Property\TotalPriceProperty
	 */
	private $totalPrice;

	/**
	 * @var Property\UnderNameProperty
	 */
	private $underName;

	/**
	 * Get date issued.
	 *
	 * @return Property\DateIssuedProperty
	 */
	public function getDateIssued() {
		return $this->dateIssued;
	}

	/**
	 * Get issued by.
	 *
	 * @return Property\IssuedByProperty
	 */
	public function getIssuedBy() {
		return $this->issuedBy;
	}

	/**
	 * Get price currency.
	 *
	 * @return Property\PriceCurrencyProperty
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
	 * @return Property\TicketedSeatProperty
	 */
	public function getTicketedSeat() {
		return $this->ticketedSeat;
	}

	/**
	 * Get ticket number.
	 *
	 * @return Property\TicketNumberProperty
	 */
	public function getTicketNumber() {
		return $this->ticketNumber;
	}

	/**
	 * Get ticket token.
	 *
	 * @return Property\TicketTokenProperty
	 */
	public function getTicketToken() {
		return $this->ticketToken;
	}

	/**
	 * Get total price.
	 *
	 * @return Property\TotalPriceProperty
	 */
	public function getTotalPrice() {
		return $this->totalPrice;
	}

	/**
	 * Get under name.
	 *
	 * @return Property\UnderNameProperty
	 */
	public function getUnderName() {
		return $this->underName;
	}

	/**
	 * Set date issued.
	 *
	 * @param Property\DateIssuedProperty $dateIssued
	 * @return TicketType
	 */
	public function setDateIssued(Property\DateIssuedProperty $dateIssued) {
		$this->dateIssued = $dateIssued;

		return $this;
	}

	/**
	 * Set issued by.
	 *
	 * @param Property\IssuedByProperty $issuedBy
	 * @return TicketType
	 */
	public function setIssuedBy(Property\IssuedByProperty $issuedBy) {
		$this->issuedBy = $issuedBy;

		return $this;
	}

	/**
	 * Set price currency.
	 *
	 * @param Property\PriceCurrencyProperty $priceCurrency
	 * @return TicketType
	 */
	public function setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set ticketed seat.
	 *
	 * @param Property\TicketedSeatProperty $ticketedSeat
	 * @return TicketType
	 */
	public function setTicketedSeat(Property\TicketedSeatProperty $ticketedSeat) {
		$this->ticketedSeat = $ticketedSeat;

		return $this;
	}

	/**
	 * Set ticket number.
	 *
	 * @param Property\TicketNumberProperty $ticketNumber
	 * @return TicketType
	 */
	public function setTicketNumber(Property\TicketNumberProperty $ticketNumber) {
		$this->ticketNumber = $ticketNumber;

		return $this;
	}

	/**
	 * Set ticket token.
	 *
	 * @param Property\TicketTokenProperty $ticketToken
	 * @return TicketType
	 */
	public function setTicketToken(Property\TicketTokenProperty $ticketToken) {
		$this->ticketToken = $ticketToken;

		return $this;
	}

	/**
	 * Set total price.
	 *
	 * @param Property\TotalPriceProperty $totalPrice
	 * @return TicketType
	 */
	public function setTotalPrice(Property\TotalPriceProperty $totalPrice) {
		$this->totalPrice = $totalPrice;

		return $this;
	}

	/**
	 * Set under name.
	 *
	 * @param Property\UnderNameProperty $underName
	 * @return TicketType
	 */
	public function setUnderName(Property\UnderNameProperty $underName) {
		$this->underName = $underName;

		return $this;
	}
}