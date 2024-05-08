<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A service for a vehicle for hire with a driver for local travel. Fares are usually calculated based on distance traveled.
 * 
 * @method TaxiServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TaxiServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TaxiServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TaxiServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TaxiServiceType setAudience(Property\AudienceProperty $audience)
 * @method TaxiServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method TaxiServiceType setAward(Property\AwardProperty $award)
 * @method TaxiServiceType setBrand(Property\BrandProperty $brand)
 * @method TaxiServiceType setBroker(Property\BrokerProperty $broker)
 * @method TaxiServiceType setCategory(Property\CategoryProperty $category)
 * @method TaxiServiceType setDescription(Property\DescriptionProperty $description)
 * @method TaxiServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TaxiServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TaxiServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TaxiServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method TaxiServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TaxiServiceType setImage(Property\ImageProperty $image)
 * @method TaxiServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method TaxiServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method TaxiServiceType setLogo(Property\LogoProperty $logo)
 * @method TaxiServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TaxiServiceType setName(Property\NameProperty $name)
 * @method TaxiServiceType setOffers(Property\OffersProperty $offers)
 * @method TaxiServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TaxiServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method TaxiServiceType setReview(Property\ReviewProperty $review)
 * @method TaxiServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method TaxiServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method TaxiServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method TaxiServiceType setSlogan(Property\SloganProperty $slogan)
 * @method TaxiServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TaxiServiceType setUrl(Property\UrlProperty $url)
 */
class TaxiServiceType extends ServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TaxiService';
	}
}