<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Head assessment with clinical examination.
 * 
 * @method HeadType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HeadType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HeadType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method HeadType setCode(Property\CodeProperty $code)
 * @method HeadType setDescription(Property\DescriptionProperty $description)
 * @method HeadType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HeadType setFollowup(Property\FollowupProperty $followup)
 * @method HeadType setGuideline(Property\GuidelineProperty $guideline)
 * @method HeadType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method HeadType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HeadType setImage(Property\ImageProperty $image)
 * @method HeadType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method HeadType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HeadType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method HeadType setName(Property\NameProperty $name)
 * @method HeadType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HeadType setPreparation(Property\PreparationProperty $preparation)
 * @method HeadType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method HeadType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method HeadType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method HeadType setSameAs(Property\SameAsProperty $sameAs)
 * @method HeadType setStatus(Property\StatusProperty $status)
 * @method HeadType setStudy(Property\StudyProperty $study)
 * @method HeadType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HeadType setUrl(Property\UrlProperty $url)
 */
class HeadType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Head';
	}
}