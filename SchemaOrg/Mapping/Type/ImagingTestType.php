<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any medical imaging modality typically used for diagnostic purposes.
 * 
 * @method ImagingTestType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ImagingTestType setAffectedBy(Property\AffectedByProperty $affectedBy)
 * @method ImagingTestType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ImagingTestType setCode(Property\CodeProperty $code)
 * @method ImagingTestType setDescription(Property\DescriptionProperty $description)
 * @method ImagingTestType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ImagingTestType setGuideline(Property\GuidelineProperty $guideline)
 * @method ImagingTestType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ImagingTestType setImage(Property\ImageProperty $image)
 * @method ImagingTestType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ImagingTestType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ImagingTestType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ImagingTestType setName(Property\NameProperty $name)
 * @method ImagingTestType setNormalRange(Property\NormalRangeProperty $normalRange)
 * @method ImagingTestType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ImagingTestType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ImagingTestType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ImagingTestType setSameAs(Property\SameAsProperty $sameAs)
 * @method ImagingTestType setSignDetected(Property\SignDetectedProperty $signDetected)
 * @method ImagingTestType setStudy(Property\StudyProperty $study)
 * @method ImagingTestType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ImagingTestType setUrl(Property\UrlProperty $url)
 * @method ImagingTestType setUsedToDiagnose(Property\UsedToDiagnoseProperty $usedToDiagnose)
 * @method ImagingTestType setUsesDevice(Property\UsesDeviceProperty $usesDevice)
 */
class ImagingTestType extends MedicalTestType {

	/**
	 * @var Property\ImagingTechniqueProperty
	 */
	private $imagingTechnique;

	/**
	 * Get imaging technique.
	 *
	 * @return Property\ImagingTechniqueProperty
	 */
	public function getImagingTechnique() {
		return $this->imagingTechnique;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ImagingTest';
	}

	/**
	 * Set imaging technique.
	 *
	 * @param Property\ImagingTechniqueProperty $imagingTechnique
	 * @return ImagingTestType
	 */
	public function setImagingTechnique(Property\ImagingTechniqueProperty $imagingTechnique) {
		$this->imagingTechnique = $imagingTechnique;

		return $this;
	}
}