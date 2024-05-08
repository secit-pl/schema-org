<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An entry point, within some Web-based protocol.
 * 
 * @method EntryPointType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method EntryPointType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method EntryPointType setDescription(Property\DescriptionProperty $description)
 * @method EntryPointType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method EntryPointType setIdentifier(Property\IdentifierProperty $identifier)
 * @method EntryPointType setImage(Property\ImageProperty $image)
 * @method EntryPointType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method EntryPointType setName(Property\NameProperty $name)
 * @method EntryPointType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method EntryPointType setSameAs(Property\SameAsProperty $sameAs)
 * @method EntryPointType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method EntryPointType setUrl(Property\UrlProperty $url)
 */
class EntryPointType extends IntangibleType {

	/**
	 * @var Property\ActionApplicationProperty
	 */
	private $actionApplication;

	/**
	 * @var Property\ActionPlatformProperty
	 */
	private $actionPlatform;

	/**
	 * @var Property\ContentTypeProperty
	 */
	private $contentType;

	/**
	 * @var Property\EncodingTypeProperty
	 */
	private $encodingType;

	/**
	 * @var Property\HttpMethodProperty
	 */
	private $httpMethod;

	/**
	 * @var Property\UrlTemplateProperty
	 */
	private $urlTemplate;

	/**
	 * Get action application.
	 *
	 * @return Property\ActionApplicationProperty
	 */
	public function getActionApplication() {
		return $this->actionApplication;
	}

	/**
	 * Get action platform.
	 *
	 * @return Property\ActionPlatformProperty
	 */
	public function getActionPlatform() {
		return $this->actionPlatform;
	}

	/**
	 * Get content type.
	 *
	 * @return Property\ContentTypeProperty
	 */
	public function getContentType() {
		return $this->contentType;
	}

	/**
	 * Get encoding type.
	 *
	 * @return Property\EncodingTypeProperty
	 */
	public function getEncodingType() {
		return $this->encodingType;
	}

	/**
	 * Get http method.
	 *
	 * @return Property\HttpMethodProperty
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
	 * @return Property\UrlTemplateProperty
	 */
	public function getUrlTemplate() {
		return $this->urlTemplate;
	}

	/**
	 * Set action application.
	 *
	 * @param Property\ActionApplicationProperty $actionApplication
	 * @return EntryPointType
	 */
	public function setActionApplication(Property\ActionApplicationProperty $actionApplication) {
		$this->actionApplication = $actionApplication;

		return $this;
	}

	/**
	 * Set action platform.
	 *
	 * @param Property\ActionPlatformProperty $actionPlatform
	 * @return EntryPointType
	 */
	public function setActionPlatform(Property\ActionPlatformProperty $actionPlatform) {
		$this->actionPlatform = $actionPlatform;

		return $this;
	}

	/**
	 * Set content type.
	 *
	 * @param Property\ContentTypeProperty $contentType
	 * @return EntryPointType
	 */
	public function setContentType(Property\ContentTypeProperty $contentType) {
		$this->contentType = $contentType;

		return $this;
	}

	/**
	 * Set encoding type.
	 *
	 * @param Property\EncodingTypeProperty $encodingType
	 * @return EntryPointType
	 */
	public function setEncodingType(Property\EncodingTypeProperty $encodingType) {
		$this->encodingType = $encodingType;

		return $this;
	}

	/**
	 * Set http method.
	 *
	 * @param Property\HttpMethodProperty $httpMethod
	 * @return EntryPointType
	 */
	public function setHttpMethod(Property\HttpMethodProperty $httpMethod) {
		$this->httpMethod = $httpMethod;

		return $this;
	}

	/**
	 * Set url template.
	 *
	 * @param Property\UrlTemplateProperty $urlTemplate
	 * @return EntryPointType
	 */
	public function setUrlTemplate(Property\UrlTemplateProperty $urlTemplate) {
		$this->urlTemplate = $urlTemplate;

		return $this;
	}
}