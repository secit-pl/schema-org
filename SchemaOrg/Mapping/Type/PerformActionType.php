<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The act of participating in performance arts.
 * 
 * @method PerformActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method PerformActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PerformActionType setAgent(Property\AgentProperty $agent)
 * @method PerformActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PerformActionType setAudience(Property\AudienceProperty $audience)
 * @method PerformActionType setDescription(Property\DescriptionProperty $description)
 * @method PerformActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PerformActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method PerformActionType setError(Property\ErrorProperty $error)
 * @method PerformActionType setEvent(Property\EventProperty $event)
 * @method PerformActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PerformActionType setImage(Property\ImageProperty $image)
 * @method PerformActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method PerformActionType setLocation(Property\LocationProperty $location)
 * @method PerformActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PerformActionType setName(Property\NameProperty $name)
 * @method PerformActionType setObject(Property\ObjectProperty $object)
 * @method PerformActionType setParticipant(Property\ParticipantProperty $participant)
 * @method PerformActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PerformActionType setResult(Property\ResultProperty $result)
 * @method PerformActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method PerformActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method PerformActionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PerformActionType setTarget(Property\TargetProperty $target)
 * @method PerformActionType setUrl(Property\UrlProperty $url)
 */
class PerformActionType extends PlayActionType {

	/**
	 * @var Property\EntertainmentBusinessProperty
	 */
	private $entertainmentBusiness;

	/**
	 * Get entertainment business.
	 *
	 * @return Property\EntertainmentBusinessProperty
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
	 * @param Property\EntertainmentBusinessProperty $entertainmentBusiness
	 * @return PerformActionType
	 */
	public function setEntertainmentBusiness(Property\EntertainmentBusinessProperty $entertainmentBusiness) {
		$this->entertainmentBusiness = $entertainmentBusiness;

		return $this;
	}
}