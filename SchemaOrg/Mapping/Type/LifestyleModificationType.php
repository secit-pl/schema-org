<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A process of care involving exercise, changes to diet, fitness routines, and other lifestyle changes aimed at improving a health condition.
 * 
 * @method LifestyleModificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LifestyleModificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LifestyleModificationType setCode(Property\CodeProperty $code)
 * @method LifestyleModificationType setDescription(Property\DescriptionProperty $description)
 * @method LifestyleModificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LifestyleModificationType setGuideline(Property\GuidelineProperty $guideline)
 * @method LifestyleModificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LifestyleModificationType setImage(Property\ImageProperty $image)
 * @method LifestyleModificationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method LifestyleModificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LifestyleModificationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method LifestyleModificationType setName(Property\NameProperty $name)
 * @method LifestyleModificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LifestyleModificationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method LifestyleModificationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method LifestyleModificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method LifestyleModificationType setStudy(Property\StudyProperty $study)
 * @method LifestyleModificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LifestyleModificationType setUrl(Property\UrlProperty $url)
 */
class LifestyleModificationType extends MedicalEntityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LifestyleModification';
	}
}