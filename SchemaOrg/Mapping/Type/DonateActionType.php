<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DonateActionType.
 * 
 * @method DonateActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method DonateActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DonateActionType setAgent(Property\AgentProperty $agent)
 * @method DonateActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DonateActionType setDescription(Property\DescriptionProperty $description)
 * @method DonateActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DonateActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method DonateActionType setError(Property\ErrorProperty $error)
 * @method DonateActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DonateActionType setImage(Property\ImageProperty $image)
 * @method DonateActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method DonateActionType setLocation(Property\LocationProperty $location)
 * @method DonateActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DonateActionType setName(Property\NameProperty $name)
 * @method DonateActionType setObject(Property\ObjectProperty $object)
 * @method DonateActionType setParticipant(Property\ParticipantProperty $participant)
 * @method DonateActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DonateActionType setPrice(Property\PriceProperty $price)
 * @method DonateActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method DonateActionType setResult(Property\ResultProperty $result)
 * @method DonateActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DonateActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method DonateActionType setTarget(Property\TargetProperty $target)
 * @method DonateActionType setUrl(Property\UrlProperty $url)
 */
class DonateActionType extends TradeActionType {

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
		return 'https://schema.org/DonateAction';
	}

	/**
	 * Set recipient.
	 * 
	 * @param Property\RecipientProperty $recipient
	 * @return DonateActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}