<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of gaining ownership of an object from an origin. Reciprocal of GiveAction. Related actions: GiveAction: The reciprocal of TakeAction. ReceiveAction: Unlike ReceiveAction, TakeAction implies that ownership has been transferred.
 * 
 * @method TakeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TakeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TakeActionType setAgent(Property\AgentProperty $agent)
 * @method TakeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TakeActionType setDescription(Property\DescriptionProperty $description)
 * @method TakeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TakeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TakeActionType setError(Property\ErrorProperty $error)
 * @method TakeActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method TakeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TakeActionType setImage(Property\ImageProperty $image)
 * @method TakeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TakeActionType setLocation(Property\LocationProperty $location)
 * @method TakeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TakeActionType setName(Property\NameProperty $name)
 * @method TakeActionType setObject(Property\ObjectProperty $object)
 * @method TakeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TakeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TakeActionType setResult(Property\ResultProperty $result)
 * @method TakeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TakeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TakeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TakeActionType setTarget(Property\TargetProperty $target)
 * @method TakeActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method TakeActionType setUrl(Property\UrlProperty $url)
 */
class TakeActionType extends TransferActionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TakeAction';
	}
}