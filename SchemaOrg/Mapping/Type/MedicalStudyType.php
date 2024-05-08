<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 * 
 * @method MedicalStudyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalStudyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalStudyType setCode(Property\CodeProperty $code)
 * @method MedicalStudyType setDescription(Property\DescriptionProperty $description)
 * @method MedicalStudyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalStudyType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalStudyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalStudyType setImage(Property\ImageProperty $image)
 * @method MedicalStudyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalStudyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalStudyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalStudyType setName(Property\NameProperty $name)
 * @method MedicalStudyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalStudyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalStudyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalStudyType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalStudyType setStudy(Property\StudyProperty $study)
 * @method MedicalStudyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalStudyType setUrl(Property\UrlProperty $url)
 */
class MedicalStudyType extends MedicalEntityType {

	/**
	 * @var Property\HealthConditionProperty
	 */
	private $healthCondition;

	/**
	 * @var Property\SponsorProperty
	 */
	private $sponsor;

	/**
	 * @var Property\StatusProperty
	 */
	private $status;

	/**
	 * @var Property\StudyLocationProperty
	 */
	private $studyLocation;

	/**
	 * @var Property\StudySubjectProperty
	 */
	private $studySubject;

	/**
	 * Get health condition.
	 *
	 * @return Property\HealthConditionProperty
	 */
	public function getHealthCondition() {
		return $this->healthCondition;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalStudy';
	}

	/**
	 * Get sponsor.
	 *
	 * @return Property\SponsorProperty
	 */
	public function getSponsor() {
		return $this->sponsor;
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
	 * Get study location.
	 *
	 * @return Property\StudyLocationProperty
	 */
	public function getStudyLocation() {
		return $this->studyLocation;
	}

	/**
	 * Get study subject.
	 *
	 * @return Property\StudySubjectProperty
	 */
	public function getStudySubject() {
		return $this->studySubject;
	}

	/**
	 * Set health condition.
	 *
	 * @param Property\HealthConditionProperty $healthCondition
	 * @return MedicalStudyType
	 */
	public function setHealthCondition(Property\HealthConditionProperty $healthCondition) {
		$this->healthCondition = $healthCondition;

		return $this;
	}

	/**
	 * Set sponsor.
	 *
	 * @param Property\SponsorProperty $sponsor
	 * @return MedicalStudyType
	 */
	public function setSponsor(Property\SponsorProperty $sponsor) {
		$this->sponsor = $sponsor;

		return $this;
	}

	/**
	 * Set status.
	 *
	 * @param Property\StatusProperty $status
	 * @return MedicalStudyType
	 */
	public function setStatus(Property\StatusProperty $status) {
		$this->status = $status;

		return $this;
	}

	/**
	 * Set study location.
	 *
	 * @param Property\StudyLocationProperty $studyLocation
	 * @return MedicalStudyType
	 */
	public function setStudyLocation(Property\StudyLocationProperty $studyLocation) {
		$this->studyLocation = $studyLocation;

		return $this;
	}

	/**
	 * Set study subject.
	 *
	 * @param Property\StudySubjectProperty $studySubject
	 * @return MedicalStudyType
	 */
	public function setStudySubject(Property\StudySubjectProperty $studySubject) {
		$this->studySubject = $studySubject;

		return $this;
	}
}