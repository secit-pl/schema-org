<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical device used for diagnostic purposes.
 * 
 * @method DiagnosticType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiagnosticType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiagnosticType setDescription(Property\DescriptionProperty $description)
 * @method DiagnosticType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiagnosticType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiagnosticType setImage(Property\ImageProperty $image)
 * @method DiagnosticType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiagnosticType setName(Property\NameProperty $name)
 * @method DiagnosticType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiagnosticType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiagnosticType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DiagnosticType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DiagnosticType setUrl(Property\UrlProperty $url)
 */
class DiagnosticType extends MedicalDevicePurposeType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Diagnostic';
	}
}