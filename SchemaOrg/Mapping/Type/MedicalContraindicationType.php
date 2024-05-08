<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A condition or factor that serves as a reason to withhold a certain medical therapy. Contraindications can be absolute (there are no reasonable circumstances for undertaking a course of action) or relative (the patient is at higher risk of complications, but these risks may be outweighed by other considerations or mitigated by other measures).
 * 
 * @method MedicalContraindicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalContraindicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalContraindicationType setCode(Property\CodeProperty $code)
 * @method MedicalContraindicationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalContraindicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalContraindicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalContraindicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalContraindicationType setImage(Property\ImageProperty $image)
 * @method MedicalContraindicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalContraindicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalContraindicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalContraindicationType setName(Property\NameProperty $name)
 * @method MedicalContraindicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalContraindicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalContraindicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalContraindicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalContraindicationType setStudy(Property\StudyProperty $study)
 * @method MedicalContraindicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalContraindicationType setUrl(Property\UrlProperty $url)
 */
class MedicalContraindicationType extends MedicalEntityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalContraindication';
	}
}