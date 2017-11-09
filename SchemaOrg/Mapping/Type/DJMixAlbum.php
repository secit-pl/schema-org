<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DJMixAlbum.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DJMixAlbumType instead.
 * 
 * @method DJMixAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method DJMixAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method DJMixAlbum setDescription(Property\Description $description)
 * @method DJMixAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DJMixAlbum setIdentifier(Property\Identifier $identifier)
 * @method DJMixAlbum setImage(Property\Image $image)
 * @method DJMixAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DJMixAlbum setName(Property\Name $name)
 * @method DJMixAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DJMixAlbum setSameAs(Property\SameAs $sameAs)
 * @method DJMixAlbum setUrl(Property\Url $url)
 */
class DJMixAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DJMixAlbum';
	}
}