<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A product taken by mouth that contains a dietary ingredient intended to supplement the diet. Dietary ingredients may include vitamins, minerals, herbs or other botanicals, amino acids, and substances such as enzymes, organ tissues, glandulars and metabolites.
 * 
 * @method DietarySupplementType setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient)
 * @method DietarySupplementType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DietarySupplementType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DietarySupplementType setCode(Property\CodeProperty $code)
 * @method DietarySupplementType setDescription(Property\DescriptionProperty $description)
 * @method DietarySupplementType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DietarySupplementType setGuideline(Property\GuidelineProperty $guideline)
 * @method DietarySupplementType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DietarySupplementType setImage(Property\ImageProperty $image)
 * @method DietarySupplementType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DietarySupplementType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DietarySupplementType setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake)
 * @method DietarySupplementType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DietarySupplementType setName(Property\NameProperty $name)
 * @method DietarySupplementType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DietarySupplementType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DietarySupplementType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DietarySupplementType setSameAs(Property\SameAsProperty $sameAs)
 * @method DietarySupplementType setStudy(Property\StudyProperty $study)
 * @method DietarySupplementType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DietarySupplementType setUrl(Property\UrlProperty $url)
 */
class DietarySupplementType extends SubstanceType {

	/**
	 * @var Property\ActiveIngredientProperty
	 */
	private $activeIngredient;

	/**
	 * @var Property\IsProprietaryProperty
	 */
	private $isProprietary;

	/**
	 * @var Property\LegalStatusProperty
	 */
	private $legalStatus;

	/**
	 * @var Property\MaximumIntakeProperty
	 */
	private $maximumIntake;

	/**
	 * @var Property\MechanismOfActionProperty
	 */
	private $mechanismOfAction;

	/**
	 * @var Property\NonProprietaryNameProperty
	 */
	private $nonProprietaryName;

	/**
	 * @var Property\ProprietaryNameProperty
	 */
	private $proprietaryName;

	/**
	 * @var Property\RecommendedIntakeProperty
	 */
	private $recommendedIntake;

	/**
	 * @var Property\SafetyConsiderationProperty
	 */
	private $safetyConsideration;

	/**
	 * @var Property\TargetPopulationProperty
	 */
	private $targetPopulation;

	/**
	 * Get active ingredient.
	 *
	 * @return Property\ActiveIngredientProperty
	 */
	public function getActiveIngredient() {
		return $this->activeIngredient;
	}

	/**
	 * Get is proprietary.
	 *
	 * @return Property\IsProprietaryProperty
	 */
	public function getIsProprietary() {
		return $this->isProprietary;
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
	 * Get maximum intake.
	 *
	 * @return Property\MaximumIntakeProperty
	 */
	public function getMaximumIntake() {
		return $this->maximumIntake;
	}

	/**
	 * Get mechanism of action.
	 *
	 * @return Property\MechanismOfActionProperty
	 */
	public function getMechanismOfAction() {
		return $this->mechanismOfAction;
	}

	/**
	 * Get non proprietary name.
	 *
	 * @return Property\NonProprietaryNameProperty
	 */
	public function getNonProprietaryName() {
		return $this->nonProprietaryName;
	}

	/**
	 * Get proprietary name.
	 *
	 * @return Property\ProprietaryNameProperty
	 */
	public function getProprietaryName() {
		return $this->proprietaryName;
	}

	/**
	 * Get recommended intake.
	 *
	 * @return Property\RecommendedIntakeProperty
	 */
	public function getRecommendedIntake() {
		return $this->recommendedIntake;
	}

	/**
	 * Get safety consideration.
	 *
	 * @return Property\SafetyConsiderationProperty
	 */
	public function getSafetyConsideration() {
		return $this->safetyConsideration;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DietarySupplement';
	}

	/**
	 * Get target population.
	 *
	 * @return Property\TargetPopulationProperty
	 */
	public function getTargetPopulation() {
		return $this->targetPopulation;
	}

	/**
	 * Set active ingredient.
	 *
	 * @param Property\ActiveIngredientProperty $activeIngredient
	 * @return DietarySupplementType
	 */
	public function setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient) {
		$this->activeIngredient = $activeIngredient;

		return $this;
	}

	/**
	 * Set is proprietary.
	 *
	 * @param Property\IsProprietaryProperty $isProprietary
	 * @return DietarySupplementType
	 */
	public function setIsProprietary(Property\IsProprietaryProperty $isProprietary) {
		$this->isProprietary = $isProprietary;

		return $this;
	}

	/**
	 * Set legal status.
	 *
	 * @param Property\LegalStatusProperty $legalStatus
	 * @return DietarySupplementType
	 */
	public function setLegalStatus(Property\LegalStatusProperty $legalStatus) {
		$this->legalStatus = $legalStatus;

		return $this;
	}

	/**
	 * Set maximum intake.
	 *
	 * @param Property\MaximumIntakeProperty $maximumIntake
	 * @return DietarySupplementType
	 */
	public function setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake) {
		$this->maximumIntake = $maximumIntake;

		return $this;
	}

	/**
	 * Set mechanism of action.
	 *
	 * @param Property\MechanismOfActionProperty $mechanismOfAction
	 * @return DietarySupplementType
	 */
	public function setMechanismOfAction(Property\MechanismOfActionProperty $mechanismOfAction) {
		$this->mechanismOfAction = $mechanismOfAction;

		return $this;
	}

	/**
	 * Set non proprietary name.
	 *
	 * @param Property\NonProprietaryNameProperty $nonProprietaryName
	 * @return DietarySupplementType
	 */
	public function setNonProprietaryName(Property\NonProprietaryNameProperty $nonProprietaryName) {
		$this->nonProprietaryName = $nonProprietaryName;

		return $this;
	}

	/**
	 * Set proprietary name.
	 *
	 * @param Property\ProprietaryNameProperty $proprietaryName
	 * @return DietarySupplementType
	 */
	public function setProprietaryName(Property\ProprietaryNameProperty $proprietaryName) {
		$this->proprietaryName = $proprietaryName;

		return $this;
	}

	/**
	 * Set recommended intake.
	 *
	 * @param Property\RecommendedIntakeProperty $recommendedIntake
	 * @return DietarySupplementType
	 */
	public function setRecommendedIntake(Property\RecommendedIntakeProperty $recommendedIntake) {
		$this->recommendedIntake = $recommendedIntake;

		return $this;
	}

	/**
	 * Set safety consideration.
	 *
	 * @param Property\SafetyConsiderationProperty $safetyConsideration
	 * @return DietarySupplementType
	 */
	public function setSafetyConsideration(Property\SafetyConsiderationProperty $safetyConsideration) {
		$this->safetyConsideration = $safetyConsideration;

		return $this;
	}

	/**
	 * Set target population.
	 *
	 * @param Property\TargetPopulationProperty $targetPopulation
	 * @return DietarySupplementType
	 */
	public function setTargetPopulation(Property\TargetPopulationProperty $targetPopulation) {
		$this->targetPopulation = $targetPopulation;

		return $this;
	}
}