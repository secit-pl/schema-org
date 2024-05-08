<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.
 * 
 * @method GeoShapeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeoShapeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeoShapeType setDescription(Property\DescriptionProperty $description)
 * @method GeoShapeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeoShapeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeoShapeType setImage(Property\ImageProperty $image)
 * @method GeoShapeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeoShapeType setName(Property\NameProperty $name)
 * @method GeoShapeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeoShapeType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeoShapeType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GeoShapeType setUrl(Property\UrlProperty $url)
 */
class GeoShapeType extends StructuredValueType {

	/**
	 * @var Property\AddressProperty
	 */
	private $address;

	/**
	 * @var Property\AddressCountryProperty
	 */
	private $addressCountry;

	/**
	 * @var Property\BoxProperty
	 */
	private $box;

	/**
	 * @var Property\CircleProperty
	 */
	private $circle;

	/**
	 * @var Property\ElevationProperty
	 */
	private $elevation;

	/**
	 * @var Property\LineProperty
	 */
	private $line;

	/**
	 * @var Property\PolygonProperty
	 */
	private $polygon;

	/**
	 * @var Property\PostalCodeProperty
	 */
	private $postalCode;

	/**
	 * Get address.
	 *
	 * @return Property\AddressProperty
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Get address country.
	 *
	 * @return Property\AddressCountryProperty
	 */
	public function getAddressCountry() {
		return $this->addressCountry;
	}

	/**
	 * Get box.
	 *
	 * @return Property\BoxProperty
	 */
	public function getBox() {
		return $this->box;
	}

	/**
	 * Get circle.
	 *
	 * @return Property\CircleProperty
	 */
	public function getCircle() {
		return $this->circle;
	}

	/**
	 * Get elevation.
	 *
	 * @return Property\ElevationProperty
	 */
	public function getElevation() {
		return $this->elevation;
	}

	/**
	 * Get line.
	 *
	 * @return Property\LineProperty
	 */
	public function getLine() {
		return $this->line;
	}

	/**
	 * Get polygon.
	 *
	 * @return Property\PolygonProperty
	 */
	public function getPolygon() {
		return $this->polygon;
	}

	/**
	 * Get postal code.
	 *
	 * @return Property\PostalCodeProperty
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
	 * @param Property\AddressProperty $address
	 * @return GeoShapeType
	 */
	public function setAddress(Property\AddressProperty $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set address country.
	 *
	 * @param Property\AddressCountryProperty $addressCountry
	 * @return GeoShapeType
	 */
	public function setAddressCountry(Property\AddressCountryProperty $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set box.
	 *
	 * @param Property\BoxProperty $box
	 * @return GeoShapeType
	 */
	public function setBox(Property\BoxProperty $box) {
		$this->box = $box;

		return $this;
	}

	/**
	 * Set circle.
	 *
	 * @param Property\CircleProperty $circle
	 * @return GeoShapeType
	 */
	public function setCircle(Property\CircleProperty $circle) {
		$this->circle = $circle;

		return $this;
	}

	/**
	 * Set elevation.
	 *
	 * @param Property\ElevationProperty $elevation
	 * @return GeoShapeType
	 */
	public function setElevation(Property\ElevationProperty $elevation) {
		$this->elevation = $elevation;

		return $this;
	}

	/**
	 * Set line.
	 *
	 * @param Property\LineProperty $line
	 * @return GeoShapeType
	 */
	public function setLine(Property\LineProperty $line) {
		$this->line = $line;

		return $this;
	}

	/**
	 * Set polygon.
	 *
	 * @param Property\PolygonProperty $polygon
	 * @return GeoShapeType
	 */
	public function setPolygon(Property\PolygonProperty $polygon) {
		$this->polygon = $polygon;

		return $this;
	}

	/**
	 * Set postal code.
	 *
	 * @param Property\PostalCodeProperty $postalCode
	 * @return GeoShapeType
	 */
	public function setPostalCode(Property\PostalCodeProperty $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}
}