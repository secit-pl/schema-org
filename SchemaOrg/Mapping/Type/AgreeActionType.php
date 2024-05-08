<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of expressing a consistency of opinion with the object. An agent agrees to/about an object (a proposition, topic or theme) with participants.
 * 
 * @method AgreeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AgreeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AgreeActionType setAgent(Property\AgentProperty $agent)
 * @method AgreeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AgreeActionType setDescription(Property\DescriptionProperty $description)
 * @method AgreeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AgreeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AgreeActionType setError(Property\ErrorProperty $error)
 * @method AgreeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AgreeActionType setImage(Property\ImageProperty $image)
 * @method AgreeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AgreeActionType setLocation(Property\LocationProperty $location)
 * @method AgreeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AgreeActionType setName(Property\NameProperty $name)
 * @method AgreeActionType setObject(Property\ObjectProperty $object)
 * @method AgreeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AgreeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AgreeActionType setResult(Property\ResultProperty $result)
 * @method AgreeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AgreeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AgreeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AgreeActionType setTarget(Property\TargetProperty $target)
 * @method AgreeActionType setUrl(Property\UrlProperty $url)
 */
class AgreeActionType extends ReactActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AgreeAction';
	}
}