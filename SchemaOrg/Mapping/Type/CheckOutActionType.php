<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckOutActionType.
 * 
 * @method CheckOutActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CheckOutActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CheckOutActionType setAgent(Property\AgentProperty $agent)
 * @method CheckOutActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CheckOutActionType setDescription(Property\DescriptionProperty $description)
 * @method CheckOutActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CheckOutActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CheckOutActionType setError(Property\ErrorProperty $error)
 * @method CheckOutActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CheckOutActionType setImage(Property\ImageProperty $image)
 * @method CheckOutActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CheckOutActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CheckOutActionType setLocation(Property\LocationProperty $location)
 * @method CheckOutActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CheckOutActionType setName(Property\NameProperty $name)
 * @method CheckOutActionType setObject(Property\ObjectProperty $object)
 * @method CheckOutActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CheckOutActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CheckOutActionType setRecipient(Property\RecipientProperty $recipient)
 * @method CheckOutActionType setResult(Property\ResultProperty $result)
 * @method CheckOutActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CheckOutActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CheckOutActionType setTarget(Property\TargetProperty $target)
 * @method CheckOutActionType setUrl(Property\UrlProperty $url)
 */
class CheckOutActionType extends CommunicateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckOutAction';
	}
}