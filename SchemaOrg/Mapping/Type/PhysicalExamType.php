<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of physical examination of a patient performed by a physician.
 * 
 * @method PhysicalExamType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysicalExamType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysicalExamType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method PhysicalExamType setCode(Property\CodeProperty $code)
 * @method PhysicalExamType setDescription(Property\DescriptionProperty $description)
 * @method PhysicalExamType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysicalExamType setFollowup(Property\FollowupProperty $followup)
 * @method PhysicalExamType setGuideline(Property\GuidelineProperty $guideline)
 * @method PhysicalExamType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method PhysicalExamType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysicalExamType setImage(Property\ImageProperty $image)
 * @method PhysicalExamType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PhysicalExamType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysicalExamType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PhysicalExamType setName(Property\NameProperty $name)
 * @method PhysicalExamType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysicalExamType setPreparation(Property\PreparationProperty $preparation)
 * @method PhysicalExamType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method PhysicalExamType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PhysicalExamType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PhysicalExamType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysicalExamType setStatus(Property\StatusProperty $status)
 * @method PhysicalExamType setStudy(Property\StudyProperty $study)
 * @method PhysicalExamType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysicalExamType setUrl(Property\UrlProperty $url)
 */
class PhysicalExamType extends MedicalProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhysicalExam';
	}
}