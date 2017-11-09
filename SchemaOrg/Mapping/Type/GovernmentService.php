<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GovernmentService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\GovernmentServiceType instead.
 * 
 * @method GovernmentService setAdditionalType(Property\AdditionalType $additionalType)
 * @method GovernmentService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GovernmentService setAlternateName(Property\AlternateName $alternateName)
 * @method GovernmentService setAreaServed(Property\AreaServed $areaServed)
 * @method GovernmentService setAudience(Property\Audience $audience)
 * @method GovernmentService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method GovernmentService setAward(Property\Award $award)
 * @method GovernmentService setBrand(Property\Brand $brand)
 * @method GovernmentService setBroker(Property\Broker $broker)
 * @method GovernmentService setCategory(Property\Category $category)
 * @method GovernmentService setDescription(Property\Description $description)
 * @method GovernmentService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GovernmentService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GovernmentService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method GovernmentService setIdentifier(Property\Identifier $identifier)
 * @method GovernmentService setImage(Property\Image $image)
 * @method GovernmentService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method GovernmentService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method GovernmentService setLogo(Property\Logo $logo)
 * @method GovernmentService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GovernmentService setName(Property\Name $name)
 * @method GovernmentService setOffers(Property\Offers $offers)
 * @method GovernmentService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GovernmentService setProvider(Property\Provider $provider)
 * @method GovernmentService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method GovernmentService setReview(Property\Review $review)
 * @method GovernmentService setSameAs(Property\SameAs $sameAs)
 * @method GovernmentService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method GovernmentService setServiceType(Property\ServiceType $serviceType)
 * @method GovernmentService setUrl(Property\Url $url)
 */
class GovernmentService extends Service {

	/**
	 * @var Property\ServiceOperator
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
	 * @return Property\ServiceOperator
	 */
	public function getServiceOperator() {
		return $this->serviceOperator;
	}

	/**
	 * Set service operator.
	 * 
	 * @param Property\ServiceOperator $serviceOperator
	 * @return GovernmentService
	 */
	public function setServiceOperator(Property\ServiceOperator $serviceOperator) {
		$this->serviceOperator = $serviceOperator;

		return $this;
	}
}