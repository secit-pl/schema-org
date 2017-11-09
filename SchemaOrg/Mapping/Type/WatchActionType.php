<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WatchActionType.
 * 
 * @method WatchActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method WatchActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WatchActionType setAgent(Property\AgentProperty $agent)
 * @method WatchActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WatchActionType setDescription(Property\DescriptionProperty $description)
 * @method WatchActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WatchActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method WatchActionType setError(Property\ErrorProperty $error)
 * @method WatchActionType setExpectsAcceptanceOf(Property\ExpectsAcceptanceOfProperty $expectsAcceptanceOf)
 * @method WatchActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WatchActionType setImage(Property\ImageProperty $image)
 * @method WatchActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method WatchActionType setLocation(Property\LocationProperty $location)
 * @method WatchActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WatchActionType setName(Property\NameProperty $name)
 * @method WatchActionType setObject(Property\ObjectProperty $object)
 * @method WatchActionType setParticipant(Property\ParticipantProperty $participant)
 * @method WatchActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WatchActionType setResult(Property\ResultProperty $result)
 * @method WatchActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method WatchActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method WatchActionType setTarget(Property\TargetProperty $target)
 * @method WatchActionType setUrl(Property\UrlProperty $url)
 */
class WatchActionType extends ConsumeActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WatchAction';
	}
}