<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TVEpisode.
 */
class TVEpisode {

	/**
	 * @var Property\CountryOfOrigin
	 */
	private $countryOfOrigin;

	/**
	 */
	private $id;

	/**
	 * @var Property\SubtitleLanguage
	 */
	private $subtitleLanguage;

	/**
	 * TVEpisode constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
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
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TVEpisode';
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
	 * Set country of origin.
	 * 
	 * @param Property\CountryOfOrigin $countryOfOrigin
	 * @return TVEpisode
	 */
	public function setCountryOfOrigin(Property\CountryOfOrigin $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}

	/**
	 * Set subtitle language.
	 * 
	 * @param Property\SubtitleLanguage $subtitleLanguage
	 * @return TVEpisode
	 */
	public function setSubtitleLanguage(Property\SubtitleLanguage $subtitleLanguage) {
		$this->subtitleLanguage = $subtitleLanguage;

		return $this;
	}
}