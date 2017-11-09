<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InvestmentOrDeposit.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InvestmentOrDepositType instead.
 * 
 * @method InvestmentOrDeposit setAdditionalType(Property\AdditionalType $additionalType)
 * @method InvestmentOrDeposit setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method InvestmentOrDeposit setAlternateName(Property\AlternateName $alternateName)
 * @method InvestmentOrDeposit setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method InvestmentOrDeposit setAreaServed(Property\AreaServed $areaServed)
 * @method InvestmentOrDeposit setAudience(Property\Audience $audience)
 * @method InvestmentOrDeposit setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method InvestmentOrDeposit setAward(Property\Award $award)
 * @method InvestmentOrDeposit setBrand(Property\Brand $brand)
 * @method InvestmentOrDeposit setBroker(Property\Broker $broker)
 * @method InvestmentOrDeposit setCategory(Property\Category $category)
 * @method InvestmentOrDeposit setDescription(Property\Description $description)
 * @method InvestmentOrDeposit setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InvestmentOrDeposit setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method InvestmentOrDeposit setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method InvestmentOrDeposit setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method InvestmentOrDeposit setIdentifier(Property\Identifier $identifier)
 * @method InvestmentOrDeposit setImage(Property\Image $image)
 * @method InvestmentOrDeposit setInterestRate(Property\InterestRate $interestRate)
 * @method InvestmentOrDeposit setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method InvestmentOrDeposit setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method InvestmentOrDeposit setLogo(Property\Logo $logo)
 * @method InvestmentOrDeposit setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InvestmentOrDeposit setName(Property\Name $name)
 * @method InvestmentOrDeposit setOffers(Property\Offers $offers)
 * @method InvestmentOrDeposit setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InvestmentOrDeposit setProvider(Property\Provider $provider)
 * @method InvestmentOrDeposit setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method InvestmentOrDeposit setReview(Property\Review $review)
 * @method InvestmentOrDeposit setSameAs(Property\SameAs $sameAs)
 * @method InvestmentOrDeposit setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method InvestmentOrDeposit setServiceType(Property\ServiceType $serviceType)
 * @method InvestmentOrDeposit setUrl(Property\Url $url)
 */
class InvestmentOrDeposit extends FinancialProduct {

	/**
	 * @var Property\Amount
	 */
	private $amount;

	/**
	 * Get amount.
	 * 
	 * @return Property\Amount
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
	 * @param Property\Amount $amount
	 * @return InvestmentOrDeposit
	 */
	public function setAmount(Property\Amount $amount) {
		$this->amount = $amount;

		return $this;
	}
}