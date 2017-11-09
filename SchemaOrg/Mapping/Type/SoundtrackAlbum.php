<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SoundtrackAlbum.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SoundtrackAlbumType instead.
 * 
 * @method SoundtrackAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method SoundtrackAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method SoundtrackAlbum setDescription(Property\Description $description)
 * @method SoundtrackAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SoundtrackAlbum setIdentifier(Property\Identifier $identifier)
 * @method SoundtrackAlbum setImage(Property\Image $image)
 * @method SoundtrackAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SoundtrackAlbum setName(Property\Name $name)
 * @method SoundtrackAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SoundtrackAlbum setSameAs(Property\SameAs $sameAs)
 * @method SoundtrackAlbum setUrl(Property\Url $url)
 */
class SoundtrackAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SoundtrackAlbum';
	}
}