<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProductType.
 * 
 * @method ProductType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProductType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProductType setDescription(Property\DescriptionProperty $description)
 * @method ProductType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProductType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProductType setImage(Property\ImageProperty $image)
 * @method ProductType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProductType setName(Property\NameProperty $name)
 * @method ProductType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProductType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProductType setUrl(Property\UrlProperty $url)
 */
class ProductType extends ThingType {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\AggregateRatingProperty
	 */
	private $aggregateRating;

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\AwardProperty
	 */
	private $award;

	/**
	 * @var Property\BrandProperty
	 */
	private $brand;

	/**
	 * @var Property\CategoryProperty
	 */
	private $category;

	/**
	 * @var Property\ColorProperty
	 */
	private $color;

	/**
	 * @var Property\DepthProperty
	 */
	private $depth;

	/**
	 * @var Property\Gtin12Property
	 */
	private $gtin12;

	/**
	 * @var Property\Gtin13Property
	 */
	private $gtin13;

	/**
	 * @var Property\Gtin14Property
	 */
	private $gtin14;

	/**
	 * @var Property\Gtin8Property
	 */
	private $gtin8;

	/**
	 * @var Property\HeightProperty
	 */
	private $height;

	/**
	 * @var Property\IsAccessoryOrSparePartForProperty
	 */
	private $isAccessoryOrSparePartFor;

	/**
	 * @var Property\IsConsumableForProperty
	 */
	private $isConsumableFor;

	/**
	 * @var Property\IsRelatedToProperty
	 */
	private $isRelatedTo;

	/**
	 * @var Property\IsSimilarToProperty
	 */
	private $isSimilarTo;

	/**
	 * @var Property\ItemConditionProperty
	 */
	private $itemCondition;

	/**
	 * @var Property\LogoProperty
	 */
	private $logo;

	/**
	 * @var Property\ManufacturerProperty
	 */
	private $manufacturer;

	/**
	 * @var Property\MaterialProperty
	 */
	private $material;

	/**
	 * @var Property\ModelProperty
	 */
	private $model;

	/**
	 * @var Property\MpnProperty
	 */
	private $mpn;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\ProductIDProperty
	 */
	private $productID;

	/**
	 * @var Property\ProductionDateProperty
	 */
	private $productionDate;

	/**
	 * @var Property\PurchaseDateProperty
	 */
	private $purchaseDate;

	/**
	 * @var Property\ReleaseDateProperty
	 */
	private $releaseDate;

	/**
	 * @var Property\ReviewProperty
	 */
	private $review;

	/**
	 * @var Property\SkuProperty
	 */
	private $sku;

	/**
	 * @var Property\WeightProperty
	 */
	private $weight;

	/**
	 * @var Property\WidthProperty
	 */
	private $width;

	/**
	 * Get additional property.
	 * 
	 * @return Property\AdditionalProperty
	 */
	public function getAdditionalProperty() {
		return $this->additionalProperty;
	}

	/**
	 * Get aggregate rating.
	 * 
	 * @return Property\AggregateRatingProperty
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\AwardProperty
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\BrandProperty
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\CategoryProperty
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get color.
	 * 
	 * @return Property\ColorProperty
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Get depth.
	 * 
	 * @return Property\DepthProperty
	 */
	public function getDepth() {
		return $this->depth;
	}

	/**
	 * Get gtin12.
	 * 
	 * @return Property\Gtin12Property
	 */
	public function getGtin12() {
		return $this->gtin12;
	}

	/**
	 * Get gtin13.
	 * 
	 * @return Property\Gtin13Property
	 */
	public function getGtin13() {
		return $this->gtin13;
	}

	/**
	 * Get gtin14.
	 * 
	 * @return Property\Gtin14Property
	 */
	public function getGtin14() {
		return $this->gtin14;
	}

	/**
	 * Get gtin8.
	 * 
	 * @return Property\Gtin8Property
	 */
	public function getGtin8() {
		return $this->gtin8;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\HeightProperty
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get is accessory or spare part for.
	 * 
	 * @return Property\IsAccessoryOrSparePartForProperty
	 */
	public function getIsAccessoryOrSparePartFor() {
		return $this->isAccessoryOrSparePartFor;
	}

	/**
	 * Get is consumable for.
	 * 
	 * @return Property\IsConsumableForProperty
	 */
	public function getIsConsumableFor() {
		return $this->isConsumableFor;
	}

	/**
	 * Get is related to.
	 * 
	 * @return Property\IsRelatedToProperty
	 */
	public function getIsRelatedTo() {
		return $this->isRelatedTo;
	}

	/**
	 * Get is similar to.
	 * 
	 * @return Property\IsSimilarToProperty
	 */
	public function getIsSimilarTo() {
		return $this->isSimilarTo;
	}

	/**
	 * Get item condition.
	 * 
	 * @return Property\ItemConditionProperty
	 */
	public function getItemCondition() {
		return $this->itemCondition;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\LogoProperty
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get manufacturer.
	 * 
	 * @return Property\ManufacturerProperty
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * Get material.
	 * 
	 * @return Property\MaterialProperty
	 */
	public function getMaterial() {
		return $this->material;
	}

	/**
	 * Get model.
	 * 
	 * @return Property\ModelProperty
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * Get mpn.
	 * 
	 * @return Property\MpnProperty
	 */
	public function getMpn() {
		return $this->mpn;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\OffersProperty
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get productid.
	 * 
	 * @return Property\ProductIDProperty
	 */
	public function getProductID() {
		return $this->productID;
	}

	/**
	 * Get production date.
	 * 
	 * @return Property\ProductionDateProperty
	 */
	public function getProductionDate() {
		return $this->productionDate;
	}

	/**
	 * Get purchase date.
	 * 
	 * @return Property\PurchaseDateProperty
	 */
	public function getPurchaseDate() {
		return $this->purchaseDate;
	}

	/**
	 * Get release date.
	 * 
	 * @return Property\ReleaseDateProperty
	 */
	public function getReleaseDate() {
		return $this->releaseDate;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\ReviewProperty
	 */
	public function getReview() {
		return $this->review;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Product';
	}

	/**
	 * Get sku.
	 * 
	 * @return Property\SkuProperty
	 */
	public function getSku() {
		return $this->sku;
	}

	/**
	 * Get weight.
	 * 
	 * @return Property\WeightProperty
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Get width.
	 * 
	 * @return Property\WidthProperty
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return ProductType
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRatingProperty $aggregateRating
	 * @return ProductType
	 */
	public function setAggregateRating(Property\AggregateRatingProperty $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\AudienceProperty $audience
	 * @return ProductType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\AwardProperty $award
	 * @return ProductType
	 */
	public function setAward(Property\AwardProperty $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\BrandProperty $brand
	 * @return ProductType
	 */
	public function setBrand(Property\BrandProperty $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\CategoryProperty $category
	 * @return ProductType
	 */
	public function setCategory(Property\CategoryProperty $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set color.
	 * 
	 * @param Property\ColorProperty $color
	 * @return ProductType
	 */
	public function setColor(Property\ColorProperty $color) {
		$this->color = $color;

		return $this;
	}

	/**
	 * Set depth.
	 * 
	 * @param Property\DepthProperty $depth
	 * @return ProductType
	 */
	public function setDepth(Property\DepthProperty $depth) {
		$this->depth = $depth;

		return $this;
	}

	/**
	 * Set gtin12.
	 * 
	 * @param Property\Gtin12Property $gtin12
	 * @return ProductType
	 */
	public function setGtin12(Property\Gtin12Property $gtin12) {
		$this->gtin12 = $gtin12;

		return $this;
	}

	/**
	 * Set gtin13.
	 * 
	 * @param Property\Gtin13Property $gtin13
	 * @return ProductType
	 */
	public function setGtin13(Property\Gtin13Property $gtin13) {
		$this->gtin13 = $gtin13;

		return $this;
	}

	/**
	 * Set gtin14.
	 * 
	 * @param Property\Gtin14Property $gtin14
	 * @return ProductType
	 */
	public function setGtin14(Property\Gtin14Property $gtin14) {
		$this->gtin14 = $gtin14;

		return $this;
	}

	/**
	 * Set gtin8.
	 * 
	 * @param Property\Gtin8Property $gtin8
	 * @return ProductType
	 */
	public function setGtin8(Property\Gtin8Property $gtin8) {
		$this->gtin8 = $gtin8;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\HeightProperty $height
	 * @return ProductType
	 */
	public function setHeight(Property\HeightProperty $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set is accessory or spare part for.
	 * 
	 * @param Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor
	 * @return ProductType
	 */
	public function setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor) {
		$this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;

		return $this;
	}

	/**
	 * Set is consumable for.
	 * 
	 * @param Property\IsConsumableForProperty $isConsumableFor
	 * @return ProductType
	 */
	public function setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor) {
		$this->isConsumableFor = $isConsumableFor;

		return $this;
	}

	/**
	 * Set is related to.
	 * 
	 * @param Property\IsRelatedToProperty $isRelatedTo
	 * @return ProductType
	 */
	public function setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo) {
		$this->isRelatedTo = $isRelatedTo;

		return $this;
	}

	/**
	 * Set is similar to.
	 * 
	 * @param Property\IsSimilarToProperty $isSimilarTo
	 * @return ProductType
	 */
	public function setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo) {
		$this->isSimilarTo = $isSimilarTo;

		return $this;
	}

	/**
	 * Set item condition.
	 * 
	 * @param Property\ItemConditionProperty $itemCondition
	 * @return ProductType
	 */
	public function setItemCondition(Property\ItemConditionProperty $itemCondition) {
		$this->itemCondition = $itemCondition;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\LogoProperty $logo
	 * @return ProductType
	 */
	public function setLogo(Property\LogoProperty $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set manufacturer.
	 * 
	 * @param Property\ManufacturerProperty $manufacturer
	 * @return ProductType
	 */
	public function setManufacturer(Property\ManufacturerProperty $manufacturer) {
		$this->manufacturer = $manufacturer;

		return $this;
	}

	/**
	 * Set material.
	 * 
	 * @param Property\MaterialProperty $material
	 * @return ProductType
	 */
	public function setMaterial(Property\MaterialProperty $material) {
		$this->material = $material;

		return $this;
	}

	/**
	 * Set model.
	 * 
	 * @param Property\ModelProperty $model
	 * @return ProductType
	 */
	public function setModel(Property\ModelProperty $model) {
		$this->model = $model;

		return $this;
	}

	/**
	 * Set mpn.
	 * 
	 * @param Property\MpnProperty $mpn
	 * @return ProductType
	 */
	public function setMpn(Property\MpnProperty $mpn) {
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\OffersProperty $offers
	 * @return ProductType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set productid.
	 * 
	 * @param Property\ProductIDProperty $productID
	 * @return ProductType
	 */
	public function setProductID(Property\ProductIDProperty $productID) {
		$this->productID = $productID;

		return $this;
	}

	/**
	 * Set production date.
	 * 
	 * @param Property\ProductionDateProperty $productionDate
	 * @return ProductType
	 */
	public function setProductionDate(Property\ProductionDateProperty $productionDate) {
		$this->productionDate = $productionDate;

		return $this;
	}

	/**
	 * Set purchase date.
	 * 
	 * @param Property\PurchaseDateProperty $purchaseDate
	 * @return ProductType
	 */
	public function setPurchaseDate(Property\PurchaseDateProperty $purchaseDate) {
		$this->purchaseDate = $purchaseDate;

		return $this;
	}

	/**
	 * Set release date.
	 * 
	 * @param Property\ReleaseDateProperty $releaseDate
	 * @return ProductType
	 */
	public function setReleaseDate(Property\ReleaseDateProperty $releaseDate) {
		$this->releaseDate = $releaseDate;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\ReviewProperty $review
	 * @return ProductType
	 */
	public function setReview(Property\ReviewProperty $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set sku.
	 * 
	 * @param Property\SkuProperty $sku
	 * @return ProductType
	 */
	public function setSku(Property\SkuProperty $sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Set weight.
	 * 
	 * @param Property\WeightProperty $weight
	 * @return ProductType
	 */
	public function setWeight(Property\WeightProperty $weight) {
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Set width.
	 * 
	 * @param Property\WidthProperty $width
	 * @return ProductType
	 */
	public function setWidth(Property\WidthProperty $width) {
		$this->width = $width;

		return $this;
	}
}