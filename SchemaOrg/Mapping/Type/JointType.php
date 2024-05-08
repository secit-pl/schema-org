<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The anatomical location at which two or more bones make contact.
 * 
 * @method JointType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method JointType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method JointType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method JointType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method JointType setCode(Property\CodeProperty $code)
 * @method JointType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method JointType setDescription(Property\DescriptionProperty $description)
 * @method JointType setDiagram(Property\DiagramProperty $diagram)
 * @method JointType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method JointType setGuideline(Property\GuidelineProperty $guideline)
 * @method JointType setIdentifier(Property\IdentifierProperty $identifier)
 * @method JointType setImage(Property\ImageProperty $image)
 * @method JointType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method JointType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method JointType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method JointType setName(Property\NameProperty $name)
 * @method JointType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method JointType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method JointType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method JointType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method JointType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method JointType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method JointType setSameAs(Property\SameAsProperty $sameAs)
 * @method JointType setStudy(Property\StudyProperty $study)
 * @method JointType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method JointType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method JointType setUrl(Property\UrlProperty $url)
 */
class JointType extends AnatomicalStructureType {

	/**
	 * @var Property\BiomechnicalClassProperty
	 */
	private $biomechnicalClass;

	/**
	 * @var Property\FunctionalClassProperty
	 */
	private $functionalClass;

	/**
	 * @var Property\StructuralClassProperty
	 */
	private $structuralClass;

	/**
	 * Get biomechnical class.
	 *
	 * @return Property\BiomechnicalClassProperty
	 */
	public function getBiomechnicalClass() {
		return $this->biomechnicalClass;
	}

	/**
	 * Get functional class.
	 *
	 * @return Property\FunctionalClassProperty
	 */
	public function getFunctionalClass() {
		return $this->functionalClass;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Joint';
	}

	/**
	 * Get structural class.
	 *
	 * @return Property\StructuralClassProperty
	 */
	public function getStructuralClass() {
		return $this->structuralClass;
	}

	/**
	 * Set biomechnical class.
	 *
	 * @param Property\BiomechnicalClassProperty $biomechnicalClass
	 * @return JointType
	 */
	public function setBiomechnicalClass(Property\BiomechnicalClassProperty $biomechnicalClass) {
		$this->biomechnicalClass = $biomechnicalClass;

		return $this;
	}

	/**
	 * Set functional class.
	 *
	 * @param Property\FunctionalClassProperty $functionalClass
	 * @return JointType
	 */
	public function setFunctionalClass(Property\FunctionalClassProperty $functionalClass) {
		$this->functionalClass = $functionalClass;

		return $this;
	}

	/**
	 * Set structural class.
	 *
	 * @param Property\StructuralClassProperty $structuralClass
	 * @return JointType
	 */
	public function setStructuralClass(Property\StructuralClassProperty $structuralClass) {
		$this->structuralClass = $structuralClass;

		return $this;
	}
}