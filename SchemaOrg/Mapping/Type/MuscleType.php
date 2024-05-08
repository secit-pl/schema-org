<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A muscle is an anatomical structure consisting of a contractile form of tissue that animals use to effect movement.
 * 
 * @method MuscleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MuscleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MuscleType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method MuscleType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method MuscleType setCode(Property\CodeProperty $code)
 * @method MuscleType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method MuscleType setDescription(Property\DescriptionProperty $description)
 * @method MuscleType setDiagram(Property\DiagramProperty $diagram)
 * @method MuscleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MuscleType setGuideline(Property\GuidelineProperty $guideline)
 * @method MuscleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MuscleType setImage(Property\ImageProperty $image)
 * @method MuscleType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method MuscleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MuscleType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method MuscleType setName(Property\NameProperty $name)
 * @method MuscleType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method MuscleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MuscleType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method MuscleType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method MuscleType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method MuscleType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method MuscleType setSameAs(Property\SameAsProperty $sameAs)
 * @method MuscleType setStudy(Property\StudyProperty $study)
 * @method MuscleType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method MuscleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MuscleType setUrl(Property\UrlProperty $url)
 */
class MuscleType extends AnatomicalStructureType {

	/**
	 * @var Property\AntagonistProperty
	 */
	private $antagonist;

	/**
	 * @var Property\BloodSupplyProperty
	 */
	private $bloodSupply;

	/**
	 * @var Property\InsertionProperty
	 */
	private $insertion;

	/**
	 * @var Property\MuscleActionProperty
	 */
	private $muscleAction;

	/**
	 * @var Property\NerveProperty
	 */
	private $nerve;

	/**
	 * Get antagonist.
	 *
	 * @return Property\AntagonistProperty
	 */
	public function getAntagonist() {
		return $this->antagonist;
	}

	/**
	 * Get blood supply.
	 *
	 * @return Property\BloodSupplyProperty
	 */
	public function getBloodSupply() {
		return $this->bloodSupply;
	}

	/**
	 * Get insertion.
	 *
	 * @return Property\InsertionProperty
	 */
	public function getInsertion() {
		return $this->insertion;
	}

	/**
	 * Get muscle action.
	 *
	 * @return Property\MuscleActionProperty
	 */
	public function getMuscleAction() {
		return $this->muscleAction;
	}

	/**
	 * Get nerve.
	 *
	 * @return Property\NerveProperty
	 */
	public function getNerve() {
		return $this->nerve;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Muscle';
	}

	/**
	 * Set antagonist.
	 *
	 * @param Property\AntagonistProperty $antagonist
	 * @return MuscleType
	 */
	public function setAntagonist(Property\AntagonistProperty $antagonist) {
		$this->antagonist = $antagonist;

		return $this;
	}

	/**
	 * Set blood supply.
	 *
	 * @param Property\BloodSupplyProperty $bloodSupply
	 * @return MuscleType
	 */
	public function setBloodSupply(Property\BloodSupplyProperty $bloodSupply) {
		$this->bloodSupply = $bloodSupply;

		return $this;
	}

	/**
	 * Set insertion.
	 *
	 * @param Property\InsertionProperty $insertion
	 * @return MuscleType
	 */
	public function setInsertion(Property\InsertionProperty $insertion) {
		$this->insertion = $insertion;

		return $this;
	}

	/**
	 * Set muscle action.
	 *
	 * @param Property\MuscleActionProperty $muscleAction
	 * @return MuscleType
	 */
	public function setMuscleAction(Property\MuscleActionProperty $muscleAction) {
		$this->muscleAction = $muscleAction;

		return $this;
	}

	/**
	 * Set nerve.
	 *
	 * @param Property\NerveProperty $nerve
	 * @return MuscleType
	 */
	public function setNerve(Property\NerveProperty $nerve) {
		$this->nerve = $nerve;

		return $this;
	}
}