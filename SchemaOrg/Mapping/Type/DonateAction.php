<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DonateAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DonateActionType instead.
 * 
 * @method DonateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method DonateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method DonateAction setAgent(Property\Agent $agent)
 * @method DonateAction setAlternateName(Property\AlternateName $alternateName)
 * @method DonateAction setDescription(Property\Description $description)
 * @method DonateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DonateAction setEndTime(Property\EndTime $endTime)
 * @method DonateAction setError(Property\Error $error)
 * @method DonateAction setIdentifier(Property\Identifier $identifier)
 * @method DonateAction setImage(Property\Image $image)
 * @method DonateAction setInstrument(Property\Instrument $instrument)
 * @method DonateAction setLocation(Property\Location $location)
 * @method DonateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DonateAction setName(Property\Name $name)
 * @method DonateAction setObject(Property\Object $object)
 * @method DonateAction setParticipant(Property\Participant $participant)
 * @method DonateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DonateAction setPrice(Property\Price $price)
 * @method DonateAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method DonateAction setResult(Property\Result $result)
 * @method DonateAction setSameAs(Property\SameAs $sameAs)
 * @method DonateAction setStartTime(Property\StartTime $startTime)
 * @method DonateAction setTarget(Property\Target $target)
 * @method DonateAction setUrl(Property\Url $url)
 */
class DonateAction extends TradeAction {

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
		return 'https://schema.org/DonateAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return DonateAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}