<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent orders an object/product/service to be delivered/sent.
 * 
 * @method OrderActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method OrderActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OrderActionType setAgent(Property\AgentProperty $agent)
 * @method OrderActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OrderActionType setDescription(Property\DescriptionProperty $description)
 * @method OrderActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OrderActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method OrderActionType setError(Property\ErrorProperty $error)
 * @method OrderActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OrderActionType setImage(Property\ImageProperty $image)
 * @method OrderActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method OrderActionType setLocation(Property\LocationProperty $location)
 * @method OrderActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OrderActionType setName(Property\NameProperty $name)
 * @method OrderActionType setObject(Property\ObjectProperty $object)
 * @method OrderActionType setParticipant(Property\ParticipantProperty $participant)
 * @method OrderActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OrderActionType setPrice(Property\PriceProperty $price)
 * @method OrderActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method OrderActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method OrderActionType setResult(Property\ResultProperty $result)
 * @method OrderActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method OrderActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method OrderActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OrderActionType setTarget(Property\TargetProperty $target)
 * @method OrderActionType setUrl(Property\UrlProperty $url)
 */
class OrderActionType extends TradeActionType {

	/**
	 * @var Property\DeliveryMethodProperty
	 */
	private $deliveryMethod;

	/**
	 * Get delivery method.
	 *
	 * @return Property\DeliveryMethodProperty
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OrderAction';
	}

	/**
	 * Set delivery method.
	 *
	 * @param Property\DeliveryMethodProperty $deliveryMethod
	 * @return OrderActionType
	 */
	public function setDeliveryMethod(Property\DeliveryMethodProperty $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}