<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Anatomical features that can be observed by sight (without dissection), including the form and proportions of the human body as well as surface landmarks that correspond to deeper subcutaneous structures. Superficial anatomy plays an important role in sports medicine, phlebotomy, and other medical specialties as underlying anatomical structures can be identified through surface palpation. For example, during back surgery, superficial anatomy can be used to palpate and count vertebrae to find the site of incision. Or in phlebotomy, superficial anatomy can be used to locate an underlying vein; for example, the median cubital vein can be located by palpating the borders of the cubital fossa (such as the epicondyles of the humerus) and then looking for the superficial signs of the vein, such as size, prominence, ability to refill after depression, and feel of surrounding tissue support. As another example, in a subluxation (dislocation) of the glenohumeral joint, the bony structure becomes pronounced with the deltoid muscle failing to cover the glenohumeral joint allowing the edges of the scapula to be superficially visible. Here, the superficial anatomy is the visible edges of the scapula, implying the underlying dislocation of the joint (the related anatomical structure).
 * 
 * @method SuperficialAnatomyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SuperficialAnatomyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SuperficialAnatomyType setCode(Property\CodeProperty $code)
 * @method SuperficialAnatomyType setDescription(Property\DescriptionProperty $description)
 * @method SuperficialAnatomyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SuperficialAnatomyType setGuideline(Property\GuidelineProperty $guideline)
 * @method SuperficialAnatomyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SuperficialAnatomyType setImage(Property\ImageProperty $image)
 * @method SuperficialAnatomyType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method SuperficialAnatomyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SuperficialAnatomyType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method SuperficialAnatomyType setName(Property\NameProperty $name)
 * @method SuperficialAnatomyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SuperficialAnatomyType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method SuperficialAnatomyType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method SuperficialAnatomyType setSameAs(Property\SameAsProperty $sameAs)
 * @method SuperficialAnatomyType setStudy(Property\StudyProperty $study)
 * @method SuperficialAnatomyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SuperficialAnatomyType setUrl(Property\UrlProperty $url)
 */
class SuperficialAnatomyType extends MedicalEntityType {

	/**
	 * @var Property\AssociatedPathophysiologyProperty
	 */
	private $associatedPathophysiology;

	/**
	 * @var Property\RelatedAnatomyProperty
	 */
	private $relatedAnatomy;

	/**
	 * @var Property\RelatedConditionProperty
	 */
	private $relatedCondition;

	/**
	 * @var Property\RelatedTherapyProperty
	 */
	private $relatedTherapy;

	/**
	 * @var Property\SignificanceProperty
	 */
	private $significance;

	/**
	 * Get associated pathophysiology.
	 *
	 * @return Property\AssociatedPathophysiologyProperty
	 */
	public function getAssociatedPathophysiology() {
		return $this->associatedPathophysiology;
	}

	/**
	 * Get related anatomy.
	 *
	 * @return Property\RelatedAnatomyProperty
	 */
	public function getRelatedAnatomy() {
		return $this->relatedAnatomy;
	}

	/**
	 * Get related condition.
	 *
	 * @return Property\RelatedConditionProperty
	 */
	public function getRelatedCondition() {
		return $this->relatedCondition;
	}

	/**
	 * Get related therapy.
	 *
	 * @return Property\RelatedTherapyProperty
	 */
	public function getRelatedTherapy() {
		return $this->relatedTherapy;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SuperficialAnatomy';
	}

	/**
	 * Get significance.
	 *
	 * @return Property\SignificanceProperty
	 */
	public function getSignificance() {
		return $this->significance;
	}

	/**
	 * Set associated pathophysiology.
	 *
	 * @param Property\AssociatedPathophysiologyProperty $associatedPathophysiology
	 * @return SuperficialAnatomyType
	 */
	public function setAssociatedPathophysiology(Property\AssociatedPathophysiologyProperty $associatedPathophysiology) {
		$this->associatedPathophysiology = $associatedPathophysiology;

		return $this;
	}

	/**
	 * Set related anatomy.
	 *
	 * @param Property\RelatedAnatomyProperty $relatedAnatomy
	 * @return SuperficialAnatomyType
	 */
	public function setRelatedAnatomy(Property\RelatedAnatomyProperty $relatedAnatomy) {
		$this->relatedAnatomy = $relatedAnatomy;

		return $this;
	}

	/**
	 * Set related condition.
	 *
	 * @param Property\RelatedConditionProperty $relatedCondition
	 * @return SuperficialAnatomyType
	 */
	public function setRelatedCondition(Property\RelatedConditionProperty $relatedCondition) {
		$this->relatedCondition = $relatedCondition;

		return $this;
	}

	/**
	 * Set related therapy.
	 *
	 * @param Property\RelatedTherapyProperty $relatedTherapy
	 * @return SuperficialAnatomyType
	 */
	public function setRelatedTherapy(Property\RelatedTherapyProperty $relatedTherapy) {
		$this->relatedTherapy = $relatedTherapy;

		return $this;
	}

	/**
	 * Set significance.
	 *
	 * @param Property\SignificanceProperty $significance
	 * @return SuperficialAnatomyType
	 */
	public function setSignificance(Property\SignificanceProperty $significance) {
		$this->significance = $significance;

		return $this;
	}
}