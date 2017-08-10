<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LoanOrCredit.
 * 
 * @method LoanOrCredit setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method LoanOrCredit setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate)
 * @method LoanOrCredit setAreaServed(Property\AreaServed $areaServed)
 * @method LoanOrCredit setAudience(Property\Audience $audience)
 * @method LoanOrCredit setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method LoanOrCredit setAward(Property\Award $award)
 * @method LoanOrCredit setBrand(Property\Brand $brand)
 * @method LoanOrCredit setBroker(Property\Broker $broker)
 * @method LoanOrCredit setCategory(Property\Category $category)
 * @method LoanOrCredit setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification)
 * @method LoanOrCredit setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method LoanOrCredit setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method LoanOrCredit setInterestRate(Property\InterestRate $interestRate)
 * @method LoanOrCredit setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method LoanOrCredit setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method LoanOrCredit setLogo(Property\Logo $logo)
 * @method LoanOrCredit setOffers(Property\Offers $offers)
 * @method LoanOrCredit setProvider(Property\Provider $provider)
 * @method LoanOrCredit setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method LoanOrCredit setReview(Property\Review $review)
 * @method LoanOrCredit setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method LoanOrCredit setServiceType(Property\ServiceType $serviceType)
 */
class LoanOrCredit extends FinancialProduct {

	/**
	 * @var Property\Amount
	 */
	private $amount;

	/**
	 * @var Property\LoanTerm
	 */
	private $loanTerm;

	/**
	 * @var Property\RequiredCollateral
	 */
	private $requiredCollateral;

	/**
	 * Get amount.
	 * 
	 * @return Property\Amount
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Get loan term.
	 * 
	 * @return Property\LoanTerm
	 */
	public function getLoanTerm() {
		return $this->loanTerm;
	}

	/**
	 * Get required collateral.
	 * 
	 * @return Property\RequiredCollateral
	 */
	public function getRequiredCollateral() {
		return $this->requiredCollateral;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LoanOrCredit';
	}

	/**
	 * Set amount.
	 * 
	 * @param Property\Amount $amount
	 * @return LoanOrCredit
	 */
	public function setAmount(Property\Amount $amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Set loan term.
	 * 
	 * @param Property\LoanTerm $loanTerm
	 * @return LoanOrCredit
	 */
	public function setLoanTerm(Property\LoanTerm $loanTerm) {
		$this->loanTerm = $loanTerm;

		return $this;
	}

	/**
	 * Set required collateral.
	 * 
	 * @param Property\RequiredCollateral $requiredCollateral
	 * @return LoanOrCredit
	 */
	public function setRequiredCollateral(Property\RequiredCollateral $requiredCollateral) {
		$this->requiredCollateral = $requiredCollateral;

		return $this;
	}
}