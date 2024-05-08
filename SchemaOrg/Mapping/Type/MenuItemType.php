<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A food or drink item listed in a menu or menu section.
 * 
 * @method MenuItemType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MenuItemType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MenuItemType setDescription(Property\DescriptionProperty $description)
 * @method MenuItemType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MenuItemType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MenuItemType setImage(Property\ImageProperty $image)
 * @method MenuItemType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MenuItemType setName(Property\NameProperty $name)
 * @method MenuItemType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MenuItemType setSameAs(Property\SameAsProperty $sameAs)
 * @method MenuItemType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MenuItemType setUrl(Property\UrlProperty $url)
 */
class MenuItemType extends IntangibleType {

	/**
	 * @var Property\MenuAddOnProperty
	 */
	private $menuAddOn;

	/**
	 * @var Property\NutritionProperty
	 */
	private $nutrition;

	/**
	 * @var Property\OffersProperty
	 */
	private $offers;

	/**
	 * @var Property\SuitableForDietProperty
	 */
	private $suitableForDiet;

	/**
	 * Get menu add on.
	 *
	 * @return Property\MenuAddOnProperty
	 */
	public function getMenuAddOn() {
		return $this->menuAddOn;
	}

	/**
	 * Get nutrition.
	 *
	 * @return Property\NutritionProperty
	 */
	public function getNutrition() {
		return $this->nutrition;
	}

	/**
	 * Get offers.
	 *
	 * @return Property\OffersProperty
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
	 * @return Property\SuitableForDietProperty
	 */
	public function getSuitableForDiet() {
		return $this->suitableForDiet;
	}

	/**
	 * Set menu add on.
	 *
	 * @param Property\MenuAddOnProperty $menuAddOn
	 * @return MenuItemType
	 */
	public function setMenuAddOn(Property\MenuAddOnProperty $menuAddOn) {
		$this->menuAddOn = $menuAddOn;

		return $this;
	}

	/**
	 * Set nutrition.
	 *
	 * @param Property\NutritionProperty $nutrition
	 * @return MenuItemType
	 */
	public function setNutrition(Property\NutritionProperty $nutrition) {
		$this->nutrition = $nutrition;

		return $this;
	}

	/**
	 * Set offers.
	 *
	 * @param Property\OffersProperty $offers
	 * @return MenuItemType
	 */
	public function setOffers(Property\OffersProperty $offers) {
		$this->offers = $offers;

		return $this;
	}

	/**
	 * Set suitable for diet.
	 *
	 * @param Property\SuitableForDietProperty $suitableForDiet
	 * @return MenuItemType
	 */
	public function setSuitableForDiet(Property\SuitableForDietProperty $suitableForDiet) {
		$this->suitableForDiet = $suitableForDiet;

		return $this;
	}
}