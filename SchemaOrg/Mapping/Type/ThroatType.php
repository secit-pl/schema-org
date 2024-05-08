<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Throat assessment with clinical examination.
 * 
 * @method ThroatType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ThroatType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ThroatType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method ThroatType setCode(Property\CodeProperty $code)
 * @method ThroatType setDescription(Property\DescriptionProperty $description)
 * @method ThroatType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ThroatType setFollowup(Property\FollowupProperty $followup)
 * @method ThroatType setGuideline(Property\GuidelineProperty $guideline)
 * @method ThroatType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method ThroatType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ThroatType setImage(Property\ImageProperty $image)
 * @method ThroatType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ThroatType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ThroatType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ThroatType setName(Property\NameProperty $name)
 * @method ThroatType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ThroatType setPreparation(Property\PreparationProperty $preparation)
 * @method ThroatType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method ThroatType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ThroatType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ThroatType setSameAs(Property\SameAsProperty $sameAs)
 * @method ThroatType setStatus(Property\StatusProperty $status)
 * @method ThroatType setStudy(Property\StudyProperty $study)
 * @method ThroatType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ThroatType setUrl(Property\UrlProperty $url)
 */
class ThroatType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Throat';
	}
}