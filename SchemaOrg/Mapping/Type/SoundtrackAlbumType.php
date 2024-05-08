<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * SoundtrackAlbum.
 * 
 * @method SoundtrackAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SoundtrackAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SoundtrackAlbumType setDescription(Property\DescriptionProperty $description)
 * @method SoundtrackAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SoundtrackAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SoundtrackAlbumType setImage(Property\ImageProperty $image)
 * @method SoundtrackAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SoundtrackAlbumType setName(Property\NameProperty $name)
 * @method SoundtrackAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SoundtrackAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method SoundtrackAlbumType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SoundtrackAlbumType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SoundtrackAlbumType setUrl(Property\UrlProperty $url)
 */
class SoundtrackAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SoundtrackAlbum';
	}
}