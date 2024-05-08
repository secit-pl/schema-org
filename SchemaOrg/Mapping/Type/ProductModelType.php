<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 * 
 * @method ProductModelType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method ProductModelType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ProductModelType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ProductModelType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ProductModelType setAudience(Property\AudienceProperty $audience)
 * @method ProductModelType setAward(Property\AwardProperty $award)
 * @method ProductModelType setBrand(Property\BrandProperty $brand)
 * @method ProductModelType setCategory(Property\CategoryProperty $category)
 * @method ProductModelType setColor(Property\ColorProperty $color)
 * @method ProductModelType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method ProductModelType setDepth(Property\DepthProperty $depth)
 * @method ProductModelType setDescription(Property\DescriptionProperty $description)
 * @method ProductModelType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ProductModelType setGtin12(Property\Gtin12Property $gtin12)
 * @method ProductModelType setGtin13(Property\Gtin13Property $gtin13)
 * @method ProductModelType setGtin14(Property\Gtin14Property $gtin14)
 * @method ProductModelType setGtin8(Property\Gtin8Property $gtin8)
 * @method ProductModelType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method ProductModelType setHeight(Property\HeightProperty $height)
 * @method ProductModelType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ProductModelType setImage(Property\ImageProperty $image)
 * @method ProductModelType setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor)
 * @method ProductModelType setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor)
 * @method ProductModelType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method ProductModelType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method ProductModelType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method ProductModelType setIsVariantOf(Property\IsVariantOfProperty $isVariantOf)
 * @method ProductModelType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method ProductModelType setKeywords(Property\KeywordsProperty $keywords)
 * @method ProductModelType setLogo(Property\LogoProperty $logo)
 * @method ProductModelType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ProductModelType setManufacturer(Property\ManufacturerProperty $manufacturer)
 * @method ProductModelType setMaterial(Property\MaterialProperty $material)
 * @method ProductModelType setModel(Property\ModelProperty $model)
 * @method ProductModelType setMpn(Property\MpnProperty $mpn)
 * @method ProductModelType setName(Property\NameProperty $name)
 * @method ProductModelType setOffers(Property\OffersProperty $offers)
 * @method ProductModelType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ProductModelType setProductID(Property\ProductIDProperty $productID)
 * @method ProductModelType setProductionDate(Property\ProductionDateProperty $productionDate)
 * @method ProductModelType setPurchaseDate(Property\PurchaseDateProperty $purchaseDate)
 * @method ProductModelType setReleaseDate(Property\ReleaseDateProperty $releaseDate)
 * @method ProductModelType setReview(Property\ReviewProperty $review)
 * @method ProductModelType setSameAs(Property\SameAsProperty $sameAs)
 * @method ProductModelType setSku(Property\SkuProperty $sku)
 * @method ProductModelType setSlogan(Property\SloganProperty $slogan)
 * @method ProductModelType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ProductModelType setUrl(Property\UrlProperty $url)
 * @method ProductModelType setWeight(Property\WeightProperty $weight)
 * @method ProductModelType setWidth(Property\WidthProperty $width)
 */
class ProductModelType extends ProductType {

	/**
	 * @var Property\IsVariantOfProperty
	 */
	private $isVariantOf;

	/**
	 * @var Property\PredecessorOfProperty
	 */
	private $predecessorOf;

	/**
	 * @var Property\SuccessorOfProperty
	 */
	private $successorOf;

	/**
	 * Get is variant of.
	 *
	 * @return Property\IsVariantOfProperty
	 */
	public function getIsVariantOf() {
		return $this->isVariantOf;
	}

	/**
	 * Get predecessor of.
	 *
	 * @return Property\PredecessorOfProperty
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
	 * @return Property\SuccessorOfProperty
	 */
	public function getSuccessorOf() {
		return $this->successorOf;
	}

	/**
	 * Set is variant of.
	 *
	 * @param Property\IsVariantOfProperty $isVariantOf
	 * @return ProductModelType
	 */
	public function setIsVariantOf(Property\IsVariantOfProperty $isVariantOf) {
		$this->isVariantOf = $isVariantOf;

		return $this;
	}

	/**
	 * Set predecessor of.
	 *
	 * @param Property\PredecessorOfProperty $predecessorOf
	 * @return ProductModelType
	 */
	public function setPredecessorOf(Property\PredecessorOfProperty $predecessorOf) {
		$this->predecessorOf = $predecessorOf;

		return $this;
	}

	/**
	 * Set successor of.
	 *
	 * @param Property\SuccessorOfProperty $successorOf
	 * @return ProductModelType
	 */
	public function setSuccessorOf(Property\SuccessorOfProperty $successorOf) {
		$this->successorOf = $successorOf;

		return $this;
	}
}