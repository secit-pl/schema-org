<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DislikeActionType.
 * 
 * @method DislikeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DislikeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DislikeActionType setAgent(Property\AgentProperty $agent)
 * @method DislikeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DislikeActionType setDescription(Property\DescriptionProperty $description)
 * @method DislikeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DislikeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DislikeActionType setError(Property\ErrorProperty $error)
 * @method DislikeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DislikeActionType setImage(Property\ImageProperty $image)
 * @method DislikeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DislikeActionType setLocation(Property\LocationProperty $location)
 * @method DislikeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DislikeActionType setName(Property\NameProperty $name)
 * @method DislikeActionType setObject(Property\ObjectProperty $object)
 * @method DislikeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DislikeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DislikeActionType setResult(Property\ResultProperty $result)
 * @method DislikeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DislikeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DislikeActionType setTarget(Property\TargetProperty $target)
 * @method DislikeActionType setUrl(Property\UrlProperty $url)
 */
class DislikeActionType extends ReactActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DislikeAction';
	}
}