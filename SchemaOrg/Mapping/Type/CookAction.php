<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CookAction.
 * 
 * @method CookAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CookAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CookAction setAgent(Property\Agent $agent)
 * @method CookAction setAlternateName(Property\AlternateName $alternateName)
 * @method CookAction setDescription(Property\Description $description)
 * @method CookAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CookAction setEndTime(Property\EndTime $endTime)
 * @method CookAction setError(Property\Error $error)
 * @method CookAction setIdentifier(Property\Identifier $identifier)
 * @method CookAction setImage(Property\Image $image)
 * @method CookAction setInstrument(Property\Instrument $instrument)
 * @method CookAction setLocation(Property\Location $location)
 * @method CookAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CookAction setName(Property\Name $name)
 * @method CookAction setObject(Property\Object $object)
 * @method CookAction setParticipant(Property\Participant $participant)
 * @method CookAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CookAction setResult(Property\Result $result)
 * @method CookAction setSameAs(Property\SameAs $sameAs)
 * @method CookAction setStartTime(Property\StartTime $startTime)
 * @method CookAction setTarget(Property\Target $target)
 * @method CookAction setUrl(Property\Url $url)
 */
class CookAction extends CreateAction {

	/**
	 * @var Property\FoodEstablishment
	 */
	private $foodEstablishment;

	/**
	 * @var Property\FoodEvent
	 */
	private $foodEvent;

	/**
	 * @var Property\Recipe
	 */
	private $recipe;

	/**
	 * Get food establishment.
	 * 
	 * @return Property\FoodEstablishment
	 */
	public function getFoodEstablishment() {
		return $this->foodEstablishment;
	}

	/**
	 * Get food event.
	 * 
	 * @return Property\FoodEvent
	 */
	public function getFoodEvent() {
		return $this->foodEvent;
	}

	/**
	 * Get recipe.
	 * 
	 * @return Property\Recipe
	 */
	public function getRecipe() {
		return $this->recipe;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CookAction';
	}

	/**
	 * Set food establishment.
	 * 
	 * @param Property\FoodEstablishment $foodEstablishment
	 * @return CookAction
	 */
	public function setFoodEstablishment(Property\FoodEstablishment $foodEstablishment) {
		$this->foodEstablishment = $foodEstablishment;

		return $this;
	}

	/**
	 * Set food event.
	 * 
	 * @param Property\FoodEvent $foodEvent
	 * @return CookAction
	 */
	public function setFoodEvent(Property\FoodEvent $foodEvent) {
		$this->foodEvent = $foodEvent;

		return $this;
	}

	/**
	 * Set recipe.
	 * 
	 * @param Property\Recipe $recipe
	 * @return CookAction
	 */
	public function setRecipe(Property\Recipe $recipe) {
		$this->recipe = $recipe;

		return $this;
	}
}