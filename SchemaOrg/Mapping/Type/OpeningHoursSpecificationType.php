<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A structured value providing information about the opening hours of a place or a certain service inside a place. The place is open if the opens property is specified, and closed otherwise. If the value for the closes property is less than the value for the opens property then the hour range is assumed to span over the next day.
 * 
 * @method OpeningHoursSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OpeningHoursSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OpeningHoursSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method OpeningHoursSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OpeningHoursSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OpeningHoursSpecificationType setImage(Property\ImageProperty $image)
 * @method OpeningHoursSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OpeningHoursSpecificationType setName(Property\NameProperty $name)
 * @method OpeningHoursSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OpeningHoursSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method OpeningHoursSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OpeningHoursSpecificationType setUrl(Property\UrlProperty $url)
 */
class OpeningHoursSpecificationType extends StructuredValueType {

	/**
	 * @var Property\ClosesProperty
	 */
	private $closes;

	/**
	 * @var Property\DayOfWeekProperty
	 */
	private $dayOfWeek;

	/**
	 * @var Property\OpensProperty
	 */
	private $opens;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * Get closes.
	 *
	 * @return Property\ClosesProperty
	 */
	public function getCloses() {
		return $this->closes;
	}

	/**
	 * Get day of week.
	 *
	 * @return Property\DayOfWeekProperty
	 */
	public function getDayOfWeek() {
		return $this->dayOfWeek;
	}

	/**
	 * Get opens.
	 *
	 * @return Property\OpensProperty
	 */
	public function getOpens() {
		return $this->opens;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OpeningHoursSpecification';
	}

	/**
	 * Get valid from.
	 *
	 * @return Property\ValidFromProperty
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 *
	 * @return Property\ValidThroughProperty
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Set closes.
	 *
	 * @param Property\ClosesProperty $closes
	 * @return OpeningHoursSpecificationType
	 */
	public function setCloses(Property\ClosesProperty $closes) {
		$this->closes = $closes;

		return $this;
	}

	/**
	 * Set day of week.
	 *
	 * @param Property\DayOfWeekProperty $dayOfWeek
	 * @return OpeningHoursSpecificationType
	 */
	public function setDayOfWeek(Property\DayOfWeekProperty $dayOfWeek) {
		$this->dayOfWeek = $dayOfWeek;

		return $this;
	}

	/**
	 * Set opens.
	 *
	 * @param Property\OpensProperty $opens
	 * @return OpeningHoursSpecificationType
	 */
	public function setOpens(Property\OpensProperty $opens) {
		$this->opens = $opens;

		return $this;
	}

	/**
	 * Set valid from.
	 *
	 * @param Property\ValidFromProperty $validFrom
	 * @return OpeningHoursSpecificationType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 *
	 * @param Property\ValidThroughProperty $validThrough
	 * @return OpeningHoursSpecificationType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}
}