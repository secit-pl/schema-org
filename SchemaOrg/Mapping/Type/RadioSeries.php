<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioSeries.
 */
class RadioSeries {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\ContainsSeason
	 */
	private $containsSeason;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 * @var Property\Episode
	 */
	private $episode;

	/**
	 */
	private $id;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\NumberOfEpisodes
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\NumberOfSeasons
	 */
	private $numberOfSeasons;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\Trailer
	 */
	private $trailer;

	/**
	 * RadioSeries constructor.
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
	 * Get contains season.
	 * 
	 * @return Property\ContainsSeason
	 */
	public function getContainsSeason() {
		return $this->containsSeason;
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
	 * Get music by.
	 * 
	 * @return Property\MusicBy
	 */
	public function getMusicBy() {
		return $this->musicBy;
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
	 * Get number of seasons.
	 * 
	 * @return Property\NumberOfSeasons
	 */
	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
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
		return 'https://schema.org/RadioSeries';
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
	 * @return RadioSeries
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set contains season.
	 * 
	 * @param Property\ContainsSeason $containsSeason
	 * @return RadioSeries
	 */
	public function setContainsSeason(Property\ContainsSeason $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return RadioSeries
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 * 
	 * @param Property\Episode $episode
	 * @return RadioSeries
	 */
	public function setEpisode(Property\Episode $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return RadioSeries
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 * 
	 * @param Property\NumberOfEpisodes $numberOfEpisodes
	 * @return RadioSeries
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of seasons.
	 * 
	 * @param Property\NumberOfSeasons $numberOfSeasons
	 * @return RadioSeries
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasons $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return RadioSeries
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return RadioSeries
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}