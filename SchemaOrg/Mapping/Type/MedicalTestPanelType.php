<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any collection of tests commonly ordered together.
 * 
 * @method MedicalTestPanelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalTestPanelType setAffectedBy(Property\AffectedByProperty $affectedBy)
 * @method MedicalTestPanelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalTestPanelType setCode(Property\CodeProperty $code)
 * @method MedicalTestPanelType setDescription(Property\DescriptionProperty $description)
 * @method MedicalTestPanelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalTestPanelType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalTestPanelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalTestPanelType setImage(Property\ImageProperty $image)
 * @method MedicalTestPanelType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalTestPanelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalTestPanelType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalTestPanelType setName(Property\NameProperty $name)
 * @method MedicalTestPanelType setNormalRange(Property\NormalRangeProperty $normalRange)
 * @method MedicalTestPanelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalTestPanelType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalTestPanelType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalTestPanelType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalTestPanelType setSignDetected(Property\SignDetectedProperty $signDetected)
 * @method MedicalTestPanelType setStudy(Property\StudyProperty $study)
 * @method MedicalTestPanelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalTestPanelType setUrl(Property\UrlProperty $url)
 * @method MedicalTestPanelType setUsedToDiagnose(Property\UsedToDiagnoseProperty $usedToDiagnose)
 * @method MedicalTestPanelType setUsesDevice(Property\UsesDeviceProperty $usesDevice)
 */
class MedicalTestPanelType extends MedicalTestType {

	/**
	 * @var Property\SubTestProperty
	 */
	private $subTest;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalTestPanel';
	}

	/**
	 * Get sub test.
	 *
	 * @return Property\SubTestProperty
	 */
	public function getSubTest() {
		return $this->subTest;
	}

	/**
	 * Set sub test.
	 *
	 * @param Property\SubTestProperty $subTest
	 * @return MedicalTestPanelType
	 */
	public function setSubTest(Property\SubTestProperty $subTest) {
		$this->subTest = $subTest;

		return $this;
	}
}