<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InteractionCounter.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\InteractionCounterType instead.
 * 
 * @method InteractionCounter setAdditionalType(Property\AdditionalType $additionalType)
 * @method InteractionCounter setAlternateName(Property\AlternateName $alternateName)
 * @method InteractionCounter setDescription(Property\Description $description)
 * @method InteractionCounter setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method InteractionCounter setIdentifier(Property\Identifier $identifier)
 * @method InteractionCounter setImage(Property\Image $image)
 * @method InteractionCounter setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method InteractionCounter setName(Property\Name $name)
 * @method InteractionCounter setPotentialAction(Property\PotentialAction $potentialAction)
 * @method InteractionCounter setSameAs(Property\SameAs $sameAs)
 * @method InteractionCounter setUrl(Property\Url $url)
 */
class InteractionCounter extends StructuredValue {

	/**
	 * @var Property\InteractionService
	 */
	private $interactionService;

	/**
	 * @var Property\InteractionType
	 */
	private $interactionType;

	/**
	 * @var Property\UserInteractionCount
	 */
	private $userInteractionCount;

	/**
	 * Get interaction service.
	 * 
	 * @return Property\InteractionService
	 */
	public function getInteractionService() {
		return $this->interactionService;
	}

	/**
	 * Get interaction type.
	 * 
	 * @return Property\InteractionType
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
	 * @return Property\UserInteractionCount
	 */
	public function getUserInteractionCount() {
		return $this->userInteractionCount;
	}

	/**
	 * Set interaction service.
	 * 
	 * @param Property\InteractionService $interactionService
	 * @return InteractionCounter
	 */
	public function setInteractionService(Property\InteractionService $interactionService) {
		$this->interactionService = $interactionService;

		return $this;
	}

	/**
	 * Set interaction type.
	 * 
	 * @param Property\InteractionType $interactionType
	 * @return InteractionCounter
	 */
	public function setInteractionType(Property\InteractionType $interactionType) {
		$this->interactionType = $interactionType;

		return $this;
	}

	/**
	 * Set user interaction count.
	 * 
	 * @param Property\UserInteractionCount $userInteractionCount
	 * @return InteractionCounter
	 */
	public function setUserInteractionCount(Property\UserInteractionCount $userInteractionCount) {
		$this->userInteractionCount = $userInteractionCount;

		return $this;
	}
}