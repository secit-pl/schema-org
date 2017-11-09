<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PhotographActionType.
 * 
 * @method PhotographActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PhotographActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PhotographActionType setAgent(Property\AgentProperty $agent)
 * @method PhotographActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PhotographActionType setDescription(Property\DescriptionProperty $description)
 * @method PhotographActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PhotographActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PhotographActionType setError(Property\ErrorProperty $error)
 * @method PhotographActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PhotographActionType setImage(Property\ImageProperty $image)
 * @method PhotographActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PhotographActionType setLocation(Property\LocationProperty $location)
 * @method PhotographActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PhotographActionType setName(Property\NameProperty $name)
 * @method PhotographActionType setObject(Property\ObjectProperty $object)
 * @method PhotographActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PhotographActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PhotographActionType setResult(Property\ResultProperty $result)
 * @method PhotographActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PhotographActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PhotographActionType setTarget(Property\TargetProperty $target)
 * @method PhotographActionType setUrl(Property\UrlProperty $url)
 */
class PhotographActionType extends CreateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PhotographAction';
	}
}