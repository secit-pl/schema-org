<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InteractActionType.
 * 
 * @method InteractActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method InteractActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InteractActionType setAgent(Property\AgentProperty $agent)
 * @method InteractActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InteractActionType setDescription(Property\DescriptionProperty $description)
 * @method InteractActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InteractActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method InteractActionType setError(Property\ErrorProperty $error)
 * @method InteractActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InteractActionType setImage(Property\ImageProperty $image)
 * @method InteractActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method InteractActionType setLocation(Property\LocationProperty $location)
 * @method InteractActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InteractActionType setName(Property\NameProperty $name)
 * @method InteractActionType setObject(Property\ObjectProperty $object)
 * @method InteractActionType setParticipant(Property\ParticipantProperty $participant)
 * @method InteractActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InteractActionType setResult(Property\ResultProperty $result)
 * @method InteractActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method InteractActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method InteractActionType setTarget(Property\TargetProperty $target)
 * @method InteractActionType setUrl(Property\UrlProperty $url)
 */
class InteractActionType extends ActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InteractAction';
	}
}