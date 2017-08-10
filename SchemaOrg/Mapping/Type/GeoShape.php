<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeoShape.
 */
class GeoShape extends StructuredValue {

	/**
	 * @var Property\Address
	 */
	private $address;

	/**
	 * @var Property\AddressCountry
	 */
	private $addressCountry;

	/**
	 * @var Property\Box
	 */
	private $box;

	/**
	 * @var Property\Circle
	 */
	private $circle;

	/**
	 * @var Property\Elevation
	 */
	private $elevation;

	/**
	 * @var Property\Line
	 */
	private $line;

	/**
	 * @var Property\Polygon
	 */
	private $polygon;

	/**
	 * @var Property\PostalCode
	 */
	private $postalCode;

	/**
	 * Get address.
	 * 
	 * @return Property\Address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get address country.
	 * 
	 * @return Property\AddressCountry
	 */
	public function getAddressCountry() {
		return $this->addressCountry;
	}

	/**
	 * Get box.
	 * 
	 * @return Property\Box
	 */
	public function getBox() {
		return $this->box;
	}

	/**
	 * Get circle.
	 * 
	 * @return Property\Circle
	 */
	public function getCircle() {
		return $this->circle;
	}

	/**
	 * Get elevation.
	 * 
	 * @return Property\Elevation
	 */
	public function getElevation() {
		return $this->elevation;
	}

	/**
	 * Get line.
	 * 
	 * @return Property\Line
	 */
	public function getLine() {
		return $this->line;
	}

	/**
	 * Get polygon.
	 * 
	 * @return Property\Polygon
	 */
	public function getPolygon() {
		return $this->polygon;
	}

	/**
	 * Get postal code.
	 * 
	 * @return Property\PostalCode
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GeoShape';
	}

	/**
	 * Set address.
	 * 
	 * @param Property\Address $address
	 * @return GeoShape
	 */
	public function setAddress(Property\Address $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set address country.
	 * 
	 * @param Property\AddressCountry $addressCountry
	 * @return GeoShape
	 */
	public function setAddressCountry(Property\AddressCountry $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set box.
	 * 
	 * @param Property\Box $box
	 * @return GeoShape
	 */
	public function setBox(Property\Box $box) {
		$this->box = $box;

		return $this;
	}

	/**
	 * Set circle.
	 * 
	 * @param Property\Circle $circle
	 * @return GeoShape
	 */
	public function setCircle(Property\Circle $circle) {
		$this->circle = $circle;

		return $this;
	}

	/**
	 * Set elevation.
	 * 
	 * @param Property\Elevation $elevation
	 * @return GeoShape
	 */
	public function setElevation(Property\Elevation $elevation) {
		$this->elevation = $elevation;

		return $this;
	}

	/**
	 * Set line.
	 * 
	 * @param Property\Line $line
	 * @return GeoShape
	 */
	public function setLine(Property\Line $line) {
		$this->line = $line;

		return $this;
	}

	/**
	 * Set polygon.
	 * 
	 * @param Property\Polygon $polygon
	 * @return GeoShape
	 */
	public function setPolygon(Property\Polygon $polygon) {
		$this->polygon = $polygon;

		return $this;
	}

	/**
	 * Set postal code.
	 * 
	 * @param Property\PostalCode $postalCode
	 * @return GeoShape
	 */
	public function setPostalCode(Property\PostalCode $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}
}