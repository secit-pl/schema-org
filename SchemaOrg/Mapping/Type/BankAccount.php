<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BankAccount.
 * 
 * @method BankAccount setAdditionalType(Property\AdditionalType $additionalType)
 * @method BankAccount setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BankAccount setAlternateName(Property\AlternateName $alternateName)
 * @method BankAccount setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method BankAccount setAreaServed(Property\AreaServed $areaServed)
 * @method BankAccount setAudience(Property\Audience $audience)
 * @method BankAccount setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method BankAccount setAward(Property\Award $award)
 * @method BankAccount setBrand(Property\Brand $brand)
 * @method BankAccount setBroker(Property\Broker $broker)
 * @method BankAccount setCategory(Property\Category $category)
 * @method BankAccount setDescription(Property\Description $description)
 * @method BankAccount setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BankAccount setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method BankAccount setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BankAccount setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method BankAccount setIdentifier(Property\Identifier $identifier)
 * @method BankAccount setImage(Property\Image $image)
 * @method BankAccount setInterestRate(Property\InterestRate $interestRate)
 * @method BankAccount setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method BankAccount setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method BankAccount setLogo(Property\Logo $logo)
 * @method BankAccount setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BankAccount setName(Property\Name $name)
 * @method BankAccount setOffers(Property\Offers $offers)
 * @method BankAccount setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BankAccount setProvider(Property\Provider $provider)
 * @method BankAccount setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method BankAccount setReview(Property\Review $review)
 * @method BankAccount setSameAs(Property\SameAs $sameAs)
 * @method BankAccount setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method BankAccount setServiceType(Property\ServiceType $serviceType)
 * @method BankAccount setUrl(Property\Url $url)
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