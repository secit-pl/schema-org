<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with the study, treatment, and prevention of mental illness, using both medical and psychological therapies.
 * 
 * @method PsychiatricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PsychiatricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PsychiatricType setDescription(Property\DescriptionProperty $description)
 * @method PsychiatricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PsychiatricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PsychiatricType setImage(Property\ImageProperty $image)
 * @method PsychiatricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PsychiatricType setName(Property\NameProperty $name)
 * @method PsychiatricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PsychiatricType setSameAs(Property\SameAsProperty $sameAs)
 * @method PsychiatricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PsychiatricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PsychiatricType setUrl(Property\UrlProperty $url)
 */
class PsychiatricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Psychiatric';
	}
}