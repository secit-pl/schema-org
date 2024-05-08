<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A taxi.
 * 
 * @method TaxiType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TaxiType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method TaxiType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TaxiType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method TaxiType setAudience(Property\AudienceProperty $audience)
 * @method TaxiType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method TaxiType setAward(Property\AwardProperty $award)
 * @method TaxiType setBrand(Property\BrandProperty $brand)
 * @method TaxiType setBroker(Property\BrokerProperty $broker)
 * @method TaxiType setCategory(Property\CategoryProperty $category)
 * @method TaxiType setDescription(Property\DescriptionProperty $description)
 * @method TaxiType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TaxiType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method TaxiType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method TaxiType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method TaxiType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TaxiType setImage(Property\ImageProperty $image)
 * @method TaxiType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method TaxiType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method TaxiType setLogo(Property\LogoProperty $logo)
 * @method TaxiType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TaxiType setName(Property\NameProperty $name)
 * @method TaxiType setOffers(Property\OffersProperty $offers)
 * @method TaxiType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TaxiType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method TaxiType setReview(Property\ReviewProperty $review)
 * @method TaxiType setSameAs(Property\SameAsProperty $sameAs)
 * @method TaxiType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method TaxiType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method TaxiType setSlogan(Property\SloganProperty $slogan)
 * @method TaxiType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TaxiType setUrl(Property\UrlProperty $url)
 */
class TaxiType extends ServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Taxi';
	}
}