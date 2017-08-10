<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BankAccount.
 * 
 * @method BankAccount setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BankAccount setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method BankAccount setAreaServed(Property\AreaServed $areaServed)
 * @method BankAccount setAudience(Property\Audience $audience)
 * @method BankAccount setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method BankAccount setAward(Property\Award $award)
 * @method BankAccount setBrand(Property\Brand $brand)
 * @method BankAccount setBroker(Property\Broker $broker)
 * @method BankAccount setCategory(Property\Category $category)
 * @method BankAccount setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method BankAccount setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BankAccount setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method BankAccount setInterestRate(Property\InterestRate $interestRate)
 * @method BankAccount setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method BankAccount setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method BankAccount setLogo(Property\Logo $logo)
 * @method BankAccount setOffers(Property\Offers $offers)
 * @method BankAccount setProvider(Property\Provider $provider)
 * @method BankAccount setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method BankAccount setReview(Property\Review $review)
 * @method BankAccount setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method BankAccount setServiceType(Property\ServiceType $serviceType)
 */
class BankAccount extends FinancialProduct {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BankAccount';
	}
}