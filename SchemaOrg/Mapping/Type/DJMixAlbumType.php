<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DJMixAlbumType.
 * 
 * @method DJMixAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DJMixAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DJMixAlbumType setDescription(Property\DescriptionProperty $description)
 * @method DJMixAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DJMixAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DJMixAlbumType setImage(Property\ImageProperty $image)
 * @method DJMixAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DJMixAlbumType setName(Property\NameProperty $name)
 * @method DJMixAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DJMixAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method DJMixAlbumType setUrl(Property\UrlProperty $url)
 */
class DJMixAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DJMixAlbum';
	}
}