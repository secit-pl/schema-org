<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of organizing tasks/objects/events by associating resources to it.
 * 
 * @method AllocateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AllocateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AllocateActionType setAgent(Property\AgentProperty $agent)
 * @method AllocateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AllocateActionType setDescription(Property\DescriptionProperty $description)
 * @method AllocateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AllocateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AllocateActionType setError(Property\ErrorProperty $error)
 * @method AllocateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AllocateActionType setImage(Property\ImageProperty $image)
 * @method AllocateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AllocateActionType setLocation(Property\LocationProperty $location)
 * @method AllocateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AllocateActionType setName(Property\NameProperty $name)
 * @method AllocateActionType setObject(Property\ObjectProperty $object)
 * @method AllocateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AllocateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AllocateActionType setResult(Property\ResultProperty $result)
 * @method AllocateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AllocateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AllocateActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AllocateActionType setTarget(Property\TargetProperty $target)
 * @method AllocateActionType setUrl(Property\UrlProperty $url)
 */
class AllocateActionType extends OrganizeActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AllocateAction';
	}
}