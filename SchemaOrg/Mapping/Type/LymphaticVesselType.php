<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of blood vessel that specifically carries lymph fluid unidirectionally toward the heart.
 * 
 * @method LymphaticVesselType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LymphaticVesselType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LymphaticVesselType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method LymphaticVesselType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method LymphaticVesselType setCode(Property\CodeProperty $code)
 * @method LymphaticVesselType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method LymphaticVesselType setDescription(Property\DescriptionProperty $description)
 * @method LymphaticVesselType setDiagram(Property\DiagramProperty $diagram)
 * @method LymphaticVesselType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LymphaticVesselType setGuideline(Property\GuidelineProperty $guideline)
 * @method LymphaticVesselType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LymphaticVesselType setImage(Property\ImageProperty $image)
 * @method LymphaticVesselType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method LymphaticVesselType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LymphaticVesselType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method LymphaticVesselType setName(Property\NameProperty $name)
 * @method LymphaticVesselType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method LymphaticVesselType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LymphaticVesselType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method LymphaticVesselType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method LymphaticVesselType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method LymphaticVesselType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method LymphaticVesselType setSameAs(Property\SameAsProperty $sameAs)
 * @method LymphaticVesselType setStudy(Property\StudyProperty $study)
 * @method LymphaticVesselType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method LymphaticVesselType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LymphaticVesselType setUrl(Property\UrlProperty $url)
 */
class LymphaticVesselType extends VesselType {

	/**
	 * @var Property\OriginatesFromProperty
	 */
	private $originatesFrom;

	/**
	 * @var Property\RegionDrainedProperty
	 */
	private $regionDrained;

	/**
	 * @var Property\RunsToProperty
	 */
	private $runsTo;

	/**
	 * Get originates from.
	 *
	 * @return Property\OriginatesFromProperty
	 */
	public function getOriginatesFrom() {
		return $this->originatesFrom;
	}

	/**
	 * Get region drained.
	 *
	 * @return Property\RegionDrainedProperty
	 */
	public function getRegionDrained() {
		return $this->regionDrained;
	}

	/**
	 * Get runs to.
	 *
	 * @return Property\RunsToProperty
	 */
	public function getRunsTo() {
		return $this->runsTo;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LymphaticVessel';
	}

	/**
	 * Set originates from.
	 *
	 * @param Property\OriginatesFromProperty $originatesFrom
	 * @return LymphaticVesselType
	 */
	public function setOriginatesFrom(Property\OriginatesFromProperty $originatesFrom) {
		$this->originatesFrom = $originatesFrom;

		return $this;
	}

	/**
	 * Set region drained.
	 *
	 * @param Property\RegionDrainedProperty $regionDrained
	 * @return LymphaticVesselType
	 */
	public function setRegionDrained(Property\RegionDrainedProperty $regionDrained) {
		$this->regionDrained = $regionDrained;

		return $this;
	}

	/**
	 * Set runs to.
	 *
	 * @param Property\RunsToProperty $runsTo
	 * @return LymphaticVesselType
	 */
	public function setRunsTo(Property\RunsToProperty $runsTo) {
		$this->runsTo = $runsTo;

		return $this;
	}
}