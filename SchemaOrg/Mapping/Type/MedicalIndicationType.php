<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A condition or factor that indicates use of a medical therapy, including signs, symptoms, risk factors, anatomical states, etc.
 * 
 * @method MedicalIndicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalIndicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalIndicationType setCode(Property\CodeProperty $code)
 * @method MedicalIndicationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalIndicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalIndicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalIndicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalIndicationType setImage(Property\ImageProperty $image)
 * @method MedicalIndicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalIndicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalIndicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalIndicationType setName(Property\NameProperty $name)
 * @method MedicalIndicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalIndicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalIndicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalIndicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalIndicationType setStudy(Property\StudyProperty $study)
 * @method MedicalIndicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalIndicationType setUrl(Property\UrlProperty $url)
 */
class MedicalIndicationType extends MedicalEntityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalIndication';
	}
}