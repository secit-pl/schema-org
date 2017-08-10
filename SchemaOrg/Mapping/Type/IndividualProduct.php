<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IndividualProduct.
 * 
 * @method IndividualProduct setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method IndividualProduct setAdditionalType(Property\AdditionalType $additionalType)
 * @method IndividualProduct setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method IndividualProduct setAlternateName(Property\AlternateName $alternateName)
 * @method IndividualProduct setAudience(Property\Audience $audience)
 * @method IndividualProduct setAward(Property\Award $award)
 * @method IndividualProduct setBrand(Property\Brand $brand)
 * @method IndividualProduct setCategory(Property\Category $category)
 * @method IndividualProduct setColor(Property\Color $color)
 * @method IndividualProduct setDepth(Property\Depth $depth)
 * @method IndividualProduct setDescription(Property\Description $description)
 * @method IndividualProduct setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method IndividualProduct setGtin12(Property\Gtin12 $gtin12)
 * @method IndividualProduct setGtin13(Property\Gtin13 $gtin13)
 * @method IndividualProduct setGtin14(Property\Gtin14 $gtin14)
 * @method IndividualProduct setGtin8(Property\Gtin8 $gtin8)
 * @method IndividualProduct setHeight(Property\Height $height)
 * @method IndividualProduct setIdentifier(Property\Identifier $identifier)
 * @method IndividualProduct setImage(Property\Image $image)
 * @method IndividualProduct setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartFor $isAccessoryOrSparePartFor)
 * @method IndividualProduct setIsConsumableFor(Property\IsConsumableFor $isConsumableFor)
 * @method IndividualProduct setIsRelatedTo(Property\IsRelatedTo $isRelatedTo)
 * @method IndividualProduct setIsSimilarTo(Property\IsSimilarTo $isSimilarTo)
 * @method IndividualProduct setItemCondition(Property\ItemCondition $itemCondition)
 * @method IndividualProduct setLogo(Property\Logo $logo)
 * @method IndividualProduct setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method IndividualProduct setManufacturer(Property\Manufacturer $manufacturer)
 * @method IndividualProduct setMaterial(Property\Material $material)
 * @method IndividualProduct setModel(Property\Model $model)
 * @method IndividualProduct setMpn(Property\Mpn $mpn)
 * @method IndividualProduct setName(Property\Name $name)
 * @method IndividualProduct setOffers(Property\Offers $offers)
 * @method IndividualProduct setPotentialAction(Property\PotentialAction $potentialAction)
 * @method IndividualProduct setProductID(Property\ProductID $productID)
 * @method IndividualProduct setProductionDate(Property\ProductionDate $productionDate)
 * @method IndividualProduct setPurchaseDate(Property\PurchaseDate $purchaseDate)
 * @method IndividualProduct setReleaseDate(Property\ReleaseDate $releaseDate)
 * @method IndividualProduct setReview(Property\Review $review)
 * @method IndividualProduct setSameAs(Property\SameAs $sameAs)
 * @method IndividualProduct setSku(Property\Sku $sku)
 * @method IndividualProduct setUrl(Property\Url $url)
 * @method IndividualProduct setWeight(Property\Weight $weight)
 * @method IndividualProduct setWidth(Property\Width $width)
 */
class IndividualProduct extends Product {

	/**
	 * @var Property\SerialNumber
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
	 * @return Property\SerialNumber
	 */
	public function getSerialNumber() {
		return $this->serialNumber;
	}

	/**
	 * Set serial number.
	 * 
	 * @param Property\SerialNumber $serialNumber
	 * @return IndividualProduct
	 */
	public function setSerialNumber(Property\SerialNumber $serialNumber) {
		$this->serialNumber = $serialNumber;

		return $this;
	}
}