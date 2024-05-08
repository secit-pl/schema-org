<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any matter of defined composition that has discrete existence, whose origin may be biological, mineral or chemical.
 * 
 * @method SubstanceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SubstanceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SubstanceType setCode(Property\CodeProperty $code)
 * @method SubstanceType setDescription(Property\DescriptionProperty $description)
 * @method SubstanceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SubstanceType setGuideline(Property\GuidelineProperty $guideline)
 * @method SubstanceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SubstanceType setImage(Property\ImageProperty $image)
 * @method SubstanceType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method SubstanceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SubstanceType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method SubstanceType setName(Property\NameProperty $name)
 * @method SubstanceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SubstanceType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method SubstanceType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method SubstanceType setSameAs(Property\SameAsProperty $sameAs)
 * @method SubstanceType setStudy(Property\StudyProperty $study)
 * @method SubstanceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SubstanceType setUrl(Property\UrlProperty $url)
 */
class SubstanceType extends MedicalEntityType {

	/**
	 * @var Property\ActiveIngredientProperty
	 */
	private $activeIngredient;

	/**
	 * @var Property\MaximumIntakeProperty
	 */
	private $maximumIntake;

	/**
	 * Get active ingredient.
	 *
	 * @return Property\ActiveIngredientProperty
	 */
	public function getActiveIngredient() {
		return $this->activeIngredient;
	}

	/**
	 * Get maximum intake.
	 *
	 * @return Property\MaximumIntakeProperty
	 */
	public function getMaximumIntake() {
		return $this->maximumIntake;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Substance';
	}

	/**
	 * Set active ingredient.
	 *
	 * @param Property\ActiveIngredientProperty $activeIngredient
	 * @return SubstanceType
	 */
	public function setActiveIngredient(Property\ActiveIngredientProperty $activeIngredient) {
		$this->activeIngredient = $activeIngredient;

		return $this;
	}

	/**
	 * Set maximum intake.
	 *
	 * @param Property\MaximumIntakeProperty $maximumIntake
	 * @return SubstanceType
	 */
	public function setMaximumIntake(Property\MaximumIntakeProperty $maximumIntake) {
		$this->maximumIntake = $maximumIntake;

		return $this;
	}
}