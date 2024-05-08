<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A code for a medical entity.
 * 
 * @method MedicalCodeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalCodeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalCodeType setCode(Property\CodeProperty $code)
 * @method MedicalCodeType setDescription(Property\DescriptionProperty $description)
 * @method MedicalCodeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalCodeType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalCodeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalCodeType setImage(Property\ImageProperty $image)
 * @method MedicalCodeType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalCodeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalCodeType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalCodeType setName(Property\NameProperty $name)
 * @method MedicalCodeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalCodeType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalCodeType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalCodeType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalCodeType setStudy(Property\StudyProperty $study)
 * @method MedicalCodeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalCodeType setUrl(Property\UrlProperty $url)
 */
class MedicalCodeType extends MedicalIntangibleType {

	/**
	 * @var Property\CodingSystemProperty
	 */
	private $codingSystem;

	/**
	 * Get coding system.
	 *
	 * @return Property\CodingSystemProperty
	 */
	public function getCodingSystem() {
		return $this->codingSystem;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalCode';
	}

	/**
	 * Set coding system.
	 *
	 * @param Property\CodingSystemProperty $codingSystem
	 * @return MedicalCodeType
	 */
	public function setCodingSystem(Property\CodingSystemProperty $codingSystem) {
		$this->codingSystem = $codingSystem;

		return $this;
	}
}