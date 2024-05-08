<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A profession, may involve prolonged training and/or a formal qualification.
 * 
 * @method OccupationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OccupationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OccupationType setDescription(Property\DescriptionProperty $description)
 * @method OccupationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OccupationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OccupationType setImage(Property\ImageProperty $image)
 * @method OccupationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OccupationType setName(Property\NameProperty $name)
 * @method OccupationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OccupationType setSameAs(Property\SameAsProperty $sameAs)
 * @method OccupationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OccupationType setUrl(Property\UrlProperty $url)
 */
class OccupationType extends IntangibleType {

	/**
	 * @var Property\EstimatedSalaryProperty
	 */
	private $estimatedSalary;

	/**
	 * @var Property\ExperienceRequirementsProperty
	 */
	private $experienceRequirements;

	/**
	 * @var Property\OccupationLocationProperty
	 */
	private $occupationLocation;

	/**
	 * @var Property\ResponsibilitiesProperty
	 */
	private $responsibilities;

	/**
	 * @var Property\SkillsProperty
	 */
	private $skills;

	/**
	 * Get estimated salary.
	 *
	 * @return Property\EstimatedSalaryProperty
	 */
	public function getEstimatedSalary() {
		return $this->estimatedSalary;
	}

	/**
	 * Get experience requirements.
	 *
	 * @return Property\ExperienceRequirementsProperty
	 */
	public function getExperienceRequirements() {
		return $this->experienceRequirements;
	}

	/**
	 * Get occupation location.
	 *
	 * @return Property\OccupationLocationProperty
	 */
	public function getOccupationLocation() {
		return $this->occupationLocation;
	}

	/**
	 * Get responsibilities.
	 *
	 * @return Property\ResponsibilitiesProperty
	 */
	public function getResponsibilities() {
		return $this->responsibilities;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Occupation';
	}

	/**
	 * Get skills.
	 *
	 * @return Property\SkillsProperty
	 */
	public function getSkills() {
		return $this->skills;
	}

	/**
	 * Set estimated salary.
	 *
	 * @param Property\EstimatedSalaryProperty $estimatedSalary
	 * @return OccupationType
	 */
	public function setEstimatedSalary(Property\EstimatedSalaryProperty $estimatedSalary) {
		$this->estimatedSalary = $estimatedSalary;

		return $this;
	}

	/**
	 * Set experience requirements.
	 *
	 * @param Property\ExperienceRequirementsProperty $experienceRequirements
	 * @return OccupationType
	 */
	public function setExperienceRequirements(Property\ExperienceRequirementsProperty $experienceRequirements) {
		$this->experienceRequirements = $experienceRequirements;

		return $this;
	}

	/**
	 * Set occupation location.
	 *
	 * @param Property\OccupationLocationProperty $occupationLocation
	 * @return OccupationType
	 */
	public function setOccupationLocation(Property\OccupationLocationProperty $occupationLocation) {
		$this->occupationLocation = $occupationLocation;

		return $this;
	}

	/**
	 * Set responsibilities.
	 *
	 * @param Property\ResponsibilitiesProperty $responsibilities
	 * @return OccupationType
	 */
	public function setResponsibilities(Property\ResponsibilitiesProperty $responsibilities) {
		$this->responsibilities = $responsibilities;

		return $this;
	}

	/**
	 * Set skills.
	 *
	 * @param Property\SkillsProperty $skills
	 * @return OccupationType
	 */
	public function setSkills(Property\SkillsProperty $skills) {
		$this->skills = $skills;

		return $this;
	}
}