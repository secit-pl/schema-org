<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any recommendation made by a standard society (e.g. ACC/AHA) or consensus statement that denotes how to diagnose and treat a particular condition. Note: this type should be used to tag the actual guideline recommendation; if the guideline recommendation occurs in a larger scholarly article, use MedicalScholarlyArticle to tag the overall article, not this type. Note also: the organization making the recommendation should be captured in the recognizingAuthority base property of MedicalEntity.
 * 
 * @method MedicalGuidelineType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalGuidelineType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalGuidelineType setCode(Property\CodeProperty $code)
 * @method MedicalGuidelineType setDescription(Property\DescriptionProperty $description)
 * @method MedicalGuidelineType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalGuidelineType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalGuidelineType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalGuidelineType setImage(Property\ImageProperty $image)
 * @method MedicalGuidelineType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalGuidelineType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalGuidelineType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalGuidelineType setName(Property\NameProperty $name)
 * @method MedicalGuidelineType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalGuidelineType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalGuidelineType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalGuidelineType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalGuidelineType setStudy(Property\StudyProperty $study)
 * @method MedicalGuidelineType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalGuidelineType setUrl(Property\UrlProperty $url)
 */
class MedicalGuidelineType extends MedicalEntityType {

	/**
	 * @var Property\EvidenceLevelProperty
	 */
	private $evidenceLevel;

	/**
	 * @var Property\EvidenceOriginProperty
	 */
	private $evidenceOrigin;

	/**
	 * @var Property\GuidelineDateProperty
	 */
	private $guidelineDate;

	/**
	 * @var Property\GuidelineSubjectProperty
	 */
	private $guidelineSubject;

	/**
	 * Get evidence level.
	 *
	 * @return Property\EvidenceLevelProperty
	 */
	public function getEvidenceLevel() {
		return $this->evidenceLevel;
	}

	/**
	 * Get evidence origin.
	 *
	 * @return Property\EvidenceOriginProperty
	 */
	public function getEvidenceOrigin() {
		return $this->evidenceOrigin;
	}

	/**
	 * Get guideline date.
	 *
	 * @return Property\GuidelineDateProperty
	 */
	public function getGuidelineDate() {
		return $this->guidelineDate;
	}

	/**
	 * Get guideline subject.
	 *
	 * @return Property\GuidelineSubjectProperty
	 */
	public function getGuidelineSubject() {
		return $this->guidelineSubject;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalGuideline';
	}

	/**
	 * Set evidence level.
	 *
	 * @param Property\EvidenceLevelProperty $evidenceLevel
	 * @return MedicalGuidelineType
	 */
	public function setEvidenceLevel(Property\EvidenceLevelProperty $evidenceLevel) {
		$this->evidenceLevel = $evidenceLevel;

		return $this;
	}

	/**
	 * Set evidence origin.
	 *
	 * @param Property\EvidenceOriginProperty $evidenceOrigin
	 * @return MedicalGuidelineType
	 */
	public function setEvidenceOrigin(Property\EvidenceOriginProperty $evidenceOrigin) {
		$this->evidenceOrigin = $evidenceOrigin;

		return $this;
	}

	/**
	 * Set guideline date.
	 *
	 * @param Property\GuidelineDateProperty $guidelineDate
	 * @return MedicalGuidelineType
	 */
	public function setGuidelineDate(Property\GuidelineDateProperty $guidelineDate) {
		$this->guidelineDate = $guidelineDate;

		return $this;
	}

	/**
	 * Set guideline subject.
	 *
	 * @param Property\GuidelineSubjectProperty $guidelineSubject
	 * @return MedicalGuidelineType
	 */
	public function setGuidelineSubject(Property\GuidelineSubjectProperty $guidelineSubject) {
		$this->guidelineSubject = $guidelineSubject;

		return $this;
	}
}