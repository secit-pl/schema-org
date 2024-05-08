<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An alternative, closely-related condition typically considered later in the differential diagnosis process along with the signs that are used to distinguish it.
 * 
 * @method DDxElementType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DDxElementType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DDxElementType setCode(Property\CodeProperty $code)
 * @method DDxElementType setDescription(Property\DescriptionProperty $description)
 * @method DDxElementType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DDxElementType setGuideline(Property\GuidelineProperty $guideline)
 * @method DDxElementType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DDxElementType setImage(Property\ImageProperty $image)
 * @method DDxElementType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DDxElementType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DDxElementType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DDxElementType setName(Property\NameProperty $name)
 * @method DDxElementType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DDxElementType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DDxElementType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DDxElementType setSameAs(Property\SameAsProperty $sameAs)
 * @method DDxElementType setStudy(Property\StudyProperty $study)
 * @method DDxElementType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DDxElementType setUrl(Property\UrlProperty $url)
 */
class DDxElementType extends MedicalIntangibleType {

	/**
	 * @var Property\DiagnosisProperty
	 */
	private $diagnosis;

	/**
	 * @var Property\DistinguishingSignProperty
	 */
	private $distinguishingSign;

	/**
	 * Get diagnosis.
	 *
	 * @return Property\DiagnosisProperty
	 */
	public function getDiagnosis() {
		return $this->diagnosis;
	}

	/**
	 * Get distinguishing sign.
	 *
	 * @return Property\DistinguishingSignProperty
	 */
	public function getDistinguishingSign() {
		return $this->distinguishingSign;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DDxElement';
	}

	/**
	 * Set diagnosis.
	 *
	 * @param Property\DiagnosisProperty $diagnosis
	 * @return DDxElementType
	 */
	public function setDiagnosis(Property\DiagnosisProperty $diagnosis) {
		$this->diagnosis = $diagnosis;

		return $this;
	}

	/**
	 * Set distinguishing sign.
	 *
	 * @param Property\DistinguishingSignProperty $distinguishingSign
	 * @return DDxElementType
	 */
	public function setDistinguishingSign(Property\DistinguishingSignProperty $distinguishingSign) {
		$this->distinguishingSign = $distinguishingSign;

		return $this;
	}
}