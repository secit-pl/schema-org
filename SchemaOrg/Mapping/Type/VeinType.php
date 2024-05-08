<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of blood vessel that specifically carries blood to the heart.
 * 
 * @method VeinType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VeinType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VeinType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method VeinType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method VeinType setCode(Property\CodeProperty $code)
 * @method VeinType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method VeinType setDescription(Property\DescriptionProperty $description)
 * @method VeinType setDiagram(Property\DiagramProperty $diagram)
 * @method VeinType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VeinType setGuideline(Property\GuidelineProperty $guideline)
 * @method VeinType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VeinType setImage(Property\ImageProperty $image)
 * @method VeinType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method VeinType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VeinType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method VeinType setName(Property\NameProperty $name)
 * @method VeinType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method VeinType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VeinType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method VeinType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method VeinType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method VeinType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method VeinType setSameAs(Property\SameAsProperty $sameAs)
 * @method VeinType setStudy(Property\StudyProperty $study)
 * @method VeinType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method VeinType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VeinType setUrl(Property\UrlProperty $url)
 */
class VeinType extends VesselType {

	/**
	 * @var Property\DrainsToProperty
	 */
	private $drainsTo;

	/**
	 * @var Property\RegionDrainedProperty
	 */
	private $regionDrained;

	/**
	 * @var Property\TributaryProperty
	 */
	private $tributary;

	/**
	 * Get drains to.
	 *
	 * @return Property\DrainsToProperty
	 */
	public function getDrainsTo() {
		return $this->drainsTo;
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
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Vein';
	}

	/**
	 * Get tributary.
	 *
	 * @return Property\TributaryProperty
	 */
	public function getTributary() {
		return $this->tributary;
	}

	/**
	 * Set drains to.
	 *
	 * @param Property\DrainsToProperty $drainsTo
	 * @return VeinType
	 */
	public function setDrainsTo(Property\DrainsToProperty $drainsTo) {
		$this->drainsTo = $drainsTo;

		return $this;
	}

	/**
	 * Set region drained.
	 *
	 * @param Property\RegionDrainedProperty $regionDrained
	 * @return VeinType
	 */
	public function setRegionDrained(Property\RegionDrainedProperty $regionDrained) {
		$this->regionDrained = $regionDrained;

		return $this;
	}

	/**
	 * Set tributary.
	 *
	 * @param Property\TributaryProperty $tributary
	 * @return VeinType
	 */
	public function setTributary(Property\TributaryProperty $tributary) {
		$this->tributary = $tributary;

		return $this;
	}
}