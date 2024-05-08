<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * SpokenWordAlbum.
 * 
 * @method SpokenWordAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SpokenWordAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SpokenWordAlbumType setDescription(Property\DescriptionProperty $description)
 * @method SpokenWordAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SpokenWordAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SpokenWordAlbumType setImage(Property\ImageProperty $image)
 * @method SpokenWordAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SpokenWordAlbumType setName(Property\NameProperty $name)
 * @method SpokenWordAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SpokenWordAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method SpokenWordAlbumType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SpokenWordAlbumType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SpokenWordAlbumType setUrl(Property\UrlProperty $url)
 */
class SpokenWordAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SpokenWordAlbum';
	}
}