<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Classification of the album by its type of content: soundtrack, live album, studio album, etc.
 * 
 * @method MusicAlbumProductionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicAlbumProductionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicAlbumProductionType setDescription(Property\DescriptionProperty $description)
 * @method MusicAlbumProductionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicAlbumProductionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicAlbumProductionType setImage(Property\ImageProperty $image)
 * @method MusicAlbumProductionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicAlbumProductionType setName(Property\NameProperty $name)
 * @method MusicAlbumProductionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicAlbumProductionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicAlbumProductionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusicAlbumProductionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MusicAlbumProductionType setUrl(Property\UrlProperty $url)
 */
class MusicAlbumProductionType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicAlbumProductionType';
	}
}