<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The legal availability status of a medical drug.
 * 
 * @method DrugLegalStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DrugLegalStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DrugLegalStatusType setCode(Property\CodeProperty $code)
 * @method DrugLegalStatusType setDescription(Property\DescriptionProperty $description)
 * @method DrugLegalStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DrugLegalStatusType setGuideline(Property\GuidelineProperty $guideline)
 * @method DrugLegalStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DrugLegalStatusType setImage(Property\ImageProperty $image)
 * @method DrugLegalStatusType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DrugLegalStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DrugLegalStatusType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DrugLegalStatusType setName(Property\NameProperty $name)
 * @method DrugLegalStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DrugLegalStatusType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DrugLegalStatusType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DrugLegalStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method DrugLegalStatusType setStudy(Property\StudyProperty $study)
 * @method DrugLegalStatusType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DrugLegalStatusType setUrl(Property\UrlProperty $url)
 */
class DrugLegalStatusType extends MedicalIntangibleType {

	/**
	 * @var Property\ApplicableLocationProperty
	 */
	private $applicableLocation;

	/**
	 * Get applicable location.
	 *
	 * @return Property\ApplicableLocationProperty
	 */
	public function getApplicableLocation() {
		return $this->applicableLocation;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DrugLegalStatus';
	}

	/**
	 * Set applicable location.
	 *
	 * @param Property\ApplicableLocationProperty $applicableLocation
	 * @return DrugLegalStatusType
	 */
	public function setApplicableLocation(Property\ApplicableLocationProperty $applicableLocation) {
		$this->applicableLocation = $applicableLocation;

		return $this;
	}
}