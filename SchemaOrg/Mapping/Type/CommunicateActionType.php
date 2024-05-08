<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of conveying information to another person via a communication medium (instrument) such as speech, email, or telephone conversation.
 * 
 * @method CommunicateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method CommunicateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CommunicateActionType setAgent(Property\AgentProperty $agent)
 * @method CommunicateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CommunicateActionType setDescription(Property\DescriptionProperty $description)
 * @method CommunicateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CommunicateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method CommunicateActionType setError(Property\ErrorProperty $error)
 * @method CommunicateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CommunicateActionType setImage(Property\ImageProperty $image)
 * @method CommunicateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method CommunicateActionType setLocation(Property\LocationProperty $location)
 * @method CommunicateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CommunicateActionType setName(Property\NameProperty $name)
 * @method CommunicateActionType setObject(Property\ObjectProperty $object)
 * @method CommunicateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method CommunicateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CommunicateActionType setResult(Property\ResultProperty $result)
 * @method CommunicateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method CommunicateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method CommunicateActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CommunicateActionType setTarget(Property\TargetProperty $target)
 * @method CommunicateActionType setUrl(Property\UrlProperty $url)
 */
class CommunicateActionType extends InteractActionType {

	/**
	 * @var Property\AboutProperty
	 */
	private $about;

	/**
	 * @var Property\InLanguageProperty
	 */
	private $inLanguage;

	/**
	 * @var Property\RecipientProperty
	 */
	private $recipient;

	/**
	 * Get about.
	 *
	 * @return Property\AboutProperty
	 */
	public function getAbout() {
		return $this->about;
	}

	/**
	 * Get in language.
	 *
	 * @return Property\InLanguageProperty
	 */
	public function getInLanguage() {
		return $this->inLanguage;
	}

	/**
	 * Get recipient.
	 *
	 * @return Property\RecipientProperty
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
	 * @param Property\AboutProperty $about
	 * @return CommunicateActionType
	 */
	public function setAbout(Property\AboutProperty $about) {
		$this->about = $about;

		return $this;
	}

	/**
	 * Set in language.
	 *
	 * @param Property\InLanguageProperty $inLanguage
	 * @return CommunicateActionType
	 */
	public function setInLanguage(Property\InLanguageProperty $inLanguage) {
		$this->inLanguage = $inLanguage;

		return $this;
	}

	/**
	 * Set recipient.
	 *
	 * @param Property\RecipientProperty $recipient
	 * @return CommunicateActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}