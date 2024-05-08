<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * LiveAlbum.
 * 
 * @method LiveAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LiveAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LiveAlbumType setDescription(Property\DescriptionProperty $description)
 * @method LiveAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LiveAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LiveAlbumType setImage(Property\ImageProperty $image)
 * @method LiveAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LiveAlbumType setName(Property\NameProperty $name)
 * @method LiveAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LiveAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method LiveAlbumType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LiveAlbumType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LiveAlbumType setUrl(Property\UrlProperty $url)
 */
class LiveAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LiveAlbum';
	}
}