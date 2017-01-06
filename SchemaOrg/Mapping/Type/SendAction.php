<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SendAction.
 * 
 * @method SendAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method SendAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method SendAction setAgent(Property\Agent $agent)
 * @method SendAction setAlternateName(Property\AlternateName $alternateName)
 * @method SendAction setDescription(Property\Description $description)
 * @method SendAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SendAction setEndTime(Property\EndTime $endTime)
 * @method SendAction setError(Property\Error $error)
 * @method SendAction setFromLocation(Property\FromLocation $fromLocation)
 * @method SendAction setImage(Property\Image $image)
 * @method SendAction setInstrument(Property\Instrument $instrument)
 * @method SendAction setLocation(Property\Location $location)
 * @method SendAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SendAction setName(Property\Name $name)
 * @method SendAction setObject(Property\Object $object)
 * @method SendAction setParticipant(Property\Participant $participant)
 * @method SendAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SendAction setResult(Property\Result $result)
 * @method SendAction setSameAs(Property\SameAs $sameAs)
 * @method SendAction setStartTime(Property\StartTime $startTime)
 * @method SendAction setTarget(Property\Target $target)
 * @method SendAction setToLocation(Property\ToLocation $toLocation)
 * @method SendAction setUrl(Property\Url $url)
 */
class SendAction extends TransferAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethod
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get recipient.
	 * 
	 * @return Property\Recipient
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
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return SendAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return SendAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}