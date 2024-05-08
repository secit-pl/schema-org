<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An indication for treating an underlying condition, symptom, etc.
 * 
 * @method TreatmentIndicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TreatmentIndicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TreatmentIndicationType setCode(Property\CodeProperty $code)
 * @method TreatmentIndicationType setDescription(Property\DescriptionProperty $description)
 * @method TreatmentIndicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TreatmentIndicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method TreatmentIndicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TreatmentIndicationType setImage(Property\ImageProperty $image)
 * @method TreatmentIndicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method TreatmentIndicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TreatmentIndicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method TreatmentIndicationType setName(Property\NameProperty $name)
 * @method TreatmentIndicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TreatmentIndicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method TreatmentIndicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method TreatmentIndicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method TreatmentIndicationType setStudy(Property\StudyProperty $study)
 * @method TreatmentIndicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TreatmentIndicationType setUrl(Property\UrlProperty $url)
 */
class TreatmentIndicationType extends MedicalIndicationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TreatmentIndication';
	}
}