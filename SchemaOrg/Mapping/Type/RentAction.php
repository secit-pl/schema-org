<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RentActionType instead.
 * 
 * @method RentAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method RentAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method RentAction setAgent(Property\Agent $agent)
 * @method RentAction setAlternateName(Property\AlternateName $alternateName)
 * @method RentAction setDescription(Property\Description $description)
 * @method RentAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RentAction setEndTime(Property\EndTime $endTime)
 * @method RentAction setError(Property\Error $error)
 * @method RentAction setIdentifier(Property\Identifier $identifier)
 * @method RentAction setImage(Property\Image $image)
 * @method RentAction setInstrument(Property\Instrument $instrument)
 * @method RentAction setLocation(Property\Location $location)
 * @method RentAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RentAction setName(Property\Name $name)
 * @method RentAction setObject(Property\Object $object)
 * @method RentAction setParticipant(Property\Participant $participant)
 * @method RentAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RentAction setPrice(Property\Price $price)
 * @method RentAction setPriceSpecification(Property\PriceSpecification $priceSpecification)
 * @method RentAction setResult(Property\Result $result)
 * @method RentAction setSameAs(Property\SameAs $sameAs)
 * @method RentAction setStartTime(Property\StartTime $startTime)
 * @method RentAction setTarget(Property\Target $target)
 * @method RentAction setUrl(Property\Url $url)
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