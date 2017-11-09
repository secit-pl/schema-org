<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InvestmentOrDepositType.
 * 
 * @method InvestmentOrDepositType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InvestmentOrDepositType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method InvestmentOrDepositType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InvestmentOrDepositType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method InvestmentOrDepositType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method InvestmentOrDepositType setAudience(Property\AudienceProperty $audience)
 * @method InvestmentOrDepositType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method InvestmentOrDepositType setAward(Property\AwardProperty $award)
 * @method InvestmentOrDepositType setBrand(Property\BrandProperty $brand)
 * @method InvestmentOrDepositType setBroker(Property\BrokerProperty $broker)
 * @method InvestmentOrDepositType setCategory(Property\CategoryProperty $category)
 * @method InvestmentOrDepositType setDescription(Property\DescriptionProperty $description)
 * @method InvestmentOrDepositType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InvestmentOrDepositType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method InvestmentOrDepositType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method InvestmentOrDepositType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method InvestmentOrDepositType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InvestmentOrDepositType setImage(Property\ImageProperty $image)
 * @method InvestmentOrDepositType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method InvestmentOrDepositType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method InvestmentOrDepositType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method InvestmentOrDepositType setLogo(Property\LogoProperty $logo)
 * @method InvestmentOrDepositType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InvestmentOrDepositType setName(Property\NameProperty $name)
 * @method InvestmentOrDepositType setOffers(Property\OffersProperty $offers)
 * @method InvestmentOrDepositType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InvestmentOrDepositType setProvider(Property\ProviderProperty $provider)
 * @method InvestmentOrDepositType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method InvestmentOrDepositType setReview(Property\ReviewProperty $review)
 * @method InvestmentOrDepositType setSameAs(Property\SameAsProperty $sameAs)
 * @method InvestmentOrDepositType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method InvestmentOrDepositType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method InvestmentOrDepositType setUrl(Property\UrlProperty $url)
 */
class InvestmentOrDepositType extends FinancialProductType {

	/**
	 * @var Property\AmountProperty
	 */
	private $amount;

	/**
	 * Get amount.
	 * 
	 * @return Property\AmountProperty
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InvestmentOrDeposit';
	}

	/**
	 * Set amount.
	 * 
	 * @param Property\AmountProperty $amount
	 * @return InvestmentOrDepositType
	 */
	public function setAmount(Property\AmountProperty $amount) {
		$this->amount = $amount;

		return $this;
	}
}