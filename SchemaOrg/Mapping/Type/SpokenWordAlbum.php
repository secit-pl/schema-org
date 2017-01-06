<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SpokenWordAlbum.
 * 
 * @method SpokenWordAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method SpokenWordAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method SpokenWordAlbum setDescription(Property\Description $description)
 * @method SpokenWordAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SpokenWordAlbum setImage(Property\Image $image)
 * @method SpokenWordAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SpokenWordAlbum setName(Property\Name $name)
 * @method SpokenWordAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SpokenWordAlbum setSameAs(Property\SameAs $sameAs)
 * @method SpokenWordAlbum setUrl(Property\Url $url)
 */
class SpokenWordAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SpokenWordAlbum';
	}
}