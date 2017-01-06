<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PlanAction.
 * 
 * @method PlanAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method PlanAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method PlanAction setAgent(Property\Agent $agent)
 * @method PlanAction setAlternateName(Property\AlternateName $alternateName)
 * @method PlanAction setDescription(Property\Description $description)
 * @method PlanAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method PlanAction setEndTime(Property\EndTime $endTime)
 * @method PlanAction setError(Property\Error $error)
 * @method PlanAction setImage(Property\Image $image)
 * @method PlanAction setInstrument(Property\Instrument $instrument)
 * @method PlanAction setLocation(Property\Location $location)
 * @method PlanAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method PlanAction setName(Property\Name $name)
 * @method PlanAction setObject(Property\Object $object)
 * @method PlanAction setParticipant(Property\Participant $participant)
 * @method PlanAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method PlanAction setResult(Property\Result $result)
 * @method PlanAction setSameAs(Property\SameAs $sameAs)
 * @method PlanAction setStartTime(Property\StartTime $startTime)
 * @method PlanAction setTarget(Property\Target $target)
 * @method PlanAction setUrl(Property\Url $url)
 */
class PlanAction extends OrganizeAction {

	/**
	 * @var Property\ScheduledTime
	 */
	private $scheduledTime;

	/**
	 * Get scheduled time.
	 * 
	 * @return Property\ScheduledTime
	 */
	public function getScheduledTime() {
		return $this->scheduledTime;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlanAction';
	}

	/**
	 * Set scheduled time.
	 * 
	 * @param Property\ScheduledTime $scheduledTime
	 * @return PlanAction
	 */
	public function setScheduledTime(Property\ScheduledTime $scheduledTime) {
		$this->scheduledTime = $scheduledTime;

		return $this;
	}
}