<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A short band of tough, flexible, fibrous connective tissue that functions to connect multiple bones, cartilages, and structurally support joints.
 * 
 * @method LigamentType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LigamentType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LigamentType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method LigamentType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method LigamentType setCode(Property\CodeProperty $code)
 * @method LigamentType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method LigamentType setDescription(Property\DescriptionProperty $description)
 * @method LigamentType setDiagram(Property\DiagramProperty $diagram)
 * @method LigamentType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LigamentType setGuideline(Property\GuidelineProperty $guideline)
 * @method LigamentType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LigamentType setImage(Property\ImageProperty $image)
 * @method LigamentType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method LigamentType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LigamentType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method LigamentType setName(Property\NameProperty $name)
 * @method LigamentType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method LigamentType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LigamentType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method LigamentType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method LigamentType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method LigamentType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method LigamentType setSameAs(Property\SameAsProperty $sameAs)
 * @method LigamentType setStudy(Property\StudyProperty $study)
 * @method LigamentType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method LigamentType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LigamentType setUrl(Property\UrlProperty $url)
 */
class LigamentType extends AnatomicalStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Ligament';
	}
}