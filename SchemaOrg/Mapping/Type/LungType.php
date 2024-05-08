<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Lung and respiratory system clinical examination.
 * 
 * @method LungType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LungType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LungType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method LungType setCode(Property\CodeProperty $code)
 * @method LungType setDescription(Property\DescriptionProperty $description)
 * @method LungType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LungType setFollowup(Property\FollowupProperty $followup)
 * @method LungType setGuideline(Property\GuidelineProperty $guideline)
 * @method LungType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method LungType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LungType setImage(Property\ImageProperty $image)
 * @method LungType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method LungType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LungType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method LungType setName(Property\NameProperty $name)
 * @method LungType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LungType setPreparation(Property\PreparationProperty $preparation)
 * @method LungType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method LungType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method LungType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method LungType setSameAs(Property\SameAsProperty $sameAs)
 * @method LungType setStatus(Property\StatusProperty $status)
 * @method LungType setStudy(Property\StudyProperty $study)
 * @method LungType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LungType setUrl(Property\UrlProperty $url)
 */
class LungType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Lung';
	}
}