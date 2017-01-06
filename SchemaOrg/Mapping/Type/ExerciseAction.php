<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ExerciseAction.
 * 
 * @method ExerciseAction setActionStatus(Property\ActionStatus $actionStatus)
 * @method ExerciseAction setAdditionalType(Property\AdditionalType $additionalType)
 * @method ExerciseAction setAgent(Property\Agent $agent)
 * @method ExerciseAction setAlternateName(Property\AlternateName $alternateName)
 * @method ExerciseAction setAudience(Property\Audience $audience)
 * @method ExerciseAction setDescription(Property\Description $description)
 * @method ExerciseAction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ExerciseAction setEndTime(Property\EndTime $endTime)
 * @method ExerciseAction setError(Property\Error $error)
 * @method ExerciseAction setEvent(Property\Event $event)
 * @method ExerciseAction setImage(Property\Image $image)
 * @method ExerciseAction setInstrument(Property\Instrument $instrument)
 * @method ExerciseAction setLocation(Property\Location $location)
 * @method ExerciseAction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ExerciseAction setName(Property\Name $name)
 * @method ExerciseAction setObject(Property\Object $object)
 * @method ExerciseAction setParticipant(Property\Participant $participant)
 * @method ExerciseAction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ExerciseAction setResult(Property\Result $result)
 * @method ExerciseAction setSameAs(Property\SameAs $sameAs)
 * @method ExerciseAction setStartTime(Property\StartTime $startTime)
 * @method ExerciseAction setTarget(Property\Target $target)
 * @method ExerciseAction setUrl(Property\Url $url)
 */
class ExerciseAction extends PlayAction {

	/**
	 * @var Property\Distance
	 */
	private $distance;

	/**
	 * @var Property\ExerciseCourse
	 */
	private $exerciseCourse;

	/**
	 * @var Property\FromLocation
	 */
	private $fromLocation;

	/**
	 * @var Property\Opponent
	 */
	private $opponent;

	/**
	 * @var Property\SportsActivityLocation
	 */
	private $sportsActivityLocation;

	/**
	 * @var Property\SportsEvent
	 */
	private $sportsEvent;

	/**
	 * @var Property\SportsTeam
	 */
	private $sportsTeam;

	/**
	 * @var Property\ToLocation
	 */
	private $toLocation;

	/**
	 * Get distance.
	 * 
	 * @return Property\Distance
	 */
	public function getDistance() {
		return $this->distance;
	}

	/**
	 * Get exercise course.
	 * 
	 * @return Property\ExerciseCourse
	 */
	public function getExerciseCourse() {
		return $this->exerciseCourse;
	}

	/**
	 * Get from location.
	 * 
	 * @return Property\FromLocation
	 */
	public function getFromLocation() {
		return $this->fromLocation;
	}

	/**
	 * Get opponent.
	 * 
	 * @return Property\Opponent
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
	 * @return Property\SportsActivityLocation
	 */
	public function getSportsActivityLocation() {
		return $this->sportsActivityLocation;
	}

	/**
	 * Get sports event.
	 * 
	 * @return Property\SportsEvent
	 */
	public function getSportsEvent() {
		return $this->sportsEvent;
	}

	/**
	 * Get sports team.
	 * 
	 * @return Property\SportsTeam
	 */
	public function getSportsTeam() {
		return $this->sportsTeam;
	}

	/**
	 * Get to location.
	 * 
	 * @return Property\ToLocation
	 */
	public function getToLocation() {
		return $this->toLocation;
	}

	/**
	 * Set distance.
	 * 
	 * @param Property\Distance $distance
	 * @return ExerciseAction
	 */
	public function setDistance(Property\Distance $distance) {
		$this->distance = $distance;

		return $this;
	}

	/**
	 * Set exercise course.
	 * 
	 * @param Property\ExerciseCourse $exerciseCourse
	 * @return ExerciseAction
	 */
	public function setExerciseCourse(Property\ExerciseCourse $exerciseCourse) {
		$this->exerciseCourse = $exerciseCourse;

		return $this;
	}

	/**
	 * Set from location.
	 * 
	 * @param Property\FromLocation $fromLocation
	 * @return ExerciseAction
	 */
	public function setFromLocation(Property\FromLocation $fromLocation) {
		$this->fromLocation = $fromLocation;

		return $this;
	}

	/**
	 * Set opponent.
	 * 
	 * @param Property\Opponent $opponent
	 * @return ExerciseAction
	 */
	public function setOpponent(Property\Opponent $opponent) {
		$this->opponent = $opponent;

		return $this;
	}

	/**
	 * Set sports activity location.
	 * 
	 * @param Property\SportsActivityLocation $sportsActivityLocation
	 * @return ExerciseAction
	 */
	public function setSportsActivityLocation(Property\SportsActivityLocation $sportsActivityLocation) {
		$this->sportsActivityLocation = $sportsActivityLocation;

		return $this;
	}

	/**
	 * Set sports event.
	 * 
	 * @param Property\SportsEvent $sportsEvent
	 * @return ExerciseAction
	 */
	public function setSportsEvent(Property\SportsEvent $sportsEvent) {
		$this->sportsEvent = $sportsEvent;

		return $this;
	}

	/**
	 * Set sports team.
	 * 
	 * @param Property\SportsTeam $sportsTeam
	 * @return ExerciseAction
	 */
	public function setSportsTeam(Property\SportsTeam $sportsTeam) {
		$this->sportsTeam = $sportsTeam;

		return $this;
	}

	/**
	 * Set to location.
	 * 
	 * @param Property\ToLocation $toLocation
	 * @return ExerciseAction
	 */
	public function setToLocation(Property\ToLocation $toLocation) {
		$this->toLocation = $toLocation;

		return $this;
	}
}