<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A patient is any person recipient of health care services.
 * 
 * @method PatientType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PatientType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PatientType setAudienceType(Property\AudienceTypeProperty $audienceType)
 * @method PatientType setDescription(Property\DescriptionProperty $description)
 * @method PatientType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PatientType setGeographicArea(Property\GeographicAreaProperty $geographicArea)
 * @method PatientType setHealthCondition(Property\HealthConditionProperty $healthCondition)
 * @method PatientType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PatientType setImage(Property\ImageProperty $image)
 * @method PatientType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PatientType setName(Property\NameProperty $name)
 * @method PatientType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PatientType setRequiredGender(Property\RequiredGenderProperty $requiredGender)
 * @method PatientType setRequiredMaxAge(Property\RequiredMaxAgeProperty $requiredMaxAge)
 * @method PatientType setRequiredMinAge(Property\RequiredMinAgeProperty $requiredMinAge)
 * @method PatientType setSameAs(Property\SameAsProperty $sameAs)
 * @method PatientType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PatientType setSuggestedGender(Property\SuggestedGenderProperty $suggestedGender)
 * @method PatientType setSuggestedMaxAge(Property\SuggestedMaxAgeProperty $suggestedMaxAge)
 * @method PatientType setSuggestedMinAge(Property\SuggestedMinAgeProperty $suggestedMinAge)
 * @method PatientType setUrl(Property\UrlProperty $url)
 */
class PatientType extends MedicalAudienceType {

	/**
	 * @var Property\DiagnosisProperty
	 */
	private $diagnosis;

	/**
	 * @var Property\DrugProperty
	 */
	private $drug;

	/**
	 * @var Property\HealthConditionProperty
	 */
	private $healthCondition;

	/**
	 * Get diagnosis.
	 *
	 * @return Property\DiagnosisProperty
	 */
	public function getDiagnosis() {
		return $this->diagnosis;
	}

	/**
	 * Get drug.
	 *
	 * @return Property\DrugProperty
	 */
	public function getDrug() {
		return $this->drug;
	}

	/**
	 * Get health condition.
	 *
	 * @return Property\HealthConditionProperty
	 */
	public function getHealthCondition() {
		return $this->healthCondition;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Patient';
	}

	/**
	 * Set diagnosis.
	 *
	 * @param Property\DiagnosisProperty $diagnosis
	 * @return PatientType
	 */
	public function setDiagnosis(Property\DiagnosisProperty $diagnosis) {
		$this->diagnosis = $diagnosis;

		return $this;
	}

	/**
	 * Set drug.
	 *
	 * @param Property\DrugProperty $drug
	 * @return PatientType
	 */
	public function setDrug(Property\DrugProperty $drug) {
		$this->drug = $drug;

		return $this;
	}

	/**
	 * Set health condition.
	 *
	 * @param Property\HealthConditionProperty $healthCondition
	 * @return PatientType
	 */
	public function setHealthCondition(Property\HealthConditionProperty $healthCondition) {
		$this->healthCondition = $healthCondition;

		return $this;
	}
}