<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any rule set or interactive tool for estimating the risk of developing a complication or condition.
 * 
 * @method MedicalRiskEstimatorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalRiskEstimatorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalRiskEstimatorType setCode(Property\CodeProperty $code)
 * @method MedicalRiskEstimatorType setDescription(Property\DescriptionProperty $description)
 * @method MedicalRiskEstimatorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalRiskEstimatorType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalRiskEstimatorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalRiskEstimatorType setImage(Property\ImageProperty $image)
 * @method MedicalRiskEstimatorType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalRiskEstimatorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalRiskEstimatorType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalRiskEstimatorType setName(Property\NameProperty $name)
 * @method MedicalRiskEstimatorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalRiskEstimatorType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalRiskEstimatorType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalRiskEstimatorType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalRiskEstimatorType setStudy(Property\StudyProperty $study)
 * @method MedicalRiskEstimatorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalRiskEstimatorType setUrl(Property\UrlProperty $url)
 */
class MedicalRiskEstimatorType extends MedicalEntityType {

	/**
	 * @var Property\EstimatesRiskOfProperty
	 */
	private $estimatesRiskOf;

	/**
	 * @var Property\IncludedRiskFactorProperty
	 */
	private $includedRiskFactor;

	/**
	 * Get estimates risk of.
	 *
	 * @return Property\EstimatesRiskOfProperty
	 */
	public function getEstimatesRiskOf() {
		return $this->estimatesRiskOf;
	}

	/**
	 * Get included risk factor.
	 *
	 * @return Property\IncludedRiskFactorProperty
	 */
	public function getIncludedRiskFactor() {
		return $this->includedRiskFactor;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalRiskEstimator';
	}

	/**
	 * Set estimates risk of.
	 *
	 * @param Property\EstimatesRiskOfProperty $estimatesRiskOf
	 * @return MedicalRiskEstimatorType
	 */
	public function setEstimatesRiskOf(Property\EstimatesRiskOfProperty $estimatesRiskOf) {
		$this->estimatesRiskOf = $estimatesRiskOf;

		return $this;
	}

	/**
	 * Set included risk factor.
	 *
	 * @param Property\IncludedRiskFactorProperty $includedRiskFactor
	 * @return MedicalRiskEstimatorType
	 */
	public function setIncludedRiskFactor(Property\IncludedRiskFactorProperty $includedRiskFactor) {
		$this->includedRiskFactor = $includedRiskFactor;

		return $this;
	}
}