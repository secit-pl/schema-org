<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of notifying someone of information pertinent to them, with no expectation of a response.
 * 
 * @method InformActionType setAbout(Property\AboutProperty $about)
 * @method InformActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method InformActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InformActionType setAgent(Property\AgentProperty $agent)
 * @method InformActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InformActionType setDescription(Property\DescriptionProperty $description)
 * @method InformActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InformActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method InformActionType setError(Property\ErrorProperty $error)
 * @method InformActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InformActionType setImage(Property\ImageProperty $image)
 * @method InformActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method InformActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method InformActionType setLocation(Property\LocationProperty $location)
 * @method InformActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InformActionType setName(Property\NameProperty $name)
 * @method InformActionType setObject(Property\ObjectProperty $object)
 * @method InformActionType setParticipant(Property\ParticipantProperty $participant)
 * @method InformActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InformActionType setRecipient(Property\RecipientProperty $recipient)
 * @method InformActionType setResult(Property\ResultProperty $result)
 * @method InformActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method InformActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method InformActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InformActionType setTarget(Property\TargetProperty $target)
 * @method InformActionType setUrl(Property\UrlProperty $url)
 */
class InformActionType extends CommunicateActionType {

	/**
	 * @var Property\EventProperty
	 */
	private $event;

	/**
	 * Get event.
	 *
	 * @return Property\EventProperty
	 */
	public function getEvent() {
		return $this->event;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InformAction';
	}

	/**
	 * Set event.
	 *
	 * @param Property\EventProperty $event
	 * @return InformActionType
	 */
	public function setEvent(Property\EventProperty $event) {
		$this->event = $event;

		return $this;
	}
}