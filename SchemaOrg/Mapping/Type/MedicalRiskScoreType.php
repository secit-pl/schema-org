<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A simple system that adds up the number of risk factors to yield a score that is associated with prognosis, e.g. CHAD score, TIMI risk score.
 * 
 * @method MedicalRiskScoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalRiskScoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalRiskScoreType setCode(Property\CodeProperty $code)
 * @method MedicalRiskScoreType setDescription(Property\DescriptionProperty $description)
 * @method MedicalRiskScoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalRiskScoreType setEstimatesRiskOf(Property\EstimatesRiskOfProperty $estimatesRiskOf)
 * @method MedicalRiskScoreType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalRiskScoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalRiskScoreType setImage(Property\ImageProperty $image)
 * @method MedicalRiskScoreType setIncludedRiskFactor(Property\IncludedRiskFactorProperty $includedRiskFactor)
 * @method MedicalRiskScoreType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalRiskScoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalRiskScoreType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalRiskScoreType setName(Property\NameProperty $name)
 * @method MedicalRiskScoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalRiskScoreType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalRiskScoreType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalRiskScoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalRiskScoreType setStudy(Property\StudyProperty $study)
 * @method MedicalRiskScoreType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalRiskScoreType setUrl(Property\UrlProperty $url)
 */
class MedicalRiskScoreType extends MedicalRiskEstimatorType {

	/**
	 * @var Property\AlgorithmProperty
	 */
	private $algorithm;

	/**
	 * Get algorithm.
	 *
	 * @return Property\AlgorithmProperty
	 */
	public function getAlgorithm() {
		return $this->algorithm;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalRiskScore';
	}

	/**
	 * Set algorithm.
	 *
	 * @param Property\AlgorithmProperty $algorithm
	 * @return MedicalRiskScoreType
	 */
	public function setAlgorithm(Property\AlgorithmProperty $algorithm) {
		$this->algorithm = $algorithm;

		return $this;
	}
}