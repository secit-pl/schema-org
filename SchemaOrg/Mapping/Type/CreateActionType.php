<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of deliberately creating/producing/generating/building a result out of the agent.
 * 
 * @method CreateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CreateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CreateActionType setAgent(Property\AgentProperty $agent)
 * @method CreateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CreateActionType setDescription(Property\DescriptionProperty $description)
 * @method CreateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CreateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CreateActionType setError(Property\ErrorProperty $error)
 * @method CreateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CreateActionType setImage(Property\ImageProperty $image)
 * @method CreateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CreateActionType setLocation(Property\LocationProperty $location)
 * @method CreateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CreateActionType setName(Property\NameProperty $name)
 * @method CreateActionType setObject(Property\ObjectProperty $object)
 * @method CreateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CreateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CreateActionType setResult(Property\ResultProperty $result)
 * @method CreateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CreateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CreateActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CreateActionType setTarget(Property\TargetProperty $target)
 * @method CreateActionType setUrl(Property\UrlProperty $url)
 */
class CreateActionType extends ActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CreateAction';
	}
}