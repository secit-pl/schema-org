<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 * 
 * @method RadioSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadioSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadioSeriesType setDescription(Property\DescriptionProperty $description)
 * @method RadioSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadioSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method RadioSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadioSeriesType setImage(Property\ImageProperty $image)
 * @method RadioSeriesType setIssn(Property\IssnProperty $issn)
 * @method RadioSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadioSeriesType setName(Property\NameProperty $name)
 * @method RadioSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadioSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadioSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method RadioSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RadioSeriesType setUrl(Property\UrlProperty $url)
 */
class RadioSeriesType extends CreativeWorkSeriesType {

	/**
	 * @var Property\ActorProperty
	 */
	private $actor;

	/**
	 * @var Property\ContainsSeasonProperty
	 */
	private $containsSeason;

	/**
	 * @var Property\DirectorProperty
	 */
	private $director;

	/**
	 * @var Property\EpisodeProperty
	 */
	private $episode;

	/**
	 * @var Property\MusicByProperty
	 */
	private $musicBy;

	/**
	 * @var Property\NumberOfEpisodesProperty
	 */
	private $numberOfEpisodes;

	/**
	 * @var Property\NumberOfSeasonsProperty
	 */
	private $numberOfSeasons;

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
	 * Get contains season.
	 *
	 * @return Property\ContainsSeasonProperty
	 */
	public function getContainsSeason() {
		return $this->containsSeason;
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
	 * Get episode.
	 *
	 * @return Property\EpisodeProperty
	 */
	public function getEpisode() {
		return $this->episode;
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
	 * Get number of episodes.
	 *
	 * @return Property\NumberOfEpisodesProperty
	 */
	public function getNumberOfEpisodes() {
		return $this->numberOfEpisodes;
	}

	/**
	 * Get number of seasons.
	 *
	 * @return Property\NumberOfSeasonsProperty
	 */
	public function getNumberOfSeasons() {
		return $this->numberOfSeasons;
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
		return 'https://schema.org/RadioSeries';
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
	 * @return RadioSeriesType
	 */
	public function setActor(Property\ActorProperty $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set contains season.
	 *
	 * @param Property\ContainsSeasonProperty $containsSeason
	 * @return RadioSeriesType
	 */
	public function setContainsSeason(Property\ContainsSeasonProperty $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set director.
	 *
	 * @param Property\DirectorProperty $director
	 * @return RadioSeriesType
	 */
	public function setDirector(Property\DirectorProperty $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 *
	 * @param Property\EpisodeProperty $episode
	 * @return RadioSeriesType
	 */
	public function setEpisode(Property\EpisodeProperty $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set music by.
	 *
	 * @param Property\MusicByProperty $musicBy
	 * @return RadioSeriesType
	 */
	public function setMusicBy(Property\MusicByProperty $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 *
	 * @param Property\NumberOfEpisodesProperty $numberOfEpisodes
	 * @return RadioSeriesType
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodesProperty $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of seasons.
	 *
	 * @param Property\NumberOfSeasonsProperty $numberOfSeasons
	 * @return RadioSeriesType
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasonsProperty $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set production company.
	 *
	 * @param Property\ProductionCompanyProperty $productionCompany
	 * @return RadioSeriesType
	 */
	public function setProductionCompany(Property\ProductionCompanyProperty $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 *
	 * @param Property\TrailerProperty $trailer
	 * @return RadioSeriesType
	 */
	public function setTrailer(Property\TrailerProperty $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}