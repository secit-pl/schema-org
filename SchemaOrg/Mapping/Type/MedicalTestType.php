<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any medical test, typically performed for diagnostic purposes.
 * 
 * @method MedicalTestType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalTestType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalTestType setCode(Property\CodeProperty $code)
 * @method MedicalTestType setDescription(Property\DescriptionProperty $description)
 * @method MedicalTestType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalTestType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalTestType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalTestType setImage(Property\ImageProperty $image)
 * @method MedicalTestType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalTestType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalTestType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalTestType setName(Property\NameProperty $name)
 * @method MedicalTestType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalTestType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalTestType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalTestType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalTestType setStudy(Property\StudyProperty $study)
 * @method MedicalTestType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalTestType setUrl(Property\UrlProperty $url)
 */
class MedicalTestType extends MedicalEntityType {

	/**
	 * @var Property\AffectedByProperty
	 */
	private $affectedBy;

	/**
	 * @var Property\NormalRangeProperty
	 */
	private $normalRange;

	/**
	 * @var Property\SignDetectedProperty
	 */
	private $signDetected;

	/**
	 * @var Property\UsedToDiagnoseProperty
	 */
	private $usedToDiagnose;

	/**
	 * @var Property\UsesDeviceProperty
	 */
	private $usesDevice;

	/**
	 * Get affected by.
	 *
	 * @return Property\AffectedByProperty
	 */
	public function getAffectedBy() {
		return $this->affectedBy;
	}

	/**
	 * Get normal range.
	 *
	 * @return Property\NormalRangeProperty
	 */
	public function getNormalRange() {
		return $this->normalRange;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalTest';
	}

	/**
	 * Get sign detected.
	 *
	 * @return Property\SignDetectedProperty
	 */
	public function getSignDetected() {
		return $this->signDetected;
	}

	/**
	 * Get used to diagnose.
	 *
	 * @return Property\UsedToDiagnoseProperty
	 */
	public function getUsedToDiagnose() {
		return $this->usedToDiagnose;
	}

	/**
	 * Get uses device.
	 *
	 * @return Property\UsesDeviceProperty
	 */
	public function getUsesDevice() {
		return $this->usesDevice;
	}

	/**
	 * Set affected by.
	 *
	 * @param Property\AffectedByProperty $affectedBy
	 * @return MedicalTestType
	 */
	public function setAffectedBy(Property\AffectedByProperty $affectedBy) {
		$this->affectedBy = $affectedBy;

		return $this;
	}

	/**
	 * Set normal range.
	 *
	 * @param Property\NormalRangeProperty $normalRange
	 * @return MedicalTestType
	 */
	public function setNormalRange(Property\NormalRangeProperty $normalRange) {
		$this->normalRange = $normalRange;

		return $this;
	}

	/**
	 * Set sign detected.
	 *
	 * @param Property\SignDetectedProperty $signDetected
	 * @return MedicalTestType
	 */
	public function setSignDetected(Property\SignDetectedProperty $signDetected) {
		$this->signDetected = $signDetected;

		return $this;
	}

	/**
	 * Set used to diagnose.
	 *
	 * @param Property\UsedToDiagnoseProperty $usedToDiagnose
	 * @return MedicalTestType
	 */
	public function setUsedToDiagnose(Property\UsedToDiagnoseProperty $usedToDiagnose) {
		$this->usedToDiagnose = $usedToDiagnose;

		return $this;
	}

	/**
	 * Set uses device.
	 *
	 * @param Property\UsesDeviceProperty $usesDevice
	 * @return MedicalTestType
	 */
	public function setUsesDevice(Property\UsesDeviceProperty $usesDevice) {
		$this->usesDevice = $usesDevice;

		return $this;
	}
}