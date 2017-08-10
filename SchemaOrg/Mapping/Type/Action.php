<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Action.
 */
class Action {

	/**
	 * @var Property\ActionStatus
	 */
	private $actionStatus;

	/**
	 * @var Property\Agent
	 */
	private $agent;

	/**
	 * @var Property\EndTime
	 */
	private $endTime;

	/**
	 * @var Property\Error
	 */
	private $error;

	/**
	 */
	private $id;

	/**
	 * @var Property\Instrument
	 */
	private $instrument;

	/**
	 * @var Property\Location
	 */
	private $location;

	/**
	 * @var Property\Object
	 */
	private $object;

	/**
	 * @var Property\Participant
	 */
	private $participant;

	/**
	 * @var Property\Result
	 */
	private $result;

	/**
	 * @var Property\StartTime
	 */
	private $startTime;

	/**
	 * @var Property\Target
	 */
	private $target;

	/**
	 * Action constructor.
	 * 
	 * @param string $id
	 */
	public function __construct($id = null) {
		$this->id = $id;
	}

	/**
	 * Get action status.
	 * 
	 * @return Property\ActionStatus
	 */
	public function getActionStatus() {
		return $this->actionStatus;
	}

	/**
	 * Get agent.
	 * 
	 * @return Property\Agent
	 */
	public function getAgent() {
		return $this->agent;
	}

	/**
	 * Get end time.
	 * 
	 * @return Property\EndTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Get error.
	 * 
	 * @return Property\Error
	 */
	public function getError() {
		return $this->error;
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
	 * Get instrument.
	 * 
	 * @return Property\Instrument
	 */
	public function getInstrument() {
		return $this->instrument;
	}

	/**
	 * Get location.
	 * 
	 * @return Property\Location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Get object.
	 * 
	 * @return Property\Object
	 */
	public function getObject() {
		return $this->object;
	}

	/**
	 * Get participant.
	 * 
	 * @return Property\Participant
	 */
	public function getParticipant() {
		return $this->participant;
	}

	/**
	 * Get result.
	 * 
	 * @return Property\Result
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
	 * @return Property\StartTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Get target.
	 * 
	 * @return Property\Target
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * Set action status.
	 * 
	 * @param Property\ActionStatus $actionStatus
	 * @return Action
	 */
	public function setActionStatus(Property\ActionStatus $actionStatus) {
		$this->actionStatus = $actionStatus;

		return $this;
	}

	/**
	 * Set agent.
	 * 
	 * @param Property\Agent $agent
	 * @return Action
	 */
	public function setAgent(Property\Agent $agent) {
		$this->agent = $agent;

		return $this;
	}

	/**
	 * Set end time.
	 * 
	 * @param Property\EndTime $endTime
	 * @return Action
	 */
	public function setEndTime(Property\EndTime $endTime) {
		$this->endTime = $endTime;

		return $this;
	}

	/**
	 * Set error.
	 * 
	 * @param Property\Error $error
	 * @return Action
	 */
	public function setError(Property\Error $error) {
		$this->error = $error;

		return $this;
	}

	/**
	 * Set instrument.
	 * 
	 * @param Property\Instrument $instrument
	 * @return Action
	 */
	public function setInstrument(Property\Instrument $instrument) {
		$this->instrument = $instrument;

		return $this;
	}

	/**
	 * Set location.
	 * 
	 * @param Property\Location $location
	 * @return Action
	 */
	public function setLocation(Property\Location $location) {
		$this->location = $location;

		return $this;
	}

	/**
	 * Set object.
	 * 
	 * @param Property\Object $object
	 * @return Action
	 */
	public function setObject(Property\Object $object) {
		$this->object = $object;

		return $this;
	}

	/**
	 * Set participant.
	 * 
	 * @param Property\Participant $participant
	 * @return Action
	 */
	public function setParticipant(Property\Participant $participant) {
		$this->participant = $participant;

		return $this;
	}

	/**
	 * Set result.
	 * 
	 * @param Property\Result $result
	 * @return Action
	 */
	public function setResult(Property\Result $result) {
		$this->result = $result;

		return $this;
	}

	/**
	 * Set start time.
	 * 
	 * @param Property\StartTime $startTime
	 * @return Action
	 */
	public function setStartTime(Property\StartTime $startTime) {
		$this->startTime = $startTime;

		return $this;
	}

	/**
	 * Set target.
	 * 
	 * @param Property\Target $target
	 * @return Action
	 */
	public function setTarget(Property\Target $target) {
		$this->target = $target;

		return $this;
	}
}