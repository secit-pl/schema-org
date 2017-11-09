<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentServiceType.
 * 
 * @method GovernmentServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GovernmentServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method GovernmentServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GovernmentServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method GovernmentServiceType setAudience(Property\AudienceProperty $audience)
 * @method GovernmentServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method GovernmentServiceType setAward(Property\AwardProperty $award)
 * @method GovernmentServiceType setBrand(Property\BrandProperty $brand)
 * @method GovernmentServiceType setBroker(Property\BrokerProperty $broker)
 * @method GovernmentServiceType setCategory(Property\CategoryProperty $category)
 * @method GovernmentServiceType setDescription(Property\DescriptionProperty $description)
 * @method GovernmentServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GovernmentServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method GovernmentServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method GovernmentServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GovernmentServiceType setImage(Property\ImageProperty $image)
 * @method GovernmentServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method GovernmentServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method GovernmentServiceType setLogo(Property\LogoProperty $logo)
 * @method GovernmentServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GovernmentServiceType setName(Property\NameProperty $name)
 * @method GovernmentServiceType setOffers(Property\OffersProperty $offers)
 * @method GovernmentServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GovernmentServiceType setProvider(Property\ProviderProperty $provider)
 * @method GovernmentServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method GovernmentServiceType setReview(Property\ReviewProperty $review)
 * @method GovernmentServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method GovernmentServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method GovernmentServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method GovernmentServiceType setUrl(Property\UrlProperty $url)
 */
class GovernmentServiceType extends ServiceType {

	/**
	 * @var Property\ServiceOperatorProperty
	 */
	private $serviceOperator;

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GovernmentService';
	}

	/**
	 * Get service operator.
	 * 
	 * @return Property\ServiceOperatorProperty
	 */
	public function getServiceOperator() {
		return $this->serviceOperator;
	}

	/**
	 * Set service operator.
	 * 
	 * @param Property\ServiceOperatorProperty $serviceOperator
	 * @return GovernmentServiceType
	 */
	public function setServiceOperator(Property\ServiceOperatorProperty $serviceOperator) {
		$this->serviceOperator = $serviceOperator;

		return $this;
	}
}