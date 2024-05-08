<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Nose function assessment with clinical examination.
 * 
 * @method NoseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NoseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NoseType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method NoseType setCode(Property\CodeProperty $code)
 * @method NoseType setDescription(Property\DescriptionProperty $description)
 * @method NoseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NoseType setFollowup(Property\FollowupProperty $followup)
 * @method NoseType setGuideline(Property\GuidelineProperty $guideline)
 * @method NoseType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method NoseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NoseType setImage(Property\ImageProperty $image)
 * @method NoseType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method NoseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NoseType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method NoseType setName(Property\NameProperty $name)
 * @method NoseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NoseType setPreparation(Property\PreparationProperty $preparation)
 * @method NoseType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method NoseType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method NoseType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method NoseType setSameAs(Property\SameAsProperty $sameAs)
 * @method NoseType setStatus(Property\StatusProperty $status)
 * @method NoseType setStudy(Property\StudyProperty $study)
 * @method NoseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NoseType setUrl(Property\UrlProperty $url)
 */
class NoseType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Nose';
	}
}