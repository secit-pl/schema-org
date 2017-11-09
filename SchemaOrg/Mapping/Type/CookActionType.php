<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CookActionType.
 * 
 * @method CookActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CookActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CookActionType setAgent(Property\AgentProperty $agent)
 * @method CookActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CookActionType setDescription(Property\DescriptionProperty $description)
 * @method CookActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CookActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CookActionType setError(Property\ErrorProperty $error)
 * @method CookActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CookActionType setImage(Property\ImageProperty $image)
 * @method CookActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CookActionType setLocation(Property\LocationProperty $location)
 * @method CookActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CookActionType setName(Property\NameProperty $name)
 * @method CookActionType setObject(Property\ObjectProperty $object)
 * @method CookActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CookActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CookActionType setResult(Property\ResultProperty $result)
 * @method CookActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CookActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CookActionType setTarget(Property\TargetProperty $target)
 * @method CookActionType setUrl(Property\UrlProperty $url)
 */
class CookActionType extends CreateActionType {

	/**
	 * @var Property\FoodEstablishmentProperty
	 */
	private $foodEstablishment;

	/**
	 * @var Property\FoodEventProperty
	 */
	private $foodEvent;

	/**
	 * @var Property\RecipeProperty
	 */
	private $recipe;

	/**
	 * Get food establishment.
	 * 
	 * @return Property\FoodEstablishmentProperty
	 */
	public function getFoodEstablishment() {
		return $this->foodEstablishment;
	}

	/**
	 * Get food event.
	 * 
	 * @return Property\FoodEventProperty
	 */
	public function getFoodEvent() {
		return $this->foodEvent;
	}

	/**
	 * Get recipe.
	 * 
	 * @return Property\RecipeProperty
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
	 * @param Property\FoodEstablishmentProperty $foodEstablishment
	 * @return CookActionType
	 */
	public function setFoodEstablishment(Property\FoodEstablishmentProperty $foodEstablishment) {
		$this->foodEstablishment = $foodEstablishment;

		return $this;
	}

	/**
	 * Set food event.
	 * 
	 * @param Property\FoodEventProperty $foodEvent
	 * @return CookActionType
	 */
	public function setFoodEvent(Property\FoodEventProperty $foodEvent) {
		$this->foodEvent = $foodEvent;

		return $this;
	}

	/**
	 * Set recipe.
	 * 
	 * @param Property\RecipeProperty $recipe
	 * @return CookActionType
	 */
	public function setRecipe(Property\RecipeProperty $recipe) {
		$this->recipe = $recipe;

		return $this;
	}
}