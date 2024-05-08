<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Format of this release (the type of recording media used, i.e. compact disc, digital media, LP, etc.).
 * 
 * @method MusicReleaseFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusicReleaseFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusicReleaseFormatType setDescription(Property\DescriptionProperty $description)
 * @method MusicReleaseFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusicReleaseFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusicReleaseFormatType setImage(Property\ImageProperty $image)
 * @method MusicReleaseFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusicReleaseFormatType setName(Property\NameProperty $name)
 * @method MusicReleaseFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusicReleaseFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusicReleaseFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusicReleaseFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MusicReleaseFormatType setUrl(Property\UrlProperty $url)
 */
class MusicReleaseFormatType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicReleaseFormatType';
	}
}