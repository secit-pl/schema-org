<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of allocating an action/event/task to some destination (someone or something).
 * 
 * @method AssignActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AssignActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AssignActionType setAgent(Property\AgentProperty $agent)
 * @method AssignActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AssignActionType setDescription(Property\DescriptionProperty $description)
 * @method AssignActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AssignActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AssignActionType setError(Property\ErrorProperty $error)
 * @method AssignActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AssignActionType setImage(Property\ImageProperty $image)
 * @method AssignActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AssignActionType setLocation(Property\LocationProperty $location)
 * @method AssignActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AssignActionType setName(Property\NameProperty $name)
 * @method AssignActionType setObject(Property\ObjectProperty $object)
 * @method AssignActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AssignActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AssignActionType setResult(Property\ResultProperty $result)
 * @method AssignActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AssignActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AssignActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AssignActionType setTarget(Property\TargetProperty $target)
 * @method AssignActionType setUrl(Property\UrlProperty $url)
 */
class AssignActionType extends AllocateActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AssignAction';
	}
}