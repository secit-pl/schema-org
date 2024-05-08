<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any feature associated or not with a medical condition. In medicine a symptom is generally subjective while a sign is objective.
 * 
 * @method MedicalSignOrSymptomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalSignOrSymptomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalSignOrSymptomType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method MedicalSignOrSymptomType setCode(Property\CodeProperty $code)
 * @method MedicalSignOrSymptomType setDescription(Property\DescriptionProperty $description)
 * @method MedicalSignOrSymptomType setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis)
 * @method MedicalSignOrSymptomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalSignOrSymptomType setDrug(Property\DrugProperty $drug)
 * @method MedicalSignOrSymptomType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method MedicalSignOrSymptomType setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis)
 * @method MedicalSignOrSymptomType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalSignOrSymptomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalSignOrSymptomType setImage(Property\ImageProperty $image)
 * @method MedicalSignOrSymptomType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalSignOrSymptomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalSignOrSymptomType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalSignOrSymptomType setName(Property\NameProperty $name)
 * @method MedicalSignOrSymptomType setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression)
 * @method MedicalSignOrSymptomType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method MedicalSignOrSymptomType setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication)
 * @method MedicalSignOrSymptomType setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment)
 * @method MedicalSignOrSymptomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalSignOrSymptomType setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention)
 * @method MedicalSignOrSymptomType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalSignOrSymptomType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalSignOrSymptomType setRiskFactor(Property\RiskFactorProperty $riskFactor)
 * @method MedicalSignOrSymptomType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalSignOrSymptomType setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention)
 * @method MedicalSignOrSymptomType setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom)
 * @method MedicalSignOrSymptomType setStage(Property\StageProperty $stage)
 * @method MedicalSignOrSymptomType setStatus(Property\StatusProperty $status)
 * @method MedicalSignOrSymptomType setStudy(Property\StudyProperty $study)
 * @method MedicalSignOrSymptomType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalSignOrSymptomType setTypicalTest(Property\TypicalTestProperty $typicalTest)
 * @method MedicalSignOrSymptomType setUrl(Property\UrlProperty $url)
 */
class MedicalSignOrSymptomType extends MedicalConditionType {

	/**
	 * @var Property\PossibleTreatmentProperty
	 */
	private $possibleTreatment;

	/**
	 * Get possible treatment.
	 *
	 * @return Property\PossibleTreatmentProperty
	 */
	public function getPossibleTreatment() {
		return $this->possibleTreatment;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalSignOrSymptom';
	}

	/**
	 * Set possible treatment.
	 *
	 * @param Property\PossibleTreatmentProperty $possibleTreatment
	 * @return MedicalSignOrSymptomType
	 */
	public function setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment) {
		$this->possibleTreatment = $possibleTreatment;

		return $this;
	}
}