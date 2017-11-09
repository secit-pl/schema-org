<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlayAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PlayActionType instead.
 * 
 * @method PlayAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PlayAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PlayAction setAgent(Property\Agent $agent)
 * @method PlayAction setAlternateName(Property\AlternateName $alternateName)
 * @method PlayAction setDescription(Property\Description $description)
 * @method PlayAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PlayAction setEndTime(Property\EndTime $endTime)
 * @method PlayAction setError(Property\Error $error)
 * @method PlayAction setIdentifier(Property\Identifier $identifier)
 * @method PlayAction setImage(Property\Image $image)
 * @method PlayAction setInstrument(Property\Instrument $instrument)
 * @method PlayAction setLocation(Property\Location $location)
 * @method PlayAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PlayAction setName(Property\Name $name)
 * @method PlayAction setObject(Property\Object $object)
 * @method PlayAction setParticipant(Property\Participant $participant)
 * @method PlayAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PlayAction setResult(Property\Result $result)
 * @method PlayAction setSameAs(Property\SameAs $sameAs)
 * @method PlayAction setStartTime(Property\StartTime $startTime)
 * @method PlayAction setTarget(Property\Target $target)
 * @method PlayAction setUrl(Property\Url $url)
 */
class PlayAction extends Action {

	/**
	 * @var Property\Audience
	 */
	private $audience;

	/**
	 * @var Property\Event
	 */
	private $event;

	/**
	 * Get audience.
	 * 
	 * @return Property\Audience
	 */
	public function getAudience() {
		return $this->audience;
	}

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
		return 'https://schema.org/PlayAction';
	}

	/**
	 * Set audience.
	 * 
	 * @param Property\Audience $audience
	 * @return PlayAction
	 */
	public function setAudience(Property\Audience $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set event.
	 * 
	 * @param Property\Event $event
	 * @return PlayAction
	 */
	public function setEvent(Property\Event $event) {
		$this->event = $event;

		return $this;
	}
}