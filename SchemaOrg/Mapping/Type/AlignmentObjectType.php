<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AlignmentObjectType.
 * 
 * @method AlignmentObjectType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AlignmentObjectType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AlignmentObjectType setDescription(Property\DescriptionProperty $description)
 * @method AlignmentObjectType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AlignmentObjectType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AlignmentObjectType setImage(Property\ImageProperty $image)
 * @method AlignmentObjectType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AlignmentObjectType setName(Property\NameProperty $name)
 * @method AlignmentObjectType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AlignmentObjectType setSameAs(Property\SameAsProperty $sameAs)
 * @method AlignmentObjectType setUrl(Property\UrlProperty $url)
 */
class AlignmentObjectType extends IntangibleType {

	/**
	 * @var Property\AlignmentTypeProperty
	 */
	private $alignmentType;

	/**
	 * @var Property\EducationalFrameworkProperty
	 */
	private $educationalFramework;

	/**
	 * @var Property\TargetDescriptionProperty
	 */
	private $targetDescription;

	/**
	 * @var Property\TargetNameProperty
	 */
	private $targetName;

	/**
	 * @var Property\TargetUrlProperty
	 */
	private $targetUrl;

	/**
	 * Get alignment type.
	 * 
	 * @return Property\AlignmentTypeProperty
	 */
	public function getAlignmentType() {
		return $this->alignmentType;
	}

	/**
	 * Get educational framework.
	 * 
	 * @return Property\EducationalFrameworkProperty
	 */
	public function getEducationalFramework() {
		return $this->educationalFramework;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AlignmentObject';
	}

	/**
	 * Get target description.
	 * 
	 * @return Property\TargetDescriptionProperty
	 */
	public function getTargetDescription() {
		return $this->targetDescription;
	}

	/**
	 * Get target name.
	 * 
	 * @return Property\TargetNameProperty
	 */
	public function getTargetName() {
		return $this->targetName;
	}

	/**
	 * Get target url.
	 * 
	 * @return Property\TargetUrlProperty
	 */
	public function getTargetUrl() {
		return $this->targetUrl;
	}

	/**
	 * Set alignment type.
	 * 
	 * @param Property\AlignmentTypeProperty $alignmentType
	 * @return AlignmentObjectType
	 */
	public function setAlignmentType(Property\AlignmentTypeProperty $alignmentType) {
		$this->alignmentType = $alignmentType;

		return $this;
	}

	/**
	 * Set educational framework.
	 * 
	 * @param Property\EducationalFrameworkProperty $educationalFramework
	 * @return AlignmentObjectType
	 */
	public function setEducationalFramework(Property\EducationalFrameworkProperty $educationalFramework) {
		$this->educationalFramework = $educationalFramework;

		return $this;
	}

	/**
	 * Set target description.
	 * 
	 * @param Property\TargetDescriptionProperty $targetDescription
	 * @return AlignmentObjectType
	 */
	public function setTargetDescription(Property\TargetDescriptionProperty $targetDescription) {
		$this->targetDescription = $targetDescription;

		return $this;
	}

	/**
	 * Set target name.
	 * 
	 * @param Property\TargetNameProperty $targetName
	 * @return AlignmentObjectType
	 */
	public function setTargetName(Property\TargetNameProperty $targetName) {
		$this->targetName = $targetName;

		return $this;
	}

	/**
	 * Set target url.
	 * 
	 * @param Property\TargetUrlProperty $targetUrl
	 * @return AlignmentObjectType
	 */
	public function setTargetUrl(Property\TargetUrlProperty $targetUrl) {
		$this->targetUrl = $targetUrl;

		return $this;
	}
}