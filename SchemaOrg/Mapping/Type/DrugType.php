<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a physiological effect on an organism. Here the term drug is used interchangeably with the term medicine although clinical knowledge makes a clear difference between them.
 * 
 * @method DrugType setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient)
 * @method DrugType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugType setCode(Property\CodeProperty $code)
 * @method DrugType setDescription(Property\DescriptionProperty $description)
 * @method DrugType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugType setGuideline(Property\GuidelineProperty $guideline)
 * @method DrugType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugType setImage(Property\ImageProperty $image)
 * @method DrugType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DrugType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugType setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake)
 * @method DrugType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DrugType setName(Property\NameProperty $name)
 * @method DrugType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DrugType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DrugType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugType setStudy(Property\StudyProperty $study)
 * @method DrugType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugType setUrl(Property\UrlProperty $url)
 */
class DrugType extends SubstanceType {

	/**
	 * @var Property\ActiveIngredientProperty
	 */
	private $activeIngredient;

	/**
	 * @var Property\AdministrationRouteProperty
	 */
	private $administrationRoute;

	/**
	 * @var Property\AlcoholWarningProperty
	 */
	private $alcoholWarning;

	/**
	 * @var Property\AvailableStrengthProperty
	 */
	private $availableStrength;

	/**
	 * @var Property\BreastfeedingWarningProperty
	 */
	private $breastfeedingWarning;

	/**
	 * @var Property\ClinicalPharmacologyProperty
	 */
	private $clinicalPharmacology;

	/**
	 * @var Property\DosageFormProperty
	 */
	private $dosageForm;

	/**
	 * @var Property\DoseScheduleProperty
	 */
	private $doseSchedule;

	/**
	 * @var Property\DrugClassProperty
	 */
	private $drugClass;

	/**
	 * @var Property\DrugUnitProperty
	 */
	private $drugUnit;

	/**
	 * @var Property\FoodWarningProperty
	 */
	private $foodWarning;

	/**
	 * @var Property\InteractingDrugProperty
	 */
	private $interactingDrug;

	/**
	 * @var Property\IsAvailableGenericallyProperty
	 */
	private $isAvailableGenerically;

	/**
	 * @var Property\IsProprietaryProperty
	 */
	private $isProprietary;

	/**
	 * @var Property\LabelDetailsProperty
	 */
	private $labelDetails;

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
	 * @var Property\OverdosageProperty
	 */
	private $overdosage;

	/**
	 * @var Property\PregnancyCategoryProperty
	 */
	private $pregnancyCategory;

	/**
	 * @var Property\PregnancyWarningProperty
	 */
	private $pregnancyWarning;

	/**
	 * @var Property\PrescribingInfoProperty
	 */
	private $prescribingInfo;

	/**
	 * @var Property\PrescriptionStatusProperty
	 */
	private $prescriptionStatus;

	/**
	 * @var Property\ProprietaryNameProperty
	 */
	private $proprietaryName;

	/**
	 * @var Property\RelatedDrugProperty
	 */
	private $relatedDrug;

	/**
	 * @var Property\WarningProperty
	 */
	private $warning;

	/**
	 * Get active ingredient.
	 *
	 * @return Property\ActiveIngredientProperty
	 */
	public function getActiveIngredient() {
		return $this->activeIngredient;
	}

	/**
	 * Get administration route.
	 *
	 * @return Property\AdministrationRouteProperty
	 */
	public function getAdministrationRoute() {
		return $this->administrationRoute;
	}

	/**
	 * Get alcohol warning.
	 *
	 * @return Property\AlcoholWarningProperty
	 */
	public function getAlcoholWarning() {
		return $this->alcoholWarning;
	}

	/**
	 * Get available strength.
	 *
	 * @return Property\AvailableStrengthProperty
	 */
	public function getAvailableStrength() {
		return $this->availableStrength;
	}

	/**
	 * Get breastfeeding warning.
	 *
	 * @return Property\BreastfeedingWarningProperty
	 */
	public function getBreastfeedingWarning() {
		return $this->breastfeedingWarning;
	}

	/**
	 * Get clinical pharmacology.
	 *
	 * @return Property\ClinicalPharmacologyProperty
	 */
	public function getClinicalPharmacology() {
		return $this->clinicalPharmacology;
	}

	/**
	 * Get dosage form.
	 *
	 * @return Property\DosageFormProperty
	 */
	public function getDosageForm() {
		return $this->dosageForm;
	}

	/**
	 * Get dose schedule.
	 *
	 * @return Property\DoseScheduleProperty
	 */
	public function getDoseSchedule() {
		return $this->doseSchedule;
	}

	/**
	 * Get drug class.
	 *
	 * @return Property\DrugClassProperty
	 */
	public function getDrugClass() {
		return $this->drugClass;
	}

	/**
	 * Get drug unit.
	 *
	 * @return Property\DrugUnitProperty
	 */
	public function getDrugUnit() {
		return $this->drugUnit;
	}

	/**
	 * Get food warning.
	 *
	 * @return Property\FoodWarningProperty
	 */
	public function getFoodWarning() {
		return $this->foodWarning;
	}

	/**
	 * Get interacting drug.
	 *
	 * @return Property\InteractingDrugProperty
	 */
	public function getInteractingDrug() {
		return $this->interactingDrug;
	}

	/**
	 * Get is available generically.
	 *
	 * @return Property\IsAvailableGenericallyProperty
	 */
	public function getIsAvailableGenerically() {
		return $this->isAvailableGenerically;
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
	 * Get label details.
	 *
	 * @return Property\LabelDetailsProperty
	 */
	public function getLabelDetails() {
		return $this->labelDetails;
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
	 * Get overdosage.
	 *
	 * @return Property\OverdosageProperty
	 */
	public function getOverdosage() {
		return $this->overdosage;
	}

	/**
	 * Get pregnancy category.
	 *
	 * @return Property\PregnancyCategoryProperty
	 */
	public function getPregnancyCategory() {
		return $this->pregnancyCategory;
	}

	/**
	 * Get pregnancy warning.
	 *
	 * @return Property\PregnancyWarningProperty
	 */
	public function getPregnancyWarning() {
		return $this->pregnancyWarning;
	}

	/**
	 * Get prescribing info.
	 *
	 * @return Property\PrescribingInfoProperty
	 */
	public function getPrescribingInfo() {
		return $this->prescribingInfo;
	}

	/**
	 * Get prescription status.
	 *
	 * @return Property\PrescriptionStatusProperty
	 */
	public function getPrescriptionStatus() {
		return $this->prescriptionStatus;
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
	 * Get related drug.
	 *
	 * @return Property\RelatedDrugProperty
	 */
	public function getRelatedDrug() {
		return $this->relatedDrug;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Drug';
	}

	/**
	 * Get warning.
	 *
	 * @return Property\WarningProperty
	 */
	public function getWarning() {
		return $this->warning;
	}

	/**
	 * Set active ingredient.
	 *
	 * @param Property\ActiveIngredientProperty $activeIngredient
	 * @return DrugType
	 */
	public function setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient) {
		$this->activeIngredient = $activeIngredient;

		return $this;
	}

	/**
	 * Set administration route.
	 *
	 * @param Property\AdministrationRouteProperty $administrationRoute
	 * @return DrugType
	 */
	public function setAdministrationRoute(Property\AdministrationRouteProperty $administrationRoute) {
		$this->administrationRoute = $administrationRoute;

		return $this;
	}

	/**
	 * Set alcohol warning.
	 *
	 * @param Property\AlcoholWarningProperty $alcoholWarning
	 * @return DrugType
	 */
	public function setAlcoholWarning(Property\AlcoholWarningProperty $alcoholWarning) {
		$this->alcoholWarning = $alcoholWarning;

		return $this;
	}

	/**
	 * Set available strength.
	 *
	 * @param Property\AvailableStrengthProperty $availableStrength
	 * @return DrugType
	 */
	public function setAvailableStrength(Property\AvailableStrengthProperty $availableStrength) {
		$this->availableStrength = $availableStrength;

		return $this;
	}

	/**
	 * Set breastfeeding warning.
	 *
	 * @param Property\BreastfeedingWarningProperty $breastfeedingWarning
	 * @return DrugType
	 */
	public function setBreastfeedingWarning(Property\BreastfeedingWarningProperty $breastfeedingWarning) {
		$this->breastfeedingWarning = $breastfeedingWarning;

		return $this;
	}

	/**
	 * Set clinical pharmacology.
	 *
	 * @param Property\ClinicalPharmacologyProperty $clinicalPharmacology
	 * @return DrugType
	 */
	public function setClinicalPharmacology(Property\ClinicalPharmacologyProperty $clinicalPharmacology) {
		$this->clinicalPharmacology = $clinicalPharmacology;

		return $this;
	}

	/**
	 * Set dosage form.
	 *
	 * @param Property\DosageFormProperty $dosageForm
	 * @return DrugType
	 */
	public function setDosageForm(Property\DosageFormProperty $dosageForm) {
		$this->dosageForm = $dosageForm;

		return $this;
	}

	/**
	 * Set dose schedule.
	 *
	 * @param Property\DoseScheduleProperty $doseSchedule
	 * @return DrugType
	 */
	public function setDoseSchedule(Property\DoseScheduleProperty $doseSchedule) {
		$this->doseSchedule = $doseSchedule;

		return $this;
	}

	/**
	 * Set drug class.
	 *
	 * @param Property\DrugClassProperty $drugClass
	 * @return DrugType
	 */
	public function setDrugClass(Property\DrugClassProperty $drugClass) {
		$this->drugClass = $drugClass;

		return $this;
	}

	/**
	 * Set drug unit.
	 *
	 * @param Property\DrugUnitProperty $drugUnit
	 * @return DrugType
	 */
	public function setDrugUnit(Property\DrugUnitProperty $drugUnit) {
		$this->drugUnit = $drugUnit;

		return $this;
	}

	/**
	 * Set food warning.
	 *
	 * @param Property\FoodWarningProperty $foodWarning
	 * @return DrugType
	 */
	public function setFoodWarning(Property\FoodWarningProperty $foodWarning) {
		$this->foodWarning = $foodWarning;

		return $this;
	}

	/**
	 * Set interacting drug.
	 *
	 * @param Property\InteractingDrugProperty $interactingDrug
	 * @return DrugType
	 */
	public function setInteractingDrug(Property\InteractingDrugProperty $interactingDrug) {
		$this->interactingDrug = $interactingDrug;

		return $this;
	}

	/**
	 * Set is available generically.
	 *
	 * @param Property\IsAvailableGenericallyProperty $isAvailableGenerically
	 * @return DrugType
	 */
	public function setIsAvailableGenerically(Property\IsAvailableGenericallyProperty $isAvailableGenerically) {
		$this->isAvailableGenerically = $isAvailableGenerically;

		return $this;
	}

	/**
	 * Set is proprietary.
	 *
	 * @param Property\IsProprietaryProperty $isProprietary
	 * @return DrugType
	 */
	public function setIsProprietary(Property\IsProprietaryProperty $isProprietary) {
		$this->isProprietary = $isProprietary;

		return $this;
	}

	/**
	 * Set label details.
	 *
	 * @param Property\LabelDetailsProperty $labelDetails
	 * @return DrugType
	 */
	public function setLabelDetails(Property\LabelDetailsProperty $labelDetails) {
		$this->labelDetails = $labelDetails;

		return $this;
	}

	/**
	 * Set legal status.
	 *
	 * @param Property\LegalStatusProperty $legalStatus
	 * @return DrugType
	 */
	public function setLegalStatus(Property\LegalStatusProperty $legalStatus) {
		$this->legalStatus = $legalStatus;

		return $this;
	}

	/**
	 * Set maximum intake.
	 *
	 * @param Property\MaximumIntakeProperty $maximumIntake
	 * @return DrugType
	 */
	public function setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake) {
		$this->maximumIntake = $maximumIntake;

		return $this;
	}

	/**
	 * Set mechanism of action.
	 *
	 * @param Property\MechanismOfActionProperty $mechanismOfAction
	 * @return DrugType
	 */
	public function setMechanismOfAction(Property\MechanismOfActionProperty $mechanismOfAction) {
		$this->mechanismOfAction = $mechanismOfAction;

		return $this;
	}

	/**
	 * Set non proprietary name.
	 *
	 * @param Property\NonProprietaryNameProperty $nonProprietaryName
	 * @return DrugType
	 */
	public function setNonProprietaryName(Property\NonProprietaryNameProperty $nonProprietaryName) {
		$this->nonProprietaryName = $nonProprietaryName;

		return $this;
	}

	/**
	 * Set overdosage.
	 *
	 * @param Property\OverdosageProperty $overdosage
	 * @return DrugType
	 */
	public function setOverdosage(Property\OverdosageProperty $overdosage) {
		$this->overdosage = $overdosage;

		return $this;
	}

	/**
	 * Set pregnancy category.
	 *
	 * @param Property\PregnancyCategoryProperty $pregnancyCategory
	 * @return DrugType
	 */
	public function setPregnancyCategory(Property\PregnancyCategoryProperty $pregnancyCategory) {
		$this->pregnancyCategory = $pregnancyCategory;

		return $this;
	}

	/**
	 * Set pregnancy warning.
	 *
	 * @param Property\PregnancyWarningProperty $pregnancyWarning
	 * @return DrugType
	 */
	public function setPregnancyWarning(Property\PregnancyWarningProperty $pregnancyWarning) {
		$this->pregnancyWarning = $pregnancyWarning;

		return $this;
	}

	/**
	 * Set prescribing info.
	 *
	 * @param Property\PrescribingInfoProperty $prescribingInfo
	 * @return DrugType
	 */
	public function setPrescribingInfo(Property\PrescribingInfoProperty $prescribingInfo) {
		$this->prescribingInfo = $prescribingInfo;

		return $this;
	}

	/**
	 * Set prescription status.
	 *
	 * @param Property\PrescriptionStatusProperty $prescriptionStatus
	 * @return DrugType
	 */
	public function setPrescriptionStatus(Property\PrescriptionStatusProperty $prescriptionStatus) {
		$this->prescriptionStatus = $prescriptionStatus;

		return $this;
	}

	/**
	 * Set proprietary name.
	 *
	 * @param Property\ProprietaryNameProperty $proprietaryName
	 * @return DrugType
	 */
	public function setProprietaryName(Property\ProprietaryNameProperty $proprietaryName) {
		$this->proprietaryName = $proprietaryName;

		return $this;
	}

	/**
	 * Set related drug.
	 *
	 * @param Property\RelatedDrugProperty $relatedDrug
	 * @return DrugType
	 */
	public function setRelatedDrug(Property\RelatedDrugProperty $relatedDrug) {
		$this->relatedDrug = $relatedDrug;

		return $this;
	}

	/**
	 * Set warning.
	 *
	 * @param Property\WarningProperty $warning
	 * @return DrugType
	 */
	public function setWarning(Property\WarningProperty $warning) {
		$this->warning = $warning;

		return $this;
	}
}