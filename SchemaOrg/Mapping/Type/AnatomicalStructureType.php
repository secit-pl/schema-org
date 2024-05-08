<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 * 
 * @method AnatomicalStructureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnatomicalStructureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnatomicalStructureType setCode(Property\CodeProperty $code)
 * @method AnatomicalStructureType setDescription(Property\DescriptionProperty $description)
 * @method AnatomicalStructureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnatomicalStructureType setGuideline(Property\GuidelineProperty $guideline)
 * @method AnatomicalStructureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnatomicalStructureType setImage(Property\ImageProperty $image)
 * @method AnatomicalStructureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method AnatomicalStructureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnatomicalStructureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method AnatomicalStructureType setName(Property\NameProperty $name)
 * @method AnatomicalStructureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnatomicalStructureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method AnatomicalStructureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method AnatomicalStructureType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnatomicalStructureType setStudy(Property\StudyProperty $study)
 * @method AnatomicalStructureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AnatomicalStructureType setUrl(Property\UrlProperty $url)
 */
class AnatomicalStructureType extends MedicalEntityType {

	/**
	 * @var Property\AssociatedPathophysiologyProperty
	 */
	private $associatedPathophysiology;

	/**
	 * @var Property\BodyLocationProperty
	 */
	private $bodyLocation;

	/**
	 * @var Property\ConnectedToProperty
	 */
	private $connectedTo;

	/**
	 * @var Property\DiagramProperty
	 */
	private $diagram;

	/**
	 * @var Property\PartOfSystemProperty
	 */
	private $partOfSystem;

	/**
	 * @var Property\RelatedConditionProperty
	 */
	private $relatedCondition;

	/**
	 * @var Property\RelatedTherapyProperty
	 */
	private $relatedTherapy;

	/**
	 * @var Property\SubStructureProperty
	 */
	private $subStructure;

	/**
	 * Get associated pathophysiology.
	 *
	 * @return Property\AssociatedPathophysiologyProperty
	 */
	public function getAssociatedPathophysiology() {
		return $this->associatedPathophysiology;
	}

	/**
	 * Get body location.
	 *
	 * @return Property\BodyLocationProperty
	 */
	public function getBodyLocation() {
		return $this->bodyLocation;
	}

	/**
	 * Get connected to.
	 *
	 * @return Property\ConnectedToProperty
	 */
	public function getConnectedTo() {
		return $this->connectedTo;
	}

	/**
	 * Get diagram.
	 *
	 * @return Property\DiagramProperty
	 */
	public function getDiagram() {
		return $this->diagram;
	}

	/**
	 * Get part of system.
	 *
	 * @return Property\PartOfSystemProperty
	 */
	public function getPartOfSystem() {
		return $this->partOfSystem;
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
		return 'https://schema.org/AnatomicalStructure';
	}

	/**
	 * Get sub structure.
	 *
	 * @return Property\SubStructureProperty
	 */
	public function getSubStructure() {
		return $this->subStructure;
	}

	/**
	 * Set associated pathophysiology.
	 *
	 * @param Property\AssociatedPathophysiologyProperty $associatedPathophysiology
	 * @return AnatomicalStructureType
	 */
	public function setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology) {
		$this->associatedPathophysiology = $associatedPathophysiology;

		return $this;
	}

	/**
	 * Set body location.
	 *
	 * @param Property\BodyLocationProperty $bodyLocation
	 * @return AnatomicalStructureType
	 */
	public function setBodyLocation(Property\BodyLocationProperty $bodyLocation) {
		$this->bodyLocation = $bodyLocation;

		return $this;
	}

	/**
	 * Set connected to.
	 *
	 * @param Property\ConnectedToProperty $connectedTo
	 * @return AnatomicalStructureType
	 */
	public function setConnectedTo(Property\ConnectedToProperty $connectedTo) {
		$this->connectedTo = $connectedTo;

		return $this;
	}

	/**
	 * Set diagram.
	 *
	 * @param Property\DiagramProperty $diagram
	 * @return AnatomicalStructureType
	 */
	public function setDiagram(Property\DiagramProperty $diagram) {
		$this->diagram = $diagram;

		return $this;
	}

	/**
	 * Set part of system.
	 *
	 * @param Property\PartOfSystemProperty $partOfSystem
	 * @return AnatomicalStructureType
	 */
	public function setPartOfSystem(Property\PartOfSystemProperty $partOfSystem) {
		$this->partOfSystem = $partOfSystem;

		return $this;
	}

	/**
	 * Set related condition.
	 *
	 * @param Property\RelatedConditionProperty $relatedCondition
	 * @return AnatomicalStructureType
	 */
	public function setRelatedCondition(Property\RelatedConditionProperty $relatedCondition) {
		$this->relatedCondition = $relatedCondition;

		return $this;
	}

	/**
	 * Set related therapy.
	 *
	 * @param Property\RelatedTherapyProperty $relatedTherapy
	 * @return AnatomicalStructureType
	 */
	public function setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy) {
		$this->relatedTherapy = $relatedTherapy;

		return $this;
	}

	/**
	 * Set sub structure.
	 *
	 * @param Property\SubStructureProperty $subStructure
	 * @return AnatomicalStructureType
	 */
	public function setSubStructure(Property\SubStructureProperty $subStructure) {
		$this->subStructure = $subStructure;

		return $this;
	}
}