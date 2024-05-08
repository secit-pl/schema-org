<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * EPRelease.
 * 
 * @method EPReleaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EPReleaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EPReleaseType setDescription(Property\DescriptionProperty $description)
 * @method EPReleaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EPReleaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EPReleaseType setImage(Property\ImageProperty $image)
 * @method EPReleaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EPReleaseType setName(Property\NameProperty $name)
 * @method EPReleaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EPReleaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method EPReleaseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EPReleaseType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method EPReleaseType setUrl(Property\UrlProperty $url)
 */
class EPReleaseType extends MusicAlbumReleaseType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EPRelease';
	}
}