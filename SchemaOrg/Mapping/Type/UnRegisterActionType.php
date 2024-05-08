<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of un-registering from a service. Related actions: RegisterAction: antonym of UnRegisterAction. LeaveAction: Unlike LeaveAction, UnRegisterAction implies that you are unregistering from a service you were previously registered, rather than leaving a team/group of people.
 * 
 * @method UnRegisterActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method UnRegisterActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method UnRegisterActionType setAgent(Property\AgentProperty $agent)
 * @method UnRegisterActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method UnRegisterActionType setDescription(Property\DescriptionProperty $description)
 * @method UnRegisterActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method UnRegisterActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method UnRegisterActionType setError(Property\ErrorProperty $error)
 * @method UnRegisterActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method UnRegisterActionType setImage(Property\ImageProperty $image)
 * @method UnRegisterActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method UnRegisterActionType setLocation(Property\LocationProperty $location)
 * @method UnRegisterActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method UnRegisterActionType setName(Property\NameProperty $name)
 * @method UnRegisterActionType setObject(Property\ObjectProperty $object)
 * @method UnRegisterActionType setParticipant(Property\ParticipantProperty $participant)
 * @method UnRegisterActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method UnRegisterActionType setResult(Property\ResultProperty $result)
 * @method UnRegisterActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method UnRegisterActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method UnRegisterActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method UnRegisterActionType setTarget(Property\TargetProperty $target)
 * @method UnRegisterActionType setUrl(Property\UrlProperty $url)
 */
class UnRegisterActionType extends InteractActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/UnRegisterAction';
	}
}