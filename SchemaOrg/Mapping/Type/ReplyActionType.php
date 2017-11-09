<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ReplyActionType.
 * 
 * @method ReplyActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ReplyActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ReplyActionType setAgent(Property\AgentProperty $agent)
 * @method ReplyActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ReplyActionType setDescription(Property\DescriptionProperty $description)
 * @method ReplyActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ReplyActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ReplyActionType setError(Property\ErrorProperty $error)
 * @method ReplyActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ReplyActionType setImage(Property\ImageProperty $image)
 * @method ReplyActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ReplyActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ReplyActionType setLocation(Property\LocationProperty $location)
 * @method ReplyActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ReplyActionType setName(Property\NameProperty $name)
 * @method ReplyActionType setObject(Property\ObjectProperty $object)
 * @method ReplyActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ReplyActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ReplyActionType setRecipient(Property\RecipientProperty $recipient)
 * @method ReplyActionType setResult(Property\ResultProperty $result)
 * @method ReplyActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ReplyActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ReplyActionType setTarget(Property\TargetProperty $target)
 * @method ReplyActionType setUrl(Property\UrlProperty $url)
 */
class ReplyActionType extends CommunicateActionType {

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
		return 'https://schema.org/ReplyAction';
	}

	/**
	 * Set result comment.
	 * 
	 * @param Property\ResultCommentProperty $resultComment
	 * @return ReplyActionType
	 */
	public function setResultComment(Property\ResultCommentProperty $resultComment) {
		$this->resultComment = $resultComment;

		return $this;
	}
}