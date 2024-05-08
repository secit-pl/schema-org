<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical procedure intended primarily for therapeutic purposes, aimed at improving a health condition.
 * 
 * @method TherapeuticProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TherapeuticProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TherapeuticProcedureType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method TherapeuticProcedureType setCode(Property\CodeProperty $code)
 * @method TherapeuticProcedureType setDescription(Property\DescriptionProperty $description)
 * @method TherapeuticProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TherapeuticProcedureType setFollowup(Property\FollowupProperty $followup)
 * @method TherapeuticProcedureType setGuideline(Property\GuidelineProperty $guideline)
 * @method TherapeuticProcedureType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method TherapeuticProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TherapeuticProcedureType setImage(Property\ImageProperty $image)
 * @method TherapeuticProcedureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method TherapeuticProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TherapeuticProcedureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method TherapeuticProcedureType setName(Property\NameProperty $name)
 * @method TherapeuticProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TherapeuticProcedureType setPreparation(Property\PreparationProperty $preparation)
 * @method TherapeuticProcedureType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method TherapeuticProcedureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method TherapeuticProcedureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method TherapeuticProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method TherapeuticProcedureType setStatus(Property\StatusProperty $status)
 * @method TherapeuticProcedureType setStudy(Property\StudyProperty $study)
 * @method TherapeuticProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TherapeuticProcedureType setUrl(Property\UrlProperty $url)
 */
class TherapeuticProcedureType extends MedicalProcedureType {

	/**
	 * @var Property\AdverseOutcomeProperty
	 */
	private $adverseOutcome;

	/**
	 * @var Property\DoseScheduleProperty
	 */
	private $doseSchedule;

	/**
	 * @var Property\DrugProperty
	 */
	private $drug;

	/**
	 * Get adverse outcome.
	 *
	 * @return Property\AdverseOutcomeProperty
	 */
	public function getAdverseOutcome() {
		return $this->adverseOutcome;
	}

	/**
	 * Get dose schedule.
	 *
	 * @return Property\DoseScheduleProperty
	 */
	public function getDoseSchedule() {
		return $this->doseSchedule;
	}

	/**
	 * Get drug.
	 *
	 * @return Property\DrugProperty
	 */
	public function getDrug() {
		return $this->drug;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TherapeuticProcedure';
	}

	/**
	 * Set adverse outcome.
	 *
	 * @param Property\AdverseOutcomeProperty $adverseOutcome
	 * @return TherapeuticProcedureType
	 */
	public function setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome) {
		$this->adverseOutcome = $adverseOutcome;

		return $this;
	}

	/**
	 * Set dose schedule.
	 *
	 * @param Property\DoseScheduleProperty $doseSchedule
	 * @return TherapeuticProcedureType
	 */
	public function setDoseSchedule(Property\DoseScheduleProperty $doseSchedule) {
		$this->doseSchedule = $doseSchedule;

		return $this;
	}

	/**
	 * Set drug.
	 *
	 * @param Property\DrugProperty $drug
	 * @return TherapeuticProcedureType
	 */
	public function setDrug(Property\DrugProperty $drug) {
		$this->drug = $drug;

		return $this;
	}
}