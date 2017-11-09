<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StudioAlbumType.
 * 
 * @method StudioAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StudioAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StudioAlbumType setDescription(Property\DescriptionProperty $description)
 * @method StudioAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StudioAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StudioAlbumType setImage(Property\ImageProperty $image)
 * @method StudioAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StudioAlbumType setName(Property\NameProperty $name)
 * @method StudioAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StudioAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method StudioAlbumType setUrl(Property\UrlProperty $url)
 */
class StudioAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StudioAlbum';
	}
}