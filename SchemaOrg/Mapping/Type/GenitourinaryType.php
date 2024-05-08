<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Genitourinary system function assessment with clinical examination.
 * 
 * @method GenitourinaryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GenitourinaryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GenitourinaryType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method GenitourinaryType setCode(Property\CodeProperty $code)
 * @method GenitourinaryType setDescription(Property\DescriptionProperty $description)
 * @method GenitourinaryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GenitourinaryType setFollowup(Property\FollowupProperty $followup)
 * @method GenitourinaryType setGuideline(Property\GuidelineProperty $guideline)
 * @method GenitourinaryType setHowPerformed(Property\HowPerformedProperty $howPerformed)
 * @method GenitourinaryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GenitourinaryType setImage(Property\ImageProperty $image)
 * @method GenitourinaryType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method GenitourinaryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GenitourinaryType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method GenitourinaryType setName(Property\NameProperty $name)
 * @method GenitourinaryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GenitourinaryType setPreparation(Property\PreparationProperty $preparation)
 * @method GenitourinaryType setProcedureType(Property\ProcedureTypeProperty $procedureType)
 * @method GenitourinaryType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method GenitourinaryType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method GenitourinaryType setSameAs(Property\SameAsProperty $sameAs)
 * @method GenitourinaryType setStatus(Property\StatusProperty $status)
 * @method GenitourinaryType setStudy(Property\StudyProperty $study)
 * @method GenitourinaryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GenitourinaryType setUrl(Property\UrlProperty $url)
 */
class GenitourinaryType extends PhysicalExamType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Genitourinary';
	}
}