<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MixtapeAlbumType.
 * 
 * @method MixtapeAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MixtapeAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MixtapeAlbumType setDescription(Property\DescriptionProperty $description)
 * @method MixtapeAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MixtapeAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MixtapeAlbumType setImage(Property\ImageProperty $image)
 * @method MixtapeAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MixtapeAlbumType setName(Property\NameProperty $name)
 * @method MixtapeAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MixtapeAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method MixtapeAlbumType setUrl(Property\UrlProperty $url)
 */
class MixtapeAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MixtapeAlbum';
	}
}