<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FollowActionType.
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