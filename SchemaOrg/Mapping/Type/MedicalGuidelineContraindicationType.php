<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A guideline contraindication that designates a process as harmful and where quality of the data supporting the contraindication is sound.
 * 
 * @method MedicalGuidelineContraindicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalGuidelineContraindicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalGuidelineContraindicationType setCode(Property\CodeProperty $code)
 * @method MedicalGuidelineContraindicationType setDescription(Property\DescriptionProperty $description)
 * @method MedicalGuidelineContraindicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalGuidelineContraindicationType setEvidenceLevel(Property\EvidenceLevelProperty $evidenceLevel)
 * @method MedicalGuidelineContraindicationType setEvidenceOrigin(Property\EvidenceOriginProperty $evidenceOrigin)
 * @method MedicalGuidelineContraindicationType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalGuidelineContraindicationType setGuidelineDate(Property\GuidelineDateProperty $guidelineDate)
 * @method MedicalGuidelineContraindicationType setGuidelineSubject(Property\GuidelineSubjectProperty $guidelineSubject)
 * @method MedicalGuidelineContraindicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalGuidelineContraindicationType setImage(Property\ImageProperty $image)
 * @method MedicalGuidelineContraindicationType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalGuidelineContraindicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalGuidelineContraindicationType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalGuidelineContraindicationType setName(Property\NameProperty $name)
 * @method MedicalGuidelineContraindicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalGuidelineContraindicationType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalGuidelineContraindicationType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalGuidelineContraindicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalGuidelineContraindicationType setStudy(Property\StudyProperty $study)
 * @method MedicalGuidelineContraindicationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalGuidelineContraindicationType setUrl(Property\UrlProperty $url)
 */
class MedicalGuidelineContraindicationType extends MedicalGuidelineType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalGuidelineContraindication';
	}
}