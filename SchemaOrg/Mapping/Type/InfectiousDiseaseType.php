<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 * 
 * @method InfectiousDiseaseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InfectiousDiseaseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InfectiousDiseaseType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method InfectiousDiseaseType setCode(Property\CodeProperty $code)
 * @method InfectiousDiseaseType setDescription(Property\DescriptionProperty $description)
 * @method InfectiousDiseaseType setDifferentialDiagnosis(Property\DifferentialDiagnosisProperty $differentialDiagnosis)
 * @method InfectiousDiseaseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InfectiousDiseaseType setDrug(Property\DrugProperty $drug)
 * @method InfectiousDiseaseType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method InfectiousDiseaseType setExpectedPrognosis(Property\ExpectedPrognosisProperty $expectedPrognosis)
 * @method InfectiousDiseaseType setGuideline(Property\GuidelineProperty $guideline)
 * @method InfectiousDiseaseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InfectiousDiseaseType setImage(Property\ImageProperty $image)
 * @method InfectiousDiseaseType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method InfectiousDiseaseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InfectiousDiseaseType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method InfectiousDiseaseType setName(Property\NameProperty $name)
 * @method InfectiousDiseaseType setNaturalProgression(Property\NaturalProgressionProperty $naturalProgression)
 * @method InfectiousDiseaseType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method InfectiousDiseaseType setPossibleComplication(Property\PossibleComplicationProperty $possibleComplication)
 * @method InfectiousDiseaseType setPossibleTreatment(Property\PossibleTreatmentProperty $possibleTreatment)
 * @method InfectiousDiseaseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InfectiousDiseaseType setPrimaryPrevention(Property\PrimaryPreventionProperty $primaryPrevention)
 * @method InfectiousDiseaseType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method InfectiousDiseaseType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method InfectiousDiseaseType setRiskFactor(Property\RiskFactorProperty $riskFactor)
 * @method InfectiousDiseaseType setSameAs(Property\SameAsProperty $sameAs)
 * @method InfectiousDiseaseType setSecondaryPrevention(Property\SecondaryPreventionProperty $secondaryPrevention)
 * @method InfectiousDiseaseType setSignOrSymptom(Property\SignOrSymptomProperty $signOrSymptom)
 * @method InfectiousDiseaseType setStage(Property\StageProperty $stage)
 * @method InfectiousDiseaseType setStatus(Property\StatusProperty $status)
 * @method InfectiousDiseaseType setStudy(Property\StudyProperty $study)
 * @method InfectiousDiseaseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InfectiousDiseaseType setTypicalTest(Property\TypicalTestProperty $typicalTest)
 * @method InfectiousDiseaseType setUrl(Property\UrlProperty $url)
 */
class InfectiousDiseaseType extends MedicalConditionType {

	/**
	 * @var Property\InfectiousAgentProperty
	 */
	private $infectiousAgent;

	/**
	 * @var Property\InfectiousAgentClassProperty
	 */
	private $infectiousAgentClass;

	/**
	 * @var Property\TransmissionMethodProperty
	 */
	private $transmissionMethod;

	/**
	 * Get infectious agent.
	 *
	 * @return Property\InfectiousAgentProperty
	 */
	public function getInfectiousAgent() {
		return $this->infectiousAgent;
	}

	/**
	 * Get infectious agent class.
	 *
	 * @return Property\InfectiousAgentClassProperty
	 */
	public function getInfectiousAgentClass() {
		return $this->infectiousAgentClass;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InfectiousDisease';
	}

	/**
	 * Get transmission method.
	 *
	 * @return Property\TransmissionMethodProperty
	 */
	public function getTransmissionMethod() {
		return $this->transmissionMethod;
	}

	/**
	 * Set infectious agent.
	 *
	 * @param Property\InfectiousAgentProperty $infectiousAgent
	 * @return InfectiousDiseaseType
	 */
	public function setInfectiousAgent(Property\InfectiousAgentProperty $infectiousAgent) {
		$this->infectiousAgent = $infectiousAgent;

		return $this;
	}

	/**
	 * Set infectious agent class.
	 *
	 * @param Property\InfectiousAgentClassProperty $infectiousAgentClass
	 * @return InfectiousDiseaseType
	 */
	public function setInfectiousAgentClass(Property\InfectiousAgentClassProperty $infectiousAgentClass) {
		$this->infectiousAgentClass = $infectiousAgentClass;

		return $this;
	}

	/**
	 * Set transmission method.
	 *
	 * @param Property\TransmissionMethodProperty $transmissionMethod
	 * @return InfectiousDiseaseType
	 */
	public function setTransmissionMethod(Property\TransmissionMethodProperty $transmissionMethod) {
		$this->transmissionMethod = $transmissionMethod;

		return $this;
	}
}