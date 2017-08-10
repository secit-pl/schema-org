<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TVSeason.
 * 
 * @method TVSeason setActor(Property\Actor $actor)
 * @method TVSeason setDirector(Property\Director $director)
 * @method TVSeason setEndDate(Property\EndDate $endDate)
 * @method TVSeason setEpisode(Property\Episode $episode)
 * @method TVSeason setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes)
 * @method TVSeason setPartOfSeries(Property\PartOfSeries $partOfSeries)
 * @method TVSeason setProductionCompany(Property\ProductionCompany $productionCompany)
 * @method TVSeason setSeasonNumber(Property\SeasonNumber $seasonNumber)
 * @method TVSeason setStartDate(Property\StartDate $startDate)
 * @method TVSeason setTrailer(Property\Trailer $trailer)
 */
class TVSeason extends CreativeWorkSeason {

	/**
	 * @var Property\CountryOfOrigin
	 */
	private $countryOfOrigin;

	/**
	 * Get country of origin.
	 * 
	 * @return Property\CountryOfOrigin
	 */
	public function getCountryOfOrigin() {
		return $this->countryOfOrigin;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TVSeason';
	}

	/**
	 * Set country of origin.
	 * 
	 * @param Property\CountryOfOrigin $countryOfOrigin
	 * @return TVSeason
	 */
	public function setCountryOfOrigin(Property\CountryOfOrigin $countryOfOrigin) {
		$this->countryOfOrigin = $countryOfOrigin;

		return $this;
	}
}