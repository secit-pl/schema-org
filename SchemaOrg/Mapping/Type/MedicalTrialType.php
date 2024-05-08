<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical trial is a type of medical study that uses a scientific process to compare the safety and efficacy of medical therapies or medical procedures. In general, medical trials are controlled and subjects are allocated at random to the different treatment and/or control groups.
 * 
 * @method MedicalTrialType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalTrialType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalTrialType setCode(Property\CodeProperty $code)
 * @method MedicalTrialType setDescription(Property\DescriptionProperty $description)
 * @method MedicalTrialType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalTrialType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalTrialType setHealthCondition(Property\HealthConditionProperty $healthCondition)
 * @method MedicalTrialType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalTrialType setImage(Property\ImageProperty $image)
 * @method MedicalTrialType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalTrialType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalTrialType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalTrialType setName(Property\NameProperty $name)
 * @method MedicalTrialType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalTrialType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalTrialType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalTrialType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalTrialType setSponsor(Property\SponsorProperty $sponsor)
 * @method MedicalTrialType setStatus(Property\StatusProperty $status)
 * @method MedicalTrialType setStudy(Property\StudyProperty $study)
 * @method MedicalTrialType setStudyLocation(Property\StudyLocationProperty $studyLocation)
 * @method MedicalTrialType setStudySubject(Property\StudySubjectProperty $studySubject)
 * @method MedicalTrialType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalTrialType setUrl(Property\UrlProperty $url)
 */
class MedicalTrialType extends MedicalStudyType {

	/**
	 * @var Property\TrialDesignProperty
	 */
	private $trialDesign;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalTrial';
	}

	/**
	 * Get trial design.
	 *
	 * @return Property\TrialDesignProperty
	 */
	public function getTrialDesign() {
		return $this->trialDesign;
	}

	/**
	 * Set trial design.
	 *
	 * @param Property\TrialDesignProperty $trialDesign
	 * @return MedicalTrialType
	 */
	public function setTrialDesign(Property\TrialDesignProperty $trialDesign) {
		$this->trialDesign = $trialDesign;

		return $this;
	}
}