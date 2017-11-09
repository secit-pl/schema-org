<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepositAccount.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DepositAccountType instead.
 * 
 * @method DepositAccount setAdditionalType(Property\AdditionalType $additionalType)
 * @method DepositAccount setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DepositAccount setAlternateName(Property\AlternateName $alternateName)
 * @method DepositAccount setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method DepositAccount setAreaServed(Property\AreaServed $areaServed)
 * @method DepositAccount setAudience(Property\Audience $audience)
 * @method DepositAccount setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method DepositAccount setAward(Property\Award $award)
 * @method DepositAccount setBrand(Property\Brand $brand)
 * @method DepositAccount setBroker(Property\Broker $broker)
 * @method DepositAccount setCategory(Property\Category $category)
 * @method DepositAccount setDescription(Property\Description $description)
 * @method DepositAccount setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DepositAccount setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method DepositAccount setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DepositAccount setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method DepositAccount setIdentifier(Property\Identifier $identifier)
 * @method DepositAccount setImage(Property\Image $image)
 * @method DepositAccount setInterestRate(Property\InterestRate $interestRate)
 * @method DepositAccount setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method DepositAccount setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method DepositAccount setLogo(Property\Logo $logo)
 * @method DepositAccount setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DepositAccount setName(Property\Name $name)
 * @method DepositAccount setOffers(Property\Offers $offers)
 * @method DepositAccount setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DepositAccount setProvider(Property\Provider $provider)
 * @method DepositAccount setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method DepositAccount setReview(Property\Review $review)
 * @method DepositAccount setSameAs(Property\SameAs $sameAs)
 * @method DepositAccount setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method DepositAccount setServiceType(Property\ServiceType $serviceType)
 * @method DepositAccount setUrl(Property\Url $url)
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