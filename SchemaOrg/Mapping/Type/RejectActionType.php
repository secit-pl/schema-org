<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of rejecting to/adopting an object. Related actions: AcceptAction: The antonym of RejectAction.
 * 
 * @method RejectActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method RejectActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RejectActionType setAgent(Property\AgentProperty $agent)
 * @method RejectActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RejectActionType setDescription(Property\DescriptionProperty $description)
 * @method RejectActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RejectActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method RejectActionType setError(Property\ErrorProperty $error)
 * @method RejectActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RejectActionType setImage(Property\ImageProperty $image)
 * @method RejectActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method RejectActionType setLocation(Property\LocationProperty $location)
 * @method RejectActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RejectActionType setName(Property\NameProperty $name)
 * @method RejectActionType setObject(Property\ObjectProperty $object)
 * @method RejectActionType setParticipant(Property\ParticipantProperty $participant)
 * @method RejectActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RejectActionType setResult(Property\ResultProperty $result)
 * @method RejectActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method RejectActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method RejectActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RejectActionType setTarget(Property\TargetProperty $target)
 * @method RejectActionType setUrl(Property\UrlProperty $url)
 */
class RejectActionType extends AllocateActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RejectAction';
	}
}