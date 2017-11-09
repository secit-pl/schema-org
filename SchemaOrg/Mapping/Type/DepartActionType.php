<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DepartActionType.
 * 
 * @method DepartActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DepartActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DepartActionType setAgent(Property\AgentProperty $agent)
 * @method DepartActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DepartActionType setDescription(Property\DescriptionProperty $description)
 * @method DepartActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DepartActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DepartActionType setError(Property\ErrorProperty $error)
 * @method DepartActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method DepartActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DepartActionType setImage(Property\ImageProperty $image)
 * @method DepartActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DepartActionType setLocation(Property\LocationProperty $location)
 * @method DepartActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DepartActionType setName(Property\NameProperty $name)
 * @method DepartActionType setObject(Property\ObjectProperty $object)
 * @method DepartActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DepartActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DepartActionType setResult(Property\ResultProperty $result)
 * @method DepartActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DepartActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DepartActionType setTarget(Property\TargetProperty $target)
 * @method DepartActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method DepartActionType setUrl(Property\UrlProperty $url)
 */
class DepartActionType extends MoveActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DepartAction';
	}
}