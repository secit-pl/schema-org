<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommunicateAction.
 * 
 * @method CommunicateAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CommunicateAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CommunicateAction setAgent(Property\Agent $agent)
 * @method CommunicateAction setAlternateName(Property\AlternateName $alternateName)
 * @method CommunicateAction setDescription(Property\Description $description)
 * @method CommunicateAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CommunicateAction setEndTime(Property\EndTime $endTime)
 * @method CommunicateAction setError(Property\Error $error)
 * @method CommunicateAction setImage(Property\Image $image)
 * @method CommunicateAction setInstrument(Property\Instrument $instrument)
 * @method CommunicateAction setLocation(Property\Location $location)
 * @method CommunicateAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CommunicateAction setName(Property\Name $name)
 * @method CommunicateAction setObject(Property\Object $object)
 * @method CommunicateAction setParticipant(Property\Participant $participant)
 * @method CommunicateAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CommunicateAction setResult(Property\Result $result)
 * @method CommunicateAction setSameAs(Property\SameAs $sameAs)
 * @method CommunicateAction setStartTime(Property\StartTime $startTime)
 * @method CommunicateAction setTarget(Property\Target $target)
 * @method CommunicateAction setUrl(Property\Url $url)
 */
class CommunicateAction extends InteractAction {

	/**
	 * @var Property\About
	 */
	private $about;

	/**
	 * @var Property\InLanguage
	 */
	private $inLanguage;

	/**
	 * @var Property\Recipient
	 */
	private $recipient;

	/**
	 * Get about.
	 * 
	 * @return Property\About
	 */
	public function getAbout() {
		return $this->about;
	}

	/**
	 * Get in language.
	 * 
	 * @return Property\InLanguage
	 */
	public function getInLanguage() {
		return $this->inLanguage;
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
		return 'https://schema.org/CommunicateAction';
	}

	/**
	 * Set about.
	 * 
	 * @param Property\About $about
	 * @return CommunicateAction
	 */
	public function setAbout(Property\About $about) {
		$this->about = $about;

		return $this;
	}

	/**
	 * Set in language.
	 * 
	 * @param Property\InLanguage $inLanguage
	 * @return CommunicateAction
	 */
	public function setInLanguage(Property\InLanguage $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\Recipient $recipient
	 * @return CommunicateAction
	 */
	public function setRecipient(Property\Recipient $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}