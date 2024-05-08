<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any anatomical structure which pertains to the soft nervous tissue functioning as the coordinating center of sensation and intellectual and nervous activity.
 * 
 * @method BrainStructureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BrainStructureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BrainStructureType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method BrainStructureType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method BrainStructureType setCode(Property\CodeProperty $code)
 * @method BrainStructureType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method BrainStructureType setDescription(Property\DescriptionProperty $description)
 * @method BrainStructureType setDiagram(Property\DiagramProperty $diagram)
 * @method BrainStructureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BrainStructureType setGuideline(Property\GuidelineProperty $guideline)
 * @method BrainStructureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BrainStructureType setImage(Property\ImageProperty $image)
 * @method BrainStructureType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method BrainStructureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BrainStructureType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method BrainStructureType setName(Property\NameProperty $name)
 * @method BrainStructureType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method BrainStructureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BrainStructureType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method BrainStructureType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method BrainStructureType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method BrainStructureType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method BrainStructureType setSameAs(Property\SameAsProperty $sameAs)
 * @method BrainStructureType setStudy(Property\StudyProperty $study)
 * @method BrainStructureType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method BrainStructureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BrainStructureType setUrl(Property\UrlProperty $url)
 */
class BrainStructureType extends AnatomicalStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BrainStructure';
	}
}