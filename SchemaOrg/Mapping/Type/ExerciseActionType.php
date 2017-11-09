<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExerciseActionType.
 * 
 * @method ExerciseActionType setActionStatus(Property\ActionStatusProperty $actionStatus)
 * @method ExerciseActionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ExerciseActionType setAgent(Property\AgentProperty $agent)
 * @method ExerciseActionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ExerciseActionType setAudience(Property\AudienceProperty $audience)
 * @method ExerciseActionType setDescription(Property\DescriptionProperty $description)
 * @method ExerciseActionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ExerciseActionType setEndTime(Property\EndTimeProperty $endTime)
 * @method ExerciseActionType setError(Property\ErrorProperty $error)
 * @method ExerciseActionType setEvent(Property\EventProperty $event)
 * @method ExerciseActionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ExerciseActionType setImage(Property\ImageProperty $image)
 * @method ExerciseActionType setInstrument(Property\InstrumentProperty $instrument)
 * @method ExerciseActionType setLocation(Property\LocationProperty $location)
 * @method ExerciseActionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ExerciseActionType setName(Property\NameProperty $name)
 * @method ExerciseActionType setObject(Property\ObjectProperty $object)
 * @method ExerciseActionType setParticipant(Property\ParticipantProperty $participant)
 * @method ExerciseActionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ExerciseActionType setResult(Property\ResultProperty $result)
 * @method ExerciseActionType setSameAs(Property\SameAsProperty $sameAs)
 * @method ExerciseActionType setStartTime(Property\StartTimeProperty $startTime)
 * @method ExerciseActionType setTarget(Property\TargetProperty $target)
 * @method ExerciseActionType setUrl(Property\UrlProperty $url)
 */
class ExerciseActionType extends PlayActionType {

	/**
	 * @var Property\DistanceProperty
	 */
	private $distance;

	/**
	 * @var Property\ExerciseCourseProperty
	 */
	private $exerciseCourse;

	/**
	 * @var Property\FromLocationProperty
	 */
	private $fromLocation;

	/**
	 * @var Property\OpponentProperty
	 */
	private $opponent;

	/**
	 * @var Property\SportsActivityLocationProperty
	 */
	private $sportsActivityLocation;

	/**
	 * @var Property\SportsEventProperty
	 */
	private $sportsEvent;

	/**
	 * @var Property\SportsTeamProperty
	 */
	private $sportsTeam;

	/**
	 * @var Property\ToLocationProperty
	 */
	private $toLocation;

	/**
	 * Get distance.
	 * 
	 * @return Property\DistanceProperty
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Get exercise course.
	 * 
	 * @return Property\ExerciseCourseProperty
	 */
	public function getExerciseCourse() {
		return $this->exerciseCourse;
	}

	/**
	 * Get from location.
	 * 
	 * @return Property\FromLocationProperty
	 */
	public function getFromLocation() {
		return $this->fromLocation;
	}

	/**
	 * Get opponent.
	 * 
	 * @return Property\OpponentProperty
	 */
	public function getOpponent() {
		return $this->opponent;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ExerciseAction';
	}

	/**
	 * Get sports activity location.
	 * 
	 * @return Property\SportsActivityLocationProperty
	 */
	public function getSportsActivityLocation() {
		return $this->sportsActivityLocation;
	}

	/**
	 * Get sports event.
	 * 
	 * @return Property\SportsEventProperty
	 */
	public function getSportsEvent() {
		return $this->sportsEvent;
	}

	/**
	 * Get sports team.
	 * 
	 * @return Property\SportsTeamProperty
	 */
	public function getSportsTeam() {
		return $this->sportsTeam;
	}

	/**
	 * Get to location.
	 * 
	 * @return Property\ToLocationProperty
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set distance.
	 * 
	 * @param Property\DistanceProperty $distance
	 * @return ExerciseActionType
	 */
	public function setDistance(Property\DistanceProperty $distance) {
		$this->distance = $distance;

		return $this;
	}

	/**
	 * Set exercise course.
	 * 
	 * @param Property\ExerciseCourseProperty $exerciseCourse
	 * @return ExerciseActionType
	 */
	public function setExerciseCourse(Property\ExerciseCourseProperty $exerciseCourse) {
		$this->exerciseCourse = $exerciseCourse;

		return $this;
	}

	/**
	 * Set from location.
	 * 
	 * @param Property\FromLocationProperty $fromLocation
	 * @return ExerciseActionType
	 */
	public function setFromLocation(Property\FromLocationProperty $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set opponent.
	 * 
	 * @param Property\OpponentProperty $opponent
	 * @return ExerciseActionType
	 */
	public function setOpponent(Property\OpponentProperty $opponent) {
		$this->opponent = $opponent;

		return $this;
	}

	/**
	 * Set sports activity location.
	 * 
	 * @param Property\SportsActivityLocationProperty $sportsActivityLocation
	 * @return ExerciseActionType
	 */
	public function setSportsActivityLocation(Property\SportsActivityLocationProperty $sportsActivityLocation) {
		$this->sportsActivityLocation = $sportsActivityLocation;

		return $this;
	}

	/**
	 * Set sports event.
	 * 
	 * @param Property\SportsEventProperty $sportsEvent
	 * @return ExerciseActionType
	 */
	public function setSportsEvent(Property\SportsEventProperty $sportsEvent) {
		$this->sportsEvent = $sportsEvent;

		return $this;
	}

	/**
	 * Set sports team.
	 * 
	 * @param Property\SportsTeamProperty $sportsTeam
	 * @return ExerciseActionType
	 */
	public function setSportsTeam(Property\SportsTeamProperty $sportsTeam) {
		$this->sportsTeam = $sportsTeam;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocationProperty $toLocation
	 * @return ExerciseActionType
	 */
	public function setToLocation(Property\ToLocationProperty $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}