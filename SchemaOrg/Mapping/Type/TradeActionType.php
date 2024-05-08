<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of participating in an exchange of goods and services for monetary compensation. An agent trades an object, product or service with a participant in exchange for a one time or periodic payment.
 * 
 * @method TradeActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TradeActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TradeActionType setAgent(Property\AgentProperty $agent)
 * @method TradeActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TradeActionType setDescription(Property\DescriptionProperty $description)
 * @method TradeActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TradeActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TradeActionType setError(Property\ErrorProperty $error)
 * @method TradeActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TradeActionType setImage(Property\ImageProperty $image)
 * @method TradeActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TradeActionType setLocation(Property\LocationProperty $location)
 * @method TradeActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TradeActionType setName(Property\NameProperty $name)
 * @method TradeActionType setObject(Property\ObjectProperty $object)
 * @method TradeActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TradeActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TradeActionType setResult(Property\ResultProperty $result)
 * @method TradeActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TradeActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TradeActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TradeActionType setTarget(Property\TargetProperty $target)
 * @method TradeActionType setUrl(Property\UrlProperty $url)
 */
class TradeActionType extends ActionType {

	/**
	 * @var Property\PriceProperty
	 */
	private $price;

	/**
	 * @var Property\PriceCurrencyProperty
	 */
	private $priceCurrency;

	/**
	 * @var Property\PriceSpecificationProperty
	 */
	private $priceSpecification;

	/**
	 * Get price.
	 *
	 * @return Property\PriceProperty
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Get price currency.
	 *
	 * @return Property\PriceCurrencyProperty
	 */
	public function getPriceCurrency() {
		return $this->priceCurrency;
	}

	/**
	 * Get price specification.
	 *
	 * @return Property\PriceSpecificationProperty
	 */
	public function getPriceSpecification() {
		return $this->priceSpecification;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TradeAction';
	}

	/**
	 * Set price.
	 *
	 * @param Property\PriceProperty $price
	 * @return TradeActionType
	 */
	public function setPrice(Property\PriceProperty $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price currency.
	 *
	 * @param Property\PriceCurrencyProperty $priceCurrency
	 * @return TradeActionType
	 */
	public function setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency) {
		$this->priceCurrency = $priceCurrency;

		return $this;
	}

	/**
	 * Set price specification.
	 *
	 * @param Property\PriceSpecificationProperty $priceSpecification
	 * @return TradeActionType
	 */
	public function setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification) {
		$this->priceSpecification = $priceSpecification;

		return $this;
	}
}