<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RemixAlbumType.
 * 
 * @method RemixAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RemixAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RemixAlbumType setDescription(Property\DescriptionProperty $description)
 * @method RemixAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RemixAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RemixAlbumType setImage(Property\ImageProperty $image)
 * @method RemixAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RemixAlbumType setName(Property\NameProperty $name)
 * @method RemixAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RemixAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method RemixAlbumType setUrl(Property\UrlProperty $url)
 */
class RemixAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RemixAlbum';
	}
}