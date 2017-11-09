<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SellActionType.
 * 
 * @method SellActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method SellActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SellActionType setAgent(Property\AgentProperty $agent)
 * @method SellActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SellActionType setDescription(Property\DescriptionProperty $description)
 * @method SellActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SellActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method SellActionType setError(Property\ErrorProperty $error)
 * @method SellActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SellActionType setImage(Property\ImageProperty $image)
 * @method SellActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method SellActionType setLocation(Property\LocationProperty $location)
 * @method SellActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SellActionType setName(Property\NameProperty $name)
 * @method SellActionType setObject(Property\ObjectProperty $object)
 * @method SellActionType setParticipant(Property\ParticipantProperty $participant)
 * @method SellActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SellActionType setPrice(Property\PriceProperty $price)
 * @method SellActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method SellActionType setResult(Property\ResultProperty $result)
 * @method SellActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method SellActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method SellActionType setTarget(Property\TargetProperty $target)
 * @method SellActionType setUrl(Property\UrlProperty $url)
 */
class SellActionType extends TradeActionType {

	/**
	 * @var Property\BuyerProperty
	 */
	private $buyer;

	/**
	 * Get buyer.
	 * 
	 * @return Property\BuyerProperty
	 */
	public function getBuyer() {
		return $this->buyer;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SellAction';
	}

	/**
	 * Set buyer.
	 * 
	 * @param Property\BuyerProperty $buyer
	 * @return SellActionType
	 */
	public function setBuyer(Property\BuyerProperty $buyer) {
		$this->buyer = $buyer;

		return $this;
	}
}