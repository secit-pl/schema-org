<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FinancialProduct.
 * 
 * @method FinancialProduct setAdditionalType(Property\AdditionalType $additionalType)
 * @method FinancialProduct setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method FinancialProduct setAlternateName(Property\AlternateName $alternateName)
 * @method FinancialProduct setAreaServed(Property\AreaServed $areaServed)
 * @method FinancialProduct setAudience(Property\Audience $audience)
 * @method FinancialProduct setAvailableChannel(Property\AvailableChannel $availableChannel)
 * @method FinancialProduct setAward(Property\Award $award)
 * @method FinancialProduct setBrand(Property\Brand $brand)
 * @method FinancialProduct setCategory(Property\Category $category)
 * @method FinancialProduct setDescription(Property\Description $description)
 * @method FinancialProduct setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FinancialProduct setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method FinancialProduct setHoursAvailable(Property\HoursAvailable $hoursAvailable)
 * @method FinancialProduct setImage(Property\Image $image)
 * @method FinancialProduct setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method FinancialProduct setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method FinancialProduct setLogo(Property\Logo $logo)
 * @method FinancialProduct setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FinancialProduct setName(Property\Name $name)
 * @method FinancialProduct setOffers(Property\Offers $offers)
 * @method FinancialProduct setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FinancialProduct setProvider(Property\Provider $provider)
 * @method FinancialProduct setProviderMobility(Property\ProviderMobility $providerMobility)
 * @method FinancialProduct setReview(Property\Review $review)
 * @method FinancialProduct setSameAs(Property\SameAs $sameAs)
 * @method FinancialProduct setServiceOutput(Property\ServiceOutput $serviceOutput)
 * @method FinancialProduct setServiceType(Property\ServiceType $serviceType)
 * @method FinancialProduct setUrl(Property\Url $url)
 */
class FinancialProduct extends Service {

	/**
	 * @var Property\AnnualPercentageRate
	 */
	private $annualPercentageRate;

	/**
	 * @var Property\FeesAndCommissionsSpecification
	 */
	private $feesAndCommissionsSpecification;

	/**
	 * @var Property\InterestRate
	 */
	private $interestRate;

	/**
	 * Get annual percentage rate.
	 * 
	 * @return Property\AnnualPercentageRate
	 */
	public function getAnnualPercentageRate() {
		return $this->annualPercentageRate;
	}

	/**
	 * Get fees and commissions specification.
	 * 
	 * @return Property\FeesAndCommissionsSpecification
	 */
	public function getFeesAndCommissionsSpecification() {
		return $this->feesAndCommissionsSpecification;
	}

	/**
	 * Get interest rate.
	 * 
	 * @return Property\InterestRate
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
	 * @param Property\AnnualPercentageRate $annualPercentageRate
	 * @return FinancialProduct
	 */
	public function setAnnualPercentageRate(Property\AnnualPercentageRate $annualPercentageRate) {
		$this->annualPercentageRate = $annualPercentageRate;

		return $this;
	}

	/**
	 * Set fees and commissions specification.
	 * 
	 * @param Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification
	 * @return FinancialProduct
	 */
	public function setFeesAndCommissionsSpecification(Property\FeesAndCommissionsSpecification $feesAndCommissionsSpecification) {
		$this->feesAndCommissionsSpecification = $feesAndCommissionsSpecification;

		return $this;
	}

	/**
	 * Set interest rate.
	 * 
	 * @param Property\InterestRate $interestRate
	 * @return FinancialProduct
	 */
	public function setInterestRate(Property\InterestRate $interestRate) {
		$this->interestRate = $interestRate;

		return $this;
	}
}