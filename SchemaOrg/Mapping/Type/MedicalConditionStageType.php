<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A stage of a medical condition, such as 'Stage IIIa'.
 * 
 * @method MedicalConditionStageType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalConditionStageType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalConditionStageType setCode(Property\CodeProperty $code)
 * @method MedicalConditionStageType setDescription(Property\DescriptionProperty $description)
 * @method MedicalConditionStageType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalConditionStageType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalConditionStageType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalConditionStageType setImage(Property\ImageProperty $image)
 * @method MedicalConditionStageType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalConditionStageType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalConditionStageType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalConditionStageType setName(Property\NameProperty $name)
 * @method MedicalConditionStageType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalConditionStageType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalConditionStageType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalConditionStageType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalConditionStageType setStudy(Property\StudyProperty $study)
 * @method MedicalConditionStageType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalConditionStageType setUrl(Property\UrlProperty $url)
 */
class MedicalConditionStageType extends MedicalIntangibleType {

	/**
	 * @var Property\StageAsNumberProperty
	 */
	private $stageAsNumber;

	/**
	 * @var Property\SubStageSuffixProperty
	 */
	private $subStageSuffix;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalConditionStage';
	}

	/**
	 * Get stage as number.
	 *
	 * @return Property\StageAsNumberProperty
	 */
	public function getStageAsNumber() {
		return $this->stageAsNumber;
	}

	/**
	 * Get sub stage suffix.
	 *
	 * @return Property\SubStageSuffixProperty
	 */
	public function getSubStageSuffix() {
		return $this->subStageSuffix;
	}

	/**
	 * Set stage as number.
	 *
	 * @param Property\StageAsNumberProperty $stageAsNumber
	 * @return MedicalConditionStageType
	 */
	public function setStageAsNumber(Property\StageAsNumberProperty $stageAsNumber) {
		$this->stageAsNumber = $stageAsNumber;

		return $this;
	}

	/**
	 * Set sub stage suffix.
	 *
	 * @param Property\SubStageSuffixProperty $subStageSuffix
	 * @return MedicalConditionStageType
	 */
	public function setSubStageSuffix(Property\SubStageSuffixProperty $subStageSuffix) {
		$this->subStageSuffix = $subStageSuffix;

		return $this;
	}
}