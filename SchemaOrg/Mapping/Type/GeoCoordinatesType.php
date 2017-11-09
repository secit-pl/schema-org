<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeoCoordinatesType.
 * 
 * @method GeoCoordinatesType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GeoCoordinatesType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GeoCoordinatesType setDescription(Property\DescriptionProperty $description)
 * @method GeoCoordinatesType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GeoCoordinatesType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GeoCoordinatesType setImage(Property\ImageProperty $image)
 * @method GeoCoordinatesType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GeoCoordinatesType setName(Property\NameProperty $name)
 * @method GeoCoordinatesType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GeoCoordinatesType setSameAs(Property\SameAsProperty $sameAs)
 * @method GeoCoordinatesType setUrl(Property\UrlProperty $url)
 */
class GeoCoordinatesType extends StructuredValueType {

	/**
	 * @var Property\AddressProperty
	 */
	private $address;

	/**
	 * @var Property\AddressCountryProperty
	 */
	private $addressCountry;

	/**
	 * @var Property\ElevationProperty
	 */
	private $elevation;

	/**
	 * @var Property\LatitudeProperty
	 */
	private $latitude;

	/**
	 * @var Property\LongitudeProperty
	 */
	private $longitude;

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
	 * Get elevation.
	 * 
	 * @return Property\ElevationProperty
	 */
	public function getElevation() {
		return $this->elevation;
	}

	/**
	 * Get latitude.
	 * 
	 * @return Property\LatitudeProperty
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Get longitude.
	 * 
	 * @return Property\LongitudeProperty
	 */
	public function getLongitude() {
		return $this->longitude;
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
		return 'https://schema.org/GeoCoordinates';
	}

	/**
	 * Set address.
	 * 
	 * @param Property\AddressProperty $address
	 * @return GeoCoordinatesType
	 */
	public function setAddress(Property\AddressProperty $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set address country.
	 * 
	 * @param Property\AddressCountryProperty $addressCountry
	 * @return GeoCoordinatesType
	 */
	public function setAddressCountry(Property\AddressCountryProperty $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set elevation.
	 * 
	 * @param Property\ElevationProperty $elevation
	 * @return GeoCoordinatesType
	 */
	public function setElevation(Property\ElevationProperty $elevation) {
		$this->elevation = $elevation;

		return $this;
	}

	/**
	 * Set latitude.
	 * 
	 * @param Property\LatitudeProperty $latitude
	 * @return GeoCoordinatesType
	 */
	public function setLatitude(Property\LatitudeProperty $latitude) {
		$this->latitude = $latitude;

		return $this;
	}

	/**
	 * Set longitude.
	 * 
	 * @param Property\LongitudeProperty $longitude
	 * @return GeoCoordinatesType
	 */
	public function setLongitude(Property\LongitudeProperty $longitude) {
		$this->longitude = $longitude;

		return $this;
	}

	/**
	 * Set postal code.
	 * 
	 * @param Property\PostalCodeProperty $postalCode
	 * @return GeoCoordinatesType
	 */
	public function setPostalCode(Property\PostalCodeProperty $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}
}