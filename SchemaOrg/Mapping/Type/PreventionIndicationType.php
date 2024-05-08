<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An indication for preventing an underlying condition, symptom, etc.
 * 
 * @method PreventionIndicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PreventionIndicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PreventionIndicationType setCode(Property\CodeProperty $code)
 * @method PreventionIndicationType setDescription(Property\DescriptionProperty $description)
 * @method PreventionIndicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PreventionIndicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method PreventionIndicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PreventionIndicationType setImage(Property\ImageProperty $image)
 * @method PreventionIndicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PreventionIndicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PreventionIndicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PreventionIndicationType setName(Property\NameProperty $name)
 * @method PreventionIndicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PreventionIndicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PreventionIndicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PreventionIndicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PreventionIndicationType setStudy(Property\StudyProperty $study)
 * @method PreventionIndicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PreventionIndicationType setUrl(Property\UrlProperty $url)
 */
class PreventionIndicationType extends MedicalIndicationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PreventionIndication';
	}
}