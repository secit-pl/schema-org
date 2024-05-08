<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Musculoskeletal system clinical examination.
 * 
 * @method MusculoskeletalExamType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MusculoskeletalExamType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MusculoskeletalExamType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method MusculoskeletalExamType setCode(Property\CodeProperty $code)
 * @method MusculoskeletalExamType setDescription(Property\DescriptionProperty $description)
 * @method MusculoskeletalExamType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MusculoskeletalExamType setFollowup(Property\FollowupProperty $followup)
 * @method MusculoskeletalExamType setGuideline(Property\GuidelineProperty $guideline)
 * @method MusculoskeletalExamType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method MusculoskeletalExamType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MusculoskeletalExamType setImage(Property\ImageProperty $image)
 * @method MusculoskeletalExamType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MusculoskeletalExamType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MusculoskeletalExamType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MusculoskeletalExamType setName(Property\NameProperty $name)
 * @method MusculoskeletalExamType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MusculoskeletalExamType setPreparation(Property\PreparationProperty $preparation)
 * @method MusculoskeletalExamType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method MusculoskeletalExamType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MusculoskeletalExamType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MusculoskeletalExamType setSameAs(Property\SameAsProperty $sameAs)
 * @method MusculoskeletalExamType setStatus(Property\StatusProperty $status)
 * @method MusculoskeletalExamType setStudy(Property\StudyProperty $study)
 * @method MusculoskeletalExamType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MusculoskeletalExamType setUrl(Property\UrlProperty $url)
 */
class MusculoskeletalExamType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusculoskeletalExam';
	}
}