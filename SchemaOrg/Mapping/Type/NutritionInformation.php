<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class NutritionInformation.
 * 
 * @method NutritionInformation setAdditionalType(Property\AdditionalType $additionalType)
 * @method NutritionInformation setAlternateName(Property\AlternateName $alternateName)
 * @method NutritionInformation setDescription(Property\Description $description)
 * @method NutritionInformation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method NutritionInformation setImage(Property\Image $image)
 * @method NutritionInformation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method NutritionInformation setName(Property\Name $name)
 * @method NutritionInformation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method NutritionInformation setSameAs(Property\SameAs $sameAs)
 * @method NutritionInformation setUrl(Property\Url $url)
 */
class NutritionInformation extends StructuredValue {

	/**
	 * @var Property\Calories
	 */
	private $calories;

	/**
	 * @var Property\CarbohydrateContent
	 */
	private $carbohydrateContent;

	/**
	 * @var Property\CholesterolContent
	 */
	private $cholesterolContent;

	/**
	 * @var Property\FatContent
	 */
	private $fatContent;

	/**
	 * @var Property\FiberContent
	 */
	private $fiberContent;

	/**
	 * @var Property\ProteinContent
	 */
	private $proteinContent;

	/**
	 * @var Property\SaturatedFatContent
	 */
	private $saturatedFatContent;

	/**
	 * @var Property\ServingSize
	 */
	private $servingSize;

	/**
	 * @var Property\SodiumContent
	 */
	private $sodiumContent;

	/**
	 * @var Property\SugarContent
	 */
	private $sugarContent;

	/**
	 * @var Property\TransFatContent
	 */
	private $transFatContent;

	/**
	 * @var Property\UnsaturatedFatContent
	 */
	private $unsaturatedFatContent;

	/**
	 * Get calories.
	 * 
	 * @return Property\Calories
	 */
	public function getCalories() {
		return $this->calories;
	}

	/**
	 * Get carbohydrate content.
	 * 
	 * @return Property\CarbohydrateContent
	 */
	public function getCarbohydrateContent() {
		return $this->carbohydrateContent;
	}

	/**
	 * Get cholesterol content.
	 * 
	 * @return Property\CholesterolContent
	 */
	public function getCholesterolContent() {
		return $this->cholesterolContent;
	}

	/**
	 * Get fat content.
	 * 
	 * @return Property\FatContent
	 */
	public function getFatContent() {
		return $this->fatContent;
	}

	/**
	 * Get fiber content.
	 * 
	 * @return Property\FiberContent
	 */
	public function getFiberContent() {
		return $this->fiberContent;
	}

	/**
	 * Get protein content.
	 * 
	 * @return Property\ProteinContent
	 */
	public function getProteinContent() {
		return $this->proteinContent;
	}

	/**
	 * Get saturated fat content.
	 * 
	 * @return Property\SaturatedFatContent
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
	 * @return Property\ServingSize
	 */
	public function getServingSize() {
		return $this->servingSize;
	}

	/**
	 * Get sodium content.
	 * 
	 * @return Property\SodiumContent
	 */
	public function getSodiumContent() {
		return $this->sodiumContent;
	}

	/**
	 * Get sugar content.
	 * 
	 * @return Property\SugarContent
	 */
	public function getSugarContent() {
		return $this->sugarContent;
	}

	/**
	 * Get trans fat content.
	 * 
	 * @return Property\TransFatContent
	 */
	public function getTransFatContent() {
		return $this->transFatContent;
	}

	/**
	 * Get unsaturated fat content.
	 * 
	 * @return Property\UnsaturatedFatContent
	 */
	public function getUnsaturatedFatContent() {
		return $this->unsaturatedFatContent;
	}

	/**
	 * Set calories.
	 * 
	 * @param Property\Calories $calories
	 * @return NutritionInformation
	 */
	public function setCalories(Property\Calories $calories) {
		$this->calories = $calories;

		return $this;
	}

	/**
	 * Set carbohydrate content.
	 * 
	 * @param Property\CarbohydrateContent $carbohydrateContent
	 * @return NutritionInformation
	 */
	public function setCarbohydrateContent(Property\CarbohydrateContent $carbohydrateContent) {
		$this->carbohydrateContent = $carbohydrateContent;

		return $this;
	}

	/**
	 * Set cholesterol content.
	 * 
	 * @param Property\CholesterolContent $cholesterolContent
	 * @return NutritionInformation
	 */
	public function setCholesterolContent(Property\CholesterolContent $cholesterolContent) {
		$this->cholesterolContent = $cholesterolContent;

		return $this;
	}

	/**
	 * Set fat content.
	 * 
	 * @param Property\FatContent $fatContent
	 * @return NutritionInformation
	 */
	public function setFatContent(Property\FatContent $fatContent) {
		$this->fatContent = $fatContent;

		return $this;
	}

	/**
	 * Set fiber content.
	 * 
	 * @param Property\FiberContent $fiberContent
	 * @return NutritionInformation
	 */
	public function setFiberContent(Property\FiberContent $fiberContent) {
		$this->fiberContent = $fiberContent;

		return $this;
	}

	/**
	 * Set protein content.
	 * 
	 * @param Property\ProteinContent $proteinContent
	 * @return NutritionInformation
	 */
	public function setProteinContent(Property\ProteinContent $proteinContent) {
		$this->proteinContent = $proteinContent;

		return $this;
	}

	/**
	 * Set saturated fat content.
	 * 
	 * @param Property\SaturatedFatContent $saturatedFatContent
	 * @return NutritionInformation
	 */
	public function setSaturatedFatContent(Property\SaturatedFatContent $saturatedFatContent) {
		$this->saturatedFatContent = $saturatedFatContent;

		return $this;
	}

	/**
	 * Set serving size.
	 * 
	 * @param Property\ServingSize $servingSize
	 * @return NutritionInformation
	 */
	public function setServingSize(Property\ServingSize $servingSize) {
		$this->servingSize = $servingSize;

		return $this;
	}

	/**
	 * Set sodium content.
	 * 
	 * @param Property\SodiumContent $sodiumContent
	 * @return NutritionInformation
	 */
	public function setSodiumContent(Property\SodiumContent $sodiumContent) {
		$this->sodiumContent = $sodiumContent;

		return $this;
	}

	/**
	 * Set sugar content.
	 * 
	 * @param Property\SugarContent $sugarContent
	 * @return NutritionInformation
	 */
	public function setSugarContent(Property\SugarContent $sugarContent) {
		$this->sugarContent = $sugarContent;

		return $this;
	}

	/**
	 * Set trans fat content.
	 * 
	 * @param Property\TransFatContent $transFatContent
	 * @return NutritionInformation
	 */
	public function setTransFatContent(Property\TransFatContent $transFatContent) {
		$this->transFatContent = $transFatContent;

		return $this;
	}

	/**
	 * Set unsaturated fat content.
	 * 
	 * @param Property\UnsaturatedFatContent $unsaturatedFatContent
	 * @return NutritionInformation
	 */
	public function setUnsaturatedFatContent(Property\UnsaturatedFatContent $unsaturatedFatContent) {
		$this->unsaturatedFatContent = $unsaturatedFatContent;

		return $this;
	}
}