<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PostalAddress.
 * 
 * @method PostalAddress setAdditionalType(Property\AdditionalType $additionalType)
 * @method PostalAddress setAlternateName(Property\AlternateName $alternateName)
 * @method PostalAddress setAreaServed(Property\AreaServed $areaServed)
 * @method PostalAddress setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method PostalAddress setContactOption(Property\ContactOption $contactOption)
 * @method PostalAddress setContactType(Property\ContactType $contactType)
 * @method PostalAddress setDescription(Property\Description $description)
 * @method PostalAddress setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PostalAddress setEmail(Property\Email $email)
 * @method PostalAddress setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PostalAddress setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method PostalAddress setIdentifier(Property\Identifier $identifier)
 * @method PostalAddress setImage(Property\Image $image)
 * @method PostalAddress setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PostalAddress setName(Property\Name $name)
 * @method PostalAddress setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PostalAddress setProductSupported(Property\ProductSupported $productSupported)
 * @method PostalAddress setSameAs(Property\SameAs $sameAs)
 * @method PostalAddress setTelephone(Property\Telephone $telephone)
 * @method PostalAddress setUrl(Property\Url $url)
 */
class PostalAddress extends ContactPoint {

	/**
	 * @var Property\AddressCountry
	 */
	private $addressCountry;

	/**
	 * @var Property\AddressLocality
	 */
	private $addressLocality;

	/**
	 * @var Property\AddressRegion
	 */
	private $addressRegion;

	/**
	 * @var Property\PostalCode
	 */
	private $postalCode;

	/**
	 * @var Property\PostOfficeBoxNumber
	 */
	private $postOfficeBoxNumber;

	/**
	 * @var Property\StreetAddress
	 */
	private $streetAddress;

	/**
	 * Get address country.
	 * 
	 * @return Property\AddressCountry
	 */
	public function getAddressCountry() {
		return $this->addressCountry;
	}

	/**
	 * Get address locality.
	 * 
	 * @return Property\AddressLocality
	 */
	public function getAddressLocality() {
		return $this->addressLocality;
	}

	/**
	 * Get address region.
	 * 
	 * @return Property\AddressRegion
	 */
	public function getAddressRegion() {
		return $this->addressRegion;
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
	 * Get post office box number.
	 * 
	 * @return Property\PostOfficeBoxNumber
	 */
	public function getPostOfficeBoxNumber() {
		return $this->postOfficeBoxNumber;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PostalAddress';
	}

	/**
	 * Get street address.
	 * 
	 * @return Property\StreetAddress
	 */
	public function getStreetAddress() {
		return $this->streetAddress;
	}

	/**
	 * Set address country.
	 * 
	 * @param Property\AddressCountry $addressCountry
	 * @return PostalAddress
	 */
	public function setAddressCountry(Property\AddressCountry $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set address locality.
	 * 
	 * @param Property\AddressLocality $addressLocality
	 * @return PostalAddress
	 */
	public function setAddressLocality(Property\AddressLocality $addressLocality) {
		$this->addressLocality = $addressLocality;

		return $this;
	}

	/**
	 * Set address region.
	 * 
	 * @param Property\AddressRegion $addressRegion
	 * @return PostalAddress
	 */
	public function setAddressRegion(Property\AddressRegion $addressRegion) {
		$this->addressRegion = $addressRegion;

		return $this;
	}

	/**
	 * Set postal code.
	 * 
	 * @param Property\PostalCode $postalCode
	 * @return PostalAddress
	 */
	public function setPostalCode(Property\PostalCode $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}

	/**
	 * Set post office box number.
	 * 
	 * @param Property\PostOfficeBoxNumber $postOfficeBoxNumber
	 * @return PostalAddress
	 */
	public function setPostOfficeBoxNumber(Property\PostOfficeBoxNumber $postOfficeBoxNumber) {
		$this->postOfficeBoxNumber = $postOfficeBoxNumber;

		return $this;
	}

	/**
	 * Set street address.
	 * 
	 * @param Property\StreetAddress $streetAddress
	 * @return PostalAddress
	 */
	public function setStreetAddress(Property\StreetAddress $streetAddress) {
		$this->streetAddress = $streetAddress;

		return $this;
	}
}