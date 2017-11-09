<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SomeProductsType.
 * 
 * @method SomeProductsType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SomeProductsType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SomeProductsType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SomeProductsType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SomeProductsType setAudience(Property\AudienceProperty $audience)
 * @method SomeProductsType setAward(Property\AwardProperty $award)
 * @method SomeProductsType setBrand(Property\BrandProperty $brand)
 * @method SomeProductsType setCategory(Property\CategoryProperty $category)
 * @method SomeProductsType setColor(Property\ColorProperty $color)
 * @method SomeProductsType setDepth(Property\DepthProperty $depth)
 * @method SomeProductsType setDescription(Property\DescriptionProperty $description)
 * @method SomeProductsType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SomeProductsType setGtin12(Property\Gtin12Property $gtin12)
 * @method SomeProductsType setGtin13(Property\Gtin13Property $gtin13)
 * @method SomeProductsType setGtin14(Property\Gtin14Property $gtin14)
 * @method SomeProductsType setGtin8(Property\Gtin8Property $gtin8)
 * @method SomeProductsType setHeight(Property\HeightProperty $height)
 * @method SomeProductsType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SomeProductsType setImage(Property\ImageProperty $image)
 * @method SomeProductsType setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor)
 * @method SomeProductsType setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor)
 * @method SomeProductsType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method SomeProductsType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method SomeProductsType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method SomeProductsType setLogo(Property\LogoProperty $logo)
 * @method SomeProductsType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SomeProductsType setManufacturer(Property\ManufacturerProperty $manufacturer)
 * @method SomeProductsType setMaterial(Property\MaterialProperty $material)
 * @method SomeProductsType setModel(Property\ModelProperty $model)
 * @method SomeProductsType setMpn(Property\MpnProperty $mpn)
 * @method SomeProductsType setName(Property\NameProperty $name)
 * @method SomeProductsType setOffers(Property\OffersProperty $offers)
 * @method SomeProductsType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SomeProductsType setProductID(Property\ProductIDProperty $productID)
 * @method SomeProductsType setProductionDate(Property\ProductionDateProperty $productionDate)
 * @method SomeProductsType setPurchaseDate(Property\PurchaseDateProperty $purchaseDate)
 * @method SomeProductsType setReleaseDate(Property\ReleaseDateProperty $releaseDate)
 * @method SomeProductsType setReview(Property\ReviewProperty $review)
 * @method SomeProductsType setSameAs(Property\SameAsProperty $sameAs)
 * @method SomeProductsType setSku(Property\SkuProperty $sku)
 * @method SomeProductsType setUrl(Property\UrlProperty $url)
 * @method SomeProductsType setWeight(Property\WeightProperty $weight)
 * @method SomeProductsType setWidth(Property\WidthProperty $width)
 */
class SomeProductsType extends ProductType {

	/**
	 * @var Property\InventoryLevelProperty
	 */
	private $inventoryLevel;

	/**
	 * Get inventory level.
	 * 
	 * @return Property\InventoryLevelProperty
	 */
	public function getInventoryLevel() {
		return $this->inventoryLevel;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SomeProducts';
	}

	/**
	 * Set inventory level.
	 * 
	 * @param Property\InventoryLevelProperty $inventoryLevel
	 * @return SomeProductsType
	 */
	public function setInventoryLevel(Property\InventoryLevelProperty $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}
}