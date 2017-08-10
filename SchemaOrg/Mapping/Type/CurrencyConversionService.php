<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CurrencyConversionService.
 * 
 * @method CurrencyConversionService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CurrencyConversionService setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method CurrencyConversionService setAreaServed(Property\AreaServed $areaServed)
 * @method CurrencyConversionService setAudience(Property\Audience $audience)
 * @method CurrencyConversionService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method CurrencyConversionService setAward(Property\Award $award)
 * @method CurrencyConversionService setBrand(Property\Brand $brand)
 * @method CurrencyConversionService setBroker(Property\Broker $broker)
 * @method CurrencyConversionService setCategory(Property\Category $category)
 * @method CurrencyConversionService setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method CurrencyConversionService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method CurrencyConversionService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method CurrencyConversionService setInterestRate(Property\InterestRate $interestRate)
 * @method CurrencyConversionService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method CurrencyConversionService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method CurrencyConversionService setLogo(Property\Logo $logo)
 * @method CurrencyConversionService setOffers(Property\Offers $offers)
 * @method CurrencyConversionService setProvider(Property\Provider $provider)
 * @method CurrencyConversionService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method CurrencyConversionService setReview(Property\Review $review)
 * @method CurrencyConversionService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method CurrencyConversionService setServiceType(Property\ServiceType $serviceType)
 */
class CurrencyConversionService extends FinancialProduct {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CurrencyConversionService';
	}
}