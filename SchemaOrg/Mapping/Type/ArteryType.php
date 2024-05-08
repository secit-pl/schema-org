<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of blood vessel that specifically carries blood away from the heart.
 * 
 * @method ArteryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ArteryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ArteryType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method ArteryType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method ArteryType setCode(Property\CodeProperty $code)
 * @method ArteryType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method ArteryType setDescription(Property\DescriptionProperty $description)
 * @method ArteryType setDiagram(Property\DiagramProperty $diagram)
 * @method ArteryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ArteryType setGuideline(Property\GuidelineProperty $guideline)
 * @method ArteryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ArteryType setImage(Property\ImageProperty $image)
 * @method ArteryType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method ArteryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ArteryType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method ArteryType setName(Property\NameProperty $name)
 * @method ArteryType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method ArteryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ArteryType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method ArteryType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method ArteryType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method ArteryType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method ArteryType setSameAs(Property\SameAsProperty $sameAs)
 * @method ArteryType setStudy(Property\StudyProperty $study)
 * @method ArteryType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method ArteryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ArteryType setUrl(Property\UrlProperty $url)
 */
class ArteryType extends VesselType {

	/**
	 * @var Property\ArterialBranchProperty
	 */
	private $arterialBranch;

	/**
	 * @var Property\SupplyToProperty
	 */
	private $supplyTo;

	/**
	 * Get arterial branch.
	 *
	 * @return Property\ArterialBranchProperty
	 */
	public function getArterialBranch() {
		return $this->arterialBranch;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Artery';
	}

	/**
	 * Get supply to.
	 *
	 * @return Property\SupplyToProperty
	 */
	public function getSupplyTo() {
		return $this->supplyTo;
	}

	/**
	 * Set arterial branch.
	 *
	 * @param Property\ArterialBranchProperty $arterialBranch
	 * @return ArteryType
	 */
	public function setArterialBranch(Property\ArterialBranchProperty $arterialBranch) {
		$this->arterialBranch = $arterialBranch;

		return $this;
	}

	/**
	 * Set supply to.
	 *
	 * @param Property\SupplyToProperty $supplyTo
	 * @return ArteryType
	 */
	public function setSupplyTo(Property\SupplyToProperty $supplyTo) {
		$this->supplyTo = $supplyTo;

		return $this;
	}
}