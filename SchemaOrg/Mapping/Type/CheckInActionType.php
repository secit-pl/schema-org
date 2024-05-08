<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of an agent communicating (service provider, social media, etc) their arrival by registering/confirming for a previously reserved service (e.g. flight check-in) or at a place (e.g. hotel), possibly resulting in a result (boarding pass, etc). Related actions: CheckOutAction: The antonym of CheckInAction. ArriveAction: Unlike ArriveAction, CheckInAction implies that the agent is informing/confirming the start of a previously reserved service. ConfirmAction: Unlike ConfirmAction, CheckInAction implies that the agent is informing/confirming the start of a previously reserved service rather than its validity/existence.
 * 
 * @method CheckInActionType setAbout(Property\AboutProperty $about)
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
 * @method CheckInActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
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