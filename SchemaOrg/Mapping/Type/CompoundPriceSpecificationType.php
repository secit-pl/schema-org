<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A compound price specification is one that bundles multiple prices that all apply in combination for different dimensions of consumption. Use the name property of the attached unit price specification for indicating the dimension of a price component (e.g. "electricity" or "final cleaning").
 * 
 * @method CompoundPriceSpecificationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CompoundPriceSpecificationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CompoundPriceSpecificationType setDescription(Property\DescriptionProperty $description)
 * @method CompoundPriceSpecificationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CompoundPriceSpecificationType setEligibleQuantity(Property\EligibleQuantityProperty $eligibleQuantity)
 * @method CompoundPriceSpecificationType setEligibleTransactionVolume(Property\EligibleTransactionVolumeProperty $eligibleTransactionVolume)
 * @method CompoundPriceSpecificationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CompoundPriceSpecificationType setImage(Property\ImageProperty $image)
 * @method CompoundPriceSpecificationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CompoundPriceSpecificationType setMaxPrice(Property\MaxPriceProperty $maxPrice)
 * @method CompoundPriceSpecificationType setMinPrice(Property\MinPriceProperty $minPrice)
 * @method CompoundPriceSpecificationType setName(Property\NameProperty $name)
 * @method CompoundPriceSpecificationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CompoundPriceSpecificationType setPrice(Property\PriceProperty $price)
 * @method CompoundPriceSpecificationType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method CompoundPriceSpecificationType setSameAs(Property\SameAsProperty $sameAs)
 * @method CompoundPriceSpecificationType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CompoundPriceSpecificationType setUrl(Property\UrlProperty $url)
 * @method CompoundPriceSpecificationType setValidFrom(Property\ValidFromProperty $validFrom)
 * @method CompoundPriceSpecificationType setValidThrough(Property\ValidThroughProperty $validThrough)
 * @method CompoundPriceSpecificationType setValueAddedTaxIncluded(Property\ValueAddedTaxIncludedProperty $valueAddedTaxIncluded)
 */
class CompoundPriceSpecificationType extends PriceSpecificationType {

	/**
	 * @var Property\PriceComponentProperty
	 */
	private $priceComponent;

	/**
	 * @var Property\PriceTypeProperty
	 */
	private $priceType;

	/**
	 * Get price component.
	 *
	 * @return Property\PriceComponentProperty
	 */
	public function getPriceComponent() {
		return $this->priceComponent;
	}

	/**
	 * Get price type.
	 *
	 * @return Property\PriceTypeProperty
	 */
	public function getPriceType() {
		return $this->priceType;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompoundPriceSpecification';
	}

	/**
	 * Set price component.
	 *
	 * @param Property\PriceComponentProperty $priceComponent
	 * @return CompoundPriceSpecificationType
	 */
	public function setPriceComponent(Property\PriceComponentProperty $priceComponent) {
		$this->priceComponent = $priceComponent;

		return $this;
	}

	/**
	 * Set price type.
	 *
	 * @param Property\PriceTypeProperty $priceType
	 * @return CompoundPriceSpecificationType
	 */
	public function setPriceType(Property\PriceTypeProperty $priceType) {
		$this->priceType = $priceType;

		return $this;
	}
}