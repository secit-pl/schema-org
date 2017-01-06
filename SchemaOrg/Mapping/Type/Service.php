<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Service.
 * 
 * @method Service setAdditionalType(Property\AdditionalType $additionalType)
 * @method Service setAlternateName(Property\AlternateName $alternateName)
 * @method Service setDescription(Property\Description $description)
 * @method Service setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Service setImage(Property\Image $image)
 * @method Service setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Service setName(Property\Name $name)
 * @method Service setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Service setSameAs(Property\SameAs $sameAs)
 * @method Service setUrl(Property\Url $url)
 */
class Service extends Intangible {

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\AreaServed
	 */
	private $areaServed;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\AvailableChannel
	 */
	private $availableChannel;

	/**
	 * @var Property\Award
	 */
	private $award;

	/**
	 * @var Property\Brand
	 */
	private $brand;

	/**
	 * @var Property\Category
	 */
	private $category;

	/**
	 * @var Property\HasOfferCatalog
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HoursAvailable
	 */
	private $hoursAvailable;

	/**
	 * @var Property\IsRelatedTo
	 */
	private $isRelatedTo;

	/**
	 * @var Property\IsSimilarTo
	 */
	private $isSimilarTo;

	/**
	 * @var Property\Logo
	 */
	private $logo;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * @var Property\Provider
	 */
	private $provider;

	/**
	 * @var Property\ProviderMobility
	 */
	private $providerMobility;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\ServiceOutput
	 */
	private $serviceOutput;

	/**
	 * @var Property\ServiceType
	 */
	private $serviceType;

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get area served.
	 * 
	 * @return Property\AreaServed
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available channel.
	 * 
	 * @return Property\AvailableChannel
	 */
	public function getAvailableChannel() {
		return $this->availableChannel;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\Award
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\Brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\Category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get has offer catalog.
	 * 
	 * @return Property\HasOfferCatalog
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
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
	 * Get is related to.
	 * 
	 * @return Property\IsRelatedTo
	 */
	public function getIsRelatedTo() {
		return $this->isRelatedTo;
	}

	/**
	 * Get is similar to.
	 * 
	 * @return Property\IsSimilarTo
	 */
	public function getIsSimilarTo() {
		return $this->isSimilarTo;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\Logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\Offers
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get provider.
	 * 
	 * @return Property\Provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Get provider mobility.
	 * 
	 * @return Property\ProviderMobility
	 */
	public function getProviderMobility() {
		return $this->providerMobility;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Service';
	}

	/**
	 * Get service output.
	 * 
	 * @return Property\ServiceOutput
	 */
	public function getServiceOutput() {
		return $this->serviceOutput;
	}

	/**
	 * Get service type.
	 * 
	 * @return Property\ServiceType
	 */
	public function getServiceType() {
		return $this->serviceType;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Service
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set area served.
	 * 
	 * @param Property\AreaServed $areaServed
	 * @return Service
	 */
	public function setAreaServed(Property\AreaServed $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return Service
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available channel.
	 * 
	 * @param Property\AvailableChannel $availableChannel
	 * @return Service
	 */
	public function setAvailableChannel(Property\AvailableChannel $availableChannel) {
		$this->availableChannel = $availableChannel;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\Award $award
	 * @return Service
	 */
	public function setAward(Property\Award $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\Brand $brand
	 * @return Service
	 */
	public function setBrand(Property\Brand $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\Category $category
	 * @return Service
	 */
	public function setCategory(Property\Category $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 * 
	 * @param Property\HasOfferCatalog $hasOfferCatalog
	 * @return Service
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set hours available.
	 * 
	 * @param Property\HoursAvailable $hoursAvailable
	 * @return Service
	 */
	public function setHoursAvailable(Property\HoursAvailable $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set is related to.
	 * 
	 * @param Property\IsRelatedTo $isRelatedTo
	 * @return Service
	 */
	public function setIsRelatedTo(Property\IsRelatedTo $isRelatedTo) {
		$this->isRelatedTo = $isRelatedTo;

		return $this;
	}

	/**
	 * Set is similar to.
	 * 
	 * @param Property\IsSimilarTo $isSimilarTo
	 * @return Service
	 */
	public function setIsSimilarTo(Property\IsSimilarTo $isSimilarTo) {
		$this->isSimilarTo = $isSimilarTo;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\Logo $logo
	 * @return Service
	 */
	public function setLogo(Property\Logo $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return Service
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set provider.
	 * 
	 * @param Property\Provider $provider
	 * @return Service
	 */
	public function setProvider(Property\Provider $provider) {
		$this->provider = $provider;

		return $this;
	}

	/**
	 * Set provider mobility.
	 * 
	 * @param Property\ProviderMobility $providerMobility
	 * @return Service
	 */
	public function setProviderMobility(Property\ProviderMobility $providerMobility) {
		$this->providerMobility = $providerMobility;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Service
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set service output.
	 * 
	 * @param Property\ServiceOutput $serviceOutput
	 * @return Service
	 */
	public function setServiceOutput(Property\ServiceOutput $serviceOutput) {
		$this->serviceOutput = $serviceOutput;

		return $this;
	}

	/**
	 * Set service type.
	 * 
	 * @param Property\ServiceType $serviceType
	 * @return Service
	 */
	public function setServiceType(Property\ServiceType $serviceType) {
		$this->serviceType = $serviceType;

		return $this;
	}
}