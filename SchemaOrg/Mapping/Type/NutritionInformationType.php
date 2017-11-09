<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NutritionInformationType.
 * 
 * @method NutritionInformationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NutritionInformationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NutritionInformationType setDescription(Property\DescriptionProperty $description)
 * @method NutritionInformationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NutritionInformationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NutritionInformationType setImage(Property\ImageProperty $image)
 * @method NutritionInformationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NutritionInformationType setName(Property\NameProperty $name)
 * @method NutritionInformationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NutritionInformationType setSameAs(Property\SameAsProperty $sameAs)
 * @method NutritionInformationType setUrl(Property\UrlProperty $url)
 */
class NutritionInformationType extends StructuredValueType {

	/**
	 * @var Property\CaloriesProperty
	 */
	private $calories;

	/**
	 * @var Property\CarbohydrateContentProperty
	 */
	private $carbohydrateContent;

	/**
	 * @var Property\CholesterolContentProperty
	 */
	private $cholesterolContent;

	/**
	 * @var Property\FatContentProperty
	 */
	private $fatContent;

	/**
	 * @var Property\FiberContentProperty
	 */
	private $fiberContent;

	/**
	 * @var Property\ProteinContentProperty
	 */
	private $proteinContent;

	/**
	 * @var Property\SaturatedFatContentProperty
	 */
	private $saturatedFatContent;

	/**
	 * @var Property\ServingSizeProperty
	 */
	private $servingSize;

	/**
	 * @var Property\SodiumContentProperty
	 */
	private $sodiumContent;

	/**
	 * @var Property\SugarContentProperty
	 */
	private $sugarContent;

	/**
	 * @var Property\TransFatContentProperty
	 */
	private $transFatContent;

	/**
	 * @var Property\UnsaturatedFatContentProperty
	 */
	private $unsaturatedFatContent;

	/**
	 * Get calories.
	 * 
	 * @return Property\CaloriesProperty
	 */
	public function getCalories() {
		return $this->calories;
	}

	/**
	 * Get carbohydrate content.
	 * 
	 * @return Property\CarbohydrateContentProperty
	 */
	public function getCarbohydrateContent() {
		return $this->carbohydrateContent;
	}

	/**
	 * Get cholesterol content.
	 * 
	 * @return Property\CholesterolContentProperty
	 */
	public function getCholesterolContent() {
		return $this->cholesterolContent;
	}

	/**
	 * Get fat content.
	 * 
	 * @return Property\FatContentProperty
	 */
	public function getFatContent() {
		return $this->fatContent;
	}

	/**
	 * Get fiber content.
	 * 
	 * @return Property\FiberContentProperty
	 */
	public function getFiberContent() {
		return $this->fiberContent;
	}

	/**
	 * Get protein content.
	 * 
	 * @return Property\ProteinContentProperty
	 */
	public function getProteinContent() {
		return $this->proteinContent;
	}

	/**
	 * Get saturated fat content.
	 * 
	 * @return Property\SaturatedFatContentProperty
	 */
	public function getSaturatedFatContent() {
		return $this->saturatedFatContent;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NutritionInformation';
	}

	/**
	 * Get serving size.
	 * 
	 * @return Property\ServingSizeProperty
	 */
	public function getServingSize() {
		return $this->servingSize;
	}

	/**
	 * Get sodium content.
	 * 
	 * @return Property\SodiumContentProperty
	 */
	public function getSodiumContent() {
		return $this->sodiumContent;
	}

	/**
	 * Get sugar content.
	 * 
	 * @return Property\SugarContentProperty
	 */
	public function getSugarContent() {
		return $this->sugarContent;
	}

	/**
	 * Get trans fat content.
	 * 
	 * @return Property\TransFatContentProperty
	 */
	public function getTransFatContent() {
		return $this->transFatContent;
	}

	/**
	 * Get unsaturated fat content.
	 * 
	 * @return Property\UnsaturatedFatContentProperty
	 */
	public function getUnsaturatedFatContent() {
		return $this->unsaturatedFatContent;
	}

	/**
	 * Set calories.
	 * 
	 * @param Property\CaloriesProperty $calories
	 * @return NutritionInformationType
	 */
	public function setCalories(Property\CaloriesProperty $calories) {
		$this->calories = $calories;

		return $this;
	}

	/**
	 * Set carbohydrate content.
	 * 
	 * @param Property\CarbohydrateContentProperty $carbohydrateContent
	 * @return NutritionInformationType
	 */
	public function setCarbohydrateContent(Property\CarbohydrateContentProperty $carbohydrateContent) {
		$this->carbohydrateContent = $carbohydrateContent;

		return $this;
	}

	/**
	 * Set cholesterol content.
	 * 
	 * @param Property\CholesterolContentProperty $cholesterolContent
	 * @return NutritionInformationType
	 */
	public function setCholesterolContent(Property\CholesterolContentProperty $cholesterolContent) {
		$this->cholesterolContent = $cholesterolContent;

		return $this;
	}

	/**
	 * Set fat content.
	 * 
	 * @param Property\FatContentProperty $fatContent
	 * @return NutritionInformationType
	 */
	public function setFatContent(Property\FatContentProperty $fatContent) {
		$this->fatContent = $fatContent;

		return $this;
	}

	/**
	 * Set fiber content.
	 * 
	 * @param Property\FiberContentProperty $fiberContent
	 * @return NutritionInformationType
	 */
	public function setFiberContent(Property\FiberContentProperty $fiberContent) {
		$this->fiberContent = $fiberContent;

		return $this;
	}

	/**
	 * Set protein content.
	 * 
	 * @param Property\ProteinContentProperty $proteinContent
	 * @return NutritionInformationType
	 */
	public function setProteinContent(Property\ProteinContentProperty $proteinContent) {
		$this->proteinContent = $proteinContent;

		return $this;
	}

	/**
	 * Set saturated fat content.
	 * 
	 * @param Property\SaturatedFatContentProperty $saturatedFatContent
	 * @return NutritionInformationType
	 */
	public function setSaturatedFatContent(Property\SaturatedFatContentProperty $saturatedFatContent) {
		$this->saturatedFatContent = $saturatedFatContent;

		return $this;
	}

	/**
	 * Set serving size.
	 * 
	 * @param Property\ServingSizeProperty $servingSize
	 * @return NutritionInformationType
	 */
	public function setServingSize(Property\ServingSizeProperty $servingSize) {
		$this->servingSize = $servingSize;

		return $this;
	}

	/**
	 * Set sodium content.
	 * 
	 * @param Property\SodiumContentProperty $sodiumContent
	 * @return NutritionInformationType
	 */
	public function setSodiumContent(Property\SodiumContentProperty $sodiumContent) {
		$this->sodiumContent = $sodiumContent;

		return $this;
	}

	/**
	 * Set sugar content.
	 * 
	 * @param Property\SugarContentProperty $sugarContent
	 * @return NutritionInformationType
	 */
	public function setSugarContent(Property\SugarContentProperty $sugarContent) {
		$this->sugarContent = $sugarContent;

		return $this;
	}

	/**
	 * Set trans fat content.
	 * 
	 * @param Property\TransFatContentProperty $transFatContent
	 * @return NutritionInformationType
	 */
	public function setTransFatContent(Property\TransFatContentProperty $transFatContent) {
		$this->transFatContent = $transFatContent;

		return $this;
	}

	/**
	 * Set unsaturated fat content.
	 * 
	 * @param Property\UnsaturatedFatContentProperty $unsaturatedFatContent
	 * @return NutritionInformationType
	 */
	public function setUnsaturatedFatContent(Property\UnsaturatedFatContentProperty $unsaturatedFatContent) {
		$this->unsaturatedFatContent = $unsaturatedFatContent;

		return $this;
	}
}