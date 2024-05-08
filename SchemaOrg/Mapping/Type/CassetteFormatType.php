<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * CassetteFormat.
 * 
 * @method CassetteFormatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CassetteFormatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CassetteFormatType setDescription(Property\DescriptionProperty $description)
 * @method CassetteFormatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CassetteFormatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CassetteFormatType setImage(Property\ImageProperty $image)
 * @method CassetteFormatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CassetteFormatType setName(Property\NameProperty $name)
 * @method CassetteFormatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CassetteFormatType setSameAs(Property\SameAsProperty $sameAs)
 * @method CassetteFormatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CassetteFormatType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CassetteFormatType setUrl(Property\UrlProperty $url)
 */
class CassetteFormatType extends MusicReleaseFormatType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CassetteFormat';
	}
}