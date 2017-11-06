<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AuthorizeAction.
 * 
 * @method AuthorizeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AuthorizeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AuthorizeAction setAgent(Property\Agent $agent)
 * @method AuthorizeAction setAlternateName(Property\AlternateName $alternateName)
 * @method AuthorizeAction setDescription(Property\Description $description)
 * @method AuthorizeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AuthorizeAction setEndTime(Property\EndTime $endTime)
 * @method AuthorizeAction setError(Property\Error $error)
 * @method AuthorizeAction setIdentifier(Property\Identifier $identifier)
 * @method AuthorizeAction setImage(Property\Image $image)
 * @method AuthorizeAction setInstrument(Property\Instrument $instrument)
 * @method AuthorizeAction setLocation(Property\Location $location)
 * @method AuthorizeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AuthorizeAction setName(Property\Name $name)
 * @method AuthorizeAction setObject(Property\Object $object)
 * @method AuthorizeAction setParticipant(Property\Participant $participant)
 * @method AuthorizeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AuthorizeAction setResult(Property\Result $result)
 * @method AuthorizeAction setSameAs(Property\SameAs $sameAs)
 * @method AuthorizeAction setStartTime(Property\StartTime $startTime)
 * @method AuthorizeAction setTarget(Property\Target $target)
 * @method AuthorizeAction setUrl(Property\Url $url)
 */
class AuthorizeAction extends AllocateAction {

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
		return 'https://schema.org/AuthorizeAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return AuthorizeAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}