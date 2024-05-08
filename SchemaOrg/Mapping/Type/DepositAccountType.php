<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of Bank Account with a main purpose of depositing funds to gain interest or other benefits.
 * 
 * @method DepositAccountType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DepositAccountType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method DepositAccountType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DepositAccountType setAmount(Property\AmountProperty $amount)
 * @method DepositAccountType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method DepositAccountType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method DepositAccountType setAudience(Property\AudienceProperty $audience)
 * @method DepositAccountType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method DepositAccountType setAward(Property\AwardProperty $award)
 * @method DepositAccountType setBrand(Property\BrandProperty $brand)
 * @method DepositAccountType setBroker(Property\BrokerProperty $broker)
 * @method DepositAccountType setCategory(Property\CategoryProperty $category)
 * @method DepositAccountType setDescription(Property\DescriptionProperty $description)
 * @method DepositAccountType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DepositAccountType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method DepositAccountType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method DepositAccountType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method DepositAccountType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method DepositAccountType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DepositAccountType setImage(Property\ImageProperty $image)
 * @method DepositAccountType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method DepositAccountType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method DepositAccountType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method DepositAccountType setLogo(Property\LogoProperty $logo)
 * @method DepositAccountType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DepositAccountType setName(Property\NameProperty $name)
 * @method DepositAccountType setOffers(Property\OffersProperty $offers)
 * @method DepositAccountType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DepositAccountType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method DepositAccountType setReview(Property\ReviewProperty $review)
 * @method DepositAccountType setSameAs(Property\SameAsProperty $sameAs)
 * @method DepositAccountType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method DepositAccountType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method DepositAccountType setSlogan(Property\SloganProperty $slogan)
 * @method DepositAccountType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DepositAccountType setUrl(Property\UrlProperty $url)
 */
class DepositAccountType extends InvestmentOrDepositType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepositAccount';
	}
}