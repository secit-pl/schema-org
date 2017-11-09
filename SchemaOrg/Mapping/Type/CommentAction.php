<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CommentAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CommentActionType instead.
 * 
 * @method CommentAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method CommentAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method CommentAction setAgent(Property\Agent $agent)
 * @method CommentAction setAlternateName(Property\AlternateName $alternateName)
 * @method CommentAction setDescription(Property\Description $description)
 * @method CommentAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CommentAction setEndTime(Property\EndTime $endTime)
 * @method CommentAction setError(Property\Error $error)
 * @method CommentAction setIdentifier(Property\Identifier $identifier)
 * @method CommentAction setImage(Property\Image $image)
 * @method CommentAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CommentAction setInstrument(Property\Instrument $instrument)
 * @method CommentAction setLocation(Property\Location $location)
 * @method CommentAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CommentAction setName(Property\Name $name)
 * @method CommentAction setObject(Property\Object $object)
 * @method CommentAction setParticipant(Property\Participant $participant)
 * @method CommentAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CommentAction setRecipient(Property\Recipient $recipient)
 * @method CommentAction setResult(Property\Result $result)
 * @method CommentAction setSameAs(Property\SameAs $sameAs)
 * @method CommentAction setStartTime(Property\StartTime $startTime)
 * @method CommentAction setTarget(Property\Target $target)
 * @method CommentAction setUrl(Property\Url $url)
 */
class CommentAction extends CommunicateAction {

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
		return 'https://schema.org/CommentAction';
	}

	/**
	 * Set result comment.
	 * 
	 * @param Property\ResultComment $resultComment
	 * @return CommentAction
	 */
	public function setResultComment(Property\ResultComment $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}