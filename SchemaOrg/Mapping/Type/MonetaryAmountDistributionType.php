<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A statistical distribution of monetary amounts.
 * 
 * @method MonetaryAmountDistributionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MonetaryAmountDistributionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MonetaryAmountDistributionType setDescription(Property\DescriptionProperty $description)
 * @method MonetaryAmountDistributionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MonetaryAmountDistributionType setDuration(Property\DurationProperty $duration)
 * @method MonetaryAmountDistributionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MonetaryAmountDistributionType setImage(Property\ImageProperty $image)
 * @method MonetaryAmountDistributionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MonetaryAmountDistributionType setMedian(Property\MedianProperty $median)
 * @method MonetaryAmountDistributionType setName(Property\NameProperty $name)
 * @method MonetaryAmountDistributionType setPercentile10(Property\Percentile10Property $percentile10)
 * @method MonetaryAmountDistributionType setPercentile25(Property\Percentile25Property $percentile25)
 * @method MonetaryAmountDistributionType setPercentile75(Property\Percentile75Property $percentile75)
 * @method MonetaryAmountDistributionType setPercentile90(Property\Percentile90Property $percentile90)
 * @method MonetaryAmountDistributionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MonetaryAmountDistributionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MonetaryAmountDistributionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MonetaryAmountDistributionType setUrl(Property\UrlProperty $url)
 */
class MonetaryAmountDistributionType extends QuantitativeValueDistributionType {

	/**
	 * @var Property\CurrencyProperty
	 */
	private $currency;

	/**
	 * Get currency.
	 *
	 * @return Property\CurrencyProperty
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MonetaryAmountDistribution';
	}

	/**
	 * Set currency.
	 *
	 * @param Property\CurrencyProperty $currency
	 * @return MonetaryAmountDistributionType
	 */
	public function setCurrency(Property\CurrencyProperty $currency) {
		$this->currency = $currency;

		return $this;
	}
}