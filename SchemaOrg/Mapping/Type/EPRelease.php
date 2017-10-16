<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EPRelease.
 * 
 * @method EPRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method EPRelease setAlternateName(Property\AlternateName $alternateName)
 * @method EPRelease setDescription(Property\Description $description)
 * @method EPRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EPRelease setIdentifier(Property\Identifier $identifier)
 * @method EPRelease setImage(Property\Image $image)
 * @method EPRelease setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EPRelease setName(Property\Name $name)
 * @method EPRelease setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EPRelease setSameAs(Property\SameAs $sameAs)
 * @method EPRelease setUrl(Property\Url $url)
 */
class EPRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EPRelease';
	}
}