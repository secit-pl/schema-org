<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Fitness-related activity designed for a specific health-related purpose, including defined exercise routines as well as activity prescribed by a clinician.
 * 
 * @method ExercisePlanType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ExercisePlanType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ExercisePlanType setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy)
 * @method ExercisePlanType setCategory(Property\CategoryProperty $category)
 * @method ExercisePlanType setCode(Property\CodeProperty $code)
 * @method ExercisePlanType setDescription(Property\DescriptionProperty $description)
 * @method ExercisePlanType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ExercisePlanType setEpidemiology(Property\EpidemiologyProperty $epidemiology)
 * @method ExercisePlanType setGuideline(Property\GuidelineProperty $guideline)
 * @method ExercisePlanType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ExercisePlanType setImage(Property\ImageProperty $image)
 * @method ExercisePlanType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ExercisePlanType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ExercisePlanType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ExercisePlanType setName(Property\NameProperty $name)
 * @method ExercisePlanType setPathophysiology(Property\PathophysiologyProperty $pathophysiology)
 * @method ExercisePlanType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ExercisePlanType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ExercisePlanType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ExercisePlanType setSameAs(Property\SameAsProperty $sameAs)
 * @method ExercisePlanType setStudy(Property\StudyProperty $study)
 * @method ExercisePlanType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ExercisePlanType setUrl(Property\UrlProperty $url)
 */
class ExercisePlanType extends PhysicalActivityType {

	/**
	 * @var Property\ActivityDurationProperty
	 */
	private $activityDuration;

	/**
	 * @var Property\ActivityFrequencyProperty
	 */
	private $activityFrequency;

	/**
	 * @var Property\AdditionalVariableProperty
	 */
	private $additionalVariable;

	/**
	 * @var Property\ExerciseTypeProperty
	 */
	private $exerciseType;

	/**
	 * @var Property\IntensityProperty
	 */
	private $intensity;

	/**
	 * @var Property\RepetitionsProperty
	 */
	private $repetitions;

	/**
	 * @var Property\RestPeriodsProperty
	 */
	private $restPeriods;

	/**
	 * @var Property\WorkloadProperty
	 */
	private $workload;

	/**
	 * Get activity duration.
	 *
	 * @return Property\ActivityDurationProperty
	 */
	public function getActivityDuration() {
		return $this->activityDuration;
	}

	/**
	 * Get activity frequency.
	 *
	 * @return Property\ActivityFrequencyProperty
	 */
	public function getActivityFrequency() {
		return $this->activityFrequency;
	}

	/**
	 * Get additional variable.
	 *
	 * @return Property\AdditionalVariableProperty
	 */
	public function getAdditionalVariable() {
		return $this->additionalVariable;
	}

	/**
	 * Get exercise type.
	 *
	 * @return Property\ExerciseTypeProperty
	 */
	public function getExerciseType() {
		return $this->exerciseType;
	}

	/**
	 * Get intensity.
	 *
	 * @return Property\IntensityProperty
	 */
	public function getIntensity() {
		return $this->intensity;
	}

	/**
	 * Get repetitions.
	 *
	 * @return Property\RepetitionsProperty
	 */
	public function getRepetitions() {
		return $this->repetitions;
	}

	/**
	 * Get rest periods.
	 *
	 * @return Property\RestPeriodsProperty
	 */
	public function getRestPeriods() {
		return $this->restPeriods;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExercisePlan';
	}

	/**
	 * Get workload.
	 *
	 * @return Property\WorkloadProperty
	 */
	public function getWorkload() {
		return $this->workload;
	}

	/**
	 * Set activity duration.
	 *
	 * @param Property\ActivityDurationProperty $activityDuration
	 * @return ExercisePlanType
	 */
	public function setActivityDuration(Property\ActivityDurationProperty $activityDuration) {
		$this->activityDuration = $activityDuration;

		return $this;
	}

	/**
	 * Set activity frequency.
	 *
	 * @param Property\ActivityFrequencyProperty $activityFrequency
	 * @return ExercisePlanType
	 */
	public function setActivityFrequency(Property\ActivityFrequencyProperty $activityFrequency) {
		$this->activityFrequency = $activityFrequency;

		return $this;
	}

	/**
	 * Set additional variable.
	 *
	 * @param Property\AdditionalVariableProperty $additionalVariable
	 * @return ExercisePlanType
	 */
	public function setAdditionalVariable(Property\AdditionalVariableProperty $additionalVariable) {
		$this->additionalVariable = $additionalVariable;

		return $this;
	}

	/**
	 * Set exercise type.
	 *
	 * @param Property\ExerciseTypeProperty $exerciseType
	 * @return ExercisePlanType
	 */
	public function setExerciseType(Property\ExerciseTypeProperty $exerciseType) {
		$this->exerciseType = $exerciseType;

		return $this;
	}

	/**
	 * Set intensity.
	 *
	 * @param Property\IntensityProperty $intensity
	 * @return ExercisePlanType
	 */
	public function setIntensity(Property\IntensityProperty $intensity) {
		$this->intensity = $intensity;

		return $this;
	}

	/**
	 * Set repetitions.
	 *
	 * @param Property\RepetitionsProperty $repetitions
	 * @return ExercisePlanType
	 */
	public function setRepetitions(Property\RepetitionsProperty $repetitions) {
		$this->repetitions = $repetitions;

		return $this;
	}

	/**
	 * Set rest periods.
	 *
	 * @param Property\RestPeriodsProperty $restPeriods
	 * @return ExercisePlanType
	 */
	public function setRestPeriods(Property\RestPeriodsProperty $restPeriods) {
		$this->restPeriods = $restPeriods;

		return $this;
	}

	/**
	 * Set workload.
	 *
	 * @param Property\WorkloadProperty $workload
	 * @return ExercisePlanType
	 */
	public function setWorkload(Property\WorkloadProperty $workload) {
		$this->workload = $workload;

		return $this;
	}
}