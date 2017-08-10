<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CreativeWorkSeason.
 */
class CreativeWorkSeason {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\EndDate
	 */
	private $endDate;

	/**
	 * @var Property\Episode
	 */
	private $episode;

	/**
	 */
	private $id;

	/**
	 * @var Property\NumberOfEpisodes
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\PartOfSeries
	 */
	private $partOfSeries;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\SeasonNumber
	 */
	private $seasonNumber;

	/**
	 * @var Property\StartDate
	 */
	private $startDate;

	/**
	 * @var Property\Trailer
	 */
	private $trailer;

	/**
	 * CreativeWorkSeason constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get actor.
	 * 
	 * @return Property\Actor
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Get director.
	 * 
	 * @return Property\Director
	 */
	public function getDirector() {
		return $this->director;
	}

	/**
	 * Get end date.
	 * 
	 * @return Property\EndDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get episode.
	 * 
	 * @return Property\Episode
	 */
	public function getEpisode() {
		return $this->episode;
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
	 * Get number of episodes.
	 * 
	 * @return Property\NumberOfEpisodes
	 */
	public function getNumberOfEpisodes() {
		return $this->numberOfEpisodes;
	}

	/**
	 * Get part of series.
	 * 
	 * @return Property\PartOfSeries
	 */
	public function getPartOfSeries() {
		return $this->partOfSeries;
	}

	/**
	 * Get production company.
	 * 
	 * @return Property\ProductionCompany
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
		return 'https://schema.org/CreativeWorkSeason';
	}

	/**
	 * Get season number.
	 * 
	 * @return Property\SeasonNumber
	 */
	public function getSeasonNumber() {
		return $this->seasonNumber;
	}

	/**
	 * Get start date.
	 * 
	 * @return Property\StartDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Get trailer.
	 * 
	 * @return Property\Trailer
	 */
	public function getTrailer() {
		return $this->trailer;
	}

	/**
	 * Set actor.
	 * 
	 * @param Property\Actor $actor
	 * @return CreativeWorkSeason
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return CreativeWorkSeason
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set end date.
	 * 
	 * @param Property\EndDate $endDate
	 * @return CreativeWorkSeason
	 */
	public function setEndDate(Property\EndDate $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set episode.
	 * 
	 * @param Property\Episode $episode
	 * @return CreativeWorkSeason
	 */
	public function setEpisode(Property\Episode $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set number of episodes.
	 * 
	 * @param Property\NumberOfEpisodes $numberOfEpisodes
	 * @return CreativeWorkSeason
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set part of series.
	 * 
	 * @param Property\PartOfSeries $partOfSeries
	 * @return CreativeWorkSeason
	 */
	public function setPartOfSeries(Property\PartOfSeries $partOfSeries) {
		$this->partOfSeries = $partOfSeries;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return CreativeWorkSeason
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set season number.
	 * 
	 * @param Property\SeasonNumber $seasonNumber
	 * @return CreativeWorkSeason
	 */
	public function setSeasonNumber(Property\SeasonNumber $seasonNumber) {
		$this->seasonNumber = $seasonNumber;

		return $this;
	}

	/**
	 * Set start date.
	 * 
	 * @param Property\StartDate $startDate
	 * @return CreativeWorkSeason
	 */
	public function setStartDate(Property\StartDate $startDate) {
		$this->startDate = $startDate;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return CreativeWorkSeason
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}