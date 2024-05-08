<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A service to convert funds from one currency to another currency.
 * 
 * @method CurrencyConversionServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CurrencyConversionServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CurrencyConversionServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CurrencyConversionServiceType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method CurrencyConversionServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CurrencyConversionServiceType setAudience(Property\AudienceProperty $audience)
 * @method CurrencyConversionServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method CurrencyConversionServiceType setAward(Property\AwardProperty $award)
 * @method CurrencyConversionServiceType setBrand(Property\BrandProperty $brand)
 * @method CurrencyConversionServiceType setBroker(Property\BrokerProperty $broker)
 * @method CurrencyConversionServiceType setCategory(Property\CategoryProperty $category)
 * @method CurrencyConversionServiceType setDescription(Property\DescriptionProperty $description)
 * @method CurrencyConversionServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CurrencyConversionServiceType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method CurrencyConversionServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method CurrencyConversionServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CurrencyConversionServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method CurrencyConversionServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CurrencyConversionServiceType setImage(Property\ImageProperty $image)
 * @method CurrencyConversionServiceType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method CurrencyConversionServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method CurrencyConversionServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method CurrencyConversionServiceType setLogo(Property\LogoProperty $logo)
 * @method CurrencyConversionServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CurrencyConversionServiceType setName(Property\NameProperty $name)
 * @method CurrencyConversionServiceType setOffers(Property\OffersProperty $offers)
 * @method CurrencyConversionServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CurrencyConversionServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method CurrencyConversionServiceType setReview(Property\ReviewProperty $review)
 * @method CurrencyConversionServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method CurrencyConversionServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method CurrencyConversionServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method CurrencyConversionServiceType setSlogan(Property\SloganProperty $slogan)
 * @method CurrencyConversionServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CurrencyConversionServiceType setUrl(Property\UrlProperty $url)
 */
class CurrencyConversionServiceType extends FinancialProductType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CurrencyConversionService';
	}
}