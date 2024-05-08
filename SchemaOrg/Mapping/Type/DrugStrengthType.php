<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific strength in which a medical drug is available in a specific country.
 * 
 * @method DrugStrengthType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugStrengthType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugStrengthType setCode(Property\CodeProperty $code)
 * @method DrugStrengthType setDescription(Property\DescriptionProperty $description)
 * @method DrugStrengthType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugStrengthType setGuideline(Property\GuidelineProperty $guideline)
 * @method DrugStrengthType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugStrengthType setImage(Property\ImageProperty $image)
 * @method DrugStrengthType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DrugStrengthType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugStrengthType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DrugStrengthType setName(Property\NameProperty $name)
 * @method DrugStrengthType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugStrengthType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DrugStrengthType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DrugStrengthType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugStrengthType setStudy(Property\StudyProperty $study)
 * @method DrugStrengthType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugStrengthType setUrl(Property\UrlProperty $url)
 */
class DrugStrengthType extends MedicalIntangibleType {

	/**
	 * @var Property\ActiveIngredientProperty
	 */
	private $activeIngredient;

	/**
	 * @var Property\AvailableInProperty
	 */
	private $availableIn;

	/**
	 * @var Property\MaximumIntakeProperty
	 */
	private $maximumIntake;

	/**
	 * @var Property\StrengthUnitProperty
	 */
	private $strengthUnit;

	/**
	 * @var Property\StrengthValueProperty
	 */
	private $strengthValue;

	/**
	 * Get active ingredient.
	 *
	 * @return Property\ActiveIngredientProperty
	 */
	public function getActiveIngredient() {
		return $this->activeIngredient;
	}

	/**
	 * Get available in.
	 *
	 * @return Property\AvailableInProperty
	 */
	public function getAvailableIn() {
		return $this->availableIn;
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
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugStrength';
	}

	/**
	 * Get strength unit.
	 *
	 * @return Property\StrengthUnitProperty
	 */
	public function getStrengthUnit() {
		return $this->strengthUnit;
	}

	/**
	 * Get strength value.
	 *
	 * @return Property\StrengthValueProperty
	 */
	public function getStrengthValue() {
		return $this->strengthValue;
	}

	/**
	 * Set active ingredient.
	 *
	 * @param Property\ActiveIngredientProperty $activeIngredient
	 * @return DrugStrengthType
	 */
	public function setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient) {
		$this->activeIngredient = $activeIngredient;

		return $this;
	}

	/**
	 * Set available in.
	 *
	 * @param Property\AvailableInProperty $availableIn
	 * @return DrugStrengthType
	 */
	public function setAvailableIn(Property\AvailableInProperty $availableIn) {
		$this->availableIn = $availableIn;

		return $this;
	}

	/**
	 * Set maximum intake.
	 *
	 * @param Property\MaximumIntakeProperty $maximumIntake
	 * @return DrugStrengthType
	 */
	public function setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake) {
		$this->maximumIntake = $maximumIntake;

		return $this;
	}

	/**
	 * Set strength unit.
	 *
	 * @param Property\StrengthUnitProperty $strengthUnit
	 * @return DrugStrengthType
	 */
	public function setStrengthUnit(Property\StrengthUnitProperty $strengthUnit) {
		$this->strengthUnit = $strengthUnit;

		return $this;
	}

	/**
	 * Set strength value.
	 *
	 * @param Property\StrengthValueProperty $strengthValue
	 * @return DrugStrengthType
	 */
	public function setStrengthValue(Property\StrengthValueProperty $strengthValue) {
		$this->strengthValue = $strengthValue;

		return $this;
	}
}