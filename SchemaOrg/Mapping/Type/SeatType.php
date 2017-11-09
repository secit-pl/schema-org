<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SeatType.
 * 
 * @method SeatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SeatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SeatType setDescription(Property\DescriptionProperty $description)
 * @method SeatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SeatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SeatType setImage(Property\ImageProperty $image)
 * @method SeatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SeatType setName(Property\NameProperty $name)
 * @method SeatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SeatType setSameAs(Property\SameAsProperty $sameAs)
 * @method SeatType setUrl(Property\UrlProperty $url)
 */
class SeatType extends IntangibleType {

	/**
	 * @var Property\SeatingTypeProperty
	 */
	private $seatingType;

	/**
	 * @var Property\SeatNumberProperty
	 */
	private $seatNumber;

	/**
	 * @var Property\SeatRowProperty
	 */
	private $seatRow;

	/**
	 * @var Property\SeatSectionProperty
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
	 * @return Property\SeatingTypeProperty
	 */
	public function getSeatingType() {
		return $this->seatingType;
	}

	/**
	 * Get seat number.
	 * 
	 * @return Property\SeatNumberProperty
	 */
	public function getSeatNumber() {
		return $this->seatNumber;
	}

	/**
	 * Get seat row.
	 * 
	 * @return Property\SeatRowProperty
	 */
	public function getSeatRow() {
		return $this->seatRow;
	}

	/**
	 * Get seat section.
	 * 
	 * @return Property\SeatSectionProperty
	 */
	public function getSeatSection() {
		return $this->seatSection;
	}

	/**
	 * Set seating type.
	 * 
	 * @param Property\SeatingTypeProperty $seatingType
	 * @return SeatType
	 */
	public function setSeatingType(Property\SeatingTypeProperty $seatingType) {
		$this->seatingType = $seatingType;

		return $this;
	}

	/**
	 * Set seat number.
	 * 
	 * @param Property\SeatNumberProperty $seatNumber
	 * @return SeatType
	 */
	public function setSeatNumber(Property\SeatNumberProperty $seatNumber) {
		$this->seatNumber = $seatNumber;

		return $this;
	}

	/**
	 * Set seat row.
	 * 
	 * @param Property\SeatRowProperty $seatRow
	 * @return SeatType
	 */
	public function setSeatRow(Property\SeatRowProperty $seatRow) {
		$this->seatRow = $seatRow;

		return $this;
	}

	/**
	 * Set seat section.
	 * 
	 * @param Property\SeatSectionProperty $seatSection
	 * @return SeatType
	 */
	public function setSeatSection(Property\SeatSectionProperty $seatSection) {
		$this->seatSection = $seatSection;

		return $this;
	}
}