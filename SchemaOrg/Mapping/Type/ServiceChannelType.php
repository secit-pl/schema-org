<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ServiceChannelType.
 * 
 * @method ServiceChannelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ServiceChannelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ServiceChannelType setDescription(Property\DescriptionProperty $description)
 * @method ServiceChannelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ServiceChannelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ServiceChannelType setImage(Property\ImageProperty $image)
 * @method ServiceChannelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ServiceChannelType setName(Property\NameProperty $name)
 * @method ServiceChannelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ServiceChannelType setSameAs(Property\SameAsProperty $sameAs)
 * @method ServiceChannelType setUrl(Property\UrlProperty $url)
 */
class ServiceChannelType extends IntangibleType {

	/**
	 * @var Property\AvailableLanguageProperty
	 */
	private $availableLanguage;

	/**
	 * @var Property\ProcessingTimeProperty
	 */
	private $processingTime;

	/**
	 * @var Property\ProvidesServiceProperty
	 */
	private $providesService;

	/**
	 * @var Property\ServiceLocationProperty
	 */
	private $serviceLocation;

	/**
	 * @var Property\ServicePhoneProperty
	 */
	private $servicePhone;

	/**
	 * @var Property\ServicePostalAddressProperty
	 */
	private $servicePostalAddress;

	/**
	 * @var Property\ServiceSmsNumberProperty
	 */
	private $serviceSmsNumber;

	/**
	 * @var Property\ServiceUrlProperty
	 */
	private $serviceUrl;

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguageProperty
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get processing time.
	 * 
	 * @return Property\ProcessingTimeProperty
	 */
	public function getProcessingTime() {
		return $this->processingTime;
	}

	/**
	 * Get provides service.
	 * 
	 * @return Property\ProvidesServiceProperty
	 */
	public function getProvidesService() {
		return $this->providesService;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ServiceChannel';
	}

	/**
	 * Get service location.
	 * 
	 * @return Property\ServiceLocationProperty
	 */
	public function getServiceLocation() {
		return $this->serviceLocation;
	}

	/**
	 * Get service phone.
	 * 
	 * @return Property\ServicePhoneProperty
	 */
	public function getServicePhone() {
		return $this->servicePhone;
	}

	/**
	 * Get service postal address.
	 * 
	 * @return Property\ServicePostalAddressProperty
	 */
	public function getServicePostalAddress() {
		return $this->servicePostalAddress;
	}

	/**
	 * Get service sms number.
	 * 
	 * @return Property\ServiceSmsNumberProperty
	 */
	public function getServiceSmsNumber() {
		return $this->serviceSmsNumber;
	}

	/**
	 * Get service url.
	 * 
	 * @return Property\ServiceUrlProperty
	 */
	public function getServiceUrl() {
		return $this->serviceUrl;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguageProperty $availableLanguage
	 * @return ServiceChannelType
	 */
	public function setAvailableLanguage(Property\AvailableLanguageProperty $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set processing time.
	 * 
	 * @param Property\ProcessingTimeProperty $processingTime
	 * @return ServiceChannelType
	 */
	public function setProcessingTime(Property\ProcessingTimeProperty $processingTime) {
		$this->processingTime = $processingTime;

		return $this;
	}

	/**
	 * Set provides service.
	 * 
	 * @param Property\ProvidesServiceProperty $providesService
	 * @return ServiceChannelType
	 */
	public function setProvidesService(Property\ProvidesServiceProperty $providesService) {
		$this->providesService = $providesService;

		return $this;
	}

	/**
	 * Set service location.
	 * 
	 * @param Property\ServiceLocationProperty $serviceLocation
	 * @return ServiceChannelType
	 */
	public function setServiceLocation(Property\ServiceLocationProperty $serviceLocation) {
		$this->serviceLocation = $serviceLocation;

		return $this;
	}

	/**
	 * Set service phone.
	 * 
	 * @param Property\ServicePhoneProperty $servicePhone
	 * @return ServiceChannelType
	 */
	public function setServicePhone(Property\ServicePhoneProperty $servicePhone) {
		$this->servicePhone = $servicePhone;

		return $this;
	}

	/**
	 * Set service postal address.
	 * 
	 * @param Property\ServicePostalAddressProperty $servicePostalAddress
	 * @return ServiceChannelType
	 */
	public function setServicePostalAddress(Property\ServicePostalAddressProperty $servicePostalAddress) {
		$this->servicePostalAddress = $servicePostalAddress;

		return $this;
	}

	/**
	 * Set service sms number.
	 * 
	 * @param Property\ServiceSmsNumberProperty $serviceSmsNumber
	 * @return ServiceChannelType
	 */
	public function setServiceSmsNumber(Property\ServiceSmsNumberProperty $serviceSmsNumber) {
		$this->serviceSmsNumber = $serviceSmsNumber;

		return $this;
	}

	/**
	 * Set service url.
	 * 
	 * @param Property\ServiceUrlProperty $serviceUrl
	 * @return ServiceChannelType
	 */
	public function setServiceUrl(Property\ServiceUrlProperty $serviceUrl) {
		$this->serviceUrl = $serviceUrl;

		return $this;
	}
}