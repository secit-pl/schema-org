<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TipAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\TipActionType instead.
 * 
 * @method TipAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TipAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TipAction setAgent(Property\Agent $agent)
 * @method TipAction setAlternateName(Property\AlternateName $alternateName)
 * @method TipAction setDescription(Property\Description $description)
 * @method TipAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TipAction setEndTime(Property\EndTime $endTime)
 * @method TipAction setError(Property\Error $error)
 * @method TipAction setIdentifier(Property\Identifier $identifier)
 * @method TipAction setImage(Property\Image $image)
 * @method TipAction setInstrument(Property\Instrument $instrument)
 * @method TipAction setLocation(Property\Location $location)
 * @method TipAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TipAction setName(Property\Name $name)
 * @method TipAction setObject(Property\Object $object)
 * @method TipAction setParticipant(Property\Participant $participant)
 * @method TipAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TipAction setPrice(Property\Price $price)
 * @method TipAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method TipAction setResult(Property\Result $result)
 * @method TipAction setSameAs(Property\SameAs $sameAs)
 * @method TipAction setStartTime(Property\StartTime $startTime)
 * @method TipAction setTarget(Property\Target $target)
 * @method TipAction setUrl(Property\Url $url)
 */
class TipAction extends TradeAction {

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
		return 'https://schema.org/TipAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return TipAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}