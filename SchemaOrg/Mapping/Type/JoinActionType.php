<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent joins an event/group with participants/friends at a location. Related actions: RegisterAction: Unlike RegisterAction, JoinAction refers to joining a group/team of people. SubscribeAction: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving updates. FollowAction: Unlike FollowAction, JoinAction does not imply that you'll be polling for updates.
 * 
 * @method JoinActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method JoinActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method JoinActionType setAgent(Property\AgentProperty $agent)
 * @method JoinActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method JoinActionType setDescription(Property\DescriptionProperty $description)
 * @method JoinActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method JoinActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method JoinActionType setError(Property\ErrorProperty $error)
 * @method JoinActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method JoinActionType setImage(Property\ImageProperty $image)
 * @method JoinActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method JoinActionType setLocation(Property\LocationProperty $location)
 * @method JoinActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method JoinActionType setName(Property\NameProperty $name)
 * @method JoinActionType setObject(Property\ObjectProperty $object)
 * @method JoinActionType setParticipant(Property\ParticipantProperty $participant)
 * @method JoinActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method JoinActionType setResult(Property\ResultProperty $result)
 * @method JoinActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method JoinActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method JoinActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method JoinActionType setTarget(Property\TargetProperty $target)
 * @method JoinActionType setUrl(Property\UrlProperty $url)
 */
class JoinActionType extends InteractActionType {

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * Get event.
	 *
	 * @return Property\EventProperty
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
	 * @param Property\EventProperty $event
	 * @return JoinActionType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}
}