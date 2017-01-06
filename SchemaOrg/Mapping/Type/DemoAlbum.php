<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DemoAlbum.
 * 
 * @method DemoAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method DemoAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method DemoAlbum setDescription(Property\Description $description)
 * @method DemoAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DemoAlbum setImage(Property\Image $image)
 * @method DemoAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DemoAlbum setName(Property\Name $name)
 * @method DemoAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DemoAlbum setSameAs(Property\SameAs $sameAs)
 * @method DemoAlbum setUrl(Property\Url $url)
 */
class DemoAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DemoAlbum';
	}
}