<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BefriendActionType.
 * 
 * @method BefriendActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method BefriendActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BefriendActionType setAgent(Property\AgentProperty $agent)
 * @method BefriendActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BefriendActionType setDescription(Property\DescriptionProperty $description)
 * @method BefriendActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BefriendActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method BefriendActionType setError(Property\ErrorProperty $error)
 * @method BefriendActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BefriendActionType setImage(Property\ImageProperty $image)
 * @method BefriendActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method BefriendActionType setLocation(Property\LocationProperty $location)
 * @method BefriendActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BefriendActionType setName(Property\NameProperty $name)
 * @method BefriendActionType setObject(Property\ObjectProperty $object)
 * @method BefriendActionType setParticipant(Property\ParticipantProperty $participant)
 * @method BefriendActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BefriendActionType setResult(Property\ResultProperty $result)
 * @method BefriendActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BefriendActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method BefriendActionType setTarget(Property\TargetProperty $target)
 * @method BefriendActionType setUrl(Property\UrlProperty $url)
 */
class BefriendActionType extends InteractActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BefriendAction';
	}
}