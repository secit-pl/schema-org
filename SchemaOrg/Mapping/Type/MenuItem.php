<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MenuItem.
 */
class MenuItem extends Intangible {

	/**
	 * @var Property\Nutrition
	 */
	private $nutrition;

	/**
	 * @var Property\Offers
	 */
	private $offers;

	/**
	 * @var Property\SuitableForDiet
	 */
	private $suitableForDiet;

	/**
	 * Get nutrition.
	 * 
	 * @return Property\Nutrition
	 */
	public function getNutrition() {
		return $this->nutrition;
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
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MenuItem';
	}

	/**
	 * Get suitable for diet.
	 * 
	 * @return Property\SuitableForDiet
	 */
	public function getSuitableForDiet() {
		return $this->suitableForDiet;
	}

	/**
	 * Set nutrition.
	 * 
	 * @param Property\Nutrition $nutrition
	 * @return MenuItem
	 */
	public function setNutrition(Property\Nutrition $nutrition) {
		$this->nutrition = $nutrition;

		return $this;
	}

	/**
	 * Set offers.
	 * 
	 * @param Property\Offers $offers
	 * @return MenuItem
	 */
	public function setOffers(Property\Offers $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set suitable for diet.
	 * 
	 * @param Property\SuitableForDiet $suitableForDiet
	 * @return MenuItem
	 */
	public function setSuitableForDiet(Property\SuitableForDiet $suitableForDiet) {
		$this->suitableForDiet = $suitableForDiet;

		return $this;
	}
}