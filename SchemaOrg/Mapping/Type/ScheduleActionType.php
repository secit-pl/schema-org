<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Scheduling future actions, events, or tasks. Related actions: ReserveAction: Unlike ReserveAction, ScheduleAction allocates future actions (e.g. an event, a task, etc) towards a time slot / spatial allocation.
 * 
 * @method ScheduleActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ScheduleActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ScheduleActionType setAgent(Property\AgentProperty $agent)
 * @method ScheduleActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ScheduleActionType setDescription(Property\DescriptionProperty $description)
 * @method ScheduleActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ScheduleActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ScheduleActionType setError(Property\ErrorProperty $error)
 * @method ScheduleActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ScheduleActionType setImage(Property\ImageProperty $image)
 * @method ScheduleActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ScheduleActionType setLocation(Property\LocationProperty $location)
 * @method ScheduleActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ScheduleActionType setName(Property\NameProperty $name)
 * @method ScheduleActionType setObject(Property\ObjectProperty $object)
 * @method ScheduleActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ScheduleActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ScheduleActionType setResult(Property\ResultProperty $result)
 * @method ScheduleActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ScheduleActionType setScheduledTime(Property\ScheduledTimeProperty $scheduledTime)
 * @method ScheduleActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ScheduleActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ScheduleActionType setTarget(Property\TargetProperty $target)
 * @method ScheduleActionType setUrl(Property\UrlProperty $url)
 */
class ScheduleActionType extends PlanActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ScheduleAction';
	}
}