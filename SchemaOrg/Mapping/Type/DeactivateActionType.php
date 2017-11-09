<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeactivateActionType.
 * 
 * @method DeactivateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DeactivateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeactivateActionType setAgent(Property\AgentProperty $agent)
 * @method DeactivateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeactivateActionType setDescription(Property\DescriptionProperty $description)
 * @method DeactivateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeactivateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DeactivateActionType setError(Property\ErrorProperty $error)
 * @method DeactivateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeactivateActionType setImage(Property\ImageProperty $image)
 * @method DeactivateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DeactivateActionType setLocation(Property\LocationProperty $location)
 * @method DeactivateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeactivateActionType setName(Property\NameProperty $name)
 * @method DeactivateActionType setObject(Property\ObjectProperty $object)
 * @method DeactivateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DeactivateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeactivateActionType setResult(Property\ResultProperty $result)
 * @method DeactivateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeactivateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DeactivateActionType setTarget(Property\TargetProperty $target)
 * @method DeactivateActionType setUrl(Property\UrlProperty $url)
 */
class DeactivateActionType extends ControlActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeactivateAction';
	}
}