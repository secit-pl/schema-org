<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OpeningHoursSpecification.
 * 
 * @method OpeningHoursSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method OpeningHoursSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method OpeningHoursSpecification setDescription(Property\Description $description)
 * @method OpeningHoursSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method OpeningHoursSpecification setImage(Property\Image $image)
 * @method OpeningHoursSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method OpeningHoursSpecification setName(Property\Name $name)
 * @method OpeningHoursSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method OpeningHoursSpecification setSameAs(Property\SameAs $sameAs)
 * @method OpeningHoursSpecification setUrl(Property\Url $url)
 */
class OpeningHoursSpecification extends StructuredValue {

	/**
	 * @var Property\Closes
	 */
	private $closes;

	/**
	 * @var Property\DayOfWeek
	 */
	private $dayOfWeek;

	/**
	 * @var Property\Opens
	 */
	private $opens;

	/**
	 * @var Property\ValidFrom
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThrough
	 */
	private $validThrough;

	/**
	 * Get closes.
	 * 
	 * @return Property\Closes
	 */
	public function getCloses() {
		return $this->closes;
	}

	/**
	 * Get day of week.
	 * 
	 * @return Property\DayOfWeek
	 */
	public function getDayOfWeek() {
		return $this->dayOfWeek;
	}

	/**
	 * Get opens.
	 * 
	 * @return Property\Opens
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
	 * @return Property\ValidFrom
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 * 
	 * @return Property\ValidThrough
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Set closes.
	 * 
	 * @param Property\Closes $closes
	 * @return OpeningHoursSpecification
	 */
	public function setCloses(Property\Closes $closes) {
		$this->closes = $closes;

		return $this;
	}

	/**
	 * Set day of week.
	 * 
	 * @param Property\DayOfWeek $dayOfWeek
	 * @return OpeningHoursSpecification
	 */
	public function setDayOfWeek(Property\DayOfWeek $dayOfWeek) {
		$this->dayOfWeek = $dayOfWeek;

		return $this;
	}

	/**
	 * Set opens.
	 * 
	 * @param Property\Opens $opens
	 * @return OpeningHoursSpecification
	 */
	public function setOpens(Property\Opens $opens) {
		$this->opens = $opens;

		return $this;
	}

	/**
	 * Set valid from.
	 * 
	 * @param Property\ValidFrom $validFrom
	 * @return OpeningHoursSpecification
	 */
	public function setValidFrom(Property\ValidFrom $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 * 
	 * @param Property\ValidThrough $validThrough
	 * @return OpeningHoursSpecification
	 */
	public function setValidThrough(Property\ValidThrough $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}
}