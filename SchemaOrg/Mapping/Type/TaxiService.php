<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiService.
 * 
 * @method TaxiService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TaxiService setAreaServed(Property\AreaServed $areaServed)
 * @method TaxiService setAudience(Property\Audience $audience)
 * @method TaxiService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method TaxiService setAward(Property\Award $award)
 * @method TaxiService setBrand(Property\Brand $brand)
 * @method TaxiService setBroker(Property\Broker $broker)
 * @method TaxiService setCategory(Property\Category $category)
 * @method TaxiService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TaxiService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method TaxiService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method TaxiService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method TaxiService setLogo(Property\Logo $logo)
 * @method TaxiService setOffers(Property\Offers $offers)
 * @method TaxiService setProvider(Property\Provider $provider)
 * @method TaxiService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method TaxiService setReview(Property\Review $review)
 * @method TaxiService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method TaxiService setServiceType(Property\ServiceType $serviceType)
 */
class TaxiService extends Service {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiService';
	}
}