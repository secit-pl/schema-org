<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RemixAlbum.
 * 
 * @method RemixAlbum setAdditionalType(Property\AdditionalType $additionalType)
 * @method RemixAlbum setAlternateName(Property\AlternateName $alternateName)
 * @method RemixAlbum setDescription(Property\Description $description)
 * @method RemixAlbum setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RemixAlbum setIdentifier(Property\Identifier $identifier)
 * @method RemixAlbum setImage(Property\Image $image)
 * @method RemixAlbum setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RemixAlbum setName(Property\Name $name)
 * @method RemixAlbum setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RemixAlbum setSameAs(Property\SameAs $sameAs)
 * @method RemixAlbum setUrl(Property\Url $url)
 */
class RemixAlbum extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RemixAlbum';
	}
}