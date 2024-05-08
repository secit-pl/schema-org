<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * CreativeWorkSeries dedicated to TV broadcast and associated online delivery.
 * 
 * @method TVSeriesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TVSeriesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TVSeriesType setDescription(Property\DescriptionProperty $description)
 * @method TVSeriesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TVSeriesType setEndDate(Property\EndDateProperty $endDate)
 * @method TVSeriesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TVSeriesType setImage(Property\ImageProperty $image)
 * @method TVSeriesType setIssn(Property\IssnProperty $issn)
 * @method TVSeriesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TVSeriesType setName(Property\NameProperty $name)
 * @method TVSeriesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TVSeriesType setSameAs(Property\SameAsProperty $sameAs)
 * @method TVSeriesType setStartDate(Property\StartDateProperty $startDate)
 * @method TVSeriesType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TVSeriesType setUrl(Property\UrlProperty $url)
 */
class TVSeriesType extends CreativeWorkSeriesType {

	/**
	 * @var Property\ActorProperty
	 */
	private $actor;

	/**
	 * @var Property\ContainsSeasonProperty
	 */
	private $containsSeason;

	/**
	 * @var Property\CountryOfOriginProperty
	 */
	private $countryOfOrigin;

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
	 * Get country of origin.
	 *
	 * @return Property\CountryOfOriginProperty
	 */
	public function getCountryOfOrigin() {
		return $this->countryOfOrigin;
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
		return 'https://schema.org/TVSeries';
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
	 * @return TVSeriesType
	 */
	public function setActor(Property\ActorProperty $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set contains season.
	 *
	 * @param Property\ContainsSeasonProperty $containsSeason
	 * @return TVSeriesType
	 */
	public function setContainsSeason(Property\ContainsSeasonProperty $containsSeason) {
		$this->containsSeason = $containsSeason;

		return $this;
	}

	/**
	 * Set country of origin.
	 *
	 * @param Property\CountryOfOriginProperty $countryOfOrigin
	 * @return TVSeriesType
	 */
	public function setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}

	/**
	 * Set director.
	 *
	 * @param Property\DirectorProperty $director
	 * @return TVSeriesType
	 */
	public function setDirector(Property\DirectorProperty $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set episode.
	 *
	 * @param Property\EpisodeProperty $episode
	 * @return TVSeriesType
	 */
	public function setEpisode(Property\EpisodeProperty $episode) {
		$this->episode = $episode;

		return $this;
	}

	/**
	 * Set music by.
	 *
	 * @param Property\MusicByProperty $musicBy
	 * @return TVSeriesType
	 */
	public function setMusicBy(Property\MusicByProperty $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set number of episodes.
	 *
	 * @param Property\NumberOfEpisodesProperty $numberOfEpisodes
	 * @return TVSeriesType
	 */
	public function setNumberOfEpisodes(Property\NumberOfEpisodesProperty $numberOfEpisodes) {
		$this->numberOfEpisodes = $numberOfEpisodes;

		return $this;
	}

	/**
	 * Set number of seasons.
	 *
	 * @param Property\NumberOfSeasonsProperty $numberOfSeasons
	 * @return TVSeriesType
	 */
	public function setNumberOfSeasons(Property\NumberOfSeasonsProperty $numberOfSeasons) {
		$this->numberOfSeasons = $numberOfSeasons;

		return $this;
	}

	/**
	 * Set production company.
	 *
	 * @param Property\ProductionCompanyProperty $productionCompany
	 * @return TVSeriesType
	 */
	public function setProductionCompany(Property\ProductionCompanyProperty $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set trailer.
	 *
	 * @param Property\TrailerProperty $trailer
	 * @return TVSeriesType
	 */
	public function setTrailer(Property\TrailerProperty $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}