<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DeleteActionType.
 * 
 * @method DeleteActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DeleteActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DeleteActionType setAgent(Property\AgentProperty $agent)
 * @method DeleteActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DeleteActionType setDescription(Property\DescriptionProperty $description)
 * @method DeleteActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DeleteActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DeleteActionType setError(Property\ErrorProperty $error)
 * @method DeleteActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DeleteActionType setImage(Property\ImageProperty $image)
 * @method DeleteActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DeleteActionType setLocation(Property\LocationProperty $location)
 * @method DeleteActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DeleteActionType setName(Property\NameProperty $name)
 * @method DeleteActionType setObject(Property\ObjectProperty $object)
 * @method DeleteActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DeleteActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DeleteActionType setResult(Property\ResultProperty $result)
 * @method DeleteActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DeleteActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DeleteActionType setTarget(Property\TargetProperty $target)
 * @method DeleteActionType setTargetCollection(Property\TargetCollectionProperty $targetCollection)
 * @method DeleteActionType setUrl(Property\UrlProperty $url)
 */
class DeleteActionType extends UpdateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DeleteAction';
	}
}