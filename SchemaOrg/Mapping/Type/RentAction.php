<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentAction.
 * 
 * @method RentAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method RentAction setAgent(Property\Agent $agent)
 * @method RentAction setEndTime(Property\EndTime $endTime)
 * @method RentAction setError(Property\Error $error)
 * @method RentAction setInstrument(Property\Instrument $instrument)
 * @method RentAction setLocation(Property\Location $location)
 * @method RentAction setObject(Property\Object $object)
 * @method RentAction setParticipant(Property\Participant $participant)
 * @method RentAction setPrice(Property\Price $price)
 * @method RentAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method RentAction setResult(Property\Result $result)
 * @method RentAction setStartTime(Property\StartTime $startTime)
 * @method RentAction setTarget(Property\Target $target)
 */
class RentAction extends TradeAction {

	/**
	 * @var Property\Landlord
	 */
	private $landlord;

	/**
	 * @var Property\RealEstateAgent
	 */
	private $realEstateAgent;

	/**
	 * Get landlord.
	 * 
	 * @return Property\Landlord
	 */
	public function getLandlord() {
		return $this->landlord;
	}

	/**
	 * Get real estate agent.
	 * 
	 * @return Property\RealEstateAgent
	 */
	public function getRealEstateAgent() {
		return $this->realEstateAgent;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RentAction';
	}

	/**
	 * Set landlord.
	 * 
	 * @param Property\Landlord $landlord
	 * @return RentAction
	 */
	public function setLandlord(Property\Landlord $landlord) {
		$this->landlord = $landlord;

		return $this;
	}

	/**
	 * Set real estate agent.
	 * 
	 * @param Property\RealEstateAgent $realEstateAgent
	 * @return RentAction
	 */
	public function setRealEstateAgent(Property\RealEstateAgent $realEstateAgent) {
		$this->realEstateAgent = $realEstateAgent;

		return $this;
	}
}