<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A component of the human body circulatory system comprised of an intricate network of hollow tubes that transport blood throughout the entire body.
 * 
 * @method VesselType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VesselType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VesselType setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology)
 * @method VesselType setBodyLocation(Property\BodyLocationProperty $bodyLocation)
 * @method VesselType setCode(Property\CodeProperty $code)
 * @method VesselType setConnectedTo(Property\ConnectedToProperty $connectedTo)
 * @method VesselType setDescription(Property\DescriptionProperty $description)
 * @method VesselType setDiagram(Property\DiagramProperty $diagram)
 * @method VesselType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VesselType setGuideline(Property\GuidelineProperty $guideline)
 * @method VesselType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VesselType setImage(Property\ImageProperty $image)
 * @method VesselType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method VesselType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VesselType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method VesselType setName(Property\NameProperty $name)
 * @method VesselType setPartOfSystem(Property\PartOfSystemProperty $partOfSystem)
 * @method VesselType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VesselType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method VesselType setRelatedCondition(Property\RelatedConditionProperty $relatedCondition)
 * @method VesselType setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy)
 * @method VesselType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method VesselType setSameAs(Property\SameAsProperty $sameAs)
 * @method VesselType setStudy(Property\StudyProperty $study)
 * @method VesselType setSubStructure(Property\SubStructureProperty $subStructure)
 * @method VesselType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VesselType setUrl(Property\UrlProperty $url)
 */
class VesselType extends AnatomicalStructureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Vessel';
	}
}