<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A contact point—for example, a Customer Complaints department.
 * 
 * @method ContactPointType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ContactPointType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ContactPointType setDescription(Property\DescriptionProperty $description)
 * @method ContactPointType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ContactPointType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ContactPointType setImage(Property\ImageProperty $image)
 * @method ContactPointType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ContactPointType setName(Property\NameProperty $name)
 * @method ContactPointType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ContactPointType setSameAs(Property\SameAsProperty $sameAs)
 * @method ContactPointType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ContactPointType setUrl(Property\UrlProperty $url)
 */
class ContactPointType extends StructuredValueType {

	/**
	 * @var Property\AreaServedProperty
	 */
	private $areaServed;

	/**
	 * @var Property\AvailableLanguageProperty
	 */
	private $availableLanguage;

	/**
	 * @var Property\ContactOptionProperty
	 */
	private $contactOption;

	/**
	 * @var Property\ContactTypeProperty
	 */
	private $contactType;

	/**
	 * @var Property\EmailProperty
	 */
	private $email;

	/**
	 * @var Property\FaxNumberProperty
	 */
	private $faxNumber;

	/**
	 * @var Property\HoursAvailableProperty
	 */
	private $hoursAvailable;

	/**
	 * @var Property\ProductSupportedProperty
	 */
	private $productSupported;

	/**
	 * @var Property\TelephoneProperty
	 */
	private $telephone;

	/**
	 * Get area served.
	 *
	 * @return Property\AreaServedProperty
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get available language.
	 *
	 * @return Property\AvailableLanguageProperty
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get contact option.
	 *
	 * @return Property\ContactOptionProperty
	 */
	public function getContactOption() {
		return $this->contactOption;
	}

	/**
	 * Get contact type.
	 *
	 * @return Property\ContactTypeProperty
	 */
	public function getContactType() {
		return $this->contactType;
	}

	/**
	 * Get email.
	 *
	 * @return Property\EmailProperty
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Get fax number.
	 *
	 * @return Property\FaxNumberProperty
	 */
	public function getFaxNumber() {
		return $this->faxNumber;
	}

	/**
	 * Get hours available.
	 *
	 * @return Property\HoursAvailableProperty
	 */
	public function getHoursAvailable() {
		return $this->hoursAvailable;
	}

	/**
	 * Get product supported.
	 *
	 * @return Property\ProductSupportedProperty
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
	 * @return Property\TelephoneProperty
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Set area served.
	 *
	 * @param Property\AreaServedProperty $areaServed
	 * @return ContactPointType
	 */
	public function setAreaServed(Property\AreaServedProperty $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set available language.
	 *
	 * @param Property\AvailableLanguageProperty $availableLanguage
	 * @return ContactPointType
	 */
	public function setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set contact option.
	 *
	 * @param Property\ContactOptionProperty $contactOption
	 * @return ContactPointType
	 */
	public function setContactOption(Property\ContactOptionProperty $contactOption) {
		$this->contactOption = $contactOption;

		return $this;
	}

	/**
	 * Set contact type.
	 *
	 * @param Property\ContactTypeProperty $contactType
	 * @return ContactPointType
	 */
	public function setContactType(Property\ContactTypeProperty $contactType) {
		$this->contactType = $contactType;

		return $this;
	}

	/**
	 * Set email.
	 *
	 * @param Property\EmailProperty $email
	 * @return ContactPointType
	 */
	public function setEmail(Property\EmailProperty $email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Set fax number.
	 *
	 * @param Property\FaxNumberProperty $faxNumber
	 * @return ContactPointType
	 */
	public function setFaxNumber(Property\FaxNumberProperty $faxNumber) {
		$this->faxNumber = $faxNumber;

		return $this;
	}

	/**
	 * Set hours available.
	 *
	 * @param Property\HoursAvailableProperty $hoursAvailable
	 * @return ContactPointType
	 */
	public function setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set product supported.
	 *
	 * @param Property\ProductSupportedProperty $productSupported
	 * @return ContactPointType
	 */
	public function setProductSupported(Property\ProductSupportedProperty $productSupported) {
		$this->productSupported = $productSupported;

		return $this;
	}

	/**
	 * Set telephone.
	 *
	 * @param Property\TelephoneProperty $telephone
	 * @return ContactPointType
	 */
	public function setTelephone(Property\TelephoneProperty $telephone) {
		$this->telephone = $telephone;

		return $this;
	}
}