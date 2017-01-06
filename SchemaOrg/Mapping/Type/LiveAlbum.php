<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LiveAlbum.
 * 
 * @method LiveAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method LiveAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method LiveAlbum setDescription(Property\Description $description)
 * @method LiveAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LiveAlbum setImage(Property\Image $image)
 * @method LiveAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LiveAlbum setName(Property\Name $name)
 * @method LiveAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LiveAlbum setSameAs(Property\SameAs $sameAs)
 * @method LiveAlbum setUrl(Property\Url $url)
 */
class LiveAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiveAlbum';
	}
}