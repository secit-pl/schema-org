<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Product.
 * 
 * @method Product setAdditionalType(Property\AdditionalType $additionalType)
 * @method Product setAlternateName(Property\AlternateName $alternateName)
 * @method Product setDescription(Property\Description $description)
 * @method Product setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Product setIdentifier(Property\Identifier $identifier)
 * @method Product setImage(Property\Image $image)
 * @method Product setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Product setName(Property\Name $name)
 * @method Product setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Product setSameAs(Property\SameAs $sameAs)
 * @method Product setUrl(Property\Url $url)
 */
class Product extends Thing {

	/**
	 * @var Property\AdditionalProperty
	 */
	private $additionalProperty;

	/**
	 * @var Property\AggregateRating
	 */
	private $aggregateRating;

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\Award
	 */
	private $award;

	/**
	 * @var Property\Brand
	 */
	private $brand;

	/**
	 * @var Property\Category
	 */
	private $category;

	/**
	 * @var Property\Color
	 */
	private $color;

	/**
	 * @var Property\Depth
	 */
	private $depth;

	/**
	 * @var Property\Gtin12
	 */
	private $gtin12;

	/**
	 * @var Property\Gtin13
	 */
	private $gtin13;

	/**
	 * @var Property\Gtin14
	 */
	private $gtin14;

	/**
	 * @var Property\Gtin8
	 */
	private $gtin8;

	/**
	 * @var Property\Height
	 */
	private $height;

	/**
	 * @var Property\IsAccessoryOrSparePartFor
	 */
	private $isAccessoryOrSparePartFor;

	/**
	 * @var Property\IsConsumableFor
	 */
	private $isConsumableFor;

	/**
	 * @var Property\IsRelatedTo
	 */
	private $isRelatedTo;

	/**
	 * @var Property\IsSimilarTo
	 */
	private $isSimilarTo;

	/**
	 * @var Property\ItemCondition
	 */
	private $itemCondition;

	/**
	 * @var Property\Logo
	 */
	private $logo;

	/**
	 * @var Property\Manufacturer
	 */
	private $manufacturer;

	/**
	 * @var Property\Material
	 */
	private $material;

	/**
	 * @var Property\Model
	 */
	private $model;

	/**
	 * @var Property\Mpn
	 */
	private $mpn;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * @var Property\ProductID
	 */
	private $productID;

	/**
	 * @var Property\ProductionDate
	 */
	private $productionDate;

	/**
	 * @var Property\PurchaseDate
	 */
	private $purchaseDate;

	/**
	 * @var Property\ReleaseDate
	 */
	private $releaseDate;

	/**
	 * @var Property\Review
	 */
	private $review;

	/**
	 * @var Property\Sku
	 */
	private $sku;

	/**
	 * @var Property\Weight
	 */
	private $weight;

	/**
	 * @var Property\Width
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
	 * @return Property\AggregateRating
	 */
	public function getAggregateRating() {
		return $this->aggregateRating;
	}

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

	/**
	 * Get award.
	 * 
	 * @return Property\Award
	 */
	public function getAward() {
		return $this->award;
	}

	/**
	 * Get brand.
	 * 
	 * @return Property\Brand
	 */
	public function getBrand() {
		return $this->brand;
	}

	/**
	 * Get category.
	 * 
	 * @return Property\Category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Get color.
	 * 
	 * @return Property\Color
	 */
	public function getColor() {
		return $this->color;
	}

	/**
	 * Get depth.
	 * 
	 * @return Property\Depth
	 */
	public function getDepth() {
		return $this->depth;
	}

	/**
	 * Get gtin12.
	 * 
	 * @return Property\Gtin12
	 */
	public function getGtin12() {
		return $this->gtin12;
	}

	/**
	 * Get gtin13.
	 * 
	 * @return Property\Gtin13
	 */
	public function getGtin13() {
		return $this->gtin13;
	}

	/**
	 * Get gtin14.
	 * 
	 * @return Property\Gtin14
	 */
	public function getGtin14() {
		return $this->gtin14;
	}

	/**
	 * Get gtin8.
	 * 
	 * @return Property\Gtin8
	 */
	public function getGtin8() {
		return $this->gtin8;
	}

	/**
	 * Get height.
	 * 
	 * @return Property\Height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Get is accessory or spare part for.
	 * 
	 * @return Property\IsAccessoryOrSparePartFor
	 */
	public function getIsAccessoryOrSparePartFor() {
		return $this->isAccessoryOrSparePartFor;
	}

	/**
	 * Get is consumable for.
	 * 
	 * @return Property\IsConsumableFor
	 */
	public function getIsConsumableFor() {
		return $this->isConsumableFor;
	}

	/**
	 * Get is related to.
	 * 
	 * @return Property\IsRelatedTo
	 */
	public function getIsRelatedTo() {
		return $this->isRelatedTo;
	}

	/**
	 * Get is similar to.
	 * 
	 * @return Property\IsSimilarTo
	 */
	public function getIsSimilarTo() {
		return $this->isSimilarTo;
	}

	/**
	 * Get item condition.
	 * 
	 * @return Property\ItemCondition
	 */
	public function getItemCondition() {
		return $this->itemCondition;
	}

	/**
	 * Get logo.
	 * 
	 * @return Property\Logo
	 */
	public function getLogo() {
		return $this->logo;
	}

	/**
	 * Get manufacturer.
	 * 
	 * @return Property\Manufacturer
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}

	/**
	 * Get material.
	 * 
	 * @return Property\Material
	 */
	public function getMaterial() {
		return $this->material;
	}

	/**
	 * Get model.
	 * 
	 * @return Property\Model
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * Get mpn.
	 * 
	 * @return Property\Mpn
	 */
	public function getMpn() {
		return $this->mpn;
	}

	/**
	 * Get offers.
	 * 
	 * @return Property\Offers
	 */
	public function getOffers() {
		return $this->offers;
	}

	/**
	 * Get productid.
	 * 
	 * @return Property\ProductID
	 */
	public function getProductID() {
		return $this->productID;
	}

	/**
	 * Get production date.
	 * 
	 * @return Property\ProductionDate
	 */
	public function getProductionDate() {
		return $this->productionDate;
	}

	/**
	 * Get purchase date.
	 * 
	 * @return Property\PurchaseDate
	 */
	public function getPurchaseDate() {
		return $this->purchaseDate;
	}

	/**
	 * Get release date.
	 * 
	 * @return Property\ReleaseDate
	 */
	public function getReleaseDate() {
		return $this->releaseDate;
	}

	/**
	 * Get review.
	 * 
	 * @return Property\Review
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
	 * @return Property\Sku
	 */
	public function getSku() {
		return $this->sku;
	}

	/**
	 * Get weight.
	 * 
	 * @return Property\Weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Get width.
	 * 
	 * @return Property\Width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Set additional property.
	 * 
	 * @param Property\AdditionalProperty $additionalProperty
	 * @return Product
	 */
	public function setAdditionalProperty(Property\AdditionalProperty $additionalProperty) {
		$this->additionalProperty = $additionalProperty;

		return $this;
	}

	/**
	 * Set aggregate rating.
	 * 
	 * @param Property\AggregateRating $aggregateRating
	 * @return Product
	 */
	public function setAggregateRating(Property\AggregateRating $aggregateRating) {
		$this->aggregateRating = $aggregateRating;

		return $this;
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return Product
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set award.
	 * 
	 * @param Property\Award $award
	 * @return Product
	 */
	public function setAward(Property\Award $award) {
		$this->award = $award;

		return $this;
	}

	/**
	 * Set brand.
	 * 
	 * @param Property\Brand $brand
	 * @return Product
	 */
	public function setBrand(Property\Brand $brand) {
		$this->brand = $brand;

		return $this;
	}

	/**
	 * Set category.
	 * 
	 * @param Property\Category $category
	 * @return Product
	 */
	public function setCategory(Property\Category $category) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Set color.
	 * 
	 * @param Property\Color $color
	 * @return Product
	 */
	public function setColor(Property\Color $color) {
		$this->color = $color;

		return $this;
	}

	/**
	 * Set depth.
	 * 
	 * @param Property\Depth $depth
	 * @return Product
	 */
	public function setDepth(Property\Depth $depth) {
		$this->depth = $depth;

		return $this;
	}

	/**
	 * Set gtin12.
	 * 
	 * @param Property\Gtin12 $gtin12
	 * @return Product
	 */
	public function setGtin12(Property\Gtin12 $gtin12) {
		$this->gtin12 = $gtin12;

		return $this;
	}

	/**
	 * Set gtin13.
	 * 
	 * @param Property\Gtin13 $gtin13
	 * @return Product
	 */
	public function setGtin13(Property\Gtin13 $gtin13) {
		$this->gtin13 = $gtin13;

		return $this;
	}

	/**
	 * Set gtin14.
	 * 
	 * @param Property\Gtin14 $gtin14
	 * @return Product
	 */
	public function setGtin14(Property\Gtin14 $gtin14) {
		$this->gtin14 = $gtin14;

		return $this;
	}

	/**
	 * Set gtin8.
	 * 
	 * @param Property\Gtin8 $gtin8
	 * @return Product
	 */
	public function setGtin8(Property\Gtin8 $gtin8) {
		$this->gtin8 = $gtin8;

		return $this;
	}

	/**
	 * Set height.
	 * 
	 * @param Property\Height $height
	 * @return Product
	 */
	public function setHeight(Property\Height $height) {
		$this->height = $height;

		return $this;
	}

	/**
	 * Set is accessory or spare part for.
	 * 
	 * @param Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor
	 * @return Product
	 */
	public function setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor) {
		$this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;

		return $this;
	}

	/**
	 * Set is consumable for.
	 * 
	 * @param Property\IsConsumableFor $isConsumableFor
	 * @return Product
	 */
	public function setIsConsumableFor(Property\IsConsumableFor $isConsumableFor) {
		$this->isConsumableFor = $isConsumableFor;

		return $this;
	}

	/**
	 * Set is related to.
	 * 
	 * @param Property\IsRelatedTo $isRelatedTo
	 * @return Product
	 */
	public function setIsRelatedTo(Property\IsRelatedTo $isRelatedTo) {
		$this->isRelatedTo = $isRelatedTo;

		return $this;
	}

	/**
	 * Set is similar to.
	 * 
	 * @param Property\IsSimilarTo $isSimilarTo
	 * @return Product
	 */
	public function setIsSimilarTo(Property\IsSimilarTo $isSimilarTo) {
		$this->isSimilarTo = $isSimilarTo;

		return $this;
	}

	/**
	 * Set item condition.
	 * 
	 * @param Property\ItemCondition $itemCondition
	 * @return Product
	 */
	public function setItemCondition(Property\ItemCondition $itemCondition) {
		$this->itemCondition = $itemCondition;

		return $this;
	}

	/**
	 * Set logo.
	 * 
	 * @param Property\Logo $logo
	 * @return Product
	 */
	public function setLogo(Property\Logo $logo) {
		$this->logo = $logo;

		return $this;
	}

	/**
	 * Set manufacturer.
	 * 
	 * @param Property\Manufacturer $manufacturer
	 * @return Product
	 */
	public function setManufacturer(Property\Manufacturer $manufacturer) {
		$this->manufacturer = $manufacturer;

		return $this;
	}

	/**
	 * Set material.
	 * 
	 * @param Property\Material $material
	 * @return Product
	 */
	public function setMaterial(Property\Material $material) {
		$this->material = $material;

		return $this;
	}

	/**
	 * Set model.
	 * 
	 * @param Property\Model $model
	 * @return Product
	 */
	public function setModel(Property\Model $model) {
		$this->model = $model;

		return $this;
	}

	/**
	 * Set mpn.
	 * 
	 * @param Property\Mpn $mpn
	 * @return Product
	 */
	public function setMpn(Property\Mpn $mpn) {
		$this->mpn = $mpn;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return Product
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set productid.
	 * 
	 * @param Property\ProductID $productID
	 * @return Product
	 */
	public function setProductID(Property\ProductID $productID) {
		$this->productID = $productID;

		return $this;
	}

	/**
	 * Set production date.
	 * 
	 * @param Property\ProductionDate $productionDate
	 * @return Product
	 */
	public function setProductionDate(Property\ProductionDate $productionDate) {
		$this->productionDate = $productionDate;

		return $this;
	}

	/**
	 * Set purchase date.
	 * 
	 * @param Property\PurchaseDate $purchaseDate
	 * @return Product
	 */
	public function setPurchaseDate(Property\PurchaseDate $purchaseDate) {
		$this->purchaseDate = $purchaseDate;

		return $this;
	}

	/**
	 * Set release date.
	 * 
	 * @param Property\ReleaseDate $releaseDate
	 * @return Product
	 */
	public function setReleaseDate(Property\ReleaseDate $releaseDate) {
		$this->releaseDate = $releaseDate;

		return $this;
	}

	/**
	 * Set review.
	 * 
	 * @param Property\Review $review
	 * @return Product
	 */
	public function setReview(Property\Review $review) {
		$this->review = $review;

		return $this;
	}

	/**
	 * Set sku.
	 * 
	 * @param Property\Sku $sku
	 * @return Product
	 */
	public function setSku(Property\Sku $sku) {
		$this->sku = $sku;

		return $this;
	}

	/**
	 * Set weight.
	 * 
	 * @param Property\Weight $weight
	 * @return Product
	 */
	public function setWeight(Property\Weight $weight) {
		$this->weight = $weight;

		return $this;
	}

	/**
	 * Set width.
	 * 
	 * @param Property\Width $width
	 * @return Product
	 */
	public function setWidth(Property\Width $width) {
		$this->width = $width;

		return $this;
	}
}