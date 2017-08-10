<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EntryPoint.
 */
class EntryPoint extends Intangible {

	/**
	 * @var Property\ActionApplication
	 */
	private $actionApplication;

	/**
	 * @var Property\ActionPlatform
	 */
	private $actionPlatform;

	/**
	 * @var Property\ContentType
	 */
	private $contentType;

	/**
	 * @var Property\EncodingType
	 */
	private $encodingType;

	/**
	 * @var Property\HttpMethod
	 */
	private $httpMethod;

	/**
	 * @var Property\UrlTemplate
	 */
	private $urlTemplate;

	/**
	 * Get action application.
	 * 
	 * @return Property\ActionApplication
	 */
	public function getActionApplication() {
		return $this->actionApplication;
	}

	/**
	 * Get action platform.
	 * 
	 * @return Property\ActionPlatform
	 */
	public function getActionPlatform() {
		return $this->actionPlatform;
	}

	/**
	 * Get content type.
	 * 
	 * @return Property\ContentType
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Get encoding type.
	 * 
	 * @return Property\EncodingType
	 */
	public function getEncodingType() {
		return $this->encodingType;
	}

	/**
	 * Get http method.
	 * 
	 * @return Property\HttpMethod
	 */
	public function getHttpMethod() {
		return $this->httpMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EntryPoint';
	}

	/**
	 * Get url template.
	 * 
	 * @return Property\UrlTemplate
	 */
	public function getUrlTemplate() {
		return $this->urlTemplate;
	}

	/**
	 * Set action application.
	 * 
	 * @param Property\ActionApplication $actionApplication
	 * @return EntryPoint
	 */
	public function setActionApplication(Property\ActionApplication $actionApplication) {
		$this->actionApplication = $actionApplication;

		return $this;
	}

	/**
	 * Set action platform.
	 * 
	 * @param Property\ActionPlatform $actionPlatform
	 * @return EntryPoint
	 */
	public function setActionPlatform(Property\ActionPlatform $actionPlatform) {
		$this->actionPlatform = $actionPlatform;

		return $this;
	}

	/**
	 * Set content type.
	 * 
	 * @param Property\ContentType $contentType
	 * @return EntryPoint
	 */
	public function setContentType(Property\ContentType $contentType) {
		$this->contentType = $contentType;

		return $this;
	}

	/**
	 * Set encoding type.
	 * 
	 * @param Property\EncodingType $encodingType
	 * @return EntryPoint
	 */
	public function setEncodingType(Property\EncodingType $encodingType) {
		$this->encodingType = $encodingType;

		return $this;
	}

	/**
	 * Set http method.
	 * 
	 * @param Property\HttpMethod $httpMethod
	 * @return EntryPoint
	 */
	public function setHttpMethod(Property\HttpMethod $httpMethod) {
		$this->httpMethod = $httpMethod;

		return $this;
	}

	/**
	 * Set url template.
	 * 
	 * @param Property\UrlTemplate $urlTemplate
	 * @return EntryPoint
	 */
	public function setUrlTemplate(Property\UrlTemplate $urlTemplate) {
		$this->urlTemplate = $urlTemplate;

		return $this;
	}
}