<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SingleRelease.
 * 
 * @method SingleRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method SingleRelease setAlternateName(Property\AlternateName $alternateName)
 * @method SingleRelease setDescription(Property\Description $description)
 * @method SingleRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SingleRelease setImage(Property\Image $image)
 * @method SingleRelease setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SingleRelease setName(Property\Name $name)
 * @method SingleRelease setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SingleRelease setSameAs(Property\SameAs $sameAs)
 * @method SingleRelease setUrl(Property\Url $url)
 */
class SingleRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleRelease';
	}
}