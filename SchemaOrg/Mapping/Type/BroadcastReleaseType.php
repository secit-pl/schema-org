<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastReleaseType.
 * 
 * @method BroadcastReleaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BroadcastReleaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BroadcastReleaseType setDescription(Property\DescriptionProperty $description)
 * @method BroadcastReleaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BroadcastReleaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BroadcastReleaseType setImage(Property\ImageProperty $image)
 * @method BroadcastReleaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BroadcastReleaseType setName(Property\NameProperty $name)
 * @method BroadcastReleaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BroadcastReleaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastReleaseType setUrl(Property\UrlProperty $url)
 */
class BroadcastReleaseType extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastRelease';
	}
}