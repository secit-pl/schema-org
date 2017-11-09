<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LeaveAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\LeaveActionType instead.
 * 
 * @method LeaveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method LeaveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method LeaveAction setAgent(Property\Agent $agent)
 * @method LeaveAction setAlternateName(Property\AlternateName $alternateName)
 * @method LeaveAction setDescription(Property\Description $description)
 * @method LeaveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method LeaveAction setEndTime(Property\EndTime $endTime)
 * @method LeaveAction setError(Property\Error $error)
 * @method LeaveAction setIdentifier(Property\Identifier $identifier)
 * @method LeaveAction setImage(Property\Image $image)
 * @method LeaveAction setInstrument(Property\Instrument $instrument)
 * @method LeaveAction setLocation(Property\Location $location)
 * @method LeaveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method LeaveAction setName(Property\Name $name)
 * @method LeaveAction setObject(Property\Object $object)
 * @method LeaveAction setParticipant(Property\Participant $participant)
 * @method LeaveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method LeaveAction setResult(Property\Result $result)
 * @method LeaveAction setSameAs(Property\SameAs $sameAs)
 * @method LeaveAction setStartTime(Property\StartTime $startTime)
 * @method LeaveAction setTarget(Property\Target $target)
 * @method LeaveAction setUrl(Property\Url $url)
 */
class LeaveAction extends InteractAction {

	/**
	 * @var Property\Event
	 */
	private $event;

	/**
	 * Get event.
	 * 
	 * @return Property\Event
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LeaveAction';
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return LeaveAction
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}
}