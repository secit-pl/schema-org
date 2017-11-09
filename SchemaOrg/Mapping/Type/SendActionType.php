<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SendActionType.
 * 
 * @method SendActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method SendActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SendActionType setAgent(Property\AgentProperty $agent)
 * @method SendActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SendActionType setDescription(Property\DescriptionProperty $description)
 * @method SendActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SendActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method SendActionType setError(Property\ErrorProperty $error)
 * @method SendActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method SendActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SendActionType setImage(Property\ImageProperty $image)
 * @method SendActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method SendActionType setLocation(Property\LocationProperty $location)
 * @method SendActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SendActionType setName(Property\NameProperty $name)
 * @method SendActionType setObject(Property\ObjectProperty $object)
 * @method SendActionType setParticipant(Property\ParticipantProperty $participant)
 * @method SendActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SendActionType setResult(Property\ResultProperty $result)
 * @method SendActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method SendActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method SendActionType setTarget(Property\TargetProperty $target)
 * @method SendActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method SendActionType setUrl(Property\UrlProperty $url)
 */
class SendActionType extends TransferActionType {

	/**
	 * @var Property\DeliveryMethodProperty
	 */
	private $deliveryMethod;

	/**
	 * @var Property\RecipientProperty
	 */
	private $recipient;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethodProperty
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

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
		return 'https://schema.org/SendAction';
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethodProperty $deliveryMethod
	 * @return SendActionType
	 */
	public function setDeliveryMethod(Property\DeliveryMethodProperty $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\RecipientProperty $recipient
	 * @return SendActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}