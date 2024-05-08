<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be paid interest.
 * 
 * @method BankAccountType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BankAccountType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BankAccountType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BankAccountType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method BankAccountType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BankAccountType setAudience(Property\AudienceProperty $audience)
 * @method BankAccountType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method BankAccountType setAward(Property\AwardProperty $award)
 * @method BankAccountType setBrand(Property\BrandProperty $brand)
 * @method BankAccountType setBroker(Property\BrokerProperty $broker)
 * @method BankAccountType setCategory(Property\CategoryProperty $category)
 * @method BankAccountType setDescription(Property\DescriptionProperty $description)
 * @method BankAccountType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BankAccountType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method BankAccountType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method BankAccountType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BankAccountType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method BankAccountType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BankAccountType setImage(Property\ImageProperty $image)
 * @method BankAccountType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method BankAccountType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method BankAccountType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method BankAccountType setLogo(Property\LogoProperty $logo)
 * @method BankAccountType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BankAccountType setName(Property\NameProperty $name)
 * @method BankAccountType setOffers(Property\OffersProperty $offers)
 * @method BankAccountType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BankAccountType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method BankAccountType setReview(Property\ReviewProperty $review)
 * @method BankAccountType setSameAs(Property\SameAsProperty $sameAs)
 * @method BankAccountType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method BankAccountType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method BankAccountType setSlogan(Property\SloganProperty $slogan)
 * @method BankAccountType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BankAccountType setUrl(Property\UrlProperty $url)
 */
class BankAccountType extends FinancialProductType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BankAccount';
	}
}