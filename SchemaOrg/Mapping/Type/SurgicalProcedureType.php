<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical procedure involving an incision with instruments; performed for diagnose, or therapeutic purposes.
 * 
 * @method SurgicalProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SurgicalProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SurgicalProcedureType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method SurgicalProcedureType setCode(Property\CodeProperty $code)
 * @method SurgicalProcedureType setDescription(Property\DescriptionProperty $description)
 * @method SurgicalProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SurgicalProcedureType setFollowup(Property\FollowupProperty $followup)
 * @method SurgicalProcedureType setGuideline(Property\GuidelineProperty $guideline)
 * @method SurgicalProcedureType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method SurgicalProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SurgicalProcedureType setImage(Property\ImageProperty $image)
 * @method SurgicalProcedureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method SurgicalProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SurgicalProcedureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method SurgicalProcedureType setName(Property\NameProperty $name)
 * @method SurgicalProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SurgicalProcedureType setPreparation(Property\PreparationProperty $preparation)
 * @method SurgicalProcedureType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method SurgicalProcedureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method SurgicalProcedureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method SurgicalProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method SurgicalProcedureType setStatus(Property\StatusProperty $status)
 * @method SurgicalProcedureType setStudy(Property\StudyProperty $study)
 * @method SurgicalProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SurgicalProcedureType setUrl(Property\UrlProperty $url)
 */
class SurgicalProcedureType extends MedicalProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SurgicalProcedure';
	}
}