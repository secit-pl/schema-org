<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.
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
 * @method InteractionCounterType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InteractionCounterType setUrl(Property\UrlProperty $url)
 */
class InteractionCounterType extends StructuredValueType {

	/**
	 * @var Property\EndTimeProperty
	 */
	private $endTime;

	/**
	 * @var Property\InteractionServiceProperty
	 */
	private $interactionService;

	/**
	 * @var Property\InteractionTypeProperty
	 */
	private $interactionType;

	/**
	 * @var Property\LocationProperty
	 */
	private $location;

	/**
	 * @var Property\StartTimeProperty
	 */
	private $startTime;

	/**
	 * @var Property\UserInteractionCountProperty
	 */
	private $userInteractionCount;

	/**
	 * Get end time.
	 *
	 * @return Property\EndTimeProperty
	 */
	public function getEndTime() {
		return $this->endTime;
	}

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
	 * Get location.
	 *
	 * @return Property\LocationProperty
	 */
	public function getLocation() {
		return $this->location;
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
	 * Get start time.
	 *
	 * @return Property\StartTimeProperty
	 */
	public function getStartTime() {
		return $this->startTime;
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
	 * Set end time.
	 *
	 * @param Property\EndTimeProperty $endTime
	 * @return InteractionCounterType
	 */
	public function setEndTime(Property\EndTimeProperty $endTime) {
		$this->endTime = $endTime;

		return $this;
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
	 * Set location.
	 *
	 * @param Property\LocationProperty $location
	 * @return InteractionCounterType
	 */
	public function setLocation(Property\LocationProperty $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set start time.
	 *
	 * @param Property\StartTimeProperty $startTime
	 * @return InteractionCounterType
	 */
	public function setStartTime(Property\StartTimeProperty $startTime) {
		$this->startTime = $startTime;

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