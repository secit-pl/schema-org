<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodEstablishmentReservation.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FoodEstablishmentReservationType instead.
 * 
 * @method FoodEstablishmentReservation setAdditionalType(Property\AdditionalType $additionalType)
 * @method FoodEstablishmentReservation setAlternateName(Property\AlternateName $alternateName)
 * @method FoodEstablishmentReservation setBookingTime(Property\BookingTime $bookingTime)
 * @method FoodEstablishmentReservation setBroker(Property\Broker $broker)
 * @method FoodEstablishmentReservation setDescription(Property\Description $description)
 * @method FoodEstablishmentReservation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FoodEstablishmentReservation setIdentifier(Property\Identifier $identifier)
 * @method FoodEstablishmentReservation setImage(Property\Image $image)
 * @method FoodEstablishmentReservation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FoodEstablishmentReservation setModifiedTime(Property\ModifiedTime $modifiedTime)
 * @method FoodEstablishmentReservation setName(Property\Name $name)
 * @method FoodEstablishmentReservation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FoodEstablishmentReservation setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method FoodEstablishmentReservation setProgramMembershipUsed(Property\ProgramMembershipUsed $programMembershipUsed)
 * @method FoodEstablishmentReservation setProvider(Property\Provider $provider)
 * @method FoodEstablishmentReservation setReservationFor(Property\ReservationFor $reservationFor)
 * @method FoodEstablishmentReservation setReservationId(Property\ReservationId $reservationId)
 * @method FoodEstablishmentReservation setReservationStatus(Property\ReservationStatus $reservationStatus)
 * @method FoodEstablishmentReservation setReservedTicket(Property\ReservedTicket $reservedTicket)
 * @method FoodEstablishmentReservation setSameAs(Property\SameAs $sameAs)
 * @method FoodEstablishmentReservation setTotalPrice(Property\TotalPrice $totalPrice)
 * @method FoodEstablishmentReservation setUnderName(Property\UnderName $underName)
 * @method FoodEstablishmentReservation setUrl(Property\Url $url)
 */
class FoodEstablishmentReservation extends Reservation {

	/**
	 * @var Property\EndTime
	 */
	private $endTime;

	/**
	 * @var Property\PartySize
	 */
	private $partySize;

	/**
	 * @var Property\StartTime
	 */
	private $startTime;

	/**
	 * Get end time.
	 * 
	 * @return Property\EndTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Get party size.
	 * 
	 * @return Property\PartySize
	 */
	public function getPartySize() {
		return $this->partySize;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodEstablishmentReservation';
	}

	/**
	 * Get start time.
	 * 
	 * @return Property\StartTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Set end time.
	 * 
	 * @param Property\EndTime $endTime
	 * @return FoodEstablishmentReservation
	 */
	public function setEndTime(Property\EndTime $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set party size.
	 * 
	 * @param Property\PartySize $partySize
	 * @return FoodEstablishmentReservation
	 */
	public function setPartySize(Property\PartySize $partySize) {
		$this->partySize = $partySize;

		return $this;
	}

	/**
	 * Set start time.
	 * 
	 * @param Property\StartTime $startTime
	 * @return FoodEstablishmentReservation
	 */
	public function setStartTime(Property\StartTime $startTime) {
		$this->startTime = $startTime;

		return $this;
	}
}