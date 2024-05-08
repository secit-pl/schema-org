<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific dosing schedule for a drug or supplement.
 * 
 * @method DoseScheduleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DoseScheduleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DoseScheduleType setCode(Property\CodeProperty $code)
 * @method DoseScheduleType setDescription(Property\DescriptionProperty $description)
 * @method DoseScheduleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DoseScheduleType setGuideline(Property\GuidelineProperty $guideline)
 * @method DoseScheduleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DoseScheduleType setImage(Property\ImageProperty $image)
 * @method DoseScheduleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DoseScheduleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DoseScheduleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DoseScheduleType setName(Property\NameProperty $name)
 * @method DoseScheduleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DoseScheduleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DoseScheduleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DoseScheduleType setSameAs(Property\SameAsProperty $sameAs)
 * @method DoseScheduleType setStudy(Property\StudyProperty $study)
 * @method DoseScheduleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DoseScheduleType setUrl(Property\UrlProperty $url)
 */
class DoseScheduleType extends MedicalIntangibleType {

	/**
	 * @var Property\DoseUnitProperty
	 */
	private $doseUnit;

	/**
	 * @var Property\DoseValueProperty
	 */
	private $doseValue;

	/**
	 * @var Property\FrequencyProperty
	 */
	private $frequency;

	/**
	 * @var Property\TargetPopulationProperty
	 */
	private $targetPopulation;

	/**
	 * Get dose unit.
	 *
	 * @return Property\DoseUnitProperty
	 */
	public function getDoseUnit() {
		return $this->doseUnit;
	}

	/**
	 * Get dose value.
	 *
	 * @return Property\DoseValueProperty
	 */
	public function getDoseValue() {
		return $this->doseValue;
	}

	/**
	 * Get frequency.
	 *
	 * @return Property\FrequencyProperty
	 */
	public function getFrequency() {
		return $this->frequency;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DoseSchedule';
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
	 * Set dose unit.
	 *
	 * @param Property\DoseUnitProperty $doseUnit
	 * @return DoseScheduleType
	 */
	public function setDoseUnit(Property\DoseUnitProperty $doseUnit) {
		$this->doseUnit = $doseUnit;

		return $this;
	}

	/**
	 * Set dose value.
	 *
	 * @param Property\DoseValueProperty $doseValue
	 * @return DoseScheduleType
	 */
	public function setDoseValue(Property\DoseValueProperty $doseValue) {
		$this->doseValue = $doseValue;

		return $this;
	}

	/**
	 * Set frequency.
	 *
	 * @param Property\FrequencyProperty $frequency
	 * @return DoseScheduleType
	 */
	public function setFrequency(Property\FrequencyProperty $frequency) {
		$this->frequency = $frequency;

		return $this;
	}

	/**
	 * Set target population.
	 *
	 * @param Property\TargetPopulationProperty $targetPopulation
	 * @return DoseScheduleType
	 */
	public function setTargetPopulation(Property\TargetPopulationProperty $targetPopulation) {
		$this->targetPopulation = $targetPopulation;

		return $this;
	}
}