<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A treatment of people with physical, emotional, or social problems, using purposeful activity to help them overcome or learn to deal with their problems.
 * 
 * @method OccupationalTherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OccupationalTherapyType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method OccupationalTherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OccupationalTherapyType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method OccupationalTherapyType setCode(Property\CodeProperty $code)
 * @method OccupationalTherapyType setContraindication(Property\ContraindicationProperty $contraindication)
 * @method OccupationalTherapyType setDescription(Property\DescriptionProperty $description)
 * @method OccupationalTherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OccupationalTherapyType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method OccupationalTherapyType setDrug(Property\DrugProperty $drug)
 * @method OccupationalTherapyType setDuplicateTherapy(Property\DuplicateTherapyProperty $duplicateTherapy)
 * @method OccupationalTherapyType setFollowup(Property\FollowupProperty $followup)
 * @method OccupationalTherapyType setGuideline(Property\GuidelineProperty $guideline)
 * @method OccupationalTherapyType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method OccupationalTherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OccupationalTherapyType setImage(Property\ImageProperty $image)
 * @method OccupationalTherapyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method OccupationalTherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OccupationalTherapyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method OccupationalTherapyType setName(Property\NameProperty $name)
 * @method OccupationalTherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OccupationalTherapyType setPreparation(Property\PreparationProperty $preparation)
 * @method OccupationalTherapyType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method OccupationalTherapyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method OccupationalTherapyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method OccupationalTherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method OccupationalTherapyType setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome)
 * @method OccupationalTherapyType setStatus(Property\StatusProperty $status)
 * @method OccupationalTherapyType setStudy(Property\StudyProperty $study)
 * @method OccupationalTherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OccupationalTherapyType setUrl(Property\UrlProperty $url)
 */
class OccupationalTherapyType extends MedicalTherapyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OccupationalTherapy';
	}
}