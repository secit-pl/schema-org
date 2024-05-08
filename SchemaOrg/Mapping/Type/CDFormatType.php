<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * CDFormat.
 * 
 * @method CDFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CDFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CDFormatType setDescription(Property\DescriptionProperty $description)
 * @method CDFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CDFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CDFormatType setImage(Property\ImageProperty $image)
 * @method CDFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CDFormatType setName(Property\NameProperty $name)
 * @method CDFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CDFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method CDFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CDFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CDFormatType setUrl(Property\UrlProperty $url)
 */
class CDFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CDFormat';
	}
}