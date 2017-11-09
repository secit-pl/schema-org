<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PaymentChargeSpecification.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PaymentChargeSpecificationType instead.
 * 
 * @method PaymentChargeSpecification setAdditionalType(Property\AdditionalType $additionalType)
 * @method PaymentChargeSpecification setAlternateName(Property\AlternateName $alternateName)
 * @method PaymentChargeSpecification setDescription(Property\Description $description)
 * @method PaymentChargeSpecification setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PaymentChargeSpecification setEligibleQuantity(Property\EligibleQuantity $eligibleQuantity)
 * @method PaymentChargeSpecification setEligibleTransactionVolume(Property\EligibleTransactionVolume $eligibleTransactionVolume)
 * @method PaymentChargeSpecification setIdentifier(Property\Identifier $identifier)
 * @method PaymentChargeSpecification setImage(Property\Image $image)
 * @method PaymentChargeSpecification setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PaymentChargeSpecification setMaxPrice(Property\MaxPrice $maxPrice)
 * @method PaymentChargeSpecification setMinPrice(Property\MinPrice $minPrice)
 * @method PaymentChargeSpecification setName(Property\Name $name)
 * @method PaymentChargeSpecification setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PaymentChargeSpecification setPrice(Property\Price $price)
 * @method PaymentChargeSpecification setPriceCurrency(Property\PriceCurrency $priceCurrency)
 * @method PaymentChargeSpecification setSameAs(Property\SameAs $sameAs)
 * @method PaymentChargeSpecification setUrl(Property\Url $url)
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