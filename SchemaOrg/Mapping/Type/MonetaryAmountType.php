<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use PriceSpecification Types to describe the price of an Offer, Invoice, etc.
 * 
 * @method MonetaryAmountType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MonetaryAmountType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MonetaryAmountType setDescription(Property\DescriptionProperty $description)
 * @method MonetaryAmountType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MonetaryAmountType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MonetaryAmountType setImage(Property\ImageProperty $image)
 * @method MonetaryAmountType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MonetaryAmountType setName(Property\NameProperty $name)
 * @method MonetaryAmountType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MonetaryAmountType setSameAs(Property\SameAsProperty $sameAs)
 * @method MonetaryAmountType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MonetaryAmountType setUrl(Property\UrlProperty $url)
 */
class MonetaryAmountType extends StructuredValueType {

	/**
	 * @var Property\CurrencyProperty
	 */
	private $currency;

	/**
	 * @var Property\MaxValueProperty
	 */
	private $maxValue;

	/**
	 * @var Property\MinValueProperty
	 */
	private $minValue;

	/**
	 * @var Property\ValidFromProperty
	 */
	private $validFrom;

	/**
	 * @var Property\ValidThroughProperty
	 */
	private $validThrough;

	/**
	 * @var Property\ValueProperty
	 */
	private $value;

	/**
	 * Get currency.
	 *
	 * @return Property\CurrencyProperty
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Get max value.
	 *
	 * @return Property\MaxValueProperty
	 */
	public function getMaxValue() {
		return $this->maxValue;
	}

	/**
	 * Get min value.
	 *
	 * @return Property\MinValueProperty
	 */
	public function getMinValue() {
		return $this->minValue;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MonetaryAmount';
	}

	/**
	 * Get valid from.
	 *
	 * @return Property\ValidFromProperty
	 */
	public function getValidFrom() {
		return $this->validFrom;
	}

	/**
	 * Get valid through.
	 *
	 * @return Property\ValidThroughProperty
	 */
	public function getValidThrough() {
		return $this->validThrough;
	}

	/**
	 * Get value.
	 *
	 * @return Property\ValueProperty
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Set currency.
	 *
	 * @param Property\CurrencyProperty $currency
	 * @return MonetaryAmountType
	 */
	public function setCurrency(Property\CurrencyProperty $currency) {
		$this->currency = $currency;

		return $this;
	}

	/**
	 * Set max value.
	 *
	 * @param Property\MaxValueProperty $maxValue
	 * @return MonetaryAmountType
	 */
	public function setMaxValue(Property\MaxValueProperty $maxValue) {
		$this->maxValue = $maxValue;

		return $this;
	}

	/**
	 * Set min value.
	 *
	 * @param Property\MinValueProperty $minValue
	 * @return MonetaryAmountType
	 */
	public function setMinValue(Property\MinValueProperty $minValue) {
		$this->minValue = $minValue;

		return $this;
	}

	/**
	 * Set valid from.
	 *
	 * @param Property\ValidFromProperty $validFrom
	 * @return MonetaryAmountType
	 */
	public function setValidFrom(Property\ValidFromProperty $validFrom) {
		$this->validFrom = $validFrom;

		return $this;
	}

	/**
	 * Set valid through.
	 *
	 * @param Property\ValidThroughProperty $validThrough
	 * @return MonetaryAmountType
	 */
	public function setValidThrough(Property\ValidThroughProperty $validThrough) {
		$this->validThrough = $validThrough;

		return $this;
	}

	/**
	 * Set value.
	 *
	 * @param Property\ValueProperty $value
	 * @return MonetaryAmountType
	 */
	public function setValue(Property\ValueProperty $value) {
		$this->value = $value;

		return $this;
	}
}