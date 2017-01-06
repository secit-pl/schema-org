<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Seat.
 * 
 * @method Seat setAdditionalType(Property\AdditionalType $additionalType)
 * @method Seat setAlternateName(Property\AlternateName $alternateName)
 * @method Seat setDescription(Property\Description $description)
 * @method Seat setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Seat setImage(Property\Image $image)
 * @method Seat setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Seat setName(Property\Name $name)
 * @method Seat setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Seat setSameAs(Property\SameAs $sameAs)
 * @method Seat setUrl(Property\Url $url)
 */
class Seat extends Intangible {

	/**
	 * @var Property\SeatingType
	 */
	private $seatingType;

	/**
	 * @var Property\SeatNumber
	 */
	private $seatNumber;

	/**
	 * @var Property\SeatRow
	 */
	private $seatRow;

	/**
	 * @var Property\SeatSection
	 */
	private $seatSection;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Seat';
	}

	/**
	 * Get seating type.
	 * 
	 * @return Property\SeatingType
	 */
	public function getSeatingType() {
		return $this->seatingType;
	}

	/**
	 * Get seat number.
	 * 
	 * @return Property\SeatNumber
	 */
	public function getSeatNumber() {
		return $this->seatNumber;
	}

	/**
	 * Get seat row.
	 * 
	 * @return Property\SeatRow
	 */
	public function getSeatRow() {
		return $this->seatRow;
	}

	/**
	 * Get seat section.
	 * 
	 * @return Property\SeatSection
	 */
	public function getSeatSection() {
		return $this->seatSection;
	}

	/**
	 * Set seating type.
	 * 
	 * @param Property\SeatingType $seatingType
	 * @return Seat
	 */
	public function setSeatingType(Property\SeatingType $seatingType) {
		$this->seatingType = $seatingType;

		return $this;
	}

	/**
	 * Set seat number.
	 * 
	 * @param Property\SeatNumber $seatNumber
	 * @return Seat
	 */
	public function setSeatNumber(Property\SeatNumber $seatNumber) {
		$this->seatNumber = $seatNumber;

		return $this;
	}

	/**
	 * Set seat row.
	 * 
	 * @param Property\SeatRow $seatRow
	 * @return Seat
	 */
	public function setSeatRow(Property\SeatRow $seatRow) {
		$this->seatRow = $seatRow;

		return $this;
	}

	/**
	 * Set seat section.
	 * 
	 * @param Property\SeatSection $seatSection
	 * @return Seat
	 */
	public function setSeatSection(Property\SeatSection $seatSection) {
		$this->seatSection = $seatSection;

		return $this;
	}
}