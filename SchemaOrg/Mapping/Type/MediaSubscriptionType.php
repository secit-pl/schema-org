<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A subscription which allows a user to access media including audio, video, books, etc.
 * 
 * @method MediaSubscriptionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MediaSubscriptionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MediaSubscriptionType setDescription(Property\DescriptionProperty $description)
 * @method MediaSubscriptionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MediaSubscriptionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MediaSubscriptionType setImage(Property\ImageProperty $image)
 * @method MediaSubscriptionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MediaSubscriptionType setName(Property\NameProperty $name)
 * @method MediaSubscriptionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MediaSubscriptionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MediaSubscriptionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MediaSubscriptionType setUrl(Property\UrlProperty $url)
 */
class MediaSubscriptionType extends IntangibleType {

	/**
	 * @var Property\AuthenticatorProperty
	 */
	private $authenticator;

	/**
	 * @var Property\ExpectsAcceptanceOfProperty
	 */
	private $expectsAcceptanceOf;

	/**
	 * Get authenticator.
	 *
	 * @return Property\AuthenticatorProperty
	 */
	public function getAuthenticator() {
		return $this->authenticator;
	}

	/**
	 * Get expects acceptance of.
	 *
	 * @return Property\ExpectsAcceptanceOfProperty
	 */
	public function getExpectsAcceptanceOf() {
		return $this->expectsAcceptanceOf;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MediaSubscription';
	}

	/**
	 * Set authenticator.
	 *
	 * @param Property\AuthenticatorProperty $authenticator
	 * @return MediaSubscriptionType
	 */
	public function setAuthenticator(Property\AuthenticatorProperty $authenticator) {
		$this->authenticator = $authenticator;

		return $this;
	}

	/**
	 * Set expects acceptance of.
	 *
	 * @param Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf
	 * @return MediaSubscriptionType
	 */
	public function setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf) {
		$this->expectsAcceptanceOf = $expectsAcceptanceOf;

		return $this;
	}
}