<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeoCoordinates.
 * 
 * @method GeoCoordinates setAdditionalType(Property\AdditionalType $additionalType)
 * @method GeoCoordinates setAlternateName(Property\AlternateName $alternateName)
 * @method GeoCoordinates setDescription(Property\Description $description)
 * @method GeoCoordinates setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GeoCoordinates setImage(Property\Image $image)
 * @method GeoCoordinates setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GeoCoordinates setName(Property\Name $name)
 * @method GeoCoordinates setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GeoCoordinates setSameAs(Property\SameAs $sameAs)
 * @method GeoCoordinates setUrl(Property\Url $url)
 */
class GeoCoordinates extends StructuredValue {

	/**
	 * @var Property\Address
	 */
	private $address;

	/**
	 * @var Property\AddressCountry
	 */
	private $addressCountry;

	/**
	 * @var Property\Elevation
	 */
	private $elevation;

	/**
	 * @var Property\Latitude
	 */
	private $latitude;

	/**
	 * @var Property\Longitude
	 */
	private $longitude;

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
	 * Get elevation.
	 * 
	 * @return Property\Elevation
	 */
	public function getElevation() {
		return $this->elevation;
	}

	/**
	 * Get latitude.
	 * 
	 * @return Property\Latitude
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Get longitude.
	 * 
	 * @return Property\Longitude
	 */
	public function getLongitude() {
		return $this->longitude;
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
		return 'https://schema.org/GeoCoordinates';
	}

	/**
	 * Set address.
	 * 
	 * @param Property\Address $address
	 * @return GeoCoordinates
	 */
	public function setAddress(Property\Address $address) {
		$this->address = $address;

		return $this;
	}

	/**
	 * Set address country.
	 * 
	 * @param Property\AddressCountry $addressCountry
	 * @return GeoCoordinates
	 */
	public function setAddressCountry(Property\AddressCountry $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set elevation.
	 * 
	 * @param Property\Elevation $elevation
	 * @return GeoCoordinates
	 */
	public function setElevation(Property\Elevation $elevation) {
		$this->elevation = $elevation;

		return $this;
	}

	/**
	 * Set latitude.
	 * 
	 * @param Property\Latitude $latitude
	 * @return GeoCoordinates
	 */
	public function setLatitude(Property\Latitude $latitude) {
		$this->latitude = $latitude;

		return $this;
	}

	/**
	 * Set longitude.
	 * 
	 * @param Property\Longitude $longitude
	 * @return GeoCoordinates
	 */
	public function setLongitude(Property\Longitude $longitude) {
		$this->longitude = $longitude;

		return $this;
	}

	/**
	 * Set postal code.
	 * 
	 * @param Property\PostalCode $postalCode
	 * @return GeoCoordinates
	 */
	public function setPostalCode(Property\PostalCode $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}
}