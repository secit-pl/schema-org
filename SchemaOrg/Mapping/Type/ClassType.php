<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A class, also often called a 'Type'; equivalent to rdfs:Class.
 * 
 * @method ClassType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ClassType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ClassType setDescription(Property\DescriptionProperty $description)
 * @method ClassType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ClassType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ClassType setImage(Property\ImageProperty $image)
 * @method ClassType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ClassType setName(Property\NameProperty $name)
 * @method ClassType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ClassType setSameAs(Property\SameAsProperty $sameAs)
 * @method ClassType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ClassType setUrl(Property\UrlProperty $url)
 */
class ClassType extends IntangibleType {

	/**
	 * @var Property\SupersededByProperty
	 */
	private $supersededBy;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Class';
	}

	/**
	 * Get superseded by.
	 *
	 * @return Property\SupersededByProperty
	 */
	public function getSupersededBy() {
		return $this->supersededBy;
	}

	/**
	 * Set superseded by.
	 *
	 * @param Property\SupersededByProperty $supersededBy
	 * @return ClassType
	 */
	public function setSupersededBy(Property\SupersededByProperty $supersededBy) {
		$this->supersededBy = $supersededBy;

		return $this;
	}
}