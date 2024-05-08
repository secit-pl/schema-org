<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any bodily activity that enhances or maintains physical fitness and overall health and wellness. Includes activity that is part of daily living and routine, structured exercise, and exercise prescribed as part of a medical treatment or recovery plan.
 * 
 * @method PhysicalActivityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhysicalActivityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhysicalActivityType setCode(Property\CodeProperty $code)
 * @method PhysicalActivityType setDescription(Property\DescriptionProperty $description)
 * @method PhysicalActivityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhysicalActivityType setGuideline(Property\GuidelineProperty $guideline)
 * @method PhysicalActivityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhysicalActivityType setImage(Property\ImageProperty $image)
 * @method PhysicalActivityType setLegalStatus(Property\LegalStatusProperty $legalStatus)
 * @method PhysicalActivityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhysicalActivityType setMedicineSystem(Property\MedicineSystemProperty $medicineSystem)
 * @method PhysicalActivityType setName(Property\NameProperty $name)
 * @method PhysicalActivityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhysicalActivityType setRecognizingAuthority(Property\RecognizingAuthorityProperty $recognizingAuthority)
 * @method PhysicalActivityType setRelevantSpecialty(Property\RelevantSpecialtyProperty $relevantSpecialty)
 * @method PhysicalActivityType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhysicalActivityType setStudy(Property\StudyProperty $study)
 * @method PhysicalActivityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PhysicalActivityType setUrl(Property\UrlProperty $url)
 */
class PhysicalActivityType extends LifestyleModificationType {

	/**
	 * @var Property\AssociatedAnatomyProperty
	 */
	private $associatedAnatomy;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\EpidemiologyProperty
	 */
	private $epidemiology;

	/**
	 * @var Property\PathophysiologyProperty
	 */
	private $pathophysiology;

	/**
	 * Get associated anatomy.
	 *
	 * @return Property\AssociatedAnatomyProperty
	 */
	public function getAssociatedAnatomy() {
		return $this->associatedAnatomy;
	}

	/**
	 * Get category.
	 *
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get epidemiology.
	 *
	 * @return Property\EpidemiologyProperty
	 */
	public function getEpidemiology() {
		return $this->epidemiology;
	}

	/**
	 * Get pathophysiology.
	 *
	 * @return Property\PathophysiologyProperty
	 */
	public function getPathophysiology() {
		return $this->pathophysiology;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhysicalActivity';
	}

	/**
	 * Set associated anatomy.
	 *
	 * @param Property\AssociatedAnatomyProperty $associatedAnatomy
	 * @return PhysicalActivityType
	 */
	public function setAssociatedAnatomy(Property\AssociatedAnatomyProperty $associatedAnatomy) {
		$this->associatedAnatomy = $associatedAnatomy;

		return $this;
	}

	/**
	 * Set category.
	 *
	 * @param Property\CategoryProperty $category
	 * @return PhysicalActivityType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set epidemiology.
	 *
	 * @param Property\EpidemiologyProperty $epidemiology
	 * @return PhysicalActivityType
	 */
	public function setEpidemiology(Property\EpidemiologyProperty $epidemiology) {
		$this->epidemiology = $epidemiology;

		return $this;
	}

	/**
	 * Set pathophysiology.
	 *
	 * @param Property\PathophysiologyProperty $pathophysiology
	 * @return PhysicalActivityType
	 */
	public function setPathophysiology(Property\PathophysiologyProperty $pathophysiology) {
		$this->pathophysiology = $pathophysiology;

		return $this;
	}
}