<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any complaint sensed and expressed by the patient (therefore defined as subjective) like stomachache, lower-back pain, or fatigue.
 * 
 * @method MedicalSymptomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalSymptomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalSymptomType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method MedicalSymptomType setCode(Property\CodeProperty $code)
 * @method MedicalSymptomType setDescription(Property\DescriptionProperty $description)
 * @method MedicalSymptomType setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis)
 * @method MedicalSymptomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalSymptomType setDrug(Property\DrugProperty $drug)
 * @method MedicalSymptomType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method MedicalSymptomType setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis)
 * @method MedicalSymptomType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalSymptomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalSymptomType setImage(Property\ImageProperty $image)
 * @method MedicalSymptomType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalSymptomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalSymptomType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalSymptomType setName(Property\NameProperty $name)
 * @method MedicalSymptomType setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression)
 * @method MedicalSymptomType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method MedicalSymptomType setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication)
 * @method MedicalSymptomType setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment)
 * @method MedicalSymptomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalSymptomType setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention)
 * @method MedicalSymptomType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalSymptomType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalSymptomType setRiskFactor(Property\RiskFactorProperty $riskFactor)
 * @method MedicalSymptomType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalSymptomType setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention)
 * @method MedicalSymptomType setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom)
 * @method MedicalSymptomType setStage(Property\StageProperty $stage)
 * @method MedicalSymptomType setStatus(Property\StatusProperty $status)
 * @method MedicalSymptomType setStudy(Property\StudyProperty $study)
 * @method MedicalSymptomType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalSymptomType setTypicalTest(Property\TypicalTestProperty $typicalTest)
 * @method MedicalSymptomType setUrl(Property\UrlProperty $url)
 */
class MedicalSymptomType extends MedicalSignOrSymptomType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalSymptom';
	}
}