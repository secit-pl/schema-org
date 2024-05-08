<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Book format: Audiobook. This is an enumerated value for use with the bookFormat property. There is also a type 'Audiobook' in the bib extension which includes Audiobook specific properties.
 * 
 * @method AudiobookFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AudiobookFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AudiobookFormatType setDescription(Property\DescriptionProperty $description)
 * @method AudiobookFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AudiobookFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AudiobookFormatType setImage(Property\ImageProperty $image)
 * @method AudiobookFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AudiobookFormatType setName(Property\NameProperty $name)
 * @method AudiobookFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AudiobookFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method AudiobookFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AudiobookFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AudiobookFormatType setUrl(Property\UrlProperty $url)
 */
class AudiobookFormatType extends BookFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AudiobookFormat';
	}
}