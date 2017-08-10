<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioSeason.
 * 
 * @method RadioSeason setActor(Property\Actor $actor)
 * @method RadioSeason setDirector(Property\Director $director)
 * @method RadioSeason setEndDate(Property\EndDate $endDate)
 * @method RadioSeason setEpisode(Property\Episode $episode)
 * @method RadioSeason setNumberOfEpisodes(Property\NumberOfEpisodes $numberOfEpisodes)
 * @method RadioSeason setPartOfSeries(Property\PartOfSeries $partOfSeries)
 * @method RadioSeason setProductionCompany(Property\ProductionCompany $productionCompany)
 * @method RadioSeason setSeasonNumber(Property\SeasonNumber $seasonNumber)
 * @method RadioSeason setStartDate(Property\StartDate $startDate)
 * @method RadioSeason setTrailer(Property\Trailer $trailer)
 */
class RadioSeason extends CreativeWorkSeason {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioSeason';
	}
}