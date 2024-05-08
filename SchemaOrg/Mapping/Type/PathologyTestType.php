<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical test performed by a laboratory that typically involves examination of a tissue sample by a pathologist.
 * 
 * @method PathologyTestType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PathologyTestType setAffectedBy(Property\AffectedByProperty $affectedBy)
 * @method PathologyTestType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PathologyTestType setCode(Property\CodeProperty $code)
 * @method PathologyTestType setDescription(Property\DescriptionProperty $description)
 * @method PathologyTestType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PathologyTestType setGuideline(Property\GuidelineProperty $guideline)
 * @method PathologyTestType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PathologyTestType setImage(Property\ImageProperty $image)
 * @method PathologyTestType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PathologyTestType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PathologyTestType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PathologyTestType setName(Property\NameProperty $name)
 * @method PathologyTestType setNormalRange(Property\NormalRangeProperty $normalRange)
 * @method PathologyTestType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PathologyTestType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PathologyTestType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PathologyTestType setSameAs(Property\SameAsProperty $sameAs)
 * @method PathologyTestType setSignDetected(Property\SignDetectedProperty $signDetected)
 * @method PathologyTestType setStudy(Property\StudyProperty $study)
 * @method PathologyTestType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PathologyTestType setUrl(Property\UrlProperty $url)
 * @method PathologyTestType setUsedToDiagnose(Property\UsedToDiagnoseProperty $usedToDiagnose)
 * @method PathologyTestType setUsesDevice(Property\UsesDeviceProperty $usesDevice)
 */
class PathologyTestType extends MedicalTestType {

	/**
	 * @var Property\TissueSampleProperty
	 */
	private $tissueSample;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PathologyTest';
	}

	/**
	 * Get tissue sample.
	 *
	 * @return Property\TissueSampleProperty
	 */
	public function getTissueSample() {
		return $this->tissueSample;
	}

	/**
	 * Set tissue sample.
	 *
	 * @param Property\TissueSampleProperty $tissueSample
	 * @return PathologyTestType
	 */
	public function setTissueSample(Property\TissueSampleProperty $tissueSample) {
		$this->tissueSample = $tissueSample;

		return $this;
	}
}