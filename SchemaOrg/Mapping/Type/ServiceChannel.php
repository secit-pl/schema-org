<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ServiceChannel.
 * 
 * @method ServiceChannel setAdditionalType(Property\AdditionalType $additionalType)
 * @method ServiceChannel setAlternateName(Property\AlternateName $alternateName)
 * @method ServiceChannel setDescription(Property\Description $description)
 * @method ServiceChannel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ServiceChannel setIdentifier(Property\Identifier $identifier)
 * @method ServiceChannel setImage(Property\Image $image)
 * @method ServiceChannel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ServiceChannel setName(Property\Name $name)
 * @method ServiceChannel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ServiceChannel setSameAs(Property\SameAs $sameAs)
 * @method ServiceChannel setUrl(Property\Url $url)
 */
class ServiceChannel extends Intangible {

	/**
	 * @var Property\AvailableLanguage
	 */
	private $availableLanguage;

	/**
	 * @var Property\ProcessingTime
	 */
	private $processingTime;

	/**
	 * @var Property\ProvidesService
	 */
	private $providesService;

	/**
	 * @var Property\ServiceLocation
	 */
	private $serviceLocation;

	/**
	 * @var Property\ServicePhone
	 */
	private $servicePhone;

	/**
	 * @var Property\ServicePostalAddress
	 */
	private $servicePostalAddress;

	/**
	 * @var Property\ServiceSmsNumber
	 */
	private $serviceSmsNumber;

	/**
	 * @var Property\ServiceUrl
	 */
	private $serviceUrl;

	/**
	 * Get available language.
	 * 
	 * @return Property\AvailableLanguage
	 */
	public function getAvailableLanguage() {
		return $this->availableLanguage;
	}

	/**
	 * Get processing time.
	 * 
	 * @return Property\ProcessingTime
	 */
	public function getProcessingTime() {
		return $this->processingTime;
	}

	/**
	 * Get provides service.
	 * 
	 * @return Property\ProvidesService
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
	 * @return Property\ServiceLocation
	 */
	public function getServiceLocation() {
		return $this->serviceLocation;
	}

	/**
	 * Get service phone.
	 * 
	 * @return Property\ServicePhone
	 */
	public function getServicePhone() {
		return $this->servicePhone;
	}

	/**
	 * Get service postal address.
	 * 
	 * @return Property\ServicePostalAddress
	 */
	public function getServicePostalAddress() {
		return $this->servicePostalAddress;
	}

	/**
	 * Get service sms number.
	 * 
	 * @return Property\ServiceSmsNumber
	 */
	public function getServiceSmsNumber() {
		return $this->serviceSmsNumber;
	}

	/**
	 * Get service url.
	 * 
	 * @return Property\ServiceUrl
	 */
	public function getServiceUrl() {
		return $this->serviceUrl;
	}

	/**
	 * Set available language.
	 * 
	 * @param Property\AvailableLanguage $availableLanguage
	 * @return ServiceChannel
	 */
	public function setAvailableLanguage(Property\AvailableLanguage $availableLanguage) {
		$this->availableLanguage = $availableLanguage;

		return $this;
	}

	/**
	 * Set processing time.
	 * 
	 * @param Property\ProcessingTime $processingTime
	 * @return ServiceChannel
	 */
	public function setProcessingTime(Property\ProcessingTime $processingTime) {
		$this->processingTime = $processingTime;

		return $this;
	}

	/**
	 * Set provides service.
	 * 
	 * @param Property\ProvidesService $providesService
	 * @return ServiceChannel
	 */
	public function setProvidesService(Property\ProvidesService $providesService) {
		$this->providesService = $providesService;

		return $this;
	}

	/**
	 * Set service location.
	 * 
	 * @param Property\ServiceLocation $serviceLocation
	 * @return ServiceChannel
	 */
	public function setServiceLocation(Property\ServiceLocation $serviceLocation) {
		$this->serviceLocation = $serviceLocation;

		return $this;
	}

	/**
	 * Set service phone.
	 * 
	 * @param Property\ServicePhone $servicePhone
	 * @return ServiceChannel
	 */
	public function setServicePhone(Property\ServicePhone $servicePhone) {
		$this->servicePhone = $servicePhone;

		return $this;
	}

	/**
	 * Set service postal address.
	 * 
	 * @param Property\ServicePostalAddress $servicePostalAddress
	 * @return ServiceChannel
	 */
	public function setServicePostalAddress(Property\ServicePostalAddress $servicePostalAddress) {
		$this->servicePostalAddress = $servicePostalAddress;

		return $this;
	}

	/**
	 * Set service sms number.
	 * 
	 * @param Property\ServiceSmsNumber $serviceSmsNumber
	 * @return ServiceChannel
	 */
	public function setServiceSmsNumber(Property\ServiceSmsNumber $serviceSmsNumber) {
		$this->serviceSmsNumber = $serviceSmsNumber;

		return $this;
	}

	/**
	 * Set service url.
	 * 
	 * @param Property\ServiceUrl $serviceUrl
	 * @return ServiceChannel
	 */
	public function setServiceUrl(Property\ServiceUrl $serviceUrl) {
		$this->serviceUrl = $serviceUrl;

		return $this;
	}
}