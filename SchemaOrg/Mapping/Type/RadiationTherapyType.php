<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A process of care using radiation aimed at improving a health condition.
 * 
 * @method RadiationTherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadiationTherapyType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method RadiationTherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadiationTherapyType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method RadiationTherapyType setCode(Property\CodeProperty $code)
 * @method RadiationTherapyType setContraindication(Property\ContraindicationProperty $contraindication)
 * @method RadiationTherapyType setDescription(Property\DescriptionProperty $description)
 * @method RadiationTherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadiationTherapyType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method RadiationTherapyType setDrug(Property\DrugProperty $drug)
 * @method RadiationTherapyType setDuplicateTherapy(Property\DuplicateTherapyProperty $duplicateTherapy)
 * @method RadiationTherapyType setFollowup(Property\FollowupProperty $followup)
 * @method RadiationTherapyType setGuideline(Property\GuidelineProperty $guideline)
 * @method RadiationTherapyType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method RadiationTherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadiationTherapyType setImage(Property\ImageProperty $image)
 * @method RadiationTherapyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method RadiationTherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadiationTherapyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method RadiationTherapyType setName(Property\NameProperty $name)
 * @method RadiationTherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadiationTherapyType setPreparation(Property\PreparationProperty $preparation)
 * @method RadiationTherapyType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method RadiationTherapyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method RadiationTherapyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method RadiationTherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadiationTherapyType setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome)
 * @method RadiationTherapyType setStatus(Property\StatusProperty $status)
 * @method RadiationTherapyType setStudy(Property\StudyProperty $study)
 * @method RadiationTherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RadiationTherapyType setUrl(Property\UrlProperty $url)
 */
class RadiationTherapyType extends MedicalTherapyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RadiationTherapy';
	}
}