<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AuthorizeActionType.
 * 
 * @method AuthorizeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method AuthorizeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AuthorizeActionType setAgent(Property\AgentProperty $agent)
 * @method AuthorizeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AuthorizeActionType setDescription(Property\DescriptionProperty $description)
 * @method AuthorizeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AuthorizeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method AuthorizeActionType setError(Property\ErrorProperty $error)
 * @method AuthorizeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AuthorizeActionType setImage(Property\ImageProperty $image)
 * @method AuthorizeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method AuthorizeActionType setLocation(Property\LocationProperty $location)
 * @method AuthorizeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AuthorizeActionType setName(Property\NameProperty $name)
 * @method AuthorizeActionType setObject(Property\ObjectProperty $object)
 * @method AuthorizeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method AuthorizeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AuthorizeActionType setResult(Property\ResultProperty $result)
 * @method AuthorizeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method AuthorizeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method AuthorizeActionType setTarget(Property\TargetProperty $target)
 * @method AuthorizeActionType setUrl(Property\UrlProperty $url)
 */
class AuthorizeActionType extends AllocateActionType {

	/**
	 * @var Property\RecipientProperty
	 */
	private $recipient;

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
		return 'https://schema.org/AuthorizeAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\RecipientProperty $recipient
	 * @return AuthorizeActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}