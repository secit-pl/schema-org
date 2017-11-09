<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AppendActionType.
 * 
 * @method AppendActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AppendActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AppendActionType setAgent(Property\AgentProperty $agent)
 * @method AppendActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AppendActionType setDescription(Property\DescriptionProperty $description)
 * @method AppendActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AppendActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AppendActionType setError(Property\ErrorProperty $error)
 * @method AppendActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AppendActionType setImage(Property\ImageProperty $image)
 * @method AppendActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AppendActionType setLocation(Property\LocationProperty $location)
 * @method AppendActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AppendActionType setName(Property\NameProperty $name)
 * @method AppendActionType setObject(Property\ObjectProperty $object)
 * @method AppendActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AppendActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AppendActionType setResult(Property\ResultProperty $result)
 * @method AppendActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AppendActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AppendActionType setTarget(Property\TargetProperty $target)
 * @method AppendActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method AppendActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method AppendActionType setUrl(Property\UrlProperty $url)
 */
class AppendActionType extends InsertActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AppendAction';
	}
}