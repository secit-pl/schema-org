<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Episode.
 */
class Episode {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\EpisodeNumber
	 */
	private $episodeNumber;

	/**
	 */
	private $id;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\PartOfSeason
	 */
	private $partOfSeason;

	/**
	 * @var Property\PartOfSeries
	 */
	private $partOfSeries;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\Trailer
	 */
	private $trailer;

	/**
	 * Episode constructor.
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
	 * Get episode number.
	 * 
	 * @return Property\EpisodeNumber
	 */
	public function getEpisodeNumber() {
		return $this->episodeNumber;
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
	 * Get music by.
	 * 
	 * @return Property\MusicBy
	 */
	public function getMusicBy() {
		return $this->musicBy;
	}

	/**
	 * Get part of season.
	 * 
	 * @return Property\PartOfSeason
	 */
	public function getPartOfSeason() {
		return $this->partOfSeason;
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
		return 'https://schema.org/Episode';
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
	 * @return Episode
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Episode
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode number.
	 * 
	 * @param Property\EpisodeNumber $episodeNumber
	 * @return Episode
	 */
	public function setEpisodeNumber(Property\EpisodeNumber $episodeNumber) {
		$this->episodeNumber = $episodeNumber;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return Episode
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set part of season.
	 * 
	 * @param Property\PartOfSeason $partOfSeason
	 * @return Episode
	 */
	public function setPartOfSeason(Property\PartOfSeason $partOfSeason) {
		$this->partOfSeason = $partOfSeason;

		return $this;
	}

	/**
	 * Set part of series.
	 * 
	 * @param Property\PartOfSeries $partOfSeries
	 * @return Episode
	 */
	public function setPartOfSeries(Property\PartOfSeries $partOfSeries) {
		$this->partOfSeries = $partOfSeries;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return Episode
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return Episode
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}