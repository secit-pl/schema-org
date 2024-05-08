<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An agent tracks an object for updates. Related actions: FollowAction: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects. SubscribeAction: Unlike SubscribeAction, TrackAction refers to the interest on the location of innanimate objects.
 * 
 * @method TrackActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method TrackActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method TrackActionType setAgent(Property\AgentProperty $agent)
 * @method TrackActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method TrackActionType setDescription(Property\DescriptionProperty $description)
 * @method TrackActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method TrackActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method TrackActionType setError(Property\ErrorProperty $error)
 * @method TrackActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method TrackActionType setImage(Property\ImageProperty $image)
 * @method TrackActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method TrackActionType setLocation(Property\LocationProperty $location)
 * @method TrackActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method TrackActionType setName(Property\NameProperty $name)
 * @method TrackActionType setObject(Property\ObjectProperty $object)
 * @method TrackActionType setParticipant(Property\ParticipantProperty $participant)
 * @method TrackActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method TrackActionType setResult(Property\ResultProperty $result)
 * @method TrackActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method TrackActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method TrackActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method TrackActionType setTarget(Property\TargetProperty $target)
 * @method TrackActionType setUrl(Property\UrlProperty $url)
 */
class TrackActionType extends FindActionType {

	/**
	 * @var Property\DeliveryMethodProperty
	 */
	private $deliveryMethod;

	/**
	 * Get delivery method.
	 *
	 * @return Property\DeliveryMethodProperty
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
	 * @param Property\DeliveryMethodProperty $deliveryMethod
	 * @return TrackActionType
	 */
	public function setDeliveryMethod(Property\DeliveryMethodProperty $deliveryMethod) {
		$this->deliveryMethod = $deliveryMethod;

		return $this;
	}
}