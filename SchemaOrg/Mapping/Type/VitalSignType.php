<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Vital signs are measures of various physiological functions in order to assess the most basic body functions.
 * 
 * @method VitalSignType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VitalSignType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VitalSignType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method VitalSignType setCode(Property\CodeProperty $code)
 * @method VitalSignType setDescription(Property\DescriptionProperty $description)
 * @method VitalSignType setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis)
 * @method VitalSignType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VitalSignType setDrug(Property\DrugProperty $drug)
 * @method VitalSignType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method VitalSignType setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis)
 * @method VitalSignType setGuideline(Property\GuidelineProperty $guideline)
 * @method VitalSignType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VitalSignType setIdentifyingExam(Property\IdentifyingExamProperty $identifyingExam)
 * @method VitalSignType setIdentifyingTest(Property\IdentifyingTestProperty $identifyingTest)
 * @method VitalSignType setImage(Property\ImageProperty $image)
 * @method VitalSignType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method VitalSignType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VitalSignType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method VitalSignType setName(Property\NameProperty $name)
 * @method VitalSignType setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression)
 * @method VitalSignType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method VitalSignType setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication)
 * @method VitalSignType setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment)
 * @method VitalSignType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VitalSignType setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention)
 * @method VitalSignType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method VitalSignType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method VitalSignType setRiskFactor(Property\RiskFactorProperty $riskFactor)
 * @method VitalSignType setSameAs(Property\SameAsProperty $sameAs)
 * @method VitalSignType setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention)
 * @method VitalSignType setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom)
 * @method VitalSignType setStage(Property\StageProperty $stage)
 * @method VitalSignType setStatus(Property\StatusProperty $status)
 * @method VitalSignType setStudy(Property\StudyProperty $study)
 * @method VitalSignType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VitalSignType setTypicalTest(Property\TypicalTestProperty $typicalTest)
 * @method VitalSignType setUrl(Property\UrlProperty $url)
 */
class VitalSignType extends MedicalSignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VitalSign';
	}
}