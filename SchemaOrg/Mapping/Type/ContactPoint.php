<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ContactPoint.
 */
class ContactPoint extends StructuredValue {

	/**
	 * @var Property\AreaServed
	 */
	private $areaServed;

	/**
	 * @var Property\AvailableLanguage
	 */
	private $availableLanguage;

	/**
	 * @var Property\ContactOption
	 */
	private $contactOption;

	/**
	 * @var Property\ContactType
	 */
	private $contactType;

	/**
	 * @var Property\Email
	 */
	private $email;

	/**
	 * @var Property\FaxNumber
	 */
	private $faxNumber;

	/**
	 * @var Property\HoursAvailable
	 */
	private $hoursAvailable;

	/**
	 * @var Property\ProductSupported
	 */
	private $productSupported;

	/**
	 * @var Property\Telephone
	 */
	private $telephone;

	/**
	 * Get area served.
	 * 
	 * @return Property\AreaServed
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguage
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get contact option.
	 * 
	 * @return Property\ContactOption
	 */
	public function getContactOption() {
		return $this->contactOption;
	}

	/**
	 * Get contact type.
	 * 
	 * @return Property\ContactType
	 */
	public function getContactType() {
		return $this->contactType;
	}

	/**
	 * Get email.
	 * 
	 * @return Property\Email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get fax number.
	 * 
	 * @return Property\FaxNumber
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get hours available.
	 * 
	 * @return Property\HoursAvailable
	 */
	public function getHoursAvailable() {
		return $this->hoursAvailable;
	}

	/**
	 * Get product supported.
	 * 
	 * @return Property\ProductSupported
	 */
	public function getProductSupported() {
		return $this->productSupported;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ContactPoint';
	}

	/**
	 * Get telephone.
	 * 
	 * @return Property\Telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return ContactPoint
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguage $availableLanguage
	 * @return ContactPoint
	 */
	public function setAvailableLanguage(Property\AvailableLanguage $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set contact option.
	 * 
	 * @param Property\ContactOption $contactOption
	 * @return ContactPoint
	 */
	public function setContactOption(Property\ContactOption $contactOption) {
		$this->contactOption = $contactOption;

		return $this;
	}

	/**
	 * Set contact type.
	 * 
	 * @param Property\ContactType $contactType
	 * @return ContactPoint
	 */
	public function setContactType(Property\ContactType $contactType) {
		$this->contactType = $contactType;

		return $this;
	}

	/**
	 * Set email.
	 * 
	 * @param Property\Email $email
	 * @return ContactPoint
	 */
	public function setEmail(Property\Email $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set fax number.
	 * 
	 * @param Property\FaxNumber $faxNumber
	 * @return ContactPoint
	 */
	public function setFaxNumber(Property\FaxNumber $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set hours available.
	 * 
	 * @param Property\HoursAvailable $hoursAvailable
	 * @return ContactPoint
	 */
	public function setHoursAvailable(Property\HoursAvailable $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set product supported.
	 * 
	 * @param Property\ProductSupported $productSupported
	 * @return ContactPoint
	 */
	public function setProductSupported(Property\ProductSupported $productSupported) {
		$this->productSupported = $productSupported;

		return $this;
	}

	/**
	 * Set telephone.
	 * 
	 * @param Property\Telephone $telephone
	 * @return ContactPoint
	 */
	public function setTelephone(Property\Telephone $telephone) {
		$this->telephone = $telephone;

		return $this;
	}
}