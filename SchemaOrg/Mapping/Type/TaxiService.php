<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TaxiService.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TaxiServiceType instead.
 * 
 * @method TaxiService setAdditionalType(Property\AdditionalType $additionalType)
 * @method TaxiService setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TaxiService setAlternateName(Property\AlternateName $alternateName)
 * @method TaxiService setAreaServed(Property\AreaServed $areaServed)
 * @method TaxiService setAudience(Property\Audience $audience)
 * @method TaxiService setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method TaxiService setAward(Property\Award $award)
 * @method TaxiService setBrand(Property\Brand $brand)
 * @method TaxiService setBroker(Property\Broker $broker)
 * @method TaxiService setCategory(Property\Category $category)
 * @method TaxiService setDescription(Property\Description $description)
 * @method TaxiService setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TaxiService setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TaxiService setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method TaxiService setIdentifier(Property\Identifier $identifier)
 * @method TaxiService setImage(Property\Image $image)
 * @method TaxiService setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method TaxiService setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method TaxiService setLogo(Property\Logo $logo)
 * @method TaxiService setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TaxiService setName(Property\Name $name)
 * @method TaxiService setOffers(Property\Offers $offers)
 * @method TaxiService setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TaxiService setProvider(Property\Provider $provider)
 * @method TaxiService setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method TaxiService setReview(Property\Review $review)
 * @method TaxiService setSameAs(Property\SameAs $sameAs)
 * @method TaxiService setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method TaxiService setServiceType(Property\ServiceType $serviceType)
 * @method TaxiService setUrl(Property\Url $url)
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