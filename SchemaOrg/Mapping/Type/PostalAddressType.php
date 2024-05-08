<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The mailing address.
 * 
 * @method PostalAddressType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PostalAddressType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PostalAddressType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PostalAddressType setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage)
 * @method PostalAddressType setContactOption(Property\ContactOptionProperty $contactOption)
 * @method PostalAddressType setContactType(Property\ContactTypeProperty $contactType)
 * @method PostalAddressType setDescription(Property\DescriptionProperty $description)
 * @method PostalAddressType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PostalAddressType setEmail(Property\EmailProperty $email)
 * @method PostalAddressType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PostalAddressType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method PostalAddressType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PostalAddressType setImage(Property\ImageProperty $image)
 * @method PostalAddressType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PostalAddressType setName(Property\NameProperty $name)
 * @method PostalAddressType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PostalAddressType setProductSupported(Property\ProductSupportedProperty $productSupported)
 * @method PostalAddressType setSameAs(Property\SameAsProperty $sameAs)
 * @method PostalAddressType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PostalAddressType setTelephone(Property\TelephoneProperty $telephone)
 * @method PostalAddressType setUrl(Property\UrlProperty $url)
 */
class PostalAddressType extends ContactPointType {

	/**
	 * @var Property\AddressCountryProperty
	 */
	private $addressCountry;

	/**
	 * @var Property\AddressLocalityProperty
	 */
	private $addressLocality;

	/**
	 * @var Property\AddressRegionProperty
	 */
	private $addressRegion;

	/**
	 * @var Property\PostalCodeProperty
	 */
	private $postalCode;

	/**
	 * @var Property\PostOfficeBoxNumberProperty
	 */
	private $postOfficeBoxNumber;

	/**
	 * @var Property\StreetAddressProperty
	 */
	private $streetAddress;

	/**
	 * Get address country.
	 *
	 * @return Property\AddressCountryProperty
	 */
	public function getAddressCountry() {
		return $this->addressCountry;
	}

	/**
	 * Get address locality.
	 *
	 * @return Property\AddressLocalityProperty
	 */
	public function getAddressLocality() {
		return $this->addressLocality;
	}

	/**
	 * Get address region.
	 *
	 * @return Property\AddressRegionProperty
	 */
	public function getAddressRegion() {
		return $this->addressRegion;
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
	 * Get post office box number.
	 *
	 * @return Property\PostOfficeBoxNumberProperty
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
	 * @return Property\StreetAddressProperty
	 */
	public function getStreetAddress() {
		return $this->streetAddress;
	}

	/**
	 * Set address country.
	 *
	 * @param Property\AddressCountryProperty $addressCountry
	 * @return PostalAddressType
	 */
	public function setAddressCountry(Property\AddressCountryProperty $addressCountry) {
		$this->addressCountry = $addressCountry;

		return $this;
	}

	/**
	 * Set address locality.
	 *
	 * @param Property\AddressLocalityProperty $addressLocality
	 * @return PostalAddressType
	 */
	public function setAddressLocality(Property\AddressLocalityProperty $addressLocality) {
		$this->addressLocality = $addressLocality;

		return $this;
	}

	/**
	 * Set address region.
	 *
	 * @param Property\AddressRegionProperty $addressRegion
	 * @return PostalAddressType
	 */
	public function setAddressRegion(Property\AddressRegionProperty $addressRegion) {
		$this->addressRegion = $addressRegion;

		return $this;
	}

	/**
	 * Set postal code.
	 *
	 * @param Property\PostalCodeProperty $postalCode
	 * @return PostalAddressType
	 */
	public function setPostalCode(Property\PostalCodeProperty $postalCode) {
		$this->postalCode = $postalCode;

		return $this;
	}

	/**
	 * Set post office box number.
	 *
	 * @param Property\PostOfficeBoxNumberProperty $postOfficeBoxNumber
	 * @return PostalAddressType
	 */
	public function setPostOfficeBoxNumber(Property\PostOfficeBoxNumberProperty $postOfficeBoxNumber) {
		$this->postOfficeBoxNumber = $postOfficeBoxNumber;

		return $this;
	}

	/**
	 * Set street address.
	 *
	 * @param Property\StreetAddressProperty $streetAddress
	 * @return PostalAddressType
	 */
	public function setStreetAddress(Property\StreetAddressProperty $streetAddress) {
		$this->streetAddress = $streetAddress;

		return $this;
	}
}