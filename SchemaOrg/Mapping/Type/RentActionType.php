<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RentActionType.
 * 
 * @method RentActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method RentActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RentActionType setAgent(Property\AgentProperty $agent)
 * @method RentActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RentActionType setDescription(Property\DescriptionProperty $description)
 * @method RentActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RentActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method RentActionType setError(Property\ErrorProperty $error)
 * @method RentActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RentActionType setImage(Property\ImageProperty $image)
 * @method RentActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method RentActionType setLocation(Property\LocationProperty $location)
 * @method RentActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RentActionType setName(Property\NameProperty $name)
 * @method RentActionType setObject(Property\ObjectProperty $object)
 * @method RentActionType setParticipant(Property\ParticipantProperty $participant)
 * @method RentActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RentActionType setPrice(Property\PriceProperty $price)
 * @method RentActionType setPriceSpecification(Property\PriceSpecificationProperty $priceSpecification)
 * @method RentActionType setResult(Property\ResultProperty $result)
 * @method RentActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method RentActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method RentActionType setTarget(Property\TargetProperty $target)
 * @method RentActionType setUrl(Property\UrlProperty $url)
 */
class RentActionType extends TradeActionType {

	/**
	 * @var Property\LandlordProperty
	 */
	private $landlord;

	/**
	 * @var Property\RealEstateAgentProperty
	 */
	private $realEstateAgent;

	/**
	 * Get landlord.
	 * 
	 * @return Property\LandlordProperty
	 */
	public function getLandlord() {
		return $this->landlord;
	}

	/**
	 * Get real estate agent.
	 * 
	 * @return Property\RealEstateAgentProperty
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
	 * @param Property\LandlordProperty $landlord
	 * @return RentActionType
	 */
	public function setLandlord(Property\LandlordProperty $landlord) {
		$this->landlord = $landlord;

		return $this;
	}

	/**
	 * Set real estate agent.
	 * 
	 * @param Property\RealEstateAgentProperty $realEstateAgent
	 * @return RentActionType
	 */
	public function setRealEstateAgent(Property\RealEstateAgentProperty $realEstateAgent) {
		$this->realEstateAgent = $realEstateAgent;

		return $this;
	}
}