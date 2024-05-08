<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A process of care relying upon counseling, dialogue and communication aimed at improving a mental health condition without use of drugs.
 * 
 * @method PsychologicalTreatmentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PsychologicalTreatmentType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method PsychologicalTreatmentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PsychologicalTreatmentType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method PsychologicalTreatmentType setCode(Property\CodeProperty $code)
 * @method PsychologicalTreatmentType setDescription(Property\DescriptionProperty $description)
 * @method PsychologicalTreatmentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PsychologicalTreatmentType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method PsychologicalTreatmentType setDrug(Property\DrugProperty $drug)
 * @method PsychologicalTreatmentType setFollowup(Property\FollowupProperty $followup)
 * @method PsychologicalTreatmentType setGuideline(Property\GuidelineProperty $guideline)
 * @method PsychologicalTreatmentType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method PsychologicalTreatmentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PsychologicalTreatmentType setImage(Property\ImageProperty $image)
 * @method PsychologicalTreatmentType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PsychologicalTreatmentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PsychologicalTreatmentType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PsychologicalTreatmentType setName(Property\NameProperty $name)
 * @method PsychologicalTreatmentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PsychologicalTreatmentType setPreparation(Property\PreparationProperty $preparation)
 * @method PsychologicalTreatmentType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method PsychologicalTreatmentType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PsychologicalTreatmentType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PsychologicalTreatmentType setSameAs(Property\SameAsProperty $sameAs)
 * @method PsychologicalTreatmentType setStatus(Property\StatusProperty $status)
 * @method PsychologicalTreatmentType setStudy(Property\StudyProperty $study)
 * @method PsychologicalTreatmentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PsychologicalTreatmentType setUrl(Property\UrlProperty $url)
 */
class PsychologicalTreatmentType extends TherapeuticProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PsychologicalTreatment';
	}
}