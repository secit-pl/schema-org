<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentService.
 * 
 * @method PaymentService setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PaymentService setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentService setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method PaymentService setAreaServed(Property\AreaServed $areaServed)
 * @method PaymentService setAudience(Property\Audience $audience)
 * @method PaymentService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method PaymentService setAward(Property\Award $award)
 * @method PaymentService setBrand(Property\Brand $brand)
 * @method PaymentService setCategory(Property\Category $category)
 * @method PaymentService setDescription(Property\Description $description)
 * @method PaymentService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentService setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method PaymentService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PaymentService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method PaymentService setImage(Property\Image $image)
 * @method PaymentService setInterestRate(Property\InterestRate $interestRate)
 * @method PaymentService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method PaymentService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method PaymentService setLogo(Property\Logo $logo)
 * @method PaymentService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentService setName(Property\Name $name)
 * @method PaymentService setOffers(Property\Offers $offers)
 * @method PaymentService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentService setProvider(Property\Provider $provider)
 * @method PaymentService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method PaymentService setReview(Property\Review $review)
 * @method PaymentService setSameAs(Property\SameAs $sameAs)
 * @method PaymentService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method PaymentService setServiceType(Property\ServiceType $serviceType)
 * @method PaymentService setUrl(Property\Url $url)
 */
class PaymentService extends FinancialProduct {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentService';
	}
}