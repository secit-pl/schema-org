<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastRelease.
 * 
 * @method BroadcastRelease setAdditionalType(Property\AdditionalType $additionalType)
 * @method BroadcastRelease setAlternateName(Property\AlternateName $alternateName)
 * @method BroadcastRelease setDescription(Property\Description $description)
 * @method BroadcastRelease setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
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