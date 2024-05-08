<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A CreativeWorkSeries in schema.org is a group of related items, typically but not necessarily of the same kind. CreativeWorkSeries are usually organized into some order, often chronological. Unlike ItemList which is a general purpose data structure for lists of things, the emphasis with CreativeWorkSeries is on published materials (written e.g. books and periodicals, or media such as TV, radio and games). Specific subtypes are available for describing TVSeries, RadioSeries, MovieSeries, BookSeries, Periodical and VideoGameSeries. In each case, the hasPart / isPartOf properties can be used to relate the CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves largely just to organize these more specific and practical subtypes. It is common for properties applicable to an item from the series to be usefully applied to the containing group. Schema.org attempts to anticipate some of these cases, but publishers should be free to apply properties of the series parts to the series as a whole wherever they seem appropriate.
 * 
 * @method CreativeWorkSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CreativeWorkSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CreativeWorkSeriesType setDescription(Property\DescriptionProperty $description)
 * @method CreativeWorkSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CreativeWorkSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CreativeWorkSeriesType setImage(Property\ImageProperty $image)
 * @method CreativeWorkSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CreativeWorkSeriesType setName(Property\NameProperty $name)
 * @method CreativeWorkSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CreativeWorkSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method CreativeWorkSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CreativeWorkSeriesType setUrl(Property\UrlProperty $url)
 */
class CreativeWorkSeriesType extends SeriesType {

	/**
	 * @var Property\EndDateProperty
	 */
	private $endDate;

	/**
	 * @var Property\IssnProperty
	 */
	private $issn;

	/**
	 * @var Property\StartDateProperty
	 */
	private $startDate;

	/**
	 * Get end date.
	 *
	 * @return Property\EndDateProperty
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get issn.
	 *
	 * @return Property\IssnProperty
	 */
	public function getIssn() {
		return $this->issn;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreativeWorkSeries';
	}

	/**
	 * Get start date.
	 *
	 * @return Property\StartDateProperty
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set end date.
	 *
	 * @param Property\EndDateProperty $endDate
	 * @return CreativeWorkSeriesType
	 */
	public function setEndDate(Property\EndDateProperty $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set issn.
	 *
	 * @param Property\IssnProperty $issn
	 * @return CreativeWorkSeriesType
	 */
	public function setIssn(Property\IssnProperty $issn) {
		$this->issn = $issn;

		return $this;
	}

	/**
	 * Set start date.
	 *
	 * @param Property\StartDateProperty $startDate
	 * @return CreativeWorkSeriesType
	 */
	public function setStartDate(Property\StartDateProperty $startDate) {
		$this->startDate = $startDate;

		return $this;
	}
}