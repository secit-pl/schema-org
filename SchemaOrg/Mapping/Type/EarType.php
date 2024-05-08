<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Ear function assessment with clinical examination.
 * 
 * @method EarType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EarType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EarType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method EarType setCode(Property\CodeProperty $code)
 * @method EarType setDescription(Property\DescriptionProperty $description)
 * @method EarType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EarType setFollowup(Property\FollowupProperty $followup)
 * @method EarType setGuideline(Property\GuidelineProperty $guideline)
 * @method EarType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method EarType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EarType setImage(Property\ImageProperty $image)
 * @method EarType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method EarType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EarType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method EarType setName(Property\NameProperty $name)
 * @method EarType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EarType setPreparation(Property\PreparationProperty $preparation)
 * @method EarType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method EarType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method EarType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method EarType setSameAs(Property\SameAsProperty $sameAs)
 * @method EarType setStatus(Property\StatusProperty $status)
 * @method EarType setStudy(Property\StudyProperty $study)
 * @method EarType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EarType setUrl(Property\UrlProperty $url)
 */
class EarType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Ear';
	}
}