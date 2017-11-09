<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastRelease.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BroadcastReleaseType instead.
 * 
 * @method BroadcastRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method BroadcastRelease setAlternateName(Property\AlternateName $alternateName)
 * @method BroadcastRelease setDescription(Property\Description $description)
 * @method BroadcastRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BroadcastRelease setIdentifier(Property\Identifier $identifier)
 * @method BroadcastRelease setImage(Property\Image $image)
 * @method BroadcastRelease setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BroadcastRelease setName(Property\Name $name)
 * @method BroadcastRelease setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BroadcastRelease setSameAs(Property\SameAs $sameAs)
 * @method BroadcastRelease setUrl(Property\Url $url)
 */
class BroadcastRelease extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastRelease';
	}
}