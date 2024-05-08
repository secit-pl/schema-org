<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A service provided by an organization, e.g. delivery service, print services, etc.
 * 
 * @method ServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ServiceType setDescription(Property\DescriptionProperty $description)
 * @method ServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ServiceType setImage(Property\ImageProperty $image)
 * @method ServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ServiceType setName(Property\NameProperty $name)
 * @method ServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method ServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ServiceType setUrl(Property\UrlProperty $url)
 */
class ServiceType extends IntangibleType {

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AreaServedProperty
	 */
	private $areaServed;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\AvailableChannelProperty
	 */
	private $availableChannel;

	/**
	 * @var Property\AwardProperty
	 */
	private $award;

	/**
	 * @var Property\BrandProperty
	 */
	private $brand;

	/**
	 * @var Property\BrokerProperty
	 */
	private $broker;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\HasCertificationProperty
	 */
	private $hasCertification;

	/**
	 * @var Property\HasOfferCatalogProperty
	 */
	private $hasOfferCatalog;

	/**
	 * @var Property\HoursAvailableProperty
	 */
	private $hoursAvailable;

	/**
	 * @var Property\IsRelatedToProperty
	 */
	private $isRelatedTo;

	/**
	 * @var Property\IsSimilarToProperty
	 */
	private $isSimilarTo;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\ProviderMobilityProperty
	 */
	private $providerMobility;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\ServiceOutputProperty
	 */
	private $serviceOutput;

	/**
	 * @var Property\ServiceTypeProperty
	 */
	private $serviceType;

	/**
	 * @var Property\SloganProperty
	 */
	private $slogan;

	/**
	 * Get aggregate rating.
	 *
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get area served.
	 *
	 * @return Property\AreaServedProperty
	 */
	public function getAreaServed() {
		return $this->areaServed;
	}

	/**
	 * Get audience.
	 *
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get available channel.
	 *
	 * @return Property\AvailableChannelProperty
	 */
	public function getAvailableChannel() {
		return $this->availableChannel;
	}

	/**
	 * Get award.
	 *
	 * @return Property\AwardProperty
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 *
	 * @return Property\BrandProperty
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get broker.
	 *
	 * @return Property\BrokerProperty
	 */
	public function getBroker() {
		return $this->broker;
	}

	/**
	 * Get category.
	 *
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get has certification.
	 *
	 * @return Property\HasCertificationProperty
	 */
	public function getHasCertification() {
		return $this->hasCertification;
	}

	/**
	 * Get has offer catalog.
	 *
	 * @return Property\HasOfferCatalogProperty
	 */
	public function getHasOfferCatalog() {
		return $this->hasOfferCatalog;
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
	 * Get is related to.
	 *
	 * @return Property\IsRelatedToProperty
	 */
	public function getIsRelatedTo() {
		return $this->isRelatedTo;
	}

	/**
	 * Get is similar to.
	 *
	 * @return Property\IsSimilarToProperty
	 */
	public function getIsSimilarTo() {
		return $this->isSimilarTo;
	}

	/**
	 * Get logo.
	 *
	 * @return Property\LogoProperty
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get offers.
	 *
	 * @return Property\OffersProperty
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get provider mobility.
	 *
	 * @return Property\ProviderMobilityProperty
	 */
	public function getProviderMobility() {
		return $this->providerMobility;
	}

	/**
	 * Get review.
	 *
	 * @return Property\ReviewProperty
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
	 * @return Property\ServiceOutputProperty
	 */
	public function getServiceOutput() {
		return $this->serviceOutput;
	}

	/**
	 * Get service type.
	 *
	 * @return Property\ServiceTypeProperty
	 */
	public function getServiceType() {
		return $this->serviceType;
	}

	/**
	 * Get slogan.
	 *
	 * @return Property\SloganProperty
	 */
	public function getSlogan() {
		return $this->slogan;
	}

	/**
	 * Set aggregate rating.
	 *
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return ServiceType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set area served.
	 *
	 * @param Property\AreaServedProperty $areaServed
	 * @return ServiceType
	 */
	public function setAreaServed(Property\AreaServedProperty $areaServed) {
		$this->areaServed = $areaServed;

		return $this;
	}

	/**
	 * Set audience.
	 *
	 * @param Property\AudienceProperty $audience
	 * @return ServiceType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set available channel.
	 *
	 * @param Property\AvailableChannelProperty $availableChannel
	 * @return ServiceType
	 */
	public function setAvailableChannel(Property\AvailableChannelProperty $availableChannel) {
		$this->availableChannel = $availableChannel;

		return $this;
	}

	/**
	 * Set award.
	 *
	 * @param Property\AwardProperty $award
	 * @return ServiceType
	 */
	public function setAward(Property\AwardProperty $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 *
	 * @param Property\BrandProperty $brand
	 * @return ServiceType
	 */
	public function setBrand(Property\BrandProperty $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set broker.
	 *
	 * @param Property\BrokerProperty $broker
	 * @return ServiceType
	 */
	public function setBroker(Property\BrokerProperty $broker) {
		$this->broker = $broker;

		return $this;
	}

	/**
	 * Set category.
	 *
	 * @param Property\CategoryProperty $category
	 * @return ServiceType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set has certification.
	 *
	 * @param Property\HasCertificationProperty $hasCertification
	 * @return ServiceType
	 */
	public function setHasCertification(Property\HasCertificationProperty $hasCertification) {
		$this->hasCertification = $hasCertification;

		return $this;
	}

	/**
	 * Set has offer catalog.
	 *
	 * @param Property\HasOfferCatalogProperty $hasOfferCatalog
	 * @return ServiceType
	 */
	public function setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog) {
		$this->hasOfferCatalog = $hasOfferCatalog;

		return $this;
	}

	/**
	 * Set hours available.
	 *
	 * @param Property\HoursAvailableProperty $hoursAvailable
	 * @return ServiceType
	 */
	public function setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable) {
		$this->hoursAvailable = $hoursAvailable;

		return $this;
	}

	/**
	 * Set is related to.
	 *
	 * @param Property\IsRelatedToProperty $isRelatedTo
	 * @return ServiceType
	 */
	public function setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo) {
		$this->isRelatedTo = $isRelatedTo;

		return $this;
	}

	/**
	 * Set is similar to.
	 *
	 * @param Property\IsSimilarToProperty $isSimilarTo
	 * @return ServiceType
	 */
	public function setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo) {
		$this->isSimilarTo = $isSimilarTo;

		return $this;
	}

	/**
	 * Set logo.
	 *
	 * @param Property\LogoProperty $logo
	 * @return ServiceType
	 */
	public function setLogo(Property\LogoProperty $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set offers.
	 *
	 * @param Property\OffersProperty $offers
	 * @return ServiceType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set provider mobility.
	 *
	 * @param Property\ProviderMobilityProperty $providerMobility
	 * @return ServiceType
	 */
	public function setProviderMobility(Property\ProviderMobilityProperty $providerMobility) {
		$this->providerMobility = $providerMobility;

		return $this;
	}

	/**
	 * Set review.
	 *
	 * @param Property\ReviewProperty $review
	 * @return ServiceType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set service output.
	 *
	 * @param Property\ServiceOutputProperty $serviceOutput
	 * @return ServiceType
	 */
	public function setServiceOutput(Property\ServiceOutputProperty $serviceOutput) {
		$this->serviceOutput = $serviceOutput;

		return $this;
	}

	/**
	 * Set service type.
	 *
	 * @param Property\ServiceTypeProperty $serviceType
	 * @return ServiceType
	 */
	public function setServiceType(Property\ServiceTypeProperty $serviceType) {
		$this->serviceType = $serviceType;

		return $this;
	}

	/**
	 * Set slogan.
	 *
	 * @param Property\SloganProperty $slogan
	 * @return ServiceType
	 */
	public function setSlogan(Property\SloganProperty $slogan) {
		$this->slogan = $slogan;

		return $this;
	}
}