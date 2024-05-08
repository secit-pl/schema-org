<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A DatedMoneySpecification represents monetary values with optional start and end dates. For example, this could represent an employee's salary over a specific period of time. Note: This type has been superseded by MonetaryAmount, use of that type is recommended.
 * 
 * @method DatedMoneySpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DatedMoneySpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DatedMoneySpecificationType setDescription(Property\DescriptionProperty $description)
 * @method DatedMoneySpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DatedMoneySpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DatedMoneySpecificationType setImage(Property\ImageProperty $image)
 * @method DatedMoneySpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DatedMoneySpecificationType setName(Property\NameProperty $name)
 * @method DatedMoneySpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DatedMoneySpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method DatedMoneySpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DatedMoneySpecificationType setUrl(Property\UrlProperty $url)
 */
class DatedMoneySpecificationType extends StructuredValueType {

	/**
	 * @var Property\AmountProperty
	 */
	private $amount;

	/**
	 * @var Property\CurrencyProperty
	 */
	private $currency;

	/**
	 * @var Property\EndDateProperty
	 */
	private $endDate;

	/**
	 * @var Property\StartDateProperty
	 */
	private $startDate;

	/**
	 * Get amount.
	 *
	 * @return Property\AmountProperty
	 */
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Get currency.
	 *
	 * @return Property\CurrencyProperty
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Get end date.
	 *
	 * @return Property\EndDateProperty
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DatedMoneySpecification';
	}

	/**
	 * Get start date.
	 *
	 * @return Property\StartDateProperty
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Set amount.
	 *
	 * @param Property\AmountProperty $amount
	 * @return DatedMoneySpecificationType
	 */
	public function setAmount(Property\AmountProperty $amount) {
		$this->amount = $amount;

		return $this;
	}

	/**
	 * Set currency.
	 *
	 * @param Property\CurrencyProperty $currency
	 * @return DatedMoneySpecificationType
	 */
	public function setCurrency(Property\CurrencyProperty $currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Set end date.
	 *
	 * @param Property\EndDateProperty $endDate
	 * @return DatedMoneySpecificationType
	 */
	public function setEndDate(Property\EndDateProperty $endDate) {
		$this->endDate = $endDate;

		return $this;
	}

	/**
	 * Set start date.
	 *
	 * @param Property\StartDateProperty $startDate
	 * @return DatedMoneySpecificationType
	 */
	public function setStartDate(Property\StartDateProperty $startDate) {
		$this->startDate = $startDate;

		return $this;
	}
}