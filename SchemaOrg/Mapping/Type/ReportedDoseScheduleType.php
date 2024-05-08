<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A patient-reported or observed dosing schedule for a drug or supplement.
 * 
 * @method ReportedDoseScheduleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReportedDoseScheduleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReportedDoseScheduleType setCode(Property\CodeProperty $code)
 * @method ReportedDoseScheduleType setDescription(Property\DescriptionProperty $description)
 * @method ReportedDoseScheduleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReportedDoseScheduleType setDoseUnit(Property\DoseUnitProperty $doseUnit)
 * @method ReportedDoseScheduleType setDoseValue(Property\DoseValueProperty $doseValue)
 * @method ReportedDoseScheduleType setFrequency(Property\FrequencyProperty $frequency)
 * @method ReportedDoseScheduleType setGuideline(Property\GuidelineProperty $guideline)
 * @method ReportedDoseScheduleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReportedDoseScheduleType setImage(Property\ImageProperty $image)
 * @method ReportedDoseScheduleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ReportedDoseScheduleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReportedDoseScheduleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ReportedDoseScheduleType setName(Property\NameProperty $name)
 * @method ReportedDoseScheduleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReportedDoseScheduleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ReportedDoseScheduleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ReportedDoseScheduleType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReportedDoseScheduleType setStudy(Property\StudyProperty $study)
 * @method ReportedDoseScheduleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ReportedDoseScheduleType setTargetPopulation(Property\TargetPopulationProperty $targetPopulation)
 * @method ReportedDoseScheduleType setUrl(Property\UrlProperty $url)
 */
class ReportedDoseScheduleType extends DoseScheduleType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReportedDoseSchedule';
	}
}