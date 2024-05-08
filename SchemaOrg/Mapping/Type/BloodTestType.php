<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical test performed on a sample of a patient's blood.
 * 
 * @method BloodTestType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BloodTestType setAffectedBy(Property\AffectedByProperty $affectedBy)
 * @method BloodTestType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BloodTestType setCode(Property\CodeProperty $code)
 * @method BloodTestType setDescription(Property\DescriptionProperty $description)
 * @method BloodTestType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BloodTestType setGuideline(Property\GuidelineProperty $guideline)
 * @method BloodTestType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BloodTestType setImage(Property\ImageProperty $image)
 * @method BloodTestType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method BloodTestType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BloodTestType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method BloodTestType setName(Property\NameProperty $name)
 * @method BloodTestType setNormalRange(Property\NormalRangeProperty $normalRange)
 * @method BloodTestType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BloodTestType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method BloodTestType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method BloodTestType setSameAs(Property\SameAsProperty $sameAs)
 * @method BloodTestType setSignDetected(Property\SignDetectedProperty $signDetected)
 * @method BloodTestType setStudy(Property\StudyProperty $study)
 * @method BloodTestType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BloodTestType setUrl(Property\UrlProperty $url)
 * @method BloodTestType setUsedToDiagnose(Property\UsedToDiagnoseProperty $usedToDiagnose)
 * @method BloodTestType setUsesDevice(Property\UsesDeviceProperty $usesDevice)
 */
class BloodTestType extends MedicalTestType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BloodTest';
	}
}