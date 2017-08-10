<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InteractionCounter.
 */
class InteractionCounter {

	/**
	 */
	private $id;

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
	 * InteractionCounter constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get id.
	 * 
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

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