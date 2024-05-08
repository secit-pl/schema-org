<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A utility class that serves as the umbrella for a number of 'intangible' things in the medical space.
 * 
 * @method MedicalIntangibleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalIntangibleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalIntangibleType setCode(Property\CodeProperty $code)
 * @method MedicalIntangibleType setDescription(Property\DescriptionProperty $description)
 * @method MedicalIntangibleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalIntangibleType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalIntangibleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalIntangibleType setImage(Property\ImageProperty $image)
 * @method MedicalIntangibleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalIntangibleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalIntangibleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalIntangibleType setName(Property\NameProperty $name)
 * @method MedicalIntangibleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalIntangibleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalIntangibleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalIntangibleType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalIntangibleType setStudy(Property\StudyProperty $study)
 * @method MedicalIntangibleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalIntangibleType setUrl(Property\UrlProperty $url)
 */
class MedicalIntangibleType extends MedicalEntityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalIntangible';
	}
}