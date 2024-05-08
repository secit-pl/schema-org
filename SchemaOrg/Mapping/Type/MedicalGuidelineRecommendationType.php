<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A guideline recommendation that is regarded as efficacious and where quality of the data supporting the recommendation is sound.
 * 
 * @method MedicalGuidelineRecommendationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalGuidelineRecommendationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalGuidelineRecommendationType setCode(Property\CodeProperty $code)
 * @method MedicalGuidelineRecommendationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalGuidelineRecommendationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalGuidelineRecommendationType setEvidenceLevel(Property\EvidenceLevelProperty $evidenceLevel)
 * @method MedicalGuidelineRecommendationType setEvidenceOrigin(Property\EvidenceOriginProperty $evidenceOrigin)
 * @method MedicalGuidelineRecommendationType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalGuidelineRecommendationType setGuidelineDate(Property\GuidelineDateProperty $guidelineDate)
 * @method MedicalGuidelineRecommendationType setGuidelineSubject(Property\GuidelineSubjectProperty $guidelineSubject)
 * @method MedicalGuidelineRecommendationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalGuidelineRecommendationType setImage(Property\ImageProperty $image)
 * @method MedicalGuidelineRecommendationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalGuidelineRecommendationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalGuidelineRecommendationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalGuidelineRecommendationType setName(Property\NameProperty $name)
 * @method MedicalGuidelineRecommendationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalGuidelineRecommendationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalGuidelineRecommendationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalGuidelineRecommendationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalGuidelineRecommendationType setStudy(Property\StudyProperty $study)
 * @method MedicalGuidelineRecommendationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalGuidelineRecommendationType setUrl(Property\UrlProperty $url)
 */
class MedicalGuidelineRecommendationType extends MedicalGuidelineType {

	/**
	 * @var Property\RecommendationStrengthProperty
	 */
	private $recommendationStrength;

	/**
	 * Get recommendation strength.
	 *
	 * @return Property\RecommendationStrengthProperty
	 */
	public function getRecommendationStrength() {
		return $this->recommendationStrength;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalGuidelineRecommendation';
	}

	/**
	 * Set recommendation strength.
	 *
	 * @param Property\RecommendationStrengthProperty $recommendationStrength
	 * @return MedicalGuidelineRecommendationType
	 */
	public function setRecommendationStrength(Property\RecommendationStrengthProperty $recommendationStrength) {
		$this->recommendationStrength = $recommendationStrength;

		return $this;
	}
}