<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TrackAction.
 * 
 * @method TrackAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method TrackAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TrackAction setAgent(Property\Agent $agent)
 * @method TrackAction setAlternateName(Property\AlternateName $alternateName)
 * @method TrackAction setDescription(Property\Description $description)
 * @method TrackAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TrackAction setEndTime(Property\EndTime $endTime)
 * @method TrackAction setError(Property\Error $error)
 * @method TrackAction setImage(Property\Image $image)
 * @method TrackAction setInstrument(Property\Instrument $instrument)
 * @method TrackAction setLocation(Property\Location $location)
 * @method TrackAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TrackAction setName(Property\Name $name)
 * @method TrackAction setObject(Property\Object $object)
 * @method TrackAction setParticipant(Property\Participant $participant)
 * @method TrackAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TrackAction setResult(Property\Result $result)
 * @method TrackAction setSameAs(Property\SameAs $sameAs)
 * @method TrackAction setStartTime(Property\StartTime $startTime)
 * @method TrackAction setTarget(Property\Target $target)
 * @method TrackAction setUrl(Property\Url $url)
 */
class TrackAction extends FindAction {

	/**
	 * @var Property\DeliveryMethod
	 */
	private $deliveryMethod;

	/**
	 * Get delivery method.
	 * 
	 * @return Property\DeliveryMethod
	 */
	public function getDeliveryMethod() {
		return $this->deliveryMethod;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TrackAction';
	}

	/**
	 * Set delivery method.
	 * 
	 * @param Property\DeliveryMethod $deliveryMethod
	 * @return TrackAction
	 */
	public function setDeliveryMethod(Property\DeliveryMethod $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}