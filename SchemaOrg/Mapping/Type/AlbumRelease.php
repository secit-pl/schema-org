<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AlbumRelease.
 * 
 * @method AlbumRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method AlbumRelease setAlternateName(Property\AlternateName $alternateName)
 * @method AlbumRelease setDescription(Property\Description $description)
 * @method AlbumRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AlbumRelease setImage(Property\Image $image)
 * @method AlbumRelease setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AlbumRelease setName(Property\Name $name)
 * @method AlbumRelease setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AlbumRelease setSameAs(Property\SameAs $sameAs)
 * @method AlbumRelease setUrl(Property\Url $url)
 */
class AlbumRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AlbumRelease';
	}
}