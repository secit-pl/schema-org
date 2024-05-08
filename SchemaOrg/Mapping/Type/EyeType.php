<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Eye or ophthalmological function assessment with clinical examination.
 * 
 * @method EyeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EyeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EyeType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method EyeType setCode(Property\CodeProperty $code)
 * @method EyeType setDescription(Property\DescriptionProperty $description)
 * @method EyeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EyeType setFollowup(Property\FollowupProperty $followup)
 * @method EyeType setGuideline(Property\GuidelineProperty $guideline)
 * @method EyeType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method EyeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EyeType setImage(Property\ImageProperty $image)
 * @method EyeType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method EyeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EyeType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method EyeType setName(Property\NameProperty $name)
 * @method EyeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EyeType setPreparation(Property\PreparationProperty $preparation)
 * @method EyeType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method EyeType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method EyeType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method EyeType setSameAs(Property\SameAsProperty $sameAs)
 * @method EyeType setStatus(Property\StatusProperty $status)
 * @method EyeType setStudy(Property\StudyProperty $study)
 * @method EyeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EyeType setUrl(Property\UrlProperty $url)
 */
class EyeType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Eye';
	}
}