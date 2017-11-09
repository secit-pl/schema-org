<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LoanOrCreditType.
 * 
 * @method LoanOrCreditType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LoanOrCreditType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method LoanOrCreditType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LoanOrCreditType setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate)
 * @method LoanOrCreditType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method LoanOrCreditType setAudience(Property\AudienceProperty $audience)
 * @method LoanOrCreditType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method LoanOrCreditType setAward(Property\AwardProperty $award)
 * @method LoanOrCreditType setBrand(Property\BrandProperty $brand)
 * @method LoanOrCreditType setBroker(Property\BrokerProperty $broker)
 * @method LoanOrCreditType setCategory(Property\CategoryProperty $category)
 * @method LoanOrCreditType setDescription(Property\DescriptionProperty $description)
 * @method LoanOrCreditType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LoanOrCreditType setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification)
 * @method LoanOrCreditType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method LoanOrCreditType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method LoanOrCreditType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LoanOrCreditType setImage(Property\ImageProperty $image)
 * @method LoanOrCreditType setInterestRate(Property\InterestRateProperty $interestRate)
 * @method LoanOrCreditType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method LoanOrCreditType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method LoanOrCreditType setLogo(Property\LogoProperty $logo)
 * @method LoanOrCreditType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LoanOrCreditType setName(Property\NameProperty $name)
 * @method LoanOrCreditType setOffers(Property\OffersProperty $offers)
 * @method LoanOrCreditType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LoanOrCreditType setProvider(Property\ProviderProperty $provider)
 * @method LoanOrCreditType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method LoanOrCreditType setReview(Property\ReviewProperty $review)
 * @method LoanOrCreditType setSameAs(Property\SameAsProperty $sameAs)
 * @method LoanOrCreditType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method LoanOrCreditType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method LoanOrCreditType setUrl(Property\UrlProperty $url)
 */
class LoanOrCreditType extends FinancialProductType {

	/**
	 * @var Property\AmountProperty
	 */
	private $amount;

	/**
	 * @var Property\LoanTermProperty
	 */
	private $loanTerm;

	/**
	 * @var Property\RequiredCollateralProperty
	 */
	private $requiredCollateral;

	/**
	 * Get amount.
	 * 
	 * @return Property\AmountProperty
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Get loan term.
	 * 
	 * @return Property\LoanTermProperty
	 */
	public function getLoanTerm() {
		return $this->loanTerm;
	}

	/**
	 * Get required collateral.
	 * 
	 * @return Property\RequiredCollateralProperty
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
	 * @param Property\AmountProperty $amount
	 * @return LoanOrCreditType
	 */
	public function setAmount(Property\AmountProperty $amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Set loan term.
	 * 
	 * @param Property\LoanTermProperty $loanTerm
	 * @return LoanOrCreditType
	 */
	public function setLoanTerm(Property\LoanTermProperty $loanTerm) {
		$this->loanTerm = $loanTerm;

		return $this;
	}

	/**
	 * Set required collateral.
	 * 
	 * @param Property\RequiredCollateralProperty $requiredCollateral
	 * @return LoanOrCreditType
	 */
	public function setRequiredCollateral(Property\RequiredCollateralProperty $requiredCollateral) {
		$this->requiredCollateral = $requiredCollateral;

		return $this;
	}
}