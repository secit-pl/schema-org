<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any condition of the human body that affects the normal functioning of a person, whether physically or mentally. Includes diseases, injuries, disabilities, disorders, syndromes, etc.
 * 
 * @method MedicalConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalConditionType setCode(Property\CodeProperty $code)
 * @method MedicalConditionType setDescription(Property\DescriptionProperty $description)
 * @method MedicalConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalConditionType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalConditionType setImage(Property\ImageProperty $image)
 * @method MedicalConditionType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalConditionType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalConditionType setName(Property\NameProperty $name)
 * @method MedicalConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalConditionType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalConditionType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalConditionType setStudy(Property\StudyProperty $study)
 * @method MedicalConditionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalConditionType setUrl(Property\UrlProperty $url)
 */
class MedicalConditionType extends MedicalEntityType {

	/**
	 * @var Property\AssociatedAnatomyProperty
	 */
	private $associatedAnatomy;

	/**
	 * @var Property\DifferentialDiagnosisProperty
	 */
	private $differentialDiagnosis;

	/**
	 * @var Property\DrugProperty
	 */
	private $drug;

	/**
	 * @var Property\EpidemiologyProperty
	 */
	private $epidemiology;

	/**
	 * @var Property\ExpectedPrognosisProperty
	 */
	private $expectedPrognosis;

	/**
	 * @var Property\NaturalProgressionProperty
	 */
	private $naturalProgression;

	/**
	 * @var Property\PathophysiologyProperty
	 */
	private $pathophysiology;

	/**
	 * @var Property\PossibleComplicationProperty
	 */
	private $possibleComplication;

	/**
	 * @var Property\PossibleTreatmentProperty
	 */
	private $possibleTreatment;

	/**
	 * @var Property\PrimaryPreventionProperty
	 */
	private $primaryPrevention;

	/**
	 * @var Property\RiskFactorProperty
	 */
	private $riskFactor;

	/**
	 * @var Property\SecondaryPreventionProperty
	 */
	private $secondaryPrevention;

	/**
	 * @var Property\SignOrSymptomProperty
	 */
	private $signOrSymptom;

	/**
	 * @var Property\StageProperty
	 */
	private $stage;

	/**
	 * @var Property\StatusProperty
	 */
	private $status;

	/**
	 * @var Property\TypicalTestProperty
	 */
	private $typicalTest;

	/**
	 * Get associated anatomy.
	 *
	 * @return Property\AssociatedAnatomyProperty
	 */
	public function getAssociatedAnatomy() {
		return $this->associatedAnatomy;
	}

	/**
	 * Get differential diagnosis.
	 *
	 * @return Property\DifferentialDiagnosisProperty
	 */
	public function getDifferentialDiagnosis() {
		return $this->differentialDiagnosis;
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
	 * Get epidemiology.
	 *
	 * @return Property\EpidemiologyProperty
	 */
	public function getEpidemiology() {
		return $this->epidemiology;
	}

	/**
	 * Get expected prognosis.
	 *
	 * @return Property\ExpectedPrognosisProperty
	 */
	public function getExpectedPrognosis() {
		return $this->expectedPrognosis;
	}

	/**
	 * Get natural progression.
	 *
	 * @return Property\NaturalProgressionProperty
	 */
	public function getNaturalProgression() {
		return $this->naturalProgression;
	}

	/**
	 * Get pathophysiology.
	 *
	 * @return Property\PathophysiologyProperty
	 */
	public function getPathophysiology() {
		return $this->pathophysiology;
	}

	/**
	 * Get possible complication.
	 *
	 * @return Property\PossibleComplicationProperty
	 */
	public function getPossibleComplication() {
		return $this->possibleComplication;
	}

	/**
	 * Get possible treatment.
	 *
	 * @return Property\PossibleTreatmentProperty
	 */
	public function getPossibleTreatment() {
		return $this->possibleTreatment;
	}

	/**
	 * Get primary prevention.
	 *
	 * @return Property\PrimaryPreventionProperty
	 */
	public function getPrimaryPrevention() {
		return $this->primaryPrevention;
	}

	/**
	 * Get risk factor.
	 *
	 * @return Property\RiskFactorProperty
	 */
	public function getRiskFactor() {
		return $this->riskFactor;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalCondition';
	}

	/**
	 * Get secondary prevention.
	 *
	 * @return Property\SecondaryPreventionProperty
	 */
	public function getSecondaryPrevention() {
		return $this->secondaryPrevention;
	}

	/**
	 * Get sign or symptom.
	 *
	 * @return Property\SignOrSymptomProperty
	 */
	public function getSignOrSymptom() {
		return $this->signOrSymptom;
	}

	/**
	 * Get stage.
	 *
	 * @return Property\StageProperty
	 */
	public function getStage() {
		return $this->stage;
	}

	/**
	 * Get status.
	 *
	 * @return Property\StatusProperty
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Get typical test.
	 *
	 * @return Property\TypicalTestProperty
	 */
	public function getTypicalTest() {
		return $this->typicalTest;
	}

	/**
	 * Set associated anatomy.
	 *
	 * @param Property\AssociatedAnatomyProperty $associatedAnatomy
	 * @return MedicalConditionType
	 */
	public function setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy) {
		$this->associatedAnatomy = $associatedAnatomy;

		return $this;
	}

	/**
	 * Set differential diagnosis.
	 *
	 * @param Property\DifferentialDiagnosisProperty $differentialDiagnosis
	 * @return MedicalConditionType
	 */
	public function setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis) {
		$this->differentialDiagnosis = $differentialDiagnosis;

		return $this;
	}

	/**
	 * Set drug.
	 *
	 * @param Property\DrugProperty $drug
	 * @return MedicalConditionType
	 */
	public function setDrug(Property\DrugProperty $drug) {
		$this->drug = $drug;

		return $this;
	}

	/**
	 * Set epidemiology.
	 *
	 * @param Property\EpidemiologyProperty $epidemiology
	 * @return MedicalConditionType
	 */
	public function setEpidemiology(Property\EpidemiologyProperty $epidemiology) {
		$this->epidemiology = $epidemiology;

		return $this;
	}

	/**
	 * Set expected prognosis.
	 *
	 * @param Property\ExpectedPrognosisProperty $expectedPrognosis
	 * @return MedicalConditionType
	 */
	public function setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis) {
		$this->expectedPrognosis = $expectedPrognosis;

		return $this;
	}

	/**
	 * Set natural progression.
	 *
	 * @param Property\NaturalProgressionProperty $naturalProgression
	 * @return MedicalConditionType
	 */
	public function setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression) {
		$this->naturalProgression = $naturalProgression;

		return $this;
	}

	/**
	 * Set pathophysiology.
	 *
	 * @param Property\PathophysiologyProperty $pathophysiology
	 * @return MedicalConditionType
	 */
	public function setPathophysiology(Property\PathophysiologyProperty $pathophysiology) {
		$this->pathophysiology = $pathophysiology;

		return $this;
	}

	/**
	 * Set possible complication.
	 *
	 * @param Property\PossibleComplicationProperty $possibleComplication
	 * @return MedicalConditionType
	 */
	public function setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication) {
		$this->possibleComplication = $possibleComplication;

		return $this;
	}

	/**
	 * Set possible treatment.
	 *
	 * @param Property\PossibleTreatmentProperty $possibleTreatment
	 * @return MedicalConditionType
	 */
	public function setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment) {
		$this->possibleTreatment = $possibleTreatment;

		return $this;
	}

	/**
	 * Set primary prevention.
	 *
	 * @param Property\PrimaryPreventionProperty $primaryPrevention
	 * @return MedicalConditionType
	 */
	public function setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention) {
		$this->primaryPrevention = $primaryPrevention;

		return $this;
	}

	/**
	 * Set risk factor.
	 *
	 * @param Property\RiskFactorProperty $riskFactor
	 * @return MedicalConditionType
	 */
	public function setRiskFactor(Property\RiskFactorProperty $riskFactor) {
		$this->riskFactor = $riskFactor;

		return $this;
	}

	/**
	 * Set secondary prevention.
	 *
	 * @param Property\SecondaryPreventionProperty $secondaryPrevention
	 * @return MedicalConditionType
	 */
	public function setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention) {
		$this->secondaryPrevention = $secondaryPrevention;

		return $this;
	}

	/**
	 * Set sign or symptom.
	 *
	 * @param Property\SignOrSymptomProperty $signOrSymptom
	 * @return MedicalConditionType
	 */
	public function setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom) {
		$this->signOrSymptom = $signOrSymptom;

		return $this;
	}

	/**
	 * Set stage.
	 *
	 * @param Property\StageProperty $stage
	 * @return MedicalConditionType
	 */
	public function setStage(Property\StageProperty $stage) {
		$this->stage = $stage;

		return $this;
	}

	/**
	 * Set status.
	 *
	 * @param Property\StatusProperty $status
	 * @return MedicalConditionType
	 */
	public function setStatus(Property\StatusProperty $status) {
		$this->status = $status;

		return $this;
	}

	/**
	 * Set typical test.
	 *
	 * @param Property\TypicalTestProperty $typicalTest
	 * @return MedicalConditionType
	 */
	public function setTypicalTest(Property\TypicalTestProperty $typicalTest) {
		$this->typicalTest = $typicalTest;

		return $this;
	}
}