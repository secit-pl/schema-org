<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AskAction.
 * 
 * @method AskAction setAbout(Property\About $about)
 * @method AskAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method AskAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method AskAction setAgent(Property\Agent $agent)
 * @method AskAction setAlternateName(Property\AlternateName $alternateName)
 * @method AskAction setDescription(Property\Description $description)
 * @method AskAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method AskAction setEndTime(Property\EndTime $endTime)
 * @method AskAction setError(Property\Error $error)
 * @method AskAction setImage(Property\Image $image)
 * @method AskAction setInLanguage(Property\InLanguage $inLanguage)
 * @method AskAction setInstrument(Property\Instrument $instrument)
 * @method AskAction setLocation(Property\Location $location)
 * @method AskAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method AskAction setName(Property\Name $name)
 * @method AskAction setObject(Property\Object $object)
 * @method AskAction setParticipant(Property\Participant $participant)
 * @method AskAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method AskAction setRecipient(Property\Recipient $recipient)
 * @method AskAction setResult(Property\Result $result)
 * @method AskAction setSameAs(Property\SameAs $sameAs)
 * @method AskAction setStartTime(Property\StartTime $startTime)
 * @method AskAction setTarget(Property\Target $target)
 * @method AskAction setUrl(Property\Url $url)
 */
class AskAction extends CommunicateAction {

	/**
	 * @var Property\Question
	 */
	private $question;

	/**
	 * Get question.
	 * 
	 * @return Property\Question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AskAction';
	}

	/**
	 * Set question.
	 * 
	 * @param Property\Question $question
	 * @return AskAction
	 */
	public function setQuestion(Property\Question $question) {
		$this->question = $question;

		return $this;
	}
}