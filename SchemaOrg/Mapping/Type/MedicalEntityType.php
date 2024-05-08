<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The most generic type of entity related to health and the practice of medicine.
 * 
 * @method MedicalEntityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalEntityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalEntityType setDescription(Property\DescriptionProperty $description)
 * @method MedicalEntityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalEntityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalEntityType setImage(Property\ImageProperty $image)
 * @method MedicalEntityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalEntityType setName(Property\NameProperty $name)
 * @method MedicalEntityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalEntityType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalEntityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalEntityType setUrl(Property\UrlProperty $url)
 */
class MedicalEntityType extends ThingType {

	/**
	 * @var Property\CodeProperty
	 */
	private $code;

	/**
	 * @var Property\GuidelineProperty
	 */
	private $guideline;

	/**
	 * @var Property\LegalStatusProperty
	 */
	private $legalStatus;

	/**
	 * @var Property\MedicineSystemProperty
	 */
	private $medicineSystem;

	/**
	 * @var Property\RecognizingAuthorityProperty
	 */
	private $recognizingAuthority;

	/**
	 * @var Property\RelevantSpecialtyProperty
	 */
	private $relevantSpecialty;

	/**
	 * @var Property\StudyProperty
	 */
	private $study;

	/**
	 * Get code.
	 *
	 * @return Property\CodeProperty
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Get guideline.
	 *
	 * @return Property\GuidelineProperty
	 */
	public function getGuideline() {
		return $this->guideline;
	}

	/**
	 * Get legal status.
	 *
	 * @return Property\LegalStatusProperty
	 */
	public function getLegalStatus() {
		return $this->legalStatus;
	}

	/**
	 * Get medicine system.
	 *
	 * @return Property\MedicineSystemProperty
	 */
	public function getMedicineSystem() {
		return $this->medicineSystem;
	}

	/**
	 * Get recognizing authority.
	 *
	 * @return Property\RecognizingAuthorityProperty
	 */
	public function getRecognizingAuthority() {
		return $this->recognizingAuthority;
	}

	/**
	 * Get relevant specialty.
	 *
	 * @return Property\RelevantSpecialtyProperty
	 */
	public function getRelevantSpecialty() {
		return $this->relevantSpecialty;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalEntity';
	}

	/**
	 * Get study.
	 *
	 * @return Property\StudyProperty
	 */
	public function getStudy() {
		return $this->study;
	}

	/**
	 * Set code.
	 *
	 * @param Property\CodeProperty $code
	 * @return MedicalEntityType
	 */
	public function setCode(Property\CodeProperty $code) {
		$this->code = $code;

		return $this;
	}

	/**
	 * Set guideline.
	 *
	 * @param Property\GuidelineProperty $guideline
	 * @return MedicalEntityType
	 */
	public function setGuideline(Property\GuidelineProperty $guideline) {
		$this->guideline = $guideline;

		return $this;
	}

	/**
	 * Set legal status.
	 *
	 * @param Property\LegalStatusProperty $legalStatus
	 * @return MedicalEntityType
	 */
	public function setLegalStatus(Property\LegalStatusProperty $legalStatus) {
		$this->legalStatus = $legalStatus;

		return $this;
	}

	/**
	 * Set medicine system.
	 *
	 * @param Property\MedicineSystemProperty $medicineSystem
	 * @return MedicalEntityType
	 */
	public function setMedicineSystem(Property\MedicineSystemProperty $medicineSystem) {
		$this->medicineSystem = $medicineSystem;

		return $this;
	}

	/**
	 * Set recognizing authority.
	 *
	 * @param Property\RecognizingAuthorityProperty $recognizingAuthority
	 * @return MedicalEntityType
	 */
	public function setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority) {
		$this->recognizingAuthority = $recognizingAuthority;

		return $this;
	}

	/**
	 * Set relevant specialty.
	 *
	 * @param Property\RelevantSpecialtyProperty $relevantSpecialty
	 * @return MedicalEntityType
	 */
	public function setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty) {
		$this->relevantSpecialty = $relevantSpecialty;

		return $this;
	}

	/**
	 * Set study.
	 *
	 * @param Property\StudyProperty $study
	 * @return MedicalEntityType
	 */
	public function setStudy(Property\StudyProperty $study) {
		$this->study = $study;

		return $this;
	}
}