<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A process of progressive physical care and rehabilitation aimed at improving a health condition.
 * 
 * @method PhysicalTherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysicalTherapyType setAdverseOutcome(Property\AdverseOutcomeProperty $adverseOutcome)
 * @method PhysicalTherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysicalTherapyType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method PhysicalTherapyType setCode(Property\CodeProperty $code)
 * @method PhysicalTherapyType setContraindication(Property\ContraindicationProperty $contraindication)
 * @method PhysicalTherapyType setDescription(Property\DescriptionProperty $description)
 * @method PhysicalTherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysicalTherapyType setDoseSchedule(Property\DoseScheduleProperty $doseSchedule)
 * @method PhysicalTherapyType setDrug(Property\DrugProperty $drug)
 * @method PhysicalTherapyType setDuplicateTherapy(Property\DuplicateTherapyProperty $duplicateTherapy)
 * @method PhysicalTherapyType setFollowup(Property\FollowupProperty $followup)
 * @method PhysicalTherapyType setGuideline(Property\GuidelineProperty $guideline)
 * @method PhysicalTherapyType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method PhysicalTherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysicalTherapyType setImage(Property\ImageProperty $image)
 * @method PhysicalTherapyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PhysicalTherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysicalTherapyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PhysicalTherapyType setName(Property\NameProperty $name)
 * @method PhysicalTherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysicalTherapyType setPreparation(Property\PreparationProperty $preparation)
 * @method PhysicalTherapyType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method PhysicalTherapyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PhysicalTherapyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PhysicalTherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysicalTherapyType setSeriousAdverseOutcome(Property\SeriousAdverseOutcomeProperty $seriousAdverseOutcome)
 * @method PhysicalTherapyType setStatus(Property\StatusProperty $status)
 * @method PhysicalTherapyType setStudy(Property\StudyProperty $study)
 * @method PhysicalTherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysicalTherapyType setUrl(Property\UrlProperty $url)
 */
class PhysicalTherapyType extends MedicalTherapyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhysicalTherapy';
	}
}