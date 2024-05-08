<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The maximum dosing schedule considered safe for a drug or supplement as recommended by an authority or by the drug/supplement's manufacturer. Capture the recommending authority in the recognizingAuthority property of MedicalEntity.
 * 
 * @method MaximumDoseScheduleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MaximumDoseScheduleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MaximumDoseScheduleType setCode(Property\CodeProperty $code)
 * @method MaximumDoseScheduleType setDescription(Property\DescriptionProperty $description)
 * @method MaximumDoseScheduleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MaximumDoseScheduleType setDoseUnit(Property\DoseUnitProperty $doseUnit)
 * @method MaximumDoseScheduleType setDoseValue(Property\DoseValueProperty $doseValue)
 * @method MaximumDoseScheduleType setFrequency(Property\FrequencyProperty $frequency)
 * @method MaximumDoseScheduleType setGuideline(Property\GuidelineProperty $guideline)
 * @method MaximumDoseScheduleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MaximumDoseScheduleType setImage(Property\ImageProperty $image)
 * @method MaximumDoseScheduleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MaximumDoseScheduleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MaximumDoseScheduleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MaximumDoseScheduleType setName(Property\NameProperty $name)
 * @method MaximumDoseScheduleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MaximumDoseScheduleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MaximumDoseScheduleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MaximumDoseScheduleType setSameAs(Property\SameAsProperty $sameAs)
 * @method MaximumDoseScheduleType setStudy(Property\StudyProperty $study)
 * @method MaximumDoseScheduleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MaximumDoseScheduleType setTargetPopulation(Property\TargetPopulationProperty $targetPopulation)
 * @method MaximumDoseScheduleType setUrl(Property\UrlProperty $url)
 */
class MaximumDoseScheduleType extends DoseScheduleType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MaximumDoseSchedule';
	}
}