<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MenuItem.
 * 
 * @method MenuItem setAdditionalType(Property\AdditionalType $additionalType)
 * @method MenuItem setAlternateName(Property\AlternateName $alternateName)
 * @method MenuItem setDescription(Property\Description $description)
 * @method MenuItem setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MenuItem setIdentifier(Property\Identifier $identifier)
 * @method MenuItem setImage(Property\Image $image)
 * @method MenuItem setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MenuItem setName(Property\Name $name)
 * @method MenuItem setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MenuItem setSameAs(Property\SameAs $sameAs)
 * @method MenuItem setUrl(Property\Url $url)
 */
class MenuItem extends Thing {

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