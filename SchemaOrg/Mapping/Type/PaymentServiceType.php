<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A Service to transfer funds from a person or organization to a beneficiary person or organization.
 * 
 * @method PaymentServiceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentServiceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PaymentServiceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentServiceType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method PaymentServiceType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PaymentServiceType setAudience(Property\AudienceProperty $audience)
 * @method PaymentServiceType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method PaymentServiceType setAward(Property\AwardProperty $award)
 * @method PaymentServiceType setBrand(Property\BrandProperty $brand)
 * @method PaymentServiceType setBroker(Property\BrokerProperty $broker)
 * @method PaymentServiceType setCategory(Property\CategoryProperty $category)
 * @method PaymentServiceType setDescription(Property\DescriptionProperty $description)
 * @method PaymentServiceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentServiceType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method PaymentServiceType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method PaymentServiceType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PaymentServiceType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method PaymentServiceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentServiceType setImage(Property\ImageProperty $image)
 * @method PaymentServiceType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method PaymentServiceType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method PaymentServiceType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method PaymentServiceType setLogo(Property\LogoProperty $logo)
 * @method PaymentServiceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentServiceType setName(Property\NameProperty $name)
 * @method PaymentServiceType setOffers(Property\OffersProperty $offers)
 * @method PaymentServiceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentServiceType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method PaymentServiceType setReview(Property\ReviewProperty $review)
 * @method PaymentServiceType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentServiceType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method PaymentServiceType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method PaymentServiceType setSlogan(Property\SloganProperty $slogan)
 * @method PaymentServiceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentServiceType setUrl(Property\UrlProperty $url)
 */
class PaymentServiceType extends FinancialProductType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentService';
	}
}