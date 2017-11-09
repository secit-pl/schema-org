<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class JoinAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\JoinActionType instead.
 * 
 * @method JoinAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method JoinAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method JoinAction setAgent(Property\Agent $agent)
 * @method JoinAction setAlternateName(Property\AlternateName $alternateName)
 * @method JoinAction setDescription(Property\Description $description)
 * @method JoinAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method JoinAction setEndTime(Property\EndTime $endTime)
 * @method JoinAction setError(Property\Error $error)
 * @method JoinAction setIdentifier(Property\Identifier $identifier)
 * @method JoinAction setImage(Property\Image $image)
 * @method JoinAction setInstrument(Property\Instrument $instrument)
 * @method JoinAction setLocation(Property\Location $location)
 * @method JoinAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method JoinAction setName(Property\Name $name)
 * @method JoinAction setObject(Property\Object $object)
 * @method JoinAction setParticipant(Property\Participant $participant)
 * @method JoinAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method JoinAction setResult(Property\Result $result)
 * @method JoinAction setSameAs(Property\SameAs $sameAs)
 * @method JoinAction setStartTime(Property\StartTime $startTime)
 * @method JoinAction setTarget(Property\Target $target)
 * @method JoinAction setUrl(Property\Url $url)
 */
class JoinAction extends InteractAction {

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
		return 'https://schema.org/JoinAction';
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return JoinAction
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}
}