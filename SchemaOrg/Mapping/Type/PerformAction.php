<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformAction.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\PerformActionType instead.
 * 
 * @method PerformAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PerformAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PerformAction setAgent(Property\Agent $agent)
 * @method PerformAction setAlternateName(Property\AlternateName $alternateName)
 * @method PerformAction setAudience(Property\Audience $audience)
 * @method PerformAction setDescription(Property\Description $description)
 * @method PerformAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PerformAction setEndTime(Property\EndTime $endTime)
 * @method PerformAction setError(Property\Error $error)
 * @method PerformAction setEvent(Property\Event $event)
 * @method PerformAction setIdentifier(Property\Identifier $identifier)
 * @method PerformAction setImage(Property\Image $image)
 * @method PerformAction setInstrument(Property\Instrument $instrument)
 * @method PerformAction setLocation(Property\Location $location)
 * @method PerformAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PerformAction setName(Property\Name $name)
 * @method PerformAction setObject(Property\Object $object)
 * @method PerformAction setParticipant(Property\Participant $participant)
 * @method PerformAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PerformAction setResult(Property\Result $result)
 * @method PerformAction setSameAs(Property\SameAs $sameAs)
 * @method PerformAction setStartTime(Property\StartTime $startTime)
 * @method PerformAction setTarget(Property\Target $target)
 * @method PerformAction setUrl(Property\Url $url)
 */
class PerformAction extends PlayAction {

	/**
	 * @var Property\EntertainmentBusiness
	 */
	private $entertainmentBusiness;

	/**
	 * Get entertainment business.
	 * 
	 * @return Property\EntertainmentBusiness
	 */
	public function getEntertainmentBusiness() {
		return $this->entertainmentBusiness;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PerformAction';
	}

	/**
	 * Set entertainment business.
	 * 
	 * @param Property\EntertainmentBusiness $entertainmentBusiness
	 * @return PerformAction
	 */
	public function setEntertainmentBusiness(Property\EntertainmentBusiness $entertainmentBusiness) {
		$this->entertainmentBusiness = $entertainmentBusiness;

		return $this;
	}
}