<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ProductModel.
 * 
 * @method ProductModel setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ProductModel setAdditionalType(Property\AdditionalType $additionalType)
 * @method ProductModel setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ProductModel setAlternateName(Property\AlternateName $alternateName)
 * @method ProductModel setAudience(Property\Audience $audience)
 * @method ProductModel setAward(Property\Award $award)
 * @method ProductModel setBrand(Property\Brand $brand)
 * @method ProductModel setCategory(Property\Category $category)
 * @method ProductModel setColor(Property\Color $color)
 * @method ProductModel setDepth(Property\Depth $depth)
 * @method ProductModel setDescription(Property\Description $description)
 * @method ProductModel setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ProductModel setGtin12(Property\Gtin12 $gtin12)
 * @method ProductModel setGtin13(Property\Gtin13 $gtin13)
 * @method ProductModel setGtin14(Property\Gtin14 $gtin14)
 * @method ProductModel setGtin8(Property\Gtin8 $gtin8)
 * @method ProductModel setHeight(Property\Height $height)
 * @method ProductModel setIdentifier(Property\Identifier $identifier)
 * @method ProductModel setImage(Property\Image $image)
 * @method ProductModel setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor)
 * @method ProductModel setIsConsumableFor(Property\IsConsumableFor $isConsumableFor)
 * @method ProductModel setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method ProductModel setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method ProductModel setItemCondition(Property\ItemCondition $itemCondition)
 * @method ProductModel setLogo(Property\Logo $logo)
 * @method ProductModel setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ProductModel setManufacturer(Property\Manufacturer $manufacturer)
 * @method ProductModel setMaterial(Property\Material $material)
 * @method ProductModel setModel(Property\Model $model)
 * @method ProductModel setMpn(Property\Mpn $mpn)
 * @method ProductModel setName(Property\Name $name)
 * @method ProductModel setOffers(Property\Offers $offers)
 * @method ProductModel setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ProductModel setProductID(Property\ProductID $productID)
 * @method ProductModel setProductionDate(Property\ProductionDate $productionDate)
 * @method ProductModel setPurchaseDate(Property\PurchaseDate $purchaseDate)
 * @method ProductModel setReleaseDate(Property\ReleaseDate $releaseDate)
 * @method ProductModel setReview(Property\Review $review)
 * @method ProductModel setSameAs(Property\SameAs $sameAs)
 * @method ProductModel setSku(Property\Sku $sku)
 * @method ProductModel setUrl(Property\Url $url)
 * @method ProductModel setWeight(Property\Weight $weight)
 * @method ProductModel setWidth(Property\Width $width)
 */
class ProductModel extends Product {

	/**
	 * @var Property\IsVariantOf
	 */
	private $isVariantOf;

	/**
	 * @var Property\PredecessorOf
	 */
	private $predecessorOf;

	/**
	 * @var Property\SuccessorOf
	 */
	private $successorOf;

	/**
	 * Get is variant of.
	 * 
	 * @return Property\IsVariantOf
	 */
	public function getIsVariantOf() {
		return $this->isVariantOf;
	}

	/**
	 * Get predecessor of.
	 * 
	 * @return Property\PredecessorOf
	 */
	public function getPredecessorOf() {
		return $this->predecessorOf;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ProductModel';
	}

	/**
	 * Get successor of.
	 * 
	 * @return Property\SuccessorOf
	 */
	public function getSuccessorOf() {
		return $this->successorOf;
	}

	/**
	 * Set is variant of.
	 * 
	 * @param Property\IsVariantOf $isVariantOf
	 * @return ProductModel
	 */
	public function setIsVariantOf(Property\IsVariantOf $isVariantOf) {
		$this->isVariantOf = $isVariantOf;

		return $this;
	}

	/**
	 * Set predecessor of.
	 * 
	 * @param Property\PredecessorOf $predecessorOf
	 * @return ProductModel
	 */
	public function setPredecessorOf(Property\PredecessorOf $predecessorOf) {
		$this->predecessorOf = $predecessorOf;

		return $this;
	}

	/**
	 * Set successor of.
	 * 
	 * @param Property\SuccessorOf $successorOf
	 * @return ProductModel
	 */
	public function setSuccessorOf(Property\SuccessorOf $successorOf) {
		$this->successorOf = $successorOf;

		return $this;
	}
}