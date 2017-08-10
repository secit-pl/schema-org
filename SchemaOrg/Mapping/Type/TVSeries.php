<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TVSeries.
 */
class TVSeries {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\ContainsSeason
	 */
	private $containsSeason;

	/**
	 * @var Property\CountryOfOrigin
	 */
	private $countryOfOrigin;

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
	 * TVSeries constructor.
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
	 * Get country of origin.
	 * 
	 * @return Property\CountryOfOrigin
	 */
	public function getCountryOfOrigin() {
		return $this->countryOfOrigin;
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
		return 'https://schema.org/TVSeries';
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
	 * @return TVSeries
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set contains season.
	 * 
	 * @param Property\ContainsSeason $containsSeason
	 * @return TVSeries
	 */
	public function setContainsSeason(Property\ContainsSeason $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set country of origin.
	 * 
	 * @param Property\CountryOfOrigin $countryOfOrigin
	 * @return TVSeries
	 */
	public function setCountryOfOrigin(Property\CountryOfOrigin $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return TVSeries
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 * 
	 * @param Property\Episode $episode
	 * @return TVSeries
	 */
	public function setEpisode(Property\Episode $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return TVSeries
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 * 
	 * @param Property\NumberOfEpisodes $numberOfEpisodes
	 * @return TVSeries
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of seasons.
	 * 
	 * @param Property\NumberOfSeasons $numberOfSeasons
	 * @return TVSeries
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasons $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return TVSeries
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return TVSeries
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}