<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class LeaveActionType.
 * 
 * @method LeaveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method LeaveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LeaveActionType setAgent(Property\AgentProperty $agent)
 * @method LeaveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LeaveActionType setDescription(Property\DescriptionProperty $description)
 * @method LeaveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LeaveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method LeaveActionType setError(Property\ErrorProperty $error)
 * @method LeaveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LeaveActionType setImage(Property\ImageProperty $image)
 * @method LeaveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method LeaveActionType setLocation(Property\LocationProperty $location)
 * @method LeaveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LeaveActionType setName(Property\NameProperty $name)
 * @method LeaveActionType setObject(Property\ObjectProperty $object)
 * @method LeaveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method LeaveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LeaveActionType setResult(Property\ResultProperty $result)
 * @method LeaveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method LeaveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method LeaveActionType setTarget(Property\TargetProperty $target)
 * @method LeaveActionType setUrl(Property\UrlProperty $url)
 */
class LeaveActionType extends InteractActionType {

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
		return 'https://schema.org/LeaveAction';
	}

	/**
	 * Set event.
	 * 
	 * @param Property\EventProperty $event
	 * @return LeaveActionType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}
}