<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of transferring ownership of an object to a destination. Reciprocal of TakeAction. Related actions: TakeAction: Reciprocal of GiveAction. SendAction: Unlike SendAction, GiveAction implies that ownership is being transferred (e.g. I may send my laptop to you, but that doesn't mean I'm giving it to you).
 * 
 * @method GiveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method GiveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method GiveActionType setAgent(Property\AgentProperty $agent)
 * @method GiveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method GiveActionType setDescription(Property\DescriptionProperty $description)
 * @method GiveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method GiveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method GiveActionType setError(Property\ErrorProperty $error)
 * @method GiveActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method GiveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method GiveActionType setImage(Property\ImageProperty $image)
 * @method GiveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method GiveActionType setLocation(Property\LocationProperty $location)
 * @method GiveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method GiveActionType setName(Property\NameProperty $name)
 * @method GiveActionType setObject(Property\ObjectProperty $object)
 * @method GiveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method GiveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method GiveActionType setResult(Property\ResultProperty $result)
 * @method GiveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method GiveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method GiveActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method GiveActionType setTarget(Property\TargetProperty $target)
 * @method GiveActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method GiveActionType setUrl(Property\UrlProperty $url)
 */
class GiveActionType extends TransferActionType {

	/**
	 * @var Property\RecipientProperty
	 */
	private $recipient;

	/**
	 * Get recipient.
	 *
	 * @return Property\RecipientProperty
	 */
	public function getRecipient() {
		return $this->recipient;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GiveAction';
	}

	/**
	 * Set recipient.
	 *
	 * @param Property\RecipientProperty $recipient
	 * @return GiveActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}