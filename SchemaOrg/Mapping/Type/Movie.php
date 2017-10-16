<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Movie.
 */
class Movie {

	/**
	 * @var Property\Actor
	 */
	private $actor;

	/**
	 * @var Property\CountryOfOrigin
	 */
	private $countryOfOrigin;

	/**
	 * @var Property\Director
	 */
	private $director;

	/**
	 */
	private $id;

	/**
	 * @var Property\MusicBy
	 */
	private $musicBy;

	/**
	 * @var Property\ProductionCompany
	 */
	private $productionCompany;

	/**
	 * @var Property\SubtitleLanguage
	 */
	private $subtitleLanguage;

	/**
	 * @var Property\Trailer
	 */
	private $trailer;

	/**
	 * Movie constructor.
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
		return 'https://schema.org/Movie';
	}

	/**
	 * Get subtitle language.
	 * 
	 * @return Property\SubtitleLanguage
	 */
	public function getSubtitleLanguage() {
		return $this->subtitleLanguage;
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
	 * @return Movie
	 */
	public function setActor(Property\Actor $actor) {
		$this->actor = $actor;

		return $this;
	}

	/**
	 * Set country of origin.
	 * 
	 * @param Property\CountryOfOrigin $countryOfOrigin
	 * @return Movie
	 */
	public function setCountryOfOrigin(Property\CountryOfOrigin $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}

	/**
	 * Set director.
	 * 
	 * @param Property\Director $director
	 * @return Movie
	 */
	public function setDirector(Property\Director $director) {
		$this->director = $director;

		return $this;
	}

	/**
	 * Set music by.
	 * 
	 * @param Property\MusicBy $musicBy
	 * @return Movie
	 */
	public function setMusicBy(Property\MusicBy $musicBy) {
		$this->musicBy = $musicBy;

		return $this;
	}

	/**
	 * Set production company.
	 * 
	 * @param Property\ProductionCompany $productionCompany
	 * @return Movie
	 */
	public function setProductionCompany(Property\ProductionCompany $productionCompany) {
		$this->productionCompany = $productionCompany;

		return $this;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguage $subtitleLanguage
	 * @return Movie
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguage $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}

	/**
	 * Set trailer.
	 * 
	 * @param Property\Trailer $trailer
	 * @return Movie
	 */
	public function setTrailer(Property\Trailer $trailer) {
		$this->trailer = $trailer;

		return $this;
	}
}