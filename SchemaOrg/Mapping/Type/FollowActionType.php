<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of forming a personal connection with someone/something (object) unidirectionally/asymmetrically to get updates polled from. Related actions: BefriendAction: Unlike BefriendAction, FollowAction implies that the connection is not necessarily reciprocal. SubscribeAction: Unlike SubscribeAction, FollowAction implies that the follower acts as an active agent constantly/actively polling for updates. RegisterAction: Unlike RegisterAction, FollowAction implies that the agent is interested in continuing receiving updates from the object. JoinAction: Unlike JoinAction, FollowAction implies that the agent is interested in getting updates from the object. TrackAction: Unlike TrackAction, FollowAction refers to the polling of updates of all aspects of animate objects rather than the location of inanimate objects (e.g. you track a package, but you don't follow it).
 * 
 * @method FollowActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method FollowActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FollowActionType setAgent(Property\AgentProperty $agent)
 * @method FollowActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FollowActionType setDescription(Property\DescriptionProperty $description)
 * @method FollowActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FollowActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method FollowActionType setError(Property\ErrorProperty $error)
 * @method FollowActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FollowActionType setImage(Property\ImageProperty $image)
 * @method FollowActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method FollowActionType setLocation(Property\LocationProperty $location)
 * @method FollowActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FollowActionType setName(Property\NameProperty $name)
 * @method FollowActionType setObject(Property\ObjectProperty $object)
 * @method FollowActionType setParticipant(Property\ParticipantProperty $participant)
 * @method FollowActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FollowActionType setResult(Property\ResultProperty $result)
 * @method FollowActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method FollowActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method FollowActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FollowActionType setTarget(Property\TargetProperty $target)
 * @method FollowActionType setUrl(Property\UrlProperty $url)
 */
class FollowActionType extends InteractActionType {

	/**
	 * @var Property\FolloweeProperty
	 */
	private $followee;

	/**
	 * Get followee.
	 *
	 * @return Property\FolloweeProperty
	 */
	public function getFollowee() {
		return $this->followee;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FollowAction';
	}

	/**
	 * Set followee.
	 *
	 * @param Property\FolloweeProperty $followee
	 * @return FollowActionType
	 */
	public function setFollowee(Property\FolloweeProperty $followee) {
		$this->followee = $followee;

		return $this;
	}
}