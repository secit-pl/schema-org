<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of finding an object. Related actions: SearchAction: FindAction is generally lead by a SearchAction, but not necessarily.
 * 
 * @method FindActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method FindActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FindActionType setAgent(Property\AgentProperty $agent)
 * @method FindActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FindActionType setDescription(Property\DescriptionProperty $description)
 * @method FindActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FindActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method FindActionType setError(Property\ErrorProperty $error)
 * @method FindActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FindActionType setImage(Property\ImageProperty $image)
 * @method FindActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method FindActionType setLocation(Property\LocationProperty $location)
 * @method FindActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FindActionType setName(Property\NameProperty $name)
 * @method FindActionType setObject(Property\ObjectProperty $object)
 * @method FindActionType setParticipant(Property\ParticipantProperty $participant)
 * @method FindActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FindActionType setResult(Property\ResultProperty $result)
 * @method FindActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method FindActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method FindActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FindActionType setTarget(Property\TargetProperty $target)
 * @method FindActionType setUrl(Property\UrlProperty $url)
 */
class FindActionType extends ActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FindAction';
	}
}