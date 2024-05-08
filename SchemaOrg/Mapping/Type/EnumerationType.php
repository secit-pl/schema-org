<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 * 
 * @method EnumerationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EnumerationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EnumerationType setDescription(Property\DescriptionProperty $description)
 * @method EnumerationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EnumerationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EnumerationType setImage(Property\ImageProperty $image)
 * @method EnumerationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EnumerationType setName(Property\NameProperty $name)
 * @method EnumerationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EnumerationType setSameAs(Property\SameAsProperty $sameAs)
 * @method EnumerationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EnumerationType setUrl(Property\UrlProperty $url)
 */
class EnumerationType extends IntangibleType {

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
		return 'https://schema.org/Enumeration';
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
	 * @return EnumerationType
	 */
	public function setSupersededBy(Property\SupersededByProperty $supersededBy) {
		$this->supersededBy = $supersededBy;

		return $this;
	}
}