<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A risk factor is anything that increases a person's likelihood of developing or contracting a disease, medical condition, or complication.
 * 
 * @method MedicalRiskFactorType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalRiskFactorType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalRiskFactorType setCode(Property\CodeProperty $code)
 * @method MedicalRiskFactorType setDescription(Property\DescriptionProperty $description)
 * @method MedicalRiskFactorType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalRiskFactorType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalRiskFactorType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalRiskFactorType setImage(Property\ImageProperty $image)
 * @method MedicalRiskFactorType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalRiskFactorType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalRiskFactorType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalRiskFactorType setName(Property\NameProperty $name)
 * @method MedicalRiskFactorType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalRiskFactorType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalRiskFactorType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalRiskFactorType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalRiskFactorType setStudy(Property\StudyProperty $study)
 * @method MedicalRiskFactorType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalRiskFactorType setUrl(Property\UrlProperty $url)
 */
class MedicalRiskFactorType extends MedicalEntityType {

	/**
	 * @var Property\IncreasesRiskOfProperty
	 */
	private $increasesRiskOf;

	/**
	 * Get increases risk of.
	 *
	 * @return Property\IncreasesRiskOfProperty
	 */
	public function getIncreasesRiskOf() {
		return $this->increasesRiskOf;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalRiskFactor';
	}

	/**
	 * Set increases risk of.
	 *
	 * @param Property\IncreasesRiskOfProperty $increasesRiskOf
	 * @return MedicalRiskFactorType
	 */
	public function setIncreasesRiskOf(Property\IncreasesRiskOfProperty $increasesRiskOf) {
		$this->increasesRiskOf = $increasesRiskOf;

		return $this;
	}
}