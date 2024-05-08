<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A class of medical drugs, e.g., statins. Classes can represent general pharmacological class, common mechanisms of action, common physiological effects, etc.
 * 
 * @method DrugClassType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugClassType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugClassType setCode(Property\CodeProperty $code)
 * @method DrugClassType setDescription(Property\DescriptionProperty $description)
 * @method DrugClassType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugClassType setGuideline(Property\GuidelineProperty $guideline)
 * @method DrugClassType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugClassType setImage(Property\ImageProperty $image)
 * @method DrugClassType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DrugClassType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugClassType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DrugClassType setName(Property\NameProperty $name)
 * @method DrugClassType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugClassType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DrugClassType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DrugClassType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugClassType setStudy(Property\StudyProperty $study)
 * @method DrugClassType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugClassType setUrl(Property\UrlProperty $url)
 */
class DrugClassType extends MedicalEntityType {

	/**
	 * @var Property\DrugProperty
	 */
	private $drug;

	/**
	 * Get drug.
	 *
	 * @return Property\DrugProperty
	 */
	public function getDrug() {
		return $this->drug;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugClass';
	}

	/**
	 * Set drug.
	 *
	 * @param Property\DrugProperty $drug
	 * @return DrugClassType
	 */
	public function setDrug(Property\DrugProperty $drug) {
		$this->drug = $drug;

		return $this;
	}
}