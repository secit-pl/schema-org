<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepositAccount.
 * 
 * @method DepositAccount setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DepositAccount setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method DepositAccount setAreaServed(Property\AreaServed $areaServed)
 * @method DepositAccount setAudience(Property\Audience $audience)
 * @method DepositAccount setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method DepositAccount setAward(Property\Award $award)
 * @method DepositAccount setBrand(Property\Brand $brand)
 * @method DepositAccount setBroker(Property\Broker $broker)
 * @method DepositAccount setCategory(Property\Category $category)
 * @method DepositAccount setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method DepositAccount setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DepositAccount setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method DepositAccount setInterestRate(Property\InterestRate $interestRate)
 * @method DepositAccount setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method DepositAccount setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method DepositAccount setLogo(Property\Logo $logo)
 * @method DepositAccount setOffers(Property\Offers $offers)
 * @method DepositAccount setProvider(Property\Provider $provider)
 * @method DepositAccount setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method DepositAccount setReview(Property\Review $review)
 * @method DepositAccount setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method DepositAccount setServiceType(Property\ServiceType $serviceType)
 */
class DepositAccount extends BankAccount {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepositAccount';
	}
}