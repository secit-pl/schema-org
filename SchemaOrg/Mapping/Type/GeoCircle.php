<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeoCircle.
 * 
 * @method GeoCircle setAddress(Property\Address $address)
 * @method GeoCircle setAddressCountry(Property\AddressCountry $addressCountry)
 * @method GeoCircle setBox(Property\Box $box)
 * @method GeoCircle setCircle(Property\Circle $circle)
 * @method GeoCircle setElevation(Property\Elevation $elevation)
 * @method GeoCircle setLine(Property\Line $line)
 * @method GeoCircle setPolygon(Property\Polygon $polygon)
 * @method GeoCircle setPostalCode(Property\PostalCode $postalCode)
 */
class GeoCircle extends GeoShape {

	/**
	 * @var Property\GeoMidpoint
	 */
	private $geoMidpoint;

	/**
	 * @var Property\GeoRadius
	 */
	private $geoRadius;

	/**
	 * Get geo midpoint.
	 * 
	 * @return Property\GeoMidpoint
	 */
	public function getGeoMidpoint() {
		return $this->geoMidpoint;
	}

	/**
	 * Get geo radius.
	 * 
	 * @return Property\GeoRadius
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
	 * @param Property\GeoMidpoint $geoMidpoint
	 * @return GeoCircle
	 */
	public function setGeoMidpoint(Property\GeoMidpoint $geoMidpoint) {
		$this->geoMidpoint = $geoMidpoint;

		return $this;
	}

	/**
	 * Set geo radius.
	 * 
	 * @param Property\GeoRadius $geoRadius
	 * @return GeoCircle
	 */
	public function setGeoRadius(Property\GeoRadius $geoRadius) {
		$this->geoRadius = $geoRadius;

		return $this;
	}
}