<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An indication for a medical therapy that has been formally specified or approved by a regulatory body that regulates use of the therapy; for example, the US FDA approves indications for most drugs in the US.
 * 
 * @method ApprovedIndicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ApprovedIndicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ApprovedIndicationType setCode(Property\CodeProperty $code)
 * @method ApprovedIndicationType setDescription(Property\DescriptionProperty $description)
 * @method ApprovedIndicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ApprovedIndicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method ApprovedIndicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ApprovedIndicationType setImage(Property\ImageProperty $image)
 * @method ApprovedIndicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ApprovedIndicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ApprovedIndicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ApprovedIndicationType setName(Property\NameProperty $name)
 * @method ApprovedIndicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ApprovedIndicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ApprovedIndicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ApprovedIndicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method ApprovedIndicationType setStudy(Property\StudyProperty $study)
 * @method ApprovedIndicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ApprovedIndicationType setUrl(Property\UrlProperty $url)
 */
class ApprovedIndicationType extends MedicalIndicationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ApprovedIndication';
	}
}