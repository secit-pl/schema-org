<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PerformAction.
 * 
 * @method PerformAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PerformAction setAgent(Property\Agent $agent)
 * @method PerformAction setAudience(Property\Audience $audience)
 * @method PerformAction setEndTime(Property\EndTime $endTime)
 * @method PerformAction setError(Property\Error $error)
 * @method PerformAction setEvent(Property\Event $event)
 * @method PerformAction setInstrument(Property\Instrument $instrument)
 * @method PerformAction setLocation(Property\Location $location)
 * @method PerformAction setObject(Property\Object $object)
 * @method PerformAction setParticipant(Property\Participant $participant)
 * @method PerformAction setResult(Property\Result $result)
 * @method PerformAction setStartTime(Property\StartTime $startTime)
 * @method PerformAction setTarget(Property\Target $target)
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