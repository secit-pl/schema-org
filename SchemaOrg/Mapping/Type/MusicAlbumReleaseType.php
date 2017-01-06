<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicAlbumReleaseType.
 * 
 * @method MusicAlbumReleaseType setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicAlbumReleaseType setAlternateName(Property\AlternateName $alternateName)
 * @method MusicAlbumReleaseType setDescription(Property\Description $description)
 * @method MusicAlbumReleaseType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicAlbumReleaseType setImage(Property\Image $image)
 * @method MusicAlbumReleaseType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicAlbumReleaseType setName(Property\Name $name)
 * @method MusicAlbumReleaseType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicAlbumReleaseType setSameAs(Property\SameAs $sameAs)
 * @method MusicAlbumReleaseType setUrl(Property\Url $url)
 */
class MusicAlbumReleaseType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicAlbumReleaseType';
	}
}