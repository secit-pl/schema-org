<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReturnAction.
 * 
 * @method ReturnAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReturnAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReturnAction setAgent(Property\Agent $agent)
 * @method ReturnAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReturnAction setDescription(Property\Description $description)
 * @method ReturnAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReturnAction setEndTime(Property\EndTime $endTime)
 * @method ReturnAction setError(Property\Error $error)
 * @method ReturnAction setFromLocation(Property\FromLocation $fromLocation)
 * @method ReturnAction setImage(Property\Image $image)
 * @method ReturnAction setInstrument(Property\Instrument $instrument)
 * @method ReturnAction setLocation(Property\Location $location)
 * @method ReturnAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReturnAction setName(Property\Name $name)
 * @method ReturnAction setObject(Property\Object $object)
 * @method ReturnAction setParticipant(Property\Participant $participant)
 * @method ReturnAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReturnAction setResult(Property\Result $result)
 * @method ReturnAction setSameAs(Property\SameAs $sameAs)
 * @method ReturnAction setStartTime(Property\StartTime $startTime)
 * @method ReturnAction setTarget(Property\Target $target)
 * @method ReturnAction setToLocation(Property\ToLocation $toLocation)
 * @method ReturnAction setUrl(Property\Url $url)
 */
class ReturnAction extends TransferAction {

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
		return 'https://schema.org/ReturnAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return ReturnAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}