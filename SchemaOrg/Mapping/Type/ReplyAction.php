<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplyAction.
 * 
 * @method ReplyAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ReplyAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ReplyAction setAgent(Property\Agent $agent)
 * @method ReplyAction setAlternateName(Property\AlternateName $alternateName)
 * @method ReplyAction setDescription(Property\Description $description)
 * @method ReplyAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ReplyAction setEndTime(Property\EndTime $endTime)
 * @method ReplyAction setError(Property\Error $error)
 * @method ReplyAction setIdentifier(Property\Identifier $identifier)
 * @method ReplyAction setImage(Property\Image $image)
 * @method ReplyAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ReplyAction setInstrument(Property\Instrument $instrument)
 * @method ReplyAction setLocation(Property\Location $location)
 * @method ReplyAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ReplyAction setName(Property\Name $name)
 * @method ReplyAction setObject(Property\Object $object)
 * @method ReplyAction setParticipant(Property\Participant $participant)
 * @method ReplyAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ReplyAction setRecipient(Property\Recipient $recipient)
 * @method ReplyAction setResult(Property\Result $result)
 * @method ReplyAction setSameAs(Property\SameAs $sameAs)
 * @method ReplyAction setStartTime(Property\StartTime $startTime)
 * @method ReplyAction setTarget(Property\Target $target)
 * @method ReplyAction setUrl(Property\Url $url)
 */
class ReplyAction extends CommunicateAction {

	/**
	 * @var Property\ResultComment
	 */
	private $resultComment;

	/**
	 * Get result comment.
	 * 
	 * @return Property\ResultComment
	 */
	public function getResultComment() {
		return $this->resultComment;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ReplyAction';
	}

	/**
	 * Set result comment.
	 * 
	 * @param Property\ResultComment $resultComment
	 * @return ReplyAction
	 */
	public function setResultComment(Property\ResultComment $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}