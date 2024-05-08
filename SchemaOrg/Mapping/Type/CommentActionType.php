<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of generating a comment about a subject.
 * 
 * @method CommentActionType setAbout(Property\AboutProperty $about)
 * @method CommentActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CommentActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CommentActionType setAgent(Property\AgentProperty $agent)
 * @method CommentActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CommentActionType setDescription(Property\DescriptionProperty $description)
 * @method CommentActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CommentActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CommentActionType setError(Property\ErrorProperty $error)
 * @method CommentActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CommentActionType setImage(Property\ImageProperty $image)
 * @method CommentActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CommentActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CommentActionType setLocation(Property\LocationProperty $location)
 * @method CommentActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CommentActionType setName(Property\NameProperty $name)
 * @method CommentActionType setObject(Property\ObjectProperty $object)
 * @method CommentActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CommentActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CommentActionType setRecipient(Property\RecipientProperty $recipient)
 * @method CommentActionType setResult(Property\ResultProperty $result)
 * @method CommentActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CommentActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CommentActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CommentActionType setTarget(Property\TargetProperty $target)
 * @method CommentActionType setUrl(Property\UrlProperty $url)
 */
class CommentActionType extends CommunicateActionType {

	/**
	 * @var Property\ResultCommentProperty
	 */
	private $resultComment;

	/**
	 * Get result comment.
	 *
	 * @return Property\ResultCommentProperty
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
	 * @param Property\ResultCommentProperty $resultComment
	 * @return CommentActionType
	 */
	public function setResultComment(Property\ResultCommentProperty $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}