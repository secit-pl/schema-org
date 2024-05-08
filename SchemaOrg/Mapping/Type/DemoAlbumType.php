<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * DemoAlbum.
 * 
 * @method DemoAlbumType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DemoAlbumType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DemoAlbumType setDescription(Property\DescriptionProperty $description)
 * @method DemoAlbumType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DemoAlbumType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DemoAlbumType setImage(Property\ImageProperty $image)
 * @method DemoAlbumType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DemoAlbumType setName(Property\NameProperty $name)
 * @method DemoAlbumType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DemoAlbumType setSameAs(Property\SameAsProperty $sameAs)
 * @method DemoAlbumType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DemoAlbumType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DemoAlbumType setUrl(Property\UrlProperty $url)
 */
class DemoAlbumType extends MusicAlbumProductionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DemoAlbum';
	}
}