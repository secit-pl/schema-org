<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The kind of release which this album is: single, EP or album.
 * 
 * @method MusicAlbumReleaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicAlbumReleaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicAlbumReleaseType setDescription(Property\DescriptionProperty $description)
 * @method MusicAlbumReleaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicAlbumReleaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicAlbumReleaseType setImage(Property\ImageProperty $image)
 * @method MusicAlbumReleaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicAlbumReleaseType setName(Property\NameProperty $name)
 * @method MusicAlbumReleaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicAlbumReleaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicAlbumReleaseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusicAlbumReleaseType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MusicAlbumReleaseType setUrl(Property\UrlProperty $url)
 */
class MusicAlbumReleaseType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicAlbumReleaseType';
	}
}