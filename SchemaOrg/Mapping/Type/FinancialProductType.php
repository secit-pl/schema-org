<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A product provided to consumers and businesses by financial institutions such as banks, insurance companies, brokerage firms, consumer finance companies, and investment companies which comprise the financial services industry.
 * 
 * @method FinancialProductType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FinancialProductType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FinancialProductType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FinancialProductType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FinancialProductType setAudience(Property\AudienceProperty $audience)
 * @method FinancialProductType setAvailableChannel(Property\AvailableChannelProperty $availableChannel)
 * @method FinancialProductType setAward(Property\AwardProperty $award)
 * @method FinancialProductType setBrand(Property\BrandProperty $brand)
 * @method FinancialProductType setBroker(Property\BrokerProperty $broker)
 * @method FinancialProductType setCategory(Property\CategoryProperty $category)
 * @method FinancialProductType setDescription(Property\DescriptionProperty $description)
 * @method FinancialProductType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FinancialProductType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method FinancialProductType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FinancialProductType setHoursAvailable(Property\HoursAvailableProperty $hoursAvailable)
 * @method FinancialProductType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FinancialProductType setImage(Property\ImageProperty $image)
 * @method FinancialProductType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method FinancialProductType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method FinancialProductType setLogo(Property\LogoProperty $logo)
 * @method FinancialProductType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FinancialProductType setName(Property\NameProperty $name)
 * @method FinancialProductType setOffers(Property\OffersProperty $offers)
 * @method FinancialProductType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FinancialProductType setProviderMobility(Property\ProviderMobilityProperty $providerMobility)
 * @method FinancialProductType setReview(Property\ReviewProperty $review)
 * @method FinancialProductType setSameAs(Property\SameAsProperty $sameAs)
 * @method FinancialProductType setServiceOutput(Property\ServiceOutputProperty $serviceOutput)
 * @method FinancialProductType setServiceType(Property\ServiceTypeProperty $serviceType)
 * @method FinancialProductType setSlogan(Property\SloganProperty $slogan)
 * @method FinancialProductType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FinancialProductType setUrl(Property\UrlProperty $url)
 */
class FinancialProductType extends ServiceType {

	/**
	 * @var Property\AnnualPercentageRateProperty
	 */
	private $annualPercentageRate;

	/**
	 * @var Property\FeesAndCommissionsSpecificationProperty
	 */
	private $feesAndCommissionsSpecification;

	/**
	 * @var Property\InterestRateProperty
	 */
	private $interestRate;

	/**
	 * Get annual percentage rate.
	 *
	 * @return Property\AnnualPercentageRateProperty
	 */
	public function getAnnualPercentageRate() {
		return $this->annualPercentageRate;
	}

	/**
	 * Get fees and commissions specification.
	 *
	 * @return Property\FeesAndCommissionsSpecificationProperty
	 */
	public function getFeesAndCommissionsSpecification() {
		return $this->feesAndCommissionsSpecification;
	}

	/**
	 * Get interest rate.
	 *
	 * @return Property\InterestRateProperty
	 */
	public function getInterestRate() {
		return $this->interestRate;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FinancialProduct';
	}

	/**
	 * Set annual percentage rate.
	 *
	 * @param Property\AnnualPercentageRateProperty $annualPercentageRate
	 * @return FinancialProductType
	 */
	public function setAnnualPercentageRate(Property\AnnualPercentageRateProperty $annualPercentageRate) {
		$this->annualPercentageRate = $annualPercentageRate;

		return $this;
	}

	/**
	 * Set fees and commissions specification.
	 *
	 * @param Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification
	 * @return FinancialProductType
	 */
	public function setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecificationProperty $feesAndCommissionsSpecification) {
		$this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;

		return $this;
	}

	/**
	 * Set interest rate.
	 *
	 * @param Property\InterestRateProperty $interestRate
	 * @return FinancialProductType
	 */
	public function setInterestRate(Property\InterestRateProperty $interestRate) {
		$this->interestRate = $interestRate;

		return $this;
	}
}