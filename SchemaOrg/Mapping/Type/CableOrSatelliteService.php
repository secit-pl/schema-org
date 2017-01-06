<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CableOrSatelliteService.
 * 
 * @method CableOrSatelliteService setAdditionalType(Property\AdditionalType $additionalType)
 * @method CableOrSatelliteService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CableOrSatelliteService setAlternateName(Property\AlternateName $alternateName)
 * @method CableOrSatelliteService setAreaServed(Property\AreaServed $areaServed)
 * @method CableOrSatelliteService setAudience(Property\Audience $audience)
 * @method CableOrSatelliteService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method CableOrSatelliteService setAward(Property\Award $award)
 * @method CableOrSatelliteService setBrand(Property\Brand $brand)
 * @method CableOrSatelliteService setCategory(Property\Category $category)
 * @method CableOrSatelliteService setDescription(Property\Description $description)
 * @method CableOrSatelliteService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CableOrSatelliteService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method CableOrSatelliteService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method CableOrSatelliteService setImage(Property\Image $image)
 * @method CableOrSatelliteService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method CableOrSatelliteService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method CableOrSatelliteService setLogo(Property\Logo $logo)
 * @method CableOrSatelliteService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CableOrSatelliteService setName(Property\Name $name)
 * @method CableOrSatelliteService setOffers(Property\Offers $offers)
 * @method CableOrSatelliteService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CableOrSatelliteService setProvider(Property\Provider $provider)
 * @method CableOrSatelliteService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method CableOrSatelliteService setReview(Property\Review $review)
 * @method CableOrSatelliteService setSameAs(Property\SameAs $sameAs)
 * @method CableOrSatelliteService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method CableOrSatelliteService setServiceType(Property\ServiceType $serviceType)
 * @method CableOrSatelliteService setUrl(Property\Url $url)
 */
class CableOrSatelliteService extends Service {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CableOrSatelliteService';
	}
}