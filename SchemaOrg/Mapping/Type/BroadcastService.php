<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BroadcastService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BroadcastServiceType instead.
 * 
 * @method BroadcastService setAdditionalType(Property\AdditionalType $additionalType)
 * @method BroadcastService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BroadcastService setAlternateName(Property\AlternateName $alternateName)
 * @method BroadcastService setAreaServed(Property\AreaServed $areaServed)
 * @method BroadcastService setAudience(Property\Audience $audience)
 * @method BroadcastService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method BroadcastService setAward(Property\Award $award)
 * @method BroadcastService setBrand(Property\Brand $brand)
 * @method BroadcastService setBroker(Property\Broker $broker)
 * @method BroadcastService setCategory(Property\Category $category)
 * @method BroadcastService setDescription(Property\Description $description)
 * @method BroadcastService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BroadcastService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BroadcastService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method BroadcastService setIdentifier(Property\Identifier $identifier)
 * @method BroadcastService setImage(Property\Image $image)
 * @method BroadcastService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method BroadcastService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method BroadcastService setLogo(Property\Logo $logo)
 * @method BroadcastService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BroadcastService setName(Property\Name $name)
 * @method BroadcastService setOffers(Property\Offers $offers)
 * @method BroadcastService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BroadcastService setProvider(Property\Provider $provider)
 * @method BroadcastService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method BroadcastService setReview(Property\Review $review)
 * @method BroadcastService setSameAs(Property\SameAs $sameAs)
 * @method BroadcastService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method BroadcastService setServiceType(Property\ServiceType $serviceType)
 * @method BroadcastService setUrl(Property\Url $url)
 */
class BroadcastService extends Service {

	/**
	 * @var Property\BroadcastAffiliateOf
	 */
	private $broadcastAffiliateOf;

	/**
	 * @var Property\BroadcastDisplayName
	 */
	private $broadcastDisplayName;

	/**
	 * @var Property\Broadcaster
	 */
	private $broadcaster;

	/**
	 * @var Property\BroadcastTimezone
	 */
	private $broadcastTimezone;

	/**
	 * @var Property\ParentService
	 */
	private $parentService;

	/**
	 * @var Property\VideoFormat
	 */
	private $videoFormat;

	/**
	 * Get broadcast affiliate of.
	 * 
	 * @return Property\BroadcastAffiliateOf
	 */
	public function getBroadcastAffiliateOf() {
		return $this->broadcastAffiliateOf;
	}

	/**
	 * Get broadcast display name.
	 * 
	 * @return Property\BroadcastDisplayName
	 */
	public function getBroadcastDisplayName() {
		return $this->broadcastDisplayName;
	}

	/**
	 * Get broadcaster.
	 * 
	 * @return Property\Broadcaster
	 */
	public function getBroadcaster() {
		return $this->broadcaster;
	}

	/**
	 * Get broadcast timezone.
	 * 
	 * @return Property\BroadcastTimezone
	 */
	public function getBroadcastTimezone() {
		return $this->broadcastTimezone;
	}

	/**
	 * Get parent service.
	 * 
	 * @return Property\ParentService
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
	 * @return Property\VideoFormat
	 */
	public function getVideoFormat() {
		return $this->videoFormat;
	}

	/**
	 * Set broadcast affiliate of.
	 * 
	 * @param Property\BroadcastAffiliateOf $broadcastAffiliateOf
	 * @return BroadcastService
	 */
	public function setBroadcastAffiliateOf(Property\BroadcastAffiliateOf $broadcastAffiliateOf) {
		$this->broadcastAffiliateOf = $broadcastAffiliateOf;

		return $this;
	}

	/**
	 * Set broadcast display name.
	 * 
	 * @param Property\BroadcastDisplayName $broadcastDisplayName
	 * @return BroadcastService
	 */
	public function setBroadcastDisplayName(Property\BroadcastDisplayName $broadcastDisplayName) {
		$this->broadcastDisplayName = $broadcastDisplayName;

		return $this;
	}

	/**
	 * Set broadcaster.
	 * 
	 * @param Property\Broadcaster $broadcaster
	 * @return BroadcastService
	 */
	public function setBroadcaster(Property\Broadcaster $broadcaster) {
		$this->broadcaster = $broadcaster;

		return $this;
	}

	/**
	 * Set broadcast timezone.
	 * 
	 * @param Property\BroadcastTimezone $broadcastTimezone
	 * @return BroadcastService
	 */
	public function setBroadcastTimezone(Property\BroadcastTimezone $broadcastTimezone) {
		$this->broadcastTimezone = $broadcastTimezone;

		return $this;
	}

	/**
	 * Set parent service.
	 * 
	 * @param Property\ParentService $parentService
	 * @return BroadcastService
	 */
	public function setParentService(Property\ParentService $parentService) {
		$this->parentService = $parentService;

		return $this;
	}

	/**
	 * Set video format.
	 * 
	 * @param Property\VideoFormat $videoFormat
	 * @return BroadcastService
	 */
	public function setVideoFormat(Property\VideoFormat $videoFormat) {
		$this->videoFormat = $videoFormat;

		return $this;
	}
}