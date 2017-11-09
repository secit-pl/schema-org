<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReceiveActionType.
 * 
 * @method ReceiveActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReceiveActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReceiveActionType setAgent(Property\AgentProperty $agent)
 * @method ReceiveActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReceiveActionType setDescription(Property\DescriptionProperty $description)
 * @method ReceiveActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReceiveActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReceiveActionType setError(Property\ErrorProperty $error)
 * @method ReceiveActionType setFromLocation(Property\FromLocationProperty $fromLocation)
 * @method ReceiveActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReceiveActionType setImage(Property\ImageProperty $image)
 * @method ReceiveActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReceiveActionType setLocation(Property\LocationProperty $location)
 * @method ReceiveActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReceiveActionType setName(Property\NameProperty $name)
 * @method ReceiveActionType setObject(Property\ObjectProperty $object)
 * @method ReceiveActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReceiveActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReceiveActionType setResult(Property\ResultProperty $result)
 * @method ReceiveActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReceiveActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReceiveActionType setTarget(Property\TargetProperty $target)
 * @method ReceiveActionType setToLocation(Property\ToLocationProperty $toLocation)
 * @method ReceiveActionType setUrl(Property\UrlProperty $url)
 */
class ReceiveActionType extends TransferActionType {

	/**
	 * @var Property\DeliveryMethodProperty
	 */
	private $deliveryMethod;

	/**
	 * @var Property\SenderProperty
	 */
	private $sender;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethodProperty
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReceiveAction';
	}

	/**
	 * Get sender.
	 * 
	 * @return Property\SenderProperty
	 */
	public function getSender() {
		return $this->sender;
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethodProperty $deliveryMethod
	 * @return ReceiveActionType
	 */
	public function setDeliveryMethod(Property\DeliveryMethodProperty $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}

	/**
	 * Set sender.
	 * 
	 * @param Property\SenderProperty $sender
	 * @return ReceiveActionType
	 */
	public function setSender(Property\SenderProperty $sender) {
		$this->sender = $sender;

		return $this;
	}
}