<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Neurological system clinical examination.
 * 
 * @method NeuroType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NeuroType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NeuroType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method NeuroType setCode(Property\CodeProperty $code)
 * @method NeuroType setDescription(Property\DescriptionProperty $description)
 * @method NeuroType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NeuroType setFollowup(Property\FollowupProperty $followup)
 * @method NeuroType setGuideline(Property\GuidelineProperty $guideline)
 * @method NeuroType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method NeuroType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NeuroType setImage(Property\ImageProperty $image)
 * @method NeuroType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method NeuroType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NeuroType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method NeuroType setName(Property\NameProperty $name)
 * @method NeuroType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NeuroType setPreparation(Property\PreparationProperty $preparation)
 * @method NeuroType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method NeuroType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method NeuroType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method NeuroType setSameAs(Property\SameAsProperty $sameAs)
 * @method NeuroType setStatus(Property\StatusProperty $status)
 * @method NeuroType setStudy(Property\StudyProperty $study)
 * @method NeuroType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NeuroType setUrl(Property\UrlProperty $url)
 */
class NeuroType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Neuro';
	}
}