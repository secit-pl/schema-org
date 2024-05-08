<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Skin assessment with clinical examination.
 * 
 * @method SkinType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SkinType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SkinType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method SkinType setCode(Property\CodeProperty $code)
 * @method SkinType setDescription(Property\DescriptionProperty $description)
 * @method SkinType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SkinType setFollowup(Property\FollowupProperty $followup)
 * @method SkinType setGuideline(Property\GuidelineProperty $guideline)
 * @method SkinType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method SkinType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SkinType setImage(Property\ImageProperty $image)
 * @method SkinType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method SkinType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SkinType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method SkinType setName(Property\NameProperty $name)
 * @method SkinType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SkinType setPreparation(Property\PreparationProperty $preparation)
 * @method SkinType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method SkinType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method SkinType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method SkinType setSameAs(Property\SameAsProperty $sameAs)
 * @method SkinType setStatus(Property\StatusProperty $status)
 * @method SkinType setStudy(Property\StudyProperty $study)
 * @method SkinType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SkinType setUrl(Property\UrlProperty $url)
 */
class SkinType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Skin';
	}
}