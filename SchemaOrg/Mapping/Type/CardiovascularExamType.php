<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Cardiovascular system assessment with clinical examination.
 * 
 * @method CardiovascularExamType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CardiovascularExamType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CardiovascularExamType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method CardiovascularExamType setCode(Property\CodeProperty $code)
 * @method CardiovascularExamType setDescription(Property\DescriptionProperty $description)
 * @method CardiovascularExamType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CardiovascularExamType setFollowup(Property\FollowupProperty $followup)
 * @method CardiovascularExamType setGuideline(Property\GuidelineProperty $guideline)
 * @method CardiovascularExamType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method CardiovascularExamType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CardiovascularExamType setImage(Property\ImageProperty $image)
 * @method CardiovascularExamType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method CardiovascularExamType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CardiovascularExamType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method CardiovascularExamType setName(Property\NameProperty $name)
 * @method CardiovascularExamType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CardiovascularExamType setPreparation(Property\PreparationProperty $preparation)
 * @method CardiovascularExamType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method CardiovascularExamType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method CardiovascularExamType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method CardiovascularExamType setSameAs(Property\SameAsProperty $sameAs)
 * @method CardiovascularExamType setStatus(Property\StatusProperty $status)
 * @method CardiovascularExamType setStudy(Property\StudyProperty $study)
 * @method CardiovascularExamType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CardiovascularExamType setUrl(Property\UrlProperty $url)
 */
class CardiovascularExamType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CardiovascularExam';
	}
}