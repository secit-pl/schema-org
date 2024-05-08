<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The scientific study and treatment of defects, disorders, and malfunctions of speech and voice, as stuttering, lisping, or lalling, and of language disturbances, as aphasia or delayed language acquisition.
 * 
 * @method SpeechPathologyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SpeechPathologyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SpeechPathologyType setDescription(Property\DescriptionProperty $description)
 * @method SpeechPathologyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SpeechPathologyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SpeechPathologyType setImage(Property\ImageProperty $image)
 * @method SpeechPathologyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SpeechPathologyType setName(Property\NameProperty $name)
 * @method SpeechPathologyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SpeechPathologyType setSameAs(Property\SameAsProperty $sameAs)
 * @method SpeechPathologyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SpeechPathologyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SpeechPathologyType setUrl(Property\UrlProperty $url)
 */
class SpeechPathologyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SpeechPathology';
	}
}