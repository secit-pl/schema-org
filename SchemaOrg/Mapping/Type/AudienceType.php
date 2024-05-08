<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 * 
 * @method AudienceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AudienceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AudienceType setDescription(Property\DescriptionProperty $description)
 * @method AudienceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AudienceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AudienceType setImage(Property\ImageProperty $image)
 * @method AudienceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AudienceType setName(Property\NameProperty $name)
 * @method AudienceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AudienceType setSameAs(Property\SameAsProperty $sameAs)
 * @method AudienceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AudienceType setUrl(Property\UrlProperty $url)
 */
class AudienceType extends IntangibleType {

	/**
	 * @var Property\AudienceTypeProperty
	 */
	private $audienceType;

	/**
	 * @var Property\GeographicAreaProperty
	 */
	private $geographicArea;

	/**
	 * Get audience type.
	 *
	 * @return Property\AudienceTypeProperty
	 */
	public function getAudienceType() {
		return $this->audienceType;
	}

	/**
	 * Get geographic area.
	 *
	 * @return Property\GeographicAreaProperty
	 */
	public function getGeographicArea() {
		return $this->geographicArea;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Audience';
	}

	/**
	 * Set audience type.
	 *
	 * @param Property\AudienceTypeProperty $audienceType
	 * @return AudienceType
	 */
	public function setAudienceType(Property\AudienceTypeProperty $audienceType) {
		$this->audienceType = $audienceType;

		return $this;
	}

	/**
	 * Set geographic area.
	 *
	 * @param Property\GeographicAreaProperty $geographicArea
	 * @return AudienceType
	 */
	public function setGeographicArea(Property\GeographicAreaProperty $geographicArea) {
		$this->geographicArea = $geographicArea;

		return $this;
	}
}