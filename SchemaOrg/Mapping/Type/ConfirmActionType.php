<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConfirmActionType.
 * 
 * @method ConfirmActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ConfirmActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ConfirmActionType setAgent(Property\AgentProperty $agent)
 * @method ConfirmActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ConfirmActionType setDescription(Property\DescriptionProperty $description)
 * @method ConfirmActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ConfirmActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ConfirmActionType setError(Property\ErrorProperty $error)
 * @method ConfirmActionType setEvent(Property\EventProperty $event)
 * @method ConfirmActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ConfirmActionType setImage(Property\ImageProperty $image)
 * @method ConfirmActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ConfirmActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ConfirmActionType setLocation(Property\LocationProperty $location)
 * @method ConfirmActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ConfirmActionType setName(Property\NameProperty $name)
 * @method ConfirmActionType setObject(Property\ObjectProperty $object)
 * @method ConfirmActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ConfirmActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ConfirmActionType setRecipient(Property\RecipientProperty $recipient)
 * @method ConfirmActionType setResult(Property\ResultProperty $result)
 * @method ConfirmActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ConfirmActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ConfirmActionType setTarget(Property\TargetProperty $target)
 * @method ConfirmActionType setUrl(Property\UrlProperty $url)
 */
class ConfirmActionType extends InformActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConfirmAction';
	}
}