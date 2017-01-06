<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CurrencyConversionService.
 * 
 * @method CurrencyConversionService setAdditionalType(Property\AdditionalType $additionalType)
 * @method CurrencyConversionService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CurrencyConversionService setAlternateName(Property\AlternateName $alternateName)
 * @method CurrencyConversionService setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method CurrencyConversionService setAreaServed(Property\AreaServed $areaServed)
 * @method CurrencyConversionService setAudience(Property\Audience $audience)
 * @method CurrencyConversionService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method CurrencyConversionService setAward(Property\Award $award)
 * @method CurrencyConversionService setBrand(Property\Brand $brand)
 * @method CurrencyConversionService setCategory(Property\Category $category)
 * @method CurrencyConversionService setDescription(Property\Description $description)
 * @method CurrencyConversionService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CurrencyConversionService setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method CurrencyConversionService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method CurrencyConversionService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method CurrencyConversionService setImage(Property\Image $image)
 * @method CurrencyConversionService setInterestRate(Property\InterestRate $interestRate)
 * @method CurrencyConversionService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method CurrencyConversionService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method CurrencyConversionService setLogo(Property\Logo $logo)
 * @method CurrencyConversionService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CurrencyConversionService setName(Property\Name $name)
 * @method CurrencyConversionService setOffers(Property\Offers $offers)
 * @method CurrencyConversionService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CurrencyConversionService setProvider(Property\Provider $provider)
 * @method CurrencyConversionService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method CurrencyConversionService setReview(Property\Review $review)
 * @method CurrencyConversionService setSameAs(Property\SameAs $sameAs)
 * @method CurrencyConversionService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method CurrencyConversionService setServiceType(Property\ServiceType $serviceType)
 * @method CurrencyConversionService setUrl(Property\Url $url)
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