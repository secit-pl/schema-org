<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A delivery service through which content is provided via broadcast over the air or online.
 * 
 * @method BroadcastServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BroadcastServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BroadcastServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BroadcastServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BroadcastServiceType setAudience(Property\AudienceProperty $audience)
 * @method BroadcastServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method BroadcastServiceType setAward(Property\AwardProperty $award)
 * @method BroadcastServiceType setBrand(Property\BrandProperty $brand)
 * @method BroadcastServiceType setBroker(Property\BrokerProperty $broker)
 * @method BroadcastServiceType setCategory(Property\CategoryProperty $category)
 * @method BroadcastServiceType setDescription(Property\DescriptionProperty $description)
 * @method BroadcastServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BroadcastServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BroadcastServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BroadcastServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method BroadcastServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BroadcastServiceType setImage(Property\ImageProperty $image)
 * @method BroadcastServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method BroadcastServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method BroadcastServiceType setLogo(Property\LogoProperty $logo)
 * @method BroadcastServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BroadcastServiceType setName(Property\NameProperty $name)
 * @method BroadcastServiceType setOffers(Property\OffersProperty $offers)
 * @method BroadcastServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BroadcastServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method BroadcastServiceType setReview(Property\ReviewProperty $review)
 * @method BroadcastServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method BroadcastServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method BroadcastServiceType setSlogan(Property\SloganProperty $slogan)
 * @method BroadcastServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BroadcastServiceType setUrl(Property\UrlProperty $url)
 */
class BroadcastServiceType extends ServiceType {

	/**
	 * @var Property\BroadcastAffiliateOfProperty
	 */
	private $broadcastAffiliateOf;

	/**
	 * @var Property\BroadcastDisplayNameProperty
	 */
	private $broadcastDisplayName;

	/**
	 * @var Property\BroadcasterProperty
	 */
	private $broadcaster;

	/**
	 * @var Property\BroadcastFrequencyProperty
	 */
	private $broadcastFrequency;

	/**
	 * @var Property\BroadcastTimezoneProperty
	 */
	private $broadcastTimezone;

	/**
	 * @var Property\HasBroadcastChannelProperty
	 */
	private $hasBroadcastChannel;

	/**
	 * @var Property\InLanguageProperty
	 */
	private $inLanguage;

	/**
	 * @var Property\ParentServiceProperty
	 */
	private $parentService;

	/**
	 * @var Property\VideoFormatProperty
	 */
	private $videoFormat;

	/**
	 * Get broadcast affiliate of.
	 *
	 * @return Property\BroadcastAffiliateOfProperty
	 */
	public function getBroadcastAffiliateOf() {
		return $this->broadcastAffiliateOf;
	}

	/**
	 * Get broadcast display name.
	 *
	 * @return Property\BroadcastDisplayNameProperty
	 */
	public function getBroadcastDisplayName() {
		return $this->broadcastDisplayName;
	}

	/**
	 * Get broadcaster.
	 *
	 * @return Property\BroadcasterProperty
	 */
	public function getBroadcaster() {
		return $this->broadcaster;
	}

	/**
	 * Get broadcast frequency.
	 *
	 * @return Property\BroadcastFrequencyProperty
	 */
	public function getBroadcastFrequency() {
		return $this->broadcastFrequency;
	}

	/**
	 * Get broadcast timezone.
	 *
	 * @return Property\BroadcastTimezoneProperty
	 */
	public function getBroadcastTimezone() {
		return $this->broadcastTimezone;
	}

	/**
	 * Get has broadcast channel.
	 *
	 * @return Property\HasBroadcastChannelProperty
	 */
	public function getHasBroadcastChannel() {
		return $this->hasBroadcastChannel;
	}

	/**
	 * Get in language.
	 *
	 * @return Property\InLanguageProperty
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get parent service.
	 *
	 * @return Property\ParentServiceProperty
	 */
	public function getParentService() {
		return $this->parentService;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BroadcastService';
	}

	/**
	 * Get video format.
	 *
	 * @return Property\VideoFormatProperty
	 */
	public function getVideoFormat() {
		return $this->videoFormat;
	}

	/**
	 * Set broadcast affiliate of.
	 *
	 * @param Property\BroadcastAffiliateOfProperty $broadcastAffiliateOf
	 * @return BroadcastServiceType
	 */
	public function setBroadcastAffiliateOf(Property\BroadcastAffiliateOfProperty $broadcastAffiliateOf) {
		$this->broadcastAffiliateOf = $broadcastAffiliateOf;

		return $this;
	}

	/**
	 * Set broadcast display name.
	 *
	 * @param Property\BroadcastDisplayNameProperty $broadcastDisplayName
	 * @return BroadcastServiceType
	 */
	public function setBroadcastDisplayName(Property\BroadcastDisplayNameProperty $broadcastDisplayName) {
		$this->broadcastDisplayName = $broadcastDisplayName;

		return $this;
	}

	/**
	 * Set broadcaster.
	 *
	 * @param Property\BroadcasterProperty $broadcaster
	 * @return BroadcastServiceType
	 */
	public function setBroadcaster(Property\BroadcasterProperty $broadcaster) {
		$this->broadcaster = $broadcaster;

		return $this;
	}

	/**
	 * Set broadcast frequency.
	 *
	 * @param Property\BroadcastFrequencyProperty $broadcastFrequency
	 * @return BroadcastServiceType
	 */
	public function setBroadcastFrequency(Property\BroadcastFrequencyProperty $broadcastFrequency) {
		$this->broadcastFrequency = $broadcastFrequency;

		return $this;
	}

	/**
	 * Set broadcast timezone.
	 *
	 * @param Property\BroadcastTimezoneProperty $broadcastTimezone
	 * @return BroadcastServiceType
	 */
	public function setBroadcastTimezone(Property\BroadcastTimezoneProperty $broadcastTimezone) {
		$this->broadcastTimezone = $broadcastTimezone;

		return $this;
	}

	/**
	 * Set has broadcast channel.
	 *
	 * @param Property\HasBroadcastChannelProperty $hasBroadcastChannel
	 * @return BroadcastServiceType
	 */
	public function setHasBroadcastChannel(Property\HasBroadcastChannelProperty $hasBroadcastChannel) {
		$this->hasBroadcastChannel = $hasBroadcastChannel;

		return $this;
	}

	/**
	 * Set in language.
	 *
	 * @param Property\InLanguageProperty $inLanguage
	 * @return BroadcastServiceType
	 */
	public function setInLanguage(Property\InLanguageProperty $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set parent service.
	 *
	 * @param Property\ParentServiceProperty $parentService
	 * @return BroadcastServiceType
	 */
	public function setParentService(Property\ParentServiceProperty $parentService) {
		$this->parentService = $parentService;

		return $this;
	}

	/**
	 * Set video format.
	 *
	 * @param Property\VideoFormatProperty $videoFormat
	 * @return BroadcastServiceType
	 */
	public function setVideoFormat(Property\VideoFormatProperty $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}
}