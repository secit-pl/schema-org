<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates pushed to. Related actions: FollowAction: Unlike FollowAction, SubscribeAction implies that the subscriber acts as a passive agent being constantly/actively pushed for updates. RegisterAction: Unlike RegisterAction, SubscribeAction implies that the agent is interested in continuing receiving updates from the object. JoinAction: Unlike JoinAction, SubscribeAction implies that the agent is interested in continuing receiving updates from the object.
 * 
 * @method SubscribeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method SubscribeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SubscribeActionType setAgent(Property\AgentProperty $agent)
 * @method SubscribeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SubscribeActionType setDescription(Property\DescriptionProperty $description)
 * @method SubscribeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SubscribeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method SubscribeActionType setError(Property\ErrorProperty $error)
 * @method SubscribeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SubscribeActionType setImage(Property\ImageProperty $image)
 * @method SubscribeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method SubscribeActionType setLocation(Property\LocationProperty $location)
 * @method SubscribeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SubscribeActionType setName(Property\NameProperty $name)
 * @method SubscribeActionType setObject(Property\ObjectProperty $object)
 * @method SubscribeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method SubscribeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SubscribeActionType setResult(Property\ResultProperty $result)
 * @method SubscribeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method SubscribeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method SubscribeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SubscribeActionType setTarget(Property\TargetProperty $target)
 * @method SubscribeActionType setUrl(Property\UrlProperty $url)
 */
class SubscribeActionType extends InteractActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SubscribeAction';
	}
}