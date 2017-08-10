<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RadioEpisode.
 * 
 * @method RadioEpisode setActor(Property\Actor $actor)
 * @method RadioEpisode setDirector(Property\Director $director)
 * @method RadioEpisode setEpisodeNumber(Property\EpisodeNumber $episodeNumber)
 * @method RadioEpisode setMusicBy(Property\MusicBy $musicBy)
 * @method RadioEpisode setPartOfSeason(Property\PartOfSeason $partOfSeason)
 * @method RadioEpisode setPartOfSeries(Property\PartOfSeries $partOfSeries)
 * @method RadioEpisode setProductionCompany(Property\ProductionCompany $productionCompany)
 * @method RadioEpisode setTrailer(Property\Trailer $trailer)
 */
class RadioEpisode extends Episode {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadioEpisode';
	}
}