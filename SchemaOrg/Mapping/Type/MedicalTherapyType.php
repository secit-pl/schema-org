<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any medical intervention designed to prevent, treat, and cure human diseases and medical conditions, including both curative and palliative therapies. Medical therapies are typically processes of care relying upon pharmacotherapy, behavioral therapy, supportive therapy (with fluid or nutrition for example), or detoxification (e.g. hemodialysis) aimed at improving or preventing a health condition.
 * 
 * @method MedicalTherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalTherapyType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method MedicalTherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalTherapyType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method MedicalTherapyType setCode(Property\CodeProperty $code)
 * @method MedicalTherapyType setDescription(Property\DescriptionProperty $description)
 * @method MedicalTherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalTherapyType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method MedicalTherapyType setDrug(Property\DrugProperty $drug)
 * @method MedicalTherapyType setFollowup(Property\FollowupProperty $followup)
 * @method MedicalTherapyType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalTherapyType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method MedicalTherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalTherapyType setImage(Property\ImageProperty $image)
 * @method MedicalTherapyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalTherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalTherapyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalTherapyType setName(Property\NameProperty $name)
 * @method MedicalTherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalTherapyType setPreparation(Property\PreparationProperty $preparation)
 * @method MedicalTherapyType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method MedicalTherapyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalTherapyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalTherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalTherapyType setStatus(Property\StatusProperty $status)
 * @method MedicalTherapyType setStudy(Property\StudyProperty $study)
 * @method MedicalTherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalTherapyType setUrl(Property\UrlProperty $url)
 */
class MedicalTherapyType extends TherapeuticProcedureType {

	/**
	 * @var Property\ContraindicationProperty
	 */
	private $contraindication;

	/**
	 * @var Property\DuplicateTherapyProperty
	 */
	private $duplicateTherapy;

	/**
	 * @var Property\SeriousAdverseOutcomeProperty
	 */
	private $seriousAdverseOutcome;

	/**
	 * Get contraindication.
	 *
	 * @return Property\ContraindicationProperty
	 */
	public function getContraindication() {
		return $this->contraindication;
	}

	/**
	 * Get duplicate therapy.
	 *
	 * @return Property\DuplicateTherapyProperty
	 */
	public function getDuplicateTherapy() {
		return $this->duplicateTherapy;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalTherapy';
	}

	/**
	 * Get serious adverse outcome.
	 *
	 * @return Property\SeriousAdverseOutcomeProperty
	 */
	public function getSeriousAdverseOutcome() {
		return $this->seriousAdverseOutcome;
	}

	/**
	 * Set contraindication.
	 *
	 * @param Property\ContraindicationProperty $contraindication
	 * @return MedicalTherapyType
	 */
	public function setContraindication(Property\ContraindicationProperty $contraindication) {
		$this->contraindication = $contraindication;

		return $this;
	}

	/**
	 * Set duplicate therapy.
	 *
	 * @param Property\DuplicateTherapyProperty $duplicateTherapy
	 * @return MedicalTherapyType
	 */
	public function setDuplicateTherapy(Property\DuplicateTherapyProperty $duplicateTherapy) {
		$this->duplicateTherapy = $duplicateTherapy;

		return $this;
	}

	/**
	 * Set serious adverse outcome.
	 *
	 * @param Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome
	 * @return MedicalTherapyType
	 */
	public function setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome) {
		$this->seriousAdverseOutcome = $seriousAdverseOutcome;

		return $this;
	}
}