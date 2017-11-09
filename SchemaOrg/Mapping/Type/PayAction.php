<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PayAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PayActionType instead.
 * 
 * @method PayAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PayAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PayAction setAgent(Property\Agent $agent)
 * @method PayAction setAlternateName(Property\AlternateName $alternateName)
 * @method PayAction setDescription(Property\Description $description)
 * @method PayAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PayAction setEndTime(Property\EndTime $endTime)
 * @method PayAction setError(Property\Error $error)
 * @method PayAction setIdentifier(Property\Identifier $identifier)
 * @method PayAction setImage(Property\Image $image)
 * @method PayAction setInstrument(Property\Instrument $instrument)
 * @method PayAction setLocation(Property\Location $location)
 * @method PayAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PayAction setName(Property\Name $name)
 * @method PayAction setObject(Property\Object $object)
 * @method PayAction setParticipant(Property\Participant $participant)
 * @method PayAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PayAction setPrice(Property\Price $price)
 * @method PayAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method PayAction setResult(Property\Result $result)
 * @method PayAction setSameAs(Property\SameAs $sameAs)
 * @method PayAction setStartTime(Property\StartTime $startTime)
 * @method PayAction setTarget(Property\Target $target)
 * @method PayAction setUrl(Property\Url $url)
 */
class PayAction extends TradeAction {

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

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
		return 'https://schema.org/PayAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return PayAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}