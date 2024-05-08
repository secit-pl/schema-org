<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * DigitalFormat.
 * 
 * @method DigitalFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DigitalFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DigitalFormatType setDescription(Property\DescriptionProperty $description)
 * @method DigitalFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DigitalFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DigitalFormatType setImage(Property\ImageProperty $image)
 * @method DigitalFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DigitalFormatType setName(Property\NameProperty $name)
 * @method DigitalFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DigitalFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method DigitalFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DigitalFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DigitalFormatType setUrl(Property\UrlProperty $url)
 */
class DigitalFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DigitalFormat';
	}
}