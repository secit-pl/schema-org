<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, competition or exercise. Related actions: ListenAction: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing for an audience or at an event, rather than consuming music. WatchAction: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying for an audience or at an event, rather than consuming visual content.
 * 
 * @method PlayActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PlayActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlayActionType setAgent(Property\AgentProperty $agent)
 * @method PlayActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlayActionType setDescription(Property\DescriptionProperty $description)
 * @method PlayActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlayActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PlayActionType setError(Property\ErrorProperty $error)
 * @method PlayActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlayActionType setImage(Property\ImageProperty $image)
 * @method PlayActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PlayActionType setLocation(Property\LocationProperty $location)
 * @method PlayActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlayActionType setName(Property\NameProperty $name)
 * @method PlayActionType setObject(Property\ObjectProperty $object)
 * @method PlayActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PlayActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlayActionType setResult(Property\ResultProperty $result)
 * @method PlayActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlayActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PlayActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlayActionType setTarget(Property\TargetProperty $target)
 * @method PlayActionType setUrl(Property\UrlProperty $url)
 */
class PlayActionType extends ActionType {

	/**
	 * @var Property\AudienceProperty
	 */
	private $audience;

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * Get audience.
	 *
	 * @return Property\AudienceProperty
	 */
	public function getAudience() {
		return $this->audience;
	}

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
		return 'https://schema.org/PlayAction';
	}

	/**
	 * Set audience.
	 *
	 * @param Property\AudienceProperty $audience
	 * @return PlayActionType
	 */
	public function setAudience(Property\AudienceProperty $audience) {
		$this->audience = $audience;

		return $this;
	}

	/**
	 * Set event.
	 *
	 * @param Property\EventProperty $event
	 * @return PlayActionType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}
}