<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AlignmentObject.
 */
class AlignmentObject extends Intangible {

	/**
	 * @var Property\AlignmentType
	 */
	private $alignmentType;

	/**
	 * @var Property\EducationalFramework
	 */
	private $educationalFramework;

	/**
	 * @var Property\TargetDescription
	 */
	private $targetDescription;

	/**
	 * @var Property\TargetName
	 */
	private $targetName;

	/**
	 * @var Property\TargetUrl
	 */
	private $targetUrl;

	/**
	 * Get alignment type.
	 * 
	 * @return Property\AlignmentType
	 */
	public function getAlignmentType() {
		return $this->alignmentType;
	}

	/**
	 * Get educational framework.
	 * 
	 * @return Property\EducationalFramework
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
	 * @return Property\TargetDescription
	 */
	public function getTargetDescription() {
		return $this->targetDescription;
	}

	/**
	 * Get target name.
	 * 
	 * @return Property\TargetName
	 */
	public function getTargetName() {
		return $this->targetName;
	}

	/**
	 * Get target url.
	 * 
	 * @return Property\TargetUrl
	 */
	public function getTargetUrl() {
		return $this->targetUrl;
	}

	/**
	 * Set alignment type.
	 * 
	 * @param Property\AlignmentType $alignmentType
	 * @return AlignmentObject
	 */
	public function setAlignmentType(Property\AlignmentType $alignmentType) {
		$this->alignmentType = $alignmentType;

		return $this;
	}

	/**
	 * Set educational framework.
	 * 
	 * @param Property\EducationalFramework $educationalFramework
	 * @return AlignmentObject
	 */
	public function setEducationalFramework(Property\EducationalFramework $educationalFramework) {
		$this->educationalFramework = $educationalFramework;

		return $this;
	}

	/**
	 * Set target description.
	 * 
	 * @param Property\TargetDescription $targetDescription
	 * @return AlignmentObject
	 */
	public function setTargetDescription(Property\TargetDescription $targetDescription) {
		$this->targetDescription = $targetDescription;

		return $this;
	}

	/**
	 * Set target name.
	 * 
	 * @param Property\TargetName $targetName
	 * @return AlignmentObject
	 */
	public function setTargetName(Property\TargetName $targetName) {
		$this->targetName = $targetName;

		return $this;
	}

	/**
	 * Set target url.
	 * 
	 * @param Property\TargetUrl $targetUrl
	 * @return AlignmentObject
	 */
	public function setTargetUrl(Property\TargetUrl $targetUrl) {
		$this->targetUrl = $targetUrl;

		return $this;
	}
}