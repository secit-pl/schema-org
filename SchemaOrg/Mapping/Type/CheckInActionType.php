<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckInActionType.
 * 
 * @method CheckInActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CheckInActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CheckInActionType setAgent(Property\AgentProperty $agent)
 * @method CheckInActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CheckInActionType setDescription(Property\DescriptionProperty $description)
 * @method CheckInActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CheckInActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CheckInActionType setError(Property\ErrorProperty $error)
 * @method CheckInActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CheckInActionType setImage(Property\ImageProperty $image)
 * @method CheckInActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CheckInActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CheckInActionType setLocation(Property\LocationProperty $location)
 * @method CheckInActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CheckInActionType setName(Property\NameProperty $name)
 * @method CheckInActionType setObject(Property\ObjectProperty $object)
 * @method CheckInActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CheckInActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CheckInActionType setRecipient(Property\RecipientProperty $recipient)
 * @method CheckInActionType setResult(Property\ResultProperty $result)
 * @method CheckInActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CheckInActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CheckInActionType setTarget(Property\TargetProperty $target)
 * @method CheckInActionType setUrl(Property\UrlProperty $url)
 */
class CheckInActionType extends CommunicateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckInAction';
	}
}