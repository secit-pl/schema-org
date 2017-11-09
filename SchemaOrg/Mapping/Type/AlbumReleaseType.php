<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AlbumReleaseType.
 * 
 * @method AlbumReleaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AlbumReleaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AlbumReleaseType setDescription(Property\DescriptionProperty $description)
 * @method AlbumReleaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AlbumReleaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AlbumReleaseType setImage(Property\ImageProperty $image)
 * @method AlbumReleaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AlbumReleaseType setName(Property\NameProperty $name)
 * @method AlbumReleaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AlbumReleaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method AlbumReleaseType setUrl(Property\UrlProperty $url)
 */
class AlbumReleaseType extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AlbumRelease';
	}
}