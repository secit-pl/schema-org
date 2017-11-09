<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReturnActionType.
 * 
 * @method ReturnActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReturnActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReturnActionType setAgent(Property\AgentProperty $agent)
 * @method ReturnActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReturnActionType setDescription(Property\DescriptionProperty $description)
 * @method ReturnActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReturnActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReturnActionType setError(Property\ErrorProperty $error)
 * @method ReturnActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method ReturnActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReturnActionType setImage(Property\ImageProperty $image)
 * @method ReturnActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReturnActionType setLocation(Property\LocationProperty $location)
 * @method ReturnActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReturnActionType setName(Property\NameProperty $name)
 * @method ReturnActionType setObject(Property\ObjectProperty $object)
 * @method ReturnActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReturnActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReturnActionType setResult(Property\ResultProperty $result)
 * @method ReturnActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReturnActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReturnActionType setTarget(Property\TargetProperty $target)
 * @method ReturnActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method ReturnActionType setUrl(Property\UrlProperty $url)
 */
class ReturnActionType extends TransferActionType {

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
		return 'https://schema.org/ReturnAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\RecipientProperty $recipient
	 * @return ReturnActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}