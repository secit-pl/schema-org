<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Neck assessment with clinical examination.
 * 
 * @method NeckType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NeckType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NeckType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method NeckType setCode(Property\CodeProperty $code)
 * @method NeckType setDescription(Property\DescriptionProperty $description)
 * @method NeckType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NeckType setFollowup(Property\FollowupProperty $followup)
 * @method NeckType setGuideline(Property\GuidelineProperty $guideline)
 * @method NeckType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method NeckType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NeckType setImage(Property\ImageProperty $image)
 * @method NeckType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method NeckType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NeckType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method NeckType setName(Property\NameProperty $name)
 * @method NeckType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NeckType setPreparation(Property\PreparationProperty $preparation)
 * @method NeckType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method NeckType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method NeckType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method NeckType setSameAs(Property\SameAsProperty $sameAs)
 * @method NeckType setStatus(Property\StatusProperty $status)
 * @method NeckType setStudy(Property\StudyProperty $study)
 * @method NeckType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NeckType setUrl(Property\UrlProperty $url)
 */
class NeckType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Neck';
	}
}