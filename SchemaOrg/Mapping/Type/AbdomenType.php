<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Abdomen clinical examination.
 * 
 * @method AbdomenType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AbdomenType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AbdomenType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method AbdomenType setCode(Property\CodeProperty $code)
 * @method AbdomenType setDescription(Property\DescriptionProperty $description)
 * @method AbdomenType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AbdomenType setFollowup(Property\FollowupProperty $followup)
 * @method AbdomenType setGuideline(Property\GuidelineProperty $guideline)
 * @method AbdomenType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method AbdomenType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AbdomenType setImage(Property\ImageProperty $image)
 * @method AbdomenType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method AbdomenType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AbdomenType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method AbdomenType setName(Property\NameProperty $name)
 * @method AbdomenType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AbdomenType setPreparation(Property\PreparationProperty $preparation)
 * @method AbdomenType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method AbdomenType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method AbdomenType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method AbdomenType setSameAs(Property\SameAsProperty $sameAs)
 * @method AbdomenType setStatus(Property\StatusProperty $status)
 * @method AbdomenType setStudy(Property\StudyProperty $study)
 * @method AbdomenType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AbdomenType setUrl(Property\UrlProperty $url)
 */
class AbdomenType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Abdomen';
	}
}