<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A property, used to indicate attributes and relationships of some Thing; equivalent to rdf:Property.
 * 
 * @method PropertyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PropertyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PropertyType setDescription(Property\DescriptionProperty $description)
 * @method PropertyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PropertyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PropertyType setImage(Property\ImageProperty $image)
 * @method PropertyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PropertyType setName(Property\NameProperty $name)
 * @method PropertyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PropertyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PropertyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PropertyType setUrl(Property\UrlProperty $url)
 */
class PropertyType extends IntangibleType {

	/**
	 * @var Property\DomainIncludesProperty
	 */
	private $domainIncludes;

	/**
	 * @var Property\InverseOfProperty
	 */
	private $inverseOf;

	/**
	 * @var Property\RangeIncludesProperty
	 */
	private $rangeIncludes;

	/**
	 * @var Property\SupersededByProperty
	 */
	private $supersededBy;

	/**
	 * Get domain includes.
	 *
	 * @return Property\DomainIncludesProperty
	 */
	public function getDomainIncludes() {
		return $this->domainIncludes;
	}

	/**
	 * Get inverse of.
	 *
	 * @return Property\InverseOfProperty
	 */
	public function getInverseOf() {
		return $this->inverseOf;
	}

	/**
	 * Get range includes.
	 *
	 * @return Property\RangeIncludesProperty
	 */
	public function getRangeIncludes() {
		return $this->rangeIncludes;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Property';
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
	 * Set domain includes.
	 *
	 * @param Property\DomainIncludesProperty $domainIncludes
	 * @return PropertyType
	 */
	public function setDomainIncludes(Property\DomainIncludesProperty $domainIncludes) {
		$this->domainIncludes = $domainIncludes;

		return $this;
	}

	/**
	 * Set inverse of.
	 *
	 * @param Property\InverseOfProperty $inverseOf
	 * @return PropertyType
	 */
	public function setInverseOf(Property\InverseOfProperty $inverseOf) {
		$this->inverseOf = $inverseOf;

		return $this;
	}

	/**
	 * Set range includes.
	 *
	 * @param Property\RangeIncludesProperty $rangeIncludes
	 * @return PropertyType
	 */
	public function setRangeIncludes(Property\RangeIncludesProperty $rangeIncludes) {
		$this->rangeIncludes = $rangeIncludes;

		return $this;
	}

	/**
	 * Set superseded by.
	 *
	 * @param Property\SupersededByProperty $supersededBy
	 * @return PropertyType
	 */
	public function setSupersededBy(Property\SupersededByProperty $supersededBy) {
		$this->supersededBy = $supersededBy;

		return $this;
	}
}