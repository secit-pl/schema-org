<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AskActionType.
 * 
 * @method AskActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AskActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AskActionType setAgent(Property\AgentProperty $agent)
 * @method AskActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AskActionType setDescription(Property\DescriptionProperty $description)
 * @method AskActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AskActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AskActionType setError(Property\ErrorProperty $error)
 * @method AskActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AskActionType setImage(Property\ImageProperty $image)
 * @method AskActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method AskActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AskActionType setLocation(Property\LocationProperty $location)
 * @method AskActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AskActionType setName(Property\NameProperty $name)
 * @method AskActionType setObject(Property\ObjectProperty $object)
 * @method AskActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AskActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AskActionType setRecipient(Property\RecipientProperty $recipient)
 * @method AskActionType setResult(Property\ResultProperty $result)
 * @method AskActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AskActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AskActionType setTarget(Property\TargetProperty $target)
 * @method AskActionType setUrl(Property\UrlProperty $url)
 */
class AskActionType extends CommunicateActionType {

	/**
	 * @var Property\QuestionProperty
	 */
	private $question;

	/**
	 * Get question.
	 * 
	 * @return Property\QuestionProperty
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
	 * @param Property\QuestionProperty $question
	 * @return AskActionType
	 */
	public function setQuestion(Property\QuestionProperty $question) {
		$this->question = $question;

		return $this;
	}
}