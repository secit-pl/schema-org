<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an object, product, or service from a seller for a price. Reciprocal of SellAction.
 * 
 * @method BuyActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method BuyActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BuyActionType setAgent(Property\AgentProperty $agent)
 * @method BuyActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BuyActionType setDescription(Property\DescriptionProperty $description)
 * @method BuyActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BuyActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method BuyActionType setError(Property\ErrorProperty $error)
 * @method BuyActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BuyActionType setImage(Property\ImageProperty $image)
 * @method BuyActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method BuyActionType setLocation(Property\LocationProperty $location)
 * @method BuyActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BuyActionType setName(Property\NameProperty $name)
 * @method BuyActionType setObject(Property\ObjectProperty $object)
 * @method BuyActionType setParticipant(Property\ParticipantProperty $participant)
 * @method BuyActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BuyActionType setPrice(Property\PriceProperty $price)
 * @method BuyActionType setPriceCurrency(Property\PriceCurrencyProperty $priceCurrency)
 * @method BuyActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method BuyActionType setResult(Property\ResultProperty $result)
 * @method BuyActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method BuyActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method BuyActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BuyActionType setTarget(Property\TargetProperty $target)
 * @method BuyActionType setUrl(Property\UrlProperty $url)
 */
class BuyActionType extends TradeActionType {

	/**
	 * @var Property\SellerProperty
	 */
	private $seller;

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BuyAction';
	}

	/**
	 * Get seller.
	 *
	 * @return Property\SellerProperty
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Set seller.
	 *
	 * @param Property\SellerProperty $seller
	 * @return BuyActionType
	 */
	public function setSeller(Property\SellerProperty $seller) {
		$this->seller = $seller;

		return $this;
	}
}