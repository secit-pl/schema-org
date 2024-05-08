<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of giving money voluntarily to a beneficiary in recognition of services rendered.
 * 
 * @method TipActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TipActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TipActionType setAgent(Property\AgentProperty $agent)
 * @method TipActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TipActionType setDescription(Property\DescriptionProperty $description)
 * @method TipActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TipActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TipActionType setError(Property\ErrorProperty $error)
 * @method TipActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TipActionType setImage(Property\ImageProperty $image)
 * @method TipActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TipActionType setLocation(Property\LocationProperty $location)
 * @method TipActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TipActionType setName(Property\NameProperty $name)
 * @method TipActionType setObject(Property\ObjectProperty $object)
 * @method TipActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TipActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TipActionType setPrice(Property\PriceProperty $price)
 * @method TipActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method TipActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method TipActionType setResult(Property\ResultProperty $result)
 * @method TipActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TipActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TipActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TipActionType setTarget(Property\TargetProperty $target)
 * @method TipActionType setUrl(Property\UrlProperty $url)
 */
class TipActionType extends TradeActionType {

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
		return 'https://schema.org/TipAction';
	}

	/**
	 * Set recipient.
	 *
	 * @param Property\RecipientProperty $recipient
	 * @return TipActionType
	 */
	public function setRecipient(Property\RecipientProperty $recipient) {
		$this->recipient = $recipient;

		return $this;
	}
}