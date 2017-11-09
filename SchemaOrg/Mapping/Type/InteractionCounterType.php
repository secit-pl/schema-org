<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InteractionCounterType.
 * 
 * @method InteractionCounterType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InteractionCounterType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InteractionCounterType setDescription(Property\DescriptionProperty $description)
 * @method InteractionCounterType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InteractionCounterType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InteractionCounterType setImage(Property\ImageProperty $image)
 * @method InteractionCounterType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InteractionCounterType setName(Property\NameProperty $name)
 * @method InteractionCounterType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InteractionCounterType setSameAs(Property\SameAsProperty $sameAs)
 * @method InteractionCounterType setUrl(Property\UrlProperty $url)
 */
class InteractionCounterType extends StructuredValueType {

	/**
	 * @var Property\InteractionServiceProperty
	 */
	private $interactionService;

	/**
	 * @var Property\InteractionTypeProperty
	 */
	private $interactionType;

	/**
	 * @var Property\UserInteractionCountProperty
	 */
	private $userInteractionCount;

	/**
	 * Get interaction service.
	 * 
	 * @return Property\InteractionServiceProperty
	 */
	public function getInteractionService() {
		return $this->interactionService;
	}

	/**
	 * Get interaction type.
	 * 
	 * @return Property\InteractionTypeProperty
	 */
	public function getInteractionType() {
		return $this->interactionType;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InteractionCounter';
	}

	/**
	 * Get user interaction count.
	 * 
	 * @return Property\UserInteractionCountProperty
	 */
	public function getUserInteractionCount() {
		return $this->userInteractionCount;
	}

	/**
	 * Set interaction service.
	 * 
	 * @param Property\InteractionServiceProperty $interactionService
	 * @return InteractionCounterType
	 */
	public function setInteractionService(Property\InteractionServiceProperty $interactionService) {
		$this->interactionService = $interactionService;

		return $this;
	}

	/**
	 * Set interaction type.
	 * 
	 * @param Property\InteractionTypeProperty $interactionType
	 * @return InteractionCounterType
	 */
	public function setInteractionType(Property\InteractionTypeProperty $interactionType) {
		$this->interactionType = $interactionType;

		return $this;
	}

	/**
	 * Set user interaction count.
	 * 
	 * @param Property\UserInteractionCountProperty $userInteractionCount
	 * @return InteractionCounterType
	 */
	public function setUserInteractionCount(Property\UserInteractionCountProperty $userInteractionCount) {
		$this->userInteractionCount = $userInteractionCount;

		return $this;
	}
}