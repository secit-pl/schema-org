<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent pays a price to a participant.
 * 
 * @method PayActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PayActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PayActionType setAgent(Property\AgentProperty $agent)
 * @method PayActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PayActionType setDescription(Property\DescriptionProperty $description)
 * @method PayActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PayActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PayActionType setError(Property\ErrorProperty $error)
 * @method PayActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PayActionType setImage(Property\ImageProperty $image)
 * @method PayActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PayActionType setLocation(Property\LocationProperty $location)
 * @method PayActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PayActionType setName(Property\NameProperty $name)
 * @method PayActionType setObject(Property\ObjectProperty $object)
 * @method PayActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PayActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PayActionType setPrice(Property\PriceProperty $price)
 * @method PayActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method PayActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method PayActionType setResult(Property\ResultProperty $result)
 * @method PayActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PayActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PayActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PayActionType setTarget(Property\TargetProperty $target)
 * @method PayActionType setUrl(Property\UrlProperty $url)
 */
class PayActionType extends TradeActionType {

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
		return 'https://schema.org/PayAction';
	}

	/**
	 * Set recipient.
	 *
	 * @param Property\RecipientProperty $recipient
	 * @return PayActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}