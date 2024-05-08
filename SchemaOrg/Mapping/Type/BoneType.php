<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Rigid connective tissue that comprises up the skeletal structure of the human body.
 * 
 * @method BoneType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BoneType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BoneType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method BoneType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method BoneType setCode(Property\CodeProperty $code)
 * @method BoneType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method BoneType setDescription(Property\DescriptionProperty $description)
 * @method BoneType setDiagram(Property\DiagramProperty $diagram)
 * @method BoneType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BoneType setGuideline(Property\GuidelineProperty $guideline)
 * @method BoneType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BoneType setImage(Property\ImageProperty $image)
 * @method BoneType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method BoneType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BoneType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method BoneType setName(Property\NameProperty $name)
 * @method BoneType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method BoneType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BoneType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method BoneType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method BoneType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method BoneType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method BoneType setSameAs(Property\SameAsProperty $sameAs)
 * @method BoneType setStudy(Property\StudyProperty $study)
 * @method BoneType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method BoneType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BoneType setUrl(Property\UrlProperty $url)
 */
class BoneType extends AnatomicalStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bone';
	}
}