<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SingleReleaseType.
 * 
 * @method SingleReleaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SingleReleaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SingleReleaseType setDescription(Property\DescriptionProperty $description)
 * @method SingleReleaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SingleReleaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SingleReleaseType setImage(Property\ImageProperty $image)
 * @method SingleReleaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SingleReleaseType setName(Property\NameProperty $name)
 * @method SingleReleaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SingleReleaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method SingleReleaseType setUrl(Property\UrlProperty $url)
 */
class SingleReleaseType extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SingleRelease';
	}
}