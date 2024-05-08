<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any physical manifestation of a person's medical condition discoverable by objective diagnostic tests or physical examination.
 * 
 * @method MedicalSignType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalSignType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalSignType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method MedicalSignType setCode(Property\CodeProperty $code)
 * @method MedicalSignType setDescription(Property\DescriptionProperty $description)
 * @method MedicalSignType setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis)
 * @method MedicalSignType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalSignType setDrug(Property\DrugProperty $drug)
 * @method MedicalSignType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method MedicalSignType setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis)
 * @method MedicalSignType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalSignType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalSignType setImage(Property\ImageProperty $image)
 * @method MedicalSignType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalSignType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalSignType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalSignType setName(Property\NameProperty $name)
 * @method MedicalSignType setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression)
 * @method MedicalSignType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method MedicalSignType setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication)
 * @method MedicalSignType setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment)
 * @method MedicalSignType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalSignType setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention)
 * @method MedicalSignType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalSignType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalSignType setRiskFactor(Property\RiskFactorProperty $riskFactor)
 * @method MedicalSignType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalSignType setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention)
 * @method MedicalSignType setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom)
 * @method MedicalSignType setStage(Property\StageProperty $stage)
 * @method MedicalSignType setStatus(Property\StatusProperty $status)
 * @method MedicalSignType setStudy(Property\StudyProperty $study)
 * @method MedicalSignType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalSignType setTypicalTest(Property\TypicalTestProperty $typicalTest)
 * @method MedicalSignType setUrl(Property\UrlProperty $url)
 */
class MedicalSignType extends MedicalSignOrSymptomType {

	/**
	 * @var Property\IdentifyingExamProperty
	 */
	private $identifyingExam;

	/**
	 * @var Property\IdentifyingTestProperty
	 */
	private $identifyingTest;

	/**
	 * Get identifying exam.
	 *
	 * @return Property\IdentifyingExamProperty
	 */
	public function getIdentifyingExam() {
		return $this->identifyingExam;
	}

	/**
	 * Get identifying test.
	 *
	 * @return Property\IdentifyingTestProperty
	 */
	public function getIdentifyingTest() {
		return $this->identifyingTest;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalSign';
	}

	/**
	 * Set identifying exam.
	 *
	 * @param Property\IdentifyingExamProperty $identifyingExam
	 * @return MedicalSignType
	 */
	public function setIdentifyingExam(Property\IdentifyingExamProperty $identifyingExam) {
		$this->identifyingExam = $identifyingExam;

		return $this;
	}

	/**
	 * Set identifying test.
	 *
	 * @param Property\IdentifyingTestProperty $identifyingTest
	 * @return MedicalSignType
	 */
	public function setIdentifyingTest(Property\IdentifyingTestProperty $identifyingTest) {
		$this->identifyingTest = $identifyingTest;

		return $this;
	}
}