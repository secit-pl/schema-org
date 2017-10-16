<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GiveAction.
 * 
 * @method GiveAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method GiveAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method GiveAction setAgent(Property\Agent $agent)
 * @method GiveAction setAlternateName(Property\AlternateName $alternateName)
 * @method GiveAction setDescription(Property\Description $description)
 * @method GiveAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method GiveAction setEndTime(Property\EndTime $endTime)
 * @method GiveAction setError(Property\Error $error)
 * @method GiveAction setFromLocation(Property\FromLocation $fromLocation)
 * @method GiveAction setIdentifier(Property\Identifier $identifier)
 * @method GiveAction setImage(Property\Image $image)
 * @method GiveAction setInstrument(Property\Instrument $instrument)
 * @method GiveAction setLocation(Property\Location $location)
 * @method GiveAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method GiveAction setName(Property\Name $name)
 * @method GiveAction setObject(Property\Object $object)
 * @method GiveAction setParticipant(Property\Participant $participant)
 * @method GiveAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method GiveAction setResult(Property\Result $result)
 * @method GiveAction setSameAs(Property\SameAs $sameAs)
 * @method GiveAction setStartTime(Property\StartTime $startTime)
 * @method GiveAction setTarget(Property\Target $target)
 * @method GiveAction setToLocation(Property\ToLocation $toLocation)
 * @method GiveAction setUrl(Property\Url $url)
 */
class GiveAction extends TransferAction {

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
		return 'https://schema.org/GiveAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return GiveAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}