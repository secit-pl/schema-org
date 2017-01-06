<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodService.
 * 
 * @method FoodService setAdditionalType(Property\AdditionalType $additionalType)
 * @method FoodService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FoodService setAlternateName(Property\AlternateName $alternateName)
 * @method FoodService setAreaServed(Property\AreaServed $areaServed)
 * @method FoodService setAudience(Property\Audience $audience)
 * @method FoodService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method FoodService setAward(Property\Award $award)
 * @method FoodService setBrand(Property\Brand $brand)
 * @method FoodService setCategory(Property\Category $category)
 * @method FoodService setDescription(Property\Description $description)
 * @method FoodService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FoodService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FoodService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method FoodService setImage(Property\Image $image)
 * @method FoodService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method FoodService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method FoodService setLogo(Property\Logo $logo)
 * @method FoodService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FoodService setName(Property\Name $name)
 * @method FoodService setOffers(Property\Offers $offers)
 * @method FoodService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FoodService setProvider(Property\Provider $provider)
 * @method FoodService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method FoodService setReview(Property\Review $review)
 * @method FoodService setSameAs(Property\SameAs $sameAs)
 * @method FoodService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method FoodService setServiceType(Property\ServiceType $serviceType)
 * @method FoodService setUrl(Property\Url $url)
 */
class FoodService extends Service {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodService';
	}
}