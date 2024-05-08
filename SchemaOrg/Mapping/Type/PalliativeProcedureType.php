<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical procedure intended primarily for palliative purposes, aimed at relieving the symptoms of an underlying health condition.
 * 
 * @method PalliativeProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PalliativeProcedureType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method PalliativeProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PalliativeProcedureType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method PalliativeProcedureType setCode(Property\CodeProperty $code)
 * @method PalliativeProcedureType setContraindication(Property\ContraindicationProperty $contraindication)
 * @method PalliativeProcedureType setDescription(Property\DescriptionProperty $description)
 * @method PalliativeProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PalliativeProcedureType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method PalliativeProcedureType setDrug(Property\DrugProperty $drug)
 * @method PalliativeProcedureType setDuplicateTherapy(Property\DuplicateTherapyProperty $duplicateTherapy)
 * @method PalliativeProcedureType setFollowup(Property\FollowupProperty $followup)
 * @method PalliativeProcedureType setGuideline(Property\GuidelineProperty $guideline)
 * @method PalliativeProcedureType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method PalliativeProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PalliativeProcedureType setImage(Property\ImageProperty $image)
 * @method PalliativeProcedureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PalliativeProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PalliativeProcedureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PalliativeProcedureType setName(Property\NameProperty $name)
 * @method PalliativeProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PalliativeProcedureType setPreparation(Property\PreparationProperty $preparation)
 * @method PalliativeProcedureType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method PalliativeProcedureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PalliativeProcedureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PalliativeProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method PalliativeProcedureType setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome)
 * @method PalliativeProcedureType setStatus(Property\StatusProperty $status)
 * @method PalliativeProcedureType setStudy(Property\StudyProperty $study)
 * @method PalliativeProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PalliativeProcedureType setUrl(Property\UrlProperty $url)
 */
class PalliativeProcedureType extends MedicalTherapyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PalliativeProcedure';
	}
}