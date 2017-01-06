<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FollowAction.
 * 
 * @method FollowAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method FollowAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method FollowAction setAgent(Property\Agent $agent)
 * @method FollowAction setAlternateName(Property\AlternateName $alternateName)
 * @method FollowAction setDescription(Property\Description $description)
 * @method FollowAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FollowAction setEndTime(Property\EndTime $endTime)
 * @method FollowAction setError(Property\Error $error)
 * @method FollowAction setImage(Property\Image $image)
 * @method FollowAction setInstrument(Property\Instrument $instrument)
 * @method FollowAction setLocation(Property\Location $location)
 * @method FollowAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FollowAction setName(Property\Name $name)
 * @method FollowAction setObject(Property\Object $object)
 * @method FollowAction setParticipant(Property\Participant $participant)
 * @method FollowAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FollowAction setResult(Property\Result $result)
 * @method FollowAction setSameAs(Property\SameAs $sameAs)
 * @method FollowAction setStartTime(Property\StartTime $startTime)
 * @method FollowAction setTarget(Property\Target $target)
 * @method FollowAction setUrl(Property\Url $url)
 */
class FollowAction extends InteractAction {

	/**
	 * @var Property\Followee
	 */
	private $followee;

	/**
	 * Get followee.
	 * 
	 * @return Property\Followee
	 */
	public function getFollowee() {
		return $this->followee;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FollowAction';
	}

	/**
	 * Set followee.
	 * 
	 * @param Property\Followee $followee
	 * @return FollowAction
	 */
	public function setFollowee(Property\Followee $followee) {
		$this->followee = $followee;

		return $this;
	}
}