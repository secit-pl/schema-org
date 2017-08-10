<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SomeProducts.
 * 
 * @method SomeProducts setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method SomeProducts setAdditionalType(Property\AdditionalType $additionalType)
 * @method SomeProducts setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SomeProducts setAlternateName(Property\AlternateName $alternateName)
 * @method SomeProducts setAudience(Property\Audience $audience)
 * @method SomeProducts setAward(Property\Award $award)
 * @method SomeProducts setBrand(Property\Brand $brand)
 * @method SomeProducts setCategory(Property\Category $category)
 * @method SomeProducts setColor(Property\Color $color)
 * @method SomeProducts setDepth(Property\Depth $depth)
 * @method SomeProducts setDescription(Property\Description $description)
 * @method SomeProducts setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SomeProducts setGtin12(Property\Gtin12 $gtin12)
 * @method SomeProducts setGtin13(Property\Gtin13 $gtin13)
 * @method SomeProducts setGtin14(Property\Gtin14 $gtin14)
 * @method SomeProducts setGtin8(Property\Gtin8 $gtin8)
 * @method SomeProducts setHeight(Property\Height $height)
 * @method SomeProducts setIdentifier(Property\Identifier $identifier)
 * @method SomeProducts setImage(Property\Image $image)
 * @method SomeProducts setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor)
 * @method SomeProducts setIsConsumableFor(Property\IsConsumableFor $isConsumableFor)
 * @method SomeProducts setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method SomeProducts setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method SomeProducts setItemCondition(Property\ItemCondition $itemCondition)
 * @method SomeProducts setLogo(Property\Logo $logo)
 * @method SomeProducts setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SomeProducts setManufacturer(Property\Manufacturer $manufacturer)
 * @method SomeProducts setMaterial(Property\Material $material)
 * @method SomeProducts setModel(Property\Model $model)
 * @method SomeProducts setMpn(Property\Mpn $mpn)
 * @method SomeProducts setName(Property\Name $name)
 * @method SomeProducts setOffers(Property\Offers $offers)
 * @method SomeProducts setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SomeProducts setProductID(Property\ProductID $productID)
 * @method SomeProducts setProductionDate(Property\ProductionDate $productionDate)
 * @method SomeProducts setPurchaseDate(Property\PurchaseDate $purchaseDate)
 * @method SomeProducts setReleaseDate(Property\ReleaseDate $releaseDate)
 * @method SomeProducts setReview(Property\Review $review)
 * @method SomeProducts setSameAs(Property\SameAs $sameAs)
 * @method SomeProducts setSku(Property\Sku $sku)
 * @method SomeProducts setUrl(Property\Url $url)
 * @method SomeProducts setWeight(Property\Weight $weight)
 * @method SomeProducts setWidth(Property\Width $width)
 */
class SomeProducts extends Product {

	/**
	 * @var Property\InventoryLevel
	 */
	private $inventoryLevel;

	/**
	 * Get inventory level.
	 * 
	 * @return Property\InventoryLevel
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
	 * @param Property\InventoryLevel $inventoryLevel
	 * @return SomeProducts
	 */
	public function setInventoryLevel(Property\InventoryLevel $inventoryLevel) {
		$this->inventoryLevel = $inventoryLevel;

		return $this;
	}
}