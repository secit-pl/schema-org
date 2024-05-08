<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A series of movies. Included movies can be indicated with the hasPart property.
 * 
 * @method MovieSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MovieSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MovieSeriesType setDescription(Property\DescriptionProperty $description)
 * @method MovieSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MovieSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method MovieSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MovieSeriesType setImage(Property\ImageProperty $image)
 * @method MovieSeriesType setIssn(Property\IssnProperty $issn)
 * @method MovieSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MovieSeriesType setName(Property\NameProperty $name)
 * @method MovieSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MovieSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method MovieSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method MovieSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MovieSeriesType setUrl(Property\UrlProperty $url)
 */
class MovieSeriesType extends CreativeWorkSeriesType {

	/**
	 * @var Property\ActorProperty
	 */
	private $actor;

	/**
	 * @var Property\DirectorProperty
	 */
	private $director;

	/**
	 * @var Property\MusicByProperty
	 */
	private $musicBy;

	/**
	 * @var Property\ProductionCompanyProperty
	 */
	private $productionCompany;

	/**
	 * @var Property\TrailerProperty
	 */
	private $trailer;

	/**
	 * Get actor.
	 *
	 * @return Property\ActorProperty
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get director.
	 *
	 * @return Property\DirectorProperty
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get music by.
	 *
	 * @return Property\MusicByProperty
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get production company.
	 *
	 * @return Property\ProductionCompanyProperty
	 */
	public function getProductionCompany() {
		return $this->productionCompany;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MovieSeries';
	}

	/**
	 * Get trailer.
	 *
	 * @return Property\TrailerProperty
	 */
	public function getTrailer() {
		return $this->trailer;
	}

	/**
	 * Set actor.
	 *
	 * @param Property\ActorProperty $actor
	 * @return MovieSeriesType
	 */
	public function setActor(Property\ActorProperty $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set director.
	 *
	 * @param Property\DirectorProperty $director
	 * @return MovieSeriesType
	 */
	public function setDirector(Property\DirectorProperty $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set music by.
	 *
	 * @param Property\MusicByProperty $musicBy
	 * @return MovieSeriesType
	 */
	public function setMusicBy(Property\MusicByProperty $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set production company.
	 *
	 * @param Property\ProductionCompanyProperty $productionCompany
	 * @return MovieSeriesType
	 */
	public function setProductionCompany(Property\ProductionCompanyProperty $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 *
	 * @param Property\TrailerProperty $trailer
	 * @return MovieSeriesType
	 */
	public function setTrailer(Property\TrailerProperty $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}