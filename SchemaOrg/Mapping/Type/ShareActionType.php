<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShareActionType.
 * 
 * @method ShareActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ShareActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ShareActionType setAgent(Property\AgentProperty $agent)
 * @method ShareActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ShareActionType setDescription(Property\DescriptionProperty $description)
 * @method ShareActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ShareActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ShareActionType setError(Property\ErrorProperty $error)
 * @method ShareActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ShareActionType setImage(Property\ImageProperty $image)
 * @method ShareActionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method ShareActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ShareActionType setLocation(Property\LocationProperty $location)
 * @method ShareActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ShareActionType setName(Property\NameProperty $name)
 * @method ShareActionType setObject(Property\ObjectProperty $object)
 * @method ShareActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ShareActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ShareActionType setRecipient(Property\RecipientProperty $recipient)
 * @method ShareActionType setResult(Property\ResultProperty $result)
 * @method ShareActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ShareActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ShareActionType setTarget(Property\TargetProperty $target)
 * @method ShareActionType setUrl(Property\UrlProperty $url)
 */
class ShareActionType extends CommunicateActionType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShareAction';
	}
}