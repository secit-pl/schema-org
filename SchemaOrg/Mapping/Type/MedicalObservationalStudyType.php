<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An observational study is a type of medical study that attempts to infer the possible effect of a treatment through observation of a cohort of subjects over a period of time. In an observational study, the assignment of subjects into treatment groups versus control groups is outside the control of the investigator. This is in contrast with controlled studies, such as the randomized controlled trials represented by MedicalTrial, where each subject is randomly assigned to a treatment group or a control group before the start of the treatment.
 * 
 * @method MedicalObservationalStudyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalObservationalStudyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalObservationalStudyType setCode(Property\CodeProperty $code)
 * @method MedicalObservationalStudyType setDescription(Property\DescriptionProperty $description)
 * @method MedicalObservationalStudyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalObservationalStudyType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalObservationalStudyType setHealthCondition(Property\HealthConditionProperty $healthCondition)
 * @method MedicalObservationalStudyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalObservationalStudyType setImage(Property\ImageProperty $image)
 * @method MedicalObservationalStudyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalObservationalStudyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalObservationalStudyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalObservationalStudyType setName(Property\NameProperty $name)
 * @method MedicalObservationalStudyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalObservationalStudyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalObservationalStudyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalObservationalStudyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalObservationalStudyType setSponsor(Property\SponsorProperty $sponsor)
 * @method MedicalObservationalStudyType setStatus(Property\StatusProperty $status)
 * @method MedicalObservationalStudyType setStudy(Property\StudyProperty $study)
 * @method MedicalObservationalStudyType setStudyLocation(Property\StudyLocationProperty $studyLocation)
 * @method MedicalObservationalStudyType setStudySubject(Property\StudySubjectProperty $studySubject)
 * @method MedicalObservationalStudyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalObservationalStudyType setUrl(Property\UrlProperty $url)
 */
class MedicalObservationalStudyType extends MedicalStudyType {

	/**
	 * @var Property\StudyDesignProperty
	 */
	private $studyDesign;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalObservationalStudy';
	}

	/**
	 * Get study design.
	 *
	 * @return Property\StudyDesignProperty
	 */
	public function getStudyDesign() {
		return $this->studyDesign;
	}

	/**
	 * Set study design.
	 *
	 * @param Property\StudyDesignProperty $studyDesign
	 * @return MedicalObservationalStudyType
	 */
	public function setStudyDesign(Property\StudyDesignProperty $studyDesign) {
		$this->studyDesign = $studyDesign;

		return $this;
	}
}