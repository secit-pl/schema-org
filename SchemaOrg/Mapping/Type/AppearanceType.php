<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Appearance assessment with clinical examination.
 * 
 * @method AppearanceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AppearanceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AppearanceType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method AppearanceType setCode(Property\CodeProperty $code)
 * @method AppearanceType setDescription(Property\DescriptionProperty $description)
 * @method AppearanceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AppearanceType setFollowup(Property\FollowupProperty $followup)
 * @method AppearanceType setGuideline(Property\GuidelineProperty $guideline)
 * @method AppearanceType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method AppearanceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AppearanceType setImage(Property\ImageProperty $image)
 * @method AppearanceType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method AppearanceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AppearanceType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method AppearanceType setName(Property\NameProperty $name)
 * @method AppearanceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AppearanceType setPreparation(Property\PreparationProperty $preparation)
 * @method AppearanceType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method AppearanceType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method AppearanceType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method AppearanceType setSameAs(Property\SameAsProperty $sameAs)
 * @method AppearanceType setStatus(Property\StatusProperty $status)
 * @method AppearanceType setStudy(Property\StudyProperty $study)
 * @method AppearanceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AppearanceType setUrl(Property\UrlProperty $url)
 */
class AppearanceType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Appearance';
	}
}