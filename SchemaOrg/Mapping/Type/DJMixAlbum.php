<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DJMixAlbum.
 * 
 * @method DJMixAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method DJMixAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method DJMixAlbum setDescription(Property\Description $description)
 * @method DJMixAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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