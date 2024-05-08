<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The cost per unit of a medical drug. Note that this type is not meant to represent the price in an offer of a drug for sale; see the Offer type for that. This type will typically be used to tag wholesale or average retail cost of a drug, or maximum reimbursable cost. Costs of medical drugs vary widely depending on how and where they are paid for, so while this type captures some of the variables, costs should be used with caution by consumers of this schema's markup.
 * 
 * @method DrugCostType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugCostType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugCostType setCode(Property\CodeProperty $code)
 * @method DrugCostType setDescription(Property\DescriptionProperty $description)
 * @method DrugCostType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugCostType setGuideline(Property\GuidelineProperty $guideline)
 * @method DrugCostType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugCostType setImage(Property\ImageProperty $image)
 * @method DrugCostType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DrugCostType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugCostType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DrugCostType setName(Property\NameProperty $name)
 * @method DrugCostType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugCostType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DrugCostType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DrugCostType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugCostType setStudy(Property\StudyProperty $study)
 * @method DrugCostType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugCostType setUrl(Property\UrlProperty $url)
 */
class DrugCostType extends MedicalEntityType {

	/**
	 * @var Property\ApplicableLocationProperty
	 */
	private $applicableLocation;

	/**
	 * @var Property\CostCategoryProperty
	 */
	private $costCategory;

	/**
	 * @var Property\CostCurrencyProperty
	 */
	private $costCurrency;

	/**
	 * @var Property\CostOriginProperty
	 */
	private $costOrigin;

	/**
	 * @var Property\CostPerUnitProperty
	 */
	private $costPerUnit;

	/**
	 * @var Property\DrugUnitProperty
	 */
	private $drugUnit;

	/**
	 * Get applicable location.
	 *
	 * @return Property\ApplicableLocationProperty
	 */
	public function getApplicableLocation() {
		return $this->applicableLocation;
	}

	/**
	 * Get cost category.
	 *
	 * @return Property\CostCategoryProperty
	 */
	public function getCostCategory() {
		return $this->costCategory;
	}

	/**
	 * Get cost currency.
	 *
	 * @return Property\CostCurrencyProperty
	 */
	public function getCostCurrency() {
		return $this->costCurrency;
	}

	/**
	 * Get cost origin.
	 *
	 * @return Property\CostOriginProperty
	 */
	public function getCostOrigin() {
		return $this->costOrigin;
	}

	/**
	 * Get cost per unit.
	 *
	 * @return Property\CostPerUnitProperty
	 */
	public function getCostPerUnit() {
		return $this->costPerUnit;
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
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugCost';
	}

	/**
	 * Set applicable location.
	 *
	 * @param Property\ApplicableLocationProperty $applicableLocation
	 * @return DrugCostType
	 */
	public function setApplicableLocation(Property\ApplicableLocationProperty $applicableLocation) {
		$this->applicableLocation = $applicableLocation;

		return $this;
	}

	/**
	 * Set cost category.
	 *
	 * @param Property\CostCategoryProperty $costCategory
	 * @return DrugCostType
	 */
	public function setCostCategory(Property\CostCategoryProperty $costCategory) {
		$this->costCategory = $costCategory;

		return $this;
	}

	/**
	 * Set cost currency.
	 *
	 * @param Property\CostCurrencyProperty $costCurrency
	 * @return DrugCostType
	 */
	public function setCostCurrency(Property\CostCurrencyProperty $costCurrency) {
		$this->costCurrency = $costCurrency;

		return $this;
	}

	/**
	 * Set cost origin.
	 *
	 * @param Property\CostOriginProperty $costOrigin
	 * @return DrugCostType
	 */
	public function setCostOrigin(Property\CostOriginProperty $costOrigin) {
		$this->costOrigin = $costOrigin;

		return $this;
	}

	/**
	 * Set cost per unit.
	 *
	 * @param Property\CostPerUnitProperty $costPerUnit
	 * @return DrugCostType
	 */
	public function setCostPerUnit(Property\CostPerUnitProperty $costPerUnit) {
		$this->costPerUnit = $costPerUnit;

		return $this;
	}

	/**
	 * Set drug unit.
	 *
	 * @param Property\DrugUnitProperty $drugUnit
	 * @return DrugCostType
	 */
	public function setDrugUnit(Property\DrugUnitProperty $drugUnit) {
		$this->drugUnit = $drugUnit;

		return $this;
	}
}