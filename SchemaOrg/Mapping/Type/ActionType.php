<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActionType.
 * 
 * @method ActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ActionType setDescription(Property\DescriptionProperty $description)
 * @method ActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ActionType setImage(Property\ImageProperty $image)
 * @method ActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ActionType setName(Property\NameProperty $name)
 * @method ActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ActionType setUrl(Property\UrlProperty $url)
 */
class ActionType extends ThingType {

	/**
	 * @var Property\ActionStatusProperty
	 */
	private $actionStatus;

	/**
	 * @var Property\AgentProperty
	 */
	private $agent;

	/**
	 * @var Property\EndTimeProperty
	 */
	private $endTime;

	/**
	 * @var Property\ErrorProperty
	 */
	private $error;

	/**
	 * @var Property\InstrumentProperty
	 */
	private $instrument;

	/**
	 * @var Property\LocationProperty
	 */
	private $location;

	/**
	 * @var Property\ObjectProperty
	 */
	private $object;

	/**
	 * @var Property\ParticipantProperty
	 */
	private $participant;

	/**
	 * @var Property\ResultProperty
	 */
	private $result;

	/**
	 * @var Property\StartTimeProperty
	 */
	private $startTime;

	/**
	 * @var Property\TargetProperty
	 */
	private $target;

	/**
	 * Get action status.
	 * 
	 * @return Property\ActionStatusProperty
	 */
	public function getActionStatus() {
		return $this->actionStatus;
	}

	/**
	 * Get agent.
	 * 
	 * @return Property\AgentProperty
	 */
	public function getAgent() {
		return $this->agent;
	}

	/**
	 * Get end time.
	 * 
	 * @return Property\EndTimeProperty
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Get error.
	 * 
	 * @return Property\ErrorProperty
	 */
	public function getError() {
		return $this->error;
	}

	/**
	 * Get instrument.
	 * 
	 * @return Property\InstrumentProperty
	 */
	public function getInstrument() {
		return $this->instrument;
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
	 * Get object.
	 * 
	 * @return Property\ObjectProperty
	 */
	public function getObject() {
		return $this->object;
	}

	/**
	 * Get participant.
	 * 
	 * @return Property\ParticipantProperty
	 */
	public function getParticipant() {
		return $this->participant;
	}

	/**
	 * Get result.
	 * 
	 * @return Property\ResultProperty
	 */
	public function getResult() {
		return $this->result;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Action';
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
	 * Get target.
	 * 
	 * @return Property\TargetProperty
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * Set action status.
	 * 
	 * @param Property\ActionStatusProperty $actionStatus
	 * @return ActionType
	 */
	public function setActionStatus(Property\ActionStatusProperty $actionStatus) {
		$this->actionStatus = $actionStatus;

		return $this;
	}

	/**
	 * Set agent.
	 * 
	 * @param Property\AgentProperty $agent
	 * @return ActionType
	 */
	public function setAgent(Property\AgentProperty $agent) {
		$this->agent = $agent;

		return $this;
	}

	/**
	 * Set end time.
	 * 
	 * @param Property\EndTimeProperty $endTime
	 * @return ActionType
	 */
	public function setEndTime(Property\EndTimeProperty $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set error.
	 * 
	 * @param Property\ErrorProperty $error
	 * @return ActionType
	 */
	public function setError(Property\ErrorProperty $error) {
		$this->error = $error;

		return $this;
	}

	/**
	 * Set instrument.
	 * 
	 * @param Property\InstrumentProperty $instrument
	 * @return ActionType
	 */
	public function setInstrument(Property\InstrumentProperty $instrument) {
		$this->instrument = $instrument;

		return $this;
	}

	/**
	 * Set location.
	 * 
	 * @param Property\LocationProperty $location
	 * @return ActionType
	 */
	public function setLocation(Property\LocationProperty $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set object.
	 * 
	 * @param Property\ObjectProperty $object
	 * @return ActionType
	 */
	public function setObject(Property\ObjectProperty $object) {
		$this->object = $object;

		return $this;
	}

	/**
	 * Set participant.
	 * 
	 * @param Property\ParticipantProperty $participant
	 * @return ActionType
	 */
	public function setParticipant(Property\ParticipantProperty $participant) {
		$this->participant = $participant;

		return $this;
	}

	/**
	 * Set result.
	 * 
	 * @param Property\ResultProperty $result
	 * @return ActionType
	 */
	public function setResult(Property\ResultProperty $result) {
		$this->result = $result;

		return $this;
	}

	/**
	 * Set start time.
	 * 
	 * @param Property\StartTimeProperty $startTime
	 * @return ActionType
	 */
	public function setStartTime(Property\StartTimeProperty $startTime) {
		$this->startTime = $startTime;

		return $this;
	}

	/**
	 * Set target.
	 * 
	 * @param Property\TargetProperty $target
	 * @return ActionType
	 */
	public function setTarget(Property\TargetProperty $target) {
		$this->target = $target;

		return $this;
	}
}