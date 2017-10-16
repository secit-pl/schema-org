<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Audience.
 * 
 * @method Audience setAdditionalType(Property\AdditionalType $additionalType)
 * @method Audience setAlternateName(Property\AlternateName $alternateName)
 * @method Audience setDescription(Property\Description $description)
 * @method Audience setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Audience setIdentifier(Property\Identifier $identifier)
 * @method Audience setImage(Property\Image $image)
 * @method Audience setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Audience setName(Property\Name $name)
 * @method Audience setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Audience setSameAs(Property\SameAs $sameAs)
 * @method Audience setUrl(Property\Url $url)
 */
class Audience extends Intangible {

	/**
	 * @var Property\AudienceType
	 */
	private $audienceType;

	/**
	 * @var Property\GeographicArea
	 */
	private $geographicArea;

	/**
	 * Get audience type.
	 * 
	 * @return Property\AudienceType
	 */
	public function getAudienceType() {
		return $this->audienceType;
	}

	/**
	 * Get geographic area.
	 * 
	 * @return Property\GeographicArea
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
	 * @param Property\AudienceType $audienceType
	 * @return Audience
	 */
	public function setAudienceType(Property\AudienceType $audienceType) {
		$this->audienceType = $audienceType;

		return $this;
	}

	/**
	 * Set geographic area.
	 * 
	 * @param Property\GeographicArea $geographicArea
	 * @return Audience
	 */
	public function setGeographicArea(Property\GeographicArea $geographicArea) {
		$this->geographicArea = $geographicArea;

		return $this;
	}
}