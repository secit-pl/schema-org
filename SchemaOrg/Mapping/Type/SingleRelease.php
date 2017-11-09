<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SingleRelease.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\SingleReleaseType instead.
 * 
 * @method SingleRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method SingleRelease setAlternateName(Property\AlternateName $alternateName)
 * @method SingleRelease setDescription(Property\Description $description)
 * @method SingleRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SingleRelease setIdentifier(Property\Identifier $identifier)
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