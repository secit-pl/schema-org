<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastServiceType.
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
 * @method BroadcastServiceType setProvider(Property\ProviderProperty $provider)
 * @method BroadcastServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method BroadcastServiceType setReview(Property\ReviewProperty $review)
 * @method BroadcastServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method BroadcastServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method BroadcastServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
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
	 * @var Property\BroadcastTimezoneProperty
	 */
	private $broadcastTimezone;

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
	 * Get broadcast timezone.
	 * 
	 * @return Property\BroadcastTimezoneProperty
	 */
	public function getBroadcastTimezone() {
		return $this->broadcastTimezone;
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