<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The costs of settling the payment using a particular payment method.
 * 
 * @method PaymentChargeSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PaymentChargeSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PaymentChargeSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method PaymentChargeSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PaymentChargeSpecificationType setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity)
 * @method PaymentChargeSpecificationType setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume)
 * @method PaymentChargeSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PaymentChargeSpecificationType setImage(Property\ImageProperty $image)
 * @method PaymentChargeSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PaymentChargeSpecificationType setMaxPrice(Property\MaxPriceProperty $maxPrice)
 * @method PaymentChargeSpecificationType setMinPrice(Property\MinPriceProperty $minPrice)
 * @method PaymentChargeSpecificationType setName(Property\NameProperty $name)
 * @method PaymentChargeSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PaymentChargeSpecificationType setPrice(Property\PriceProperty $price)
 * @method PaymentChargeSpecificationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method PaymentChargeSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method PaymentChargeSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PaymentChargeSpecificationType setUrl(Property\UrlProperty $url)
 * @method PaymentChargeSpecificationType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method PaymentChargeSpecificationType setValidThrough(Property\ValidThroughProperty $validThrough)
 * @method PaymentChargeSpecificationType setValueAddedTaxIncluded(Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded)
 */
class PaymentChargeSpecificationType extends PriceSpecificationType {

	/**
	 * @var Property\AppliesToDeliveryMethodProperty
	 */
	private $appliesToDeliveryMethod;

	/**
	 * @var Property\AppliesToPaymentMethodProperty
	 */
	private $appliesToPaymentMethod;

	/**
	 * Get applies to delivery method.
	 *
	 * @return Property\AppliesToDeliveryMethodProperty
	 */
	public function getAppliesToDeliveryMethod() {
		return $this->appliesToDeliveryMethod;
	}

	/**
	 * Get applies to payment method.
	 *
	 * @return Property\AppliesToPaymentMethodProperty
	 */
	public function getAppliesToPaymentMethod() {
		return $this->appliesToPaymentMethod;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PaymentChargeSpecification';
	}

	/**
	 * Set applies to delivery method.
	 *
	 * @param Property\AppliesToDeliveryMethodProperty $appliesToDeliveryMethod
	 * @return PaymentChargeSpecificationType
	 */
	public function setAppliesToDeliveryMethod(Property\AppliesToDeliveryMethodProperty $appliesToDeliveryMethod) {
		$this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

		return $this;
	}

	/**
	 * Set applies to payment method.
	 *
	 * @param Property\AppliesToPaymentMethodProperty $appliesToPaymentMethod
	 * @return PaymentChargeSpecificationType
	 */
	public function setAppliesToPaymentMethod(Property\AppliesToPaymentMethodProperty $appliesToPaymentMethod) {
		$this->appliesToPaymentMethod = $appliesToPaymentMethod;

		return $this;
	}
}