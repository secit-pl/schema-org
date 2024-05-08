<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 * 
 * @method PlanActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PlanActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlanActionType setAgent(Property\AgentProperty $agent)
 * @method PlanActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlanActionType setDescription(Property\DescriptionProperty $description)
 * @method PlanActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlanActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PlanActionType setError(Property\ErrorProperty $error)
 * @method PlanActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlanActionType setImage(Property\ImageProperty $image)
 * @method PlanActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PlanActionType setLocation(Property\LocationProperty $location)
 * @method PlanActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlanActionType setName(Property\NameProperty $name)
 * @method PlanActionType setObject(Property\ObjectProperty $object)
 * @method PlanActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PlanActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlanActionType setResult(Property\ResultProperty $result)
 * @method PlanActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlanActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PlanActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlanActionType setTarget(Property\TargetProperty $target)
 * @method PlanActionType setUrl(Property\UrlProperty $url)
 */
class PlanActionType extends OrganizeActionType {

	/**
	 * @var Property\ScheduledTimeProperty
	 */
	private $scheduledTime;

	/**
	 * Get scheduled time.
	 *
	 * @return Property\ScheduledTimeProperty
	 */
	public function getScheduledTime() {
		return $this->scheduledTime;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlanAction';
	}

	/**
	 * Set scheduled time.
	 *
	 * @param Property\ScheduledTimeProperty $scheduledTime
	 * @return PlanActionType
	 */
	public function setScheduledTime(Property\ScheduledTimeProperty $scheduledTime) {
		$this->scheduledTime = $scheduledTime;

		return $this;
	}
}