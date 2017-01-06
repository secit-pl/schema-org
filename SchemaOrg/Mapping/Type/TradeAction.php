<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TradeAction.
 * 
 * @method TradeAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TradeAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TradeAction setAgent(Property\Agent $agent)
 * @method TradeAction setAlternateName(Property\AlternateName $alternateName)
 * @method TradeAction setDescription(Property\Description $description)
 * @method TradeAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TradeAction setEndTime(Property\EndTime $endTime)
 * @method TradeAction setError(Property\Error $error)
 * @method TradeAction setImage(Property\Image $image)
 * @method TradeAction setInstrument(Property\Instrument $instrument)
 * @method TradeAction setLocation(Property\Location $location)
 * @method TradeAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TradeAction setName(Property\Name $name)
 * @method TradeAction setObject(Property\Object $object)
 * @method TradeAction setParticipant(Property\Participant $participant)
 * @method TradeAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TradeAction setResult(Property\Result $result)
 * @method TradeAction setSameAs(Property\SameAs $sameAs)
 * @method TradeAction setStartTime(Property\StartTime $startTime)
 * @method TradeAction setTarget(Property\Target $target)
 * @method TradeAction setUrl(Property\Url $url)
 */
class TradeAction extends Action {

	/**
	 * @var Property\Price
	 */
	private $price;

	/**
	 * @var Property\PriceSpecification
	 */
	private $priceSpecification;

	/**
	 * Get price.
	 * 
	 * @return Property\Price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Get price specification.
	 * 
	 * @return Property\PriceSpecification
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
	 * @param Property\Price $price
	 * @return TradeAction
	 */
	public function setPrice(Property\Price $price) {
		$this->price = $price;

		return $this;
	}

	/**
	 * Set price specification.
	 * 
	 * @param Property\PriceSpecification $priceSpecification
	 * @return TradeAction
	 */
	public function setPriceSpecification(Property\PriceSpecification $priceSpecification) {
		$this->priceSpecification = $priceSpecification;

		return $this;
	}
}