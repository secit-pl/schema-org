<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FoodServiceType.
 * 
 * @method FoodServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FoodServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FoodServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FoodServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FoodServiceType setAudience(Property\AudienceProperty $audience)
 * @method FoodServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method FoodServiceType setAward(Property\AwardProperty $award)
 * @method FoodServiceType setBrand(Property\BrandProperty $brand)
 * @method FoodServiceType setBroker(Property\BrokerProperty $broker)
 * @method FoodServiceType setCategory(Property\CategoryProperty $category)
 * @method FoodServiceType setDescription(Property\DescriptionProperty $description)
 * @method FoodServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FoodServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FoodServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method FoodServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FoodServiceType setImage(Property\ImageProperty $image)
 * @method FoodServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method FoodServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method FoodServiceType setLogo(Property\LogoProperty $logo)
 * @method FoodServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FoodServiceType setName(Property\NameProperty $name)
 * @method FoodServiceType setOffers(Property\OffersProperty $offers)
 * @method FoodServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FoodServiceType setProvider(Property\ProviderProperty $provider)
 * @method FoodServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method FoodServiceType setReview(Property\ReviewProperty $review)
 * @method FoodServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method FoodServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method FoodServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method FoodServiceType setUrl(Property\UrlProperty $url)
 */
class FoodServiceType extends ServiceType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FoodService';
	}
}