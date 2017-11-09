<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeoCircleType.
 * 
 * @method GeoCircleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeoCircleType setAddress(Property\AddressProperty $address)
 * @method GeoCircleType setAddressCountry(Property\AddressCountryProperty $addressCountry)
 * @method GeoCircleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeoCircleType setBox(Property\BoxProperty $box)
 * @method GeoCircleType setCircle(Property\CircleProperty $circle)
 * @method GeoCircleType setDescription(Property\DescriptionProperty $description)
 * @method GeoCircleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeoCircleType setElevation(Property\ElevationProperty $elevation)
 * @method GeoCircleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeoCircleType setImage(Property\ImageProperty $image)
 * @method GeoCircleType setLine(Property\LineProperty $line)
 * @method GeoCircleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeoCircleType setName(Property\NameProperty $name)
 * @method GeoCircleType setPolygon(Property\PolygonProperty $polygon)
 * @method GeoCircleType setPostalCode(Property\PostalCodeProperty $postalCode)
 * @method GeoCircleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeoCircleType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeoCircleType setUrl(Property\UrlProperty $url)
 */
class GeoCircleType extends GeoShapeType {

	/**
	 * @var Property\GeoMidpointProperty
	 */
	private $geoMidpoint;

	/**
	 * @var Property\GeoRadiusProperty
	 */
	private $geoRadius;

	/**
	 * Get geo midpoint.
	 * 
	 * @return Property\GeoMidpointProperty
	 */
	public function getGeoMidpoint() {
		return $this->geoMidpoint;
	}

	/**
	 * Get geo radius.
	 * 
	 * @return Property\GeoRadiusProperty
	 */
	public function getGeoRadius() {
		return $this->geoRadius;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GeoCircle';
	}

	/**
	 * Set geo midpoint.
	 * 
	 * @param Property\GeoMidpointProperty $geoMidpoint
	 * @return GeoCircleType
	 */
	public function setGeoMidpoint(Property\GeoMidpointProperty $geoMidpoint) {
		$this->geoMidpoint = $geoMidpoint;

		return $this;
	}

	/**
	 * Set geo radius.
	 * 
	 * @param Property\GeoRadiusProperty $geoRadius
	 * @return GeoCircleType
	 */
	public function setGeoRadius(Property\GeoRadiusProperty $geoRadius) {
		$this->geoRadius = $geoRadius;

		return $this;
	}
}