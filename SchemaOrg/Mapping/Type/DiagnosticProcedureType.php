<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A medical procedure intended primarily for diagnostic, as opposed to therapeutic, purposes.
 * 
 * @method DiagnosticProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DiagnosticProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DiagnosticProcedureType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method DiagnosticProcedureType setCode(Property\CodeProperty $code)
 * @method DiagnosticProcedureType setDescription(Property\DescriptionProperty $description)
 * @method DiagnosticProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DiagnosticProcedureType setFollowup(Property\FollowupProperty $followup)
 * @method DiagnosticProcedureType setGuideline(Property\GuidelineProperty $guideline)
 * @method DiagnosticProcedureType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method DiagnosticProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DiagnosticProcedureType setImage(Property\ImageProperty $image)
 * @method DiagnosticProcedureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method DiagnosticProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DiagnosticProcedureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method DiagnosticProcedureType setName(Property\NameProperty $name)
 * @method DiagnosticProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DiagnosticProcedureType setPreparation(Property\PreparationProperty $preparation)
 * @method DiagnosticProcedureType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method DiagnosticProcedureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method DiagnosticProcedureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method DiagnosticProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method DiagnosticProcedureType setStatus(Property\StatusProperty $status)
 * @method DiagnosticProcedureType setStudy(Property\StudyProperty $study)
 * @method DiagnosticProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DiagnosticProcedureType setUrl(Property\UrlProperty $url)
 */
class DiagnosticProcedureType extends MedicalProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DiagnosticProcedure';
	}
}