<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentChargeSpecification.
 * 
 * @method PaymentChargeSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method PaymentChargeSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method PaymentChargeSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method PaymentChargeSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method PaymentChargeSpecification setPrice(Property\Price $price)
 * @method PaymentChargeSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method PaymentChargeSpecification setValidFrom(Property\ValidFrom $validFrom)
 * @method PaymentChargeSpecification setValidThrough(Property\ValidThrough $validThrough)
 * @method PaymentChargeSpecification setValueAddedTaxIncluded(Property\ValueAddedTaxIncluded $valueAddedTaxIncluded)
 */
class PaymentChargeSpecification extends PriceSpecification {

	/**
	 * @var Property\AppliesToDeliveryMethod
	 */
	private $appliesToDeliveryMethod;

	/**
	 * @var Property\AppliesToPaymentMethod
	 */
	private $appliesToPaymentMethod;

	/**
	 * Get applies to delivery method.
	 * 
	 * @return Property\AppliesToDeliveryMethod
	 */
	public function getAppliesToDeliveryMethod() {
		return $this->appliesToDeliveryMethod;
	}

	/**
	 * Get applies to payment method.
	 * 
	 * @return Property\AppliesToPaymentMethod
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
	 * @param Property\AppliesToDeliveryMethod $appliesToDeliveryMethod
	 * @return PaymentChargeSpecification
	 */
	public function setAppliesToDeliveryMethod(Property\AppliesToDeliveryMethod $appliesToDeliveryMethod) {
		$this->appliesToDeliveryMethod = $appliesToDeliveryMethod;

		return $this;
	}

	/**
	 * Set applies to payment method.
	 * 
	 * @param Property\AppliesToPaymentMethod $appliesToPaymentMethod
	 * @return PaymentChargeSpecification
	 */
	public function setAppliesToPaymentMethod(Property\AppliesToPaymentMethod $appliesToPaymentMethod) {
		$this->appliesToPaymentMethod = $appliesToPaymentMethod;

		return $this;
	}
}