<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An anatomical system is a group of anatomical structures that work together to perform a certain task. Anatomical systems, such as organ systems, are one organizing principle of anatomy, and can include circulatory, digestive, endocrine, integumentary, immune, lymphatic, muscular, nervous, reproductive, respiratory, skeletal, urinary, vestibular, and other systems.
 * 
 * @method AnatomicalSystemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnatomicalSystemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnatomicalSystemType setCode(Property\CodeProperty $code)
 * @method AnatomicalSystemType setDescription(Property\DescriptionProperty $description)
 * @method AnatomicalSystemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnatomicalSystemType setGuideline(Property\GuidelineProperty $guideline)
 * @method AnatomicalSystemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnatomicalSystemType setImage(Property\ImageProperty $image)
 * @method AnatomicalSystemType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method AnatomicalSystemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnatomicalSystemType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method AnatomicalSystemType setName(Property\NameProperty $name)
 * @method AnatomicalSystemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnatomicalSystemType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method AnatomicalSystemType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method AnatomicalSystemType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnatomicalSystemType setStudy(Property\StudyProperty $study)
 * @method AnatomicalSystemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AnatomicalSystemType setUrl(Property\UrlProperty $url)
 */
class AnatomicalSystemType extends MedicalEntityType {

	/**
	 * @var Property\AssociatedPathophysiologyProperty
	 */
	private $associatedPathophysiology;

	/**
	 * @var Property\ComprisedOfProperty
	 */
	private $comprisedOf;

	/**
	 * @var Property\RelatedConditionProperty
	 */
	private $relatedCondition;

	/**
	 * @var Property\RelatedStructureProperty
	 */
	private $relatedStructure;

	/**
	 * @var Property\RelatedTherapyProperty
	 */
	private $relatedTherapy;

	/**
	 * Get associated pathophysiology.
	 *
	 * @return Property\AssociatedPathophysiologyProperty
	 */
	public function getAssociatedPathophysiology() {
		return $this->associatedPathophysiology;
	}

	/**
	 * Get comprised of.
	 *
	 * @return Property\ComprisedOfProperty
	 */
	public function getComprisedOf() {
		return $this->comprisedOf;
	}

	/**
	 * Get related condition.
	 *
	 * @return Property\RelatedConditionProperty
	 */
	public function getRelatedCondition() {
		return $this->relatedCondition;
	}

	/**
	 * Get related structure.
	 *
	 * @return Property\RelatedStructureProperty
	 */
	public function getRelatedStructure() {
		return $this->relatedStructure;
	}

	/**
	 * Get related therapy.
	 *
	 * @return Property\RelatedTherapyProperty
	 */
	public function getRelatedTherapy() {
		return $this->relatedTherapy;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AnatomicalSystem';
	}

	/**
	 * Set associated pathophysiology.
	 *
	 * @param Property\AssociatedPathophysiologyProperty $associatedPathophysiology
	 * @return AnatomicalSystemType
	 */
	public function setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology) {
		$this->associatedPathophysiology = $associatedPathophysiology;

		return $this;
	}

	/**
	 * Set comprised of.
	 *
	 * @param Property\ComprisedOfProperty $comprisedOf
	 * @return AnatomicalSystemType
	 */
	public function setComprisedOf(Property\ComprisedOfProperty $comprisedOf) {
		$this->comprisedOf = $comprisedOf;

		return $this;
	}

	/**
	 * Set related condition.
	 *
	 * @param Property\RelatedConditionProperty $relatedCondition
	 * @return AnatomicalSystemType
	 */
	public function setRelatedCondition(Property\RelatedConditionProperty $relatedCondition) {
		$this->relatedCondition = $relatedCondition;

		return $this;
	}

	/**
	 * Set related structure.
	 *
	 * @param Property\RelatedStructureProperty $relatedStructure
	 * @return AnatomicalSystemType
	 */
	public function setRelatedStructure(Property\RelatedStructureProperty $relatedStructure) {
		$this->relatedStructure = $relatedStructure;

		return $this;
	}

	/**
	 * Set related therapy.
	 *
	 * @param Property\RelatedTherapyProperty $relatedTherapy
	 * @return AnatomicalSystemType
	 */
	public function setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy) {
		$this->relatedTherapy = $relatedTherapy;

		return $this;
	}
}