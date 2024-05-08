<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A common pathway for the electrochemical nerve impulses that are transmitted along each of the axons.
 * 
 * @method NerveType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NerveType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NerveType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method NerveType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method NerveType setCode(Property\CodeProperty $code)
 * @method NerveType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method NerveType setDescription(Property\DescriptionProperty $description)
 * @method NerveType setDiagram(Property\DiagramProperty $diagram)
 * @method NerveType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NerveType setGuideline(Property\GuidelineProperty $guideline)
 * @method NerveType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NerveType setImage(Property\ImageProperty $image)
 * @method NerveType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method NerveType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NerveType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method NerveType setName(Property\NameProperty $name)
 * @method NerveType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method NerveType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NerveType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method NerveType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method NerveType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method NerveType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method NerveType setSameAs(Property\SameAsProperty $sameAs)
 * @method NerveType setStudy(Property\StudyProperty $study)
 * @method NerveType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method NerveType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NerveType setUrl(Property\UrlProperty $url)
 */
class NerveType extends AnatomicalStructureType {

	/**
	 * @var Property\NerveMotorProperty
	 */
	private $nerveMotor;

	/**
	 * @var Property\SensoryUnitProperty
	 */
	private $sensoryUnit;

	/**
	 * @var Property\SourcedFromProperty
	 */
	private $sourcedFrom;

	/**
	 * Get nerve motor.
	 *
	 * @return Property\NerveMotorProperty
	 */
	public function getNerveMotor() {
		return $this->nerveMotor;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Nerve';
	}

	/**
	 * Get sensory unit.
	 *
	 * @return Property\SensoryUnitProperty
	 */
	public function getSensoryUnit() {
		return $this->sensoryUnit;
	}

	/**
	 * Get sourced from.
	 *
	 * @return Property\SourcedFromProperty
	 */
	public function getSourcedFrom() {
		return $this->sourcedFrom;
	}

	/**
	 * Set nerve motor.
	 *
	 * @param Property\NerveMotorProperty $nerveMotor
	 * @return NerveType
	 */
	public function setNerveMotor(Property\NerveMotorProperty $nerveMotor) {
		$this->nerveMotor = $nerveMotor;

		return $this;
	}

	/**
	 * Set sensory unit.
	 *
	 * @param Property\SensoryUnitProperty $sensoryUnit
	 * @return NerveType
	 */
	public function setSensoryUnit(Property\SensoryUnitProperty $sensoryUnit) {
		$this->sensoryUnit = $sensoryUnit;

		return $this;
	}

	/**
	 * Set sourced from.
	 *
	 * @param Property\SourcedFromProperty $sourcedFrom
	 * @return NerveType
	 */
	public function setSourcedFrom(Property\SourcedFromProperty $sourcedFrom) {
		$this->sourcedFrom = $sourcedFrom;

		return $this;
	}
}