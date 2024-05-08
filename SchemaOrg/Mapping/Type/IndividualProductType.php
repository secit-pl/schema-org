<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 * 
 * @method IndividualProductType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method IndividualProductType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IndividualProductType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method IndividualProductType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IndividualProductType setAudience(Property\AudienceProperty $audience)
 * @method IndividualProductType setAward(Property\AwardProperty $award)
 * @method IndividualProductType setBrand(Property\BrandProperty $brand)
 * @method IndividualProductType setCategory(Property\CategoryProperty $category)
 * @method IndividualProductType setColor(Property\ColorProperty $color)
 * @method IndividualProductType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method IndividualProductType setDepth(Property\DepthProperty $depth)
 * @method IndividualProductType setDescription(Property\DescriptionProperty $description)
 * @method IndividualProductType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IndividualProductType setGtin12(Property\Gtin12Property $gtin12)
 * @method IndividualProductType setGtin13(Property\Gtin13Property $gtin13)
 * @method IndividualProductType setGtin14(Property\Gtin14Property $gtin14)
 * @method IndividualProductType setGtin8(Property\Gtin8Property $gtin8)
 * @method IndividualProductType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method IndividualProductType setHeight(Property\HeightProperty $height)
 * @method IndividualProductType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IndividualProductType setImage(Property\ImageProperty $image)
 * @method IndividualProductType setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor)
 * @method IndividualProductType setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor)
 * @method IndividualProductType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method IndividualProductType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method IndividualProductType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method IndividualProductType setIsVariantOf(Property\IsVariantOfProperty $isVariantOf)
 * @method IndividualProductType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method IndividualProductType setKeywords(Property\KeywordsProperty $keywords)
 * @method IndividualProductType setLogo(Property\LogoProperty $logo)
 * @method IndividualProductType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IndividualProductType setManufacturer(Property\ManufacturerProperty $manufacturer)
 * @method IndividualProductType setMaterial(Property\MaterialProperty $material)
 * @method IndividualProductType setModel(Property\ModelProperty $model)
 * @method IndividualProductType setMpn(Property\MpnProperty $mpn)
 * @method IndividualProductType setName(Property\NameProperty $name)
 * @method IndividualProductType setOffers(Property\OffersProperty $offers)
 * @method IndividualProductType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IndividualProductType setProductID(Property\ProductIDProperty $productID)
 * @method IndividualProductType setProductionDate(Property\ProductionDateProperty $productionDate)
 * @method IndividualProductType setPurchaseDate(Property\PurchaseDateProperty $purchaseDate)
 * @method IndividualProductType setReleaseDate(Property\ReleaseDateProperty $releaseDate)
 * @method IndividualProductType setReview(Property\ReviewProperty $review)
 * @method IndividualProductType setSameAs(Property\SameAsProperty $sameAs)
 * @method IndividualProductType setSku(Property\SkuProperty $sku)
 * @method IndividualProductType setSlogan(Property\SloganProperty $slogan)
 * @method IndividualProductType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method IndividualProductType setUrl(Property\UrlProperty $url)
 * @method IndividualProductType setWeight(Property\WeightProperty $weight)
 * @method IndividualProductType setWidth(Property\WidthProperty $width)
 */
class IndividualProductType extends ProductType {

	/**
	 * @var Property\SerialNumberProperty
	 */
	private $serialNumber;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IndividualProduct';
	}

	/**
	 * Get serial number.
	 *
	 * @return Property\SerialNumberProperty
	 */
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	/**
	 * Set serial number.
	 *
	 * @param Property\SerialNumberProperty $serialNumber
	 * @return IndividualProductType
	 */
	public function setSerialNumber(Property\SerialNumberProperty $serialNumber) {
		$this->serialNumber = $serialNumber;

		return $this;
	}
}