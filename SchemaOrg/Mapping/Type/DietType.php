<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 * 
 * @method DietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DietType setCode(Property\CodeProperty $code)
 * @method DietType setDescription(Property\DescriptionProperty $description)
 * @method DietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DietType setGuideline(Property\GuidelineProperty $guideline)
 * @method DietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DietType setImage(Property\ImageProperty $image)
 * @method DietType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DietType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DietType setName(Property\NameProperty $name)
 * @method DietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DietType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DietType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DietType setSameAs(Property\SameAsProperty $sameAs)
 * @method DietType setStudy(Property\StudyProperty $study)
 * @method DietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DietType setUrl(Property\UrlProperty $url)
 */
class DietType extends LifestyleModificationType {

	/**
	 * @var Property\DietFeaturesProperty
	 */
	private $dietFeatures;

	/**
	 * @var Property\EndorsersProperty
	 */
	private $endorsers;

	/**
	 * @var Property\ExpertConsiderationsProperty
	 */
	private $expertConsiderations;

	/**
	 * @var Property\PhysiologicalBenefitsProperty
	 */
	private $physiologicalBenefits;

	/**
	 * @var Property\RisksProperty
	 */
	private $risks;

	/**
	 * Get diet features.
	 *
	 * @return Property\DietFeaturesProperty
	 */
	public function getDietFeatures() {
		return $this->dietFeatures;
	}

	/**
	 * Get endorsers.
	 *
	 * @return Property\EndorsersProperty
	 */
	public function getEndorsers() {
		return $this->endorsers;
	}

	/**
	 * Get expert considerations.
	 *
	 * @return Property\ExpertConsiderationsProperty
	 */
	public function getExpertConsiderations() {
		return $this->expertConsiderations;
	}

	/**
	 * Get physiological benefits.
	 *
	 * @return Property\PhysiologicalBenefitsProperty
	 */
	public function getPhysiologicalBenefits() {
		return $this->physiologicalBenefits;
	}

	/**
	 * Get risks.
	 *
	 * @return Property\RisksProperty
	 */
	public function getRisks() {
		return $this->risks;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Diet';
	}

	/**
	 * Set diet features.
	 *
	 * @param Property\DietFeaturesProperty $dietFeatures
	 * @return DietType
	 */
	public function setDietFeatures(Property\DietFeaturesProperty $dietFeatures) {
		$this->dietFeatures = $dietFeatures;

		return $this;
	}

	/**
	 * Set endorsers.
	 *
	 * @param Property\EndorsersProperty $endorsers
	 * @return DietType
	 */
	public function setEndorsers(Property\EndorsersProperty $endorsers) {
		$this->endorsers = $endorsers;

		return $this;
	}

	/**
	 * Set expert considerations.
	 *
	 * @param Property\ExpertConsiderationsProperty $expertConsiderations
	 * @return DietType
	 */
	public function setExpertConsiderations(Property\ExpertConsiderationsProperty $expertConsiderations) {
		$this->expertConsiderations = $expertConsiderations;

		return $this;
	}

	/**
	 * Set physiological benefits.
	 *
	 * @param Property\PhysiologicalBenefitsProperty $physiologicalBenefits
	 * @return DietType
	 */
	public function setPhysiologicalBenefits(Property\PhysiologicalBenefitsProperty $physiologicalBenefits) {
		$this->physiologicalBenefits = $physiologicalBenefits;

		return $this;
	}

	/**
	 * Set risks.
	 *
	 * @param Property\RisksProperty $risks
	 * @return DietType
	 */
	public function setRisks(Property\RisksProperty $risks) {
		$this->risks = $risks;

		return $this;
	}
}