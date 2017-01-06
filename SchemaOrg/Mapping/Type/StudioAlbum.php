<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StudioAlbum.
 * 
 * @method StudioAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method StudioAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method StudioAlbum setDescription(Property\Description $description)
 * @method StudioAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method StudioAlbum setImage(Property\Image $image)
 * @method StudioAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method StudioAlbum setName(Property\Name $name)
 * @method StudioAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method StudioAlbum setSameAs(Property\SameAs $sameAs)
 * @method StudioAlbum setUrl(Property\Url $url)
 */
class StudioAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StudioAlbum';
	}
}