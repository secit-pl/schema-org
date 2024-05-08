<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The causative agent(s) that are responsible for the pathophysiologic process that eventually results in a medical condition, symptom or sign. In this schema, unless otherwise specified this is meant to be the proximate cause of the medical condition, symptom or sign. The proximate cause is defined as the causative agent that most directly results in the medical condition, symptom or sign. For example, the HIV virus could be considered a cause of AIDS. Or in a diagnostic context, if a patient fell and sustained a hip fracture and two days later sustained a pulmonary embolism which eventuated in a cardiac arrest, the cause of the cardiac arrest (the proximate cause) would be the pulmonary embolism and not the fall. Medical causes can include cardiovascular, chemical, dermatologic, endocrine, environmental, gastroenterologic, genetic, hematologic, gynecologic, iatrogenic, infectious, musculoskeletal, neurologic, nutritional, obstetric, oncologic, otolaryngologic, pharmacologic, psychiatric, pulmonary, renal, rheumatologic, toxic, traumatic, or urologic causes; medical conditions can be causes as well.
 * 
 * @method MedicalCauseType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalCauseType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalCauseType setCode(Property\CodeProperty $code)
 * @method MedicalCauseType setDescription(Property\DescriptionProperty $description)
 * @method MedicalCauseType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalCauseType setGuideline(Property\GuidelineProperty $guideline)
 * @method MedicalCauseType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalCauseType setImage(Property\ImageProperty $image)
 * @method MedicalCauseType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MedicalCauseType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalCauseType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MedicalCauseType setName(Property\NameProperty $name)
 * @method MedicalCauseType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalCauseType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MedicalCauseType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MedicalCauseType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalCauseType setStudy(Property\StudyProperty $study)
 * @method MedicalCauseType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalCauseType setUrl(Property\UrlProperty $url)
 */
class MedicalCauseType extends MedicalEntityType {

	/**
	 * @var Property\CauseOfProperty
	 */
	private $causeOf;

	/**
	 * Get cause of.
	 *
	 * @return Property\CauseOfProperty
	 */
	public function getCauseOf() {
		return $this->causeOf;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalCause';
	}

	/**
	 * Set cause of.
	 *
	 * @param Property\CauseOfProperty $causeOf
	 * @return MedicalCauseType
	 */
	public function setCauseOf(Property\CauseOfProperty $causeOf) {
		$this->causeOf = $causeOf;

		return $this;
	}
}