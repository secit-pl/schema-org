<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A recommended dosing schedule for a drug or supplement as prescribed or recommended by an authority or by the drug/supplement's manufacturer. Capture the recommending authority in the recognizingAuthority property of MedicalEntity.
 * 
 * @method RecommendedDoseScheduleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RecommendedDoseScheduleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RecommendedDoseScheduleType setCode(Property\CodeProperty $code)
 * @method RecommendedDoseScheduleType setDescription(Property\DescriptionProperty $description)
 * @method RecommendedDoseScheduleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RecommendedDoseScheduleType setDoseUnit(Property\DoseUnitProperty $doseUnit)
 * @method RecommendedDoseScheduleType setDoseValue(Property\DoseValueProperty $doseValue)
 * @method RecommendedDoseScheduleType setFrequency(Property\FrequencyProperty $frequency)
 * @method RecommendedDoseScheduleType setGuideline(Property\GuidelineProperty $guideline)
 * @method RecommendedDoseScheduleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RecommendedDoseScheduleType setImage(Property\ImageProperty $image)
 * @method RecommendedDoseScheduleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method RecommendedDoseScheduleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RecommendedDoseScheduleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method RecommendedDoseScheduleType setName(Property\NameProperty $name)
 * @method RecommendedDoseScheduleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RecommendedDoseScheduleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method RecommendedDoseScheduleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method RecommendedDoseScheduleType setSameAs(Property\SameAsProperty $sameAs)
 * @method RecommendedDoseScheduleType setStudy(Property\StudyProperty $study)
 * @method RecommendedDoseScheduleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RecommendedDoseScheduleType setTargetPopulation(Property\TargetPopulationProperty $targetPopulation)
 * @method RecommendedDoseScheduleType setUrl(Property\UrlProperty $url)
 */
class RecommendedDoseScheduleType extends DoseScheduleType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RecommendedDoseSchedule';
	}
}