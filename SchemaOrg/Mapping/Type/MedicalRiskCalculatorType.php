<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A complex mathematical calculation requiring an online calculator, used to assess prognosis. Note: use the url property of Thing to record any URLs for online calculators.
 * 
 * @method MedicalRiskCalculatorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalRiskCalculatorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalRiskCalculatorType setCode(Property\CodeProperty $code)
 * @method MedicalRiskCalculatorType setDescription(Property\DescriptionProperty $description)
 * @method MedicalRiskCalculatorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalRiskCalculatorType setEstimatesRiskOf(Property\EstimatesRiskOfProperty $estimatesRiskOf)
 * @method MedicalRiskCalculatorType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalRiskCalculatorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalRiskCalculatorType setImage(Property\ImageProperty $image)
 * @method MedicalRiskCalculatorType setIncludedRiskFactor(Property\IncludedRiskFactorProperty $includedRiskFactor)
 * @method MedicalRiskCalculatorType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalRiskCalculatorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalRiskCalculatorType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalRiskCalculatorType setName(Property\NameProperty $name)
 * @method MedicalRiskCalculatorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalRiskCalculatorType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalRiskCalculatorType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalRiskCalculatorType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalRiskCalculatorType setStudy(Property\StudyProperty $study)
 * @method MedicalRiskCalculatorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalRiskCalculatorType setUrl(Property\UrlProperty $url)
 */
class MedicalRiskCalculatorType extends MedicalRiskEstimatorType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalRiskCalculator';
	}
}