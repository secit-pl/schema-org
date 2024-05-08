<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A service which provides access to media programming like TV or radio. Access may be via cable or satellite.
 * 
 * @method CableOrSatelliteServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CableOrSatelliteServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CableOrSatelliteServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CableOrSatelliteServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CableOrSatelliteServiceType setAudience(Property\AudienceProperty $audience)
 * @method CableOrSatelliteServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method CableOrSatelliteServiceType setAward(Property\AwardProperty $award)
 * @method CableOrSatelliteServiceType setBrand(Property\BrandProperty $brand)
 * @method CableOrSatelliteServiceType setBroker(Property\BrokerProperty $broker)
 * @method CableOrSatelliteServiceType setCategory(Property\CategoryProperty $category)
 * @method CableOrSatelliteServiceType setDescription(Property\DescriptionProperty $description)
 * @method CableOrSatelliteServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CableOrSatelliteServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CableOrSatelliteServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CableOrSatelliteServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method CableOrSatelliteServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CableOrSatelliteServiceType setImage(Property\ImageProperty $image)
 * @method CableOrSatelliteServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method CableOrSatelliteServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method CableOrSatelliteServiceType setLogo(Property\LogoProperty $logo)
 * @method CableOrSatelliteServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CableOrSatelliteServiceType setName(Property\NameProperty $name)
 * @method CableOrSatelliteServiceType setOffers(Property\OffersProperty $offers)
 * @method CableOrSatelliteServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CableOrSatelliteServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method CableOrSatelliteServiceType setReview(Property\ReviewProperty $review)
 * @method CableOrSatelliteServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method CableOrSatelliteServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method CableOrSatelliteServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method CableOrSatelliteServiceType setSlogan(Property\SloganProperty $slogan)
 * @method CableOrSatelliteServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CableOrSatelliteServiceType setUrl(Property\UrlProperty $url)
 */
class CableOrSatelliteServiceType extends ServiceType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CableOrSatelliteService';
	}
}