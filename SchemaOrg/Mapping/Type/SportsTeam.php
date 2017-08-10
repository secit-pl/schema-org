<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsTeam.
 * 
 * @method SportsTeam setSport(Property\Sport $sport)
 */
class SportsTeam extends SportsOrganization {

	/**
	 * @var Property\Athlete
	 */
	private $athlete;

	/**
	 * @var Property\Coach
	 */
	private $coach;

	/**
	 * Get athlete.
	 * 
	 * @return Property\Athlete
	 */
	public function getAthlete() {
		return $this->athlete;
	}

	/**
	 * Get coach.
	 * 
	 * @return Property\Coach
	 */
	public function getCoach() {
		return $this->coach;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsTeam';
	}

	/**
	 * Set athlete.
	 * 
	 * @param Property\Athlete $athlete
	 * @return SportsTeam
	 */
	public function setAthlete(Property\Athlete $athlete) {
		$this->athlete = $athlete;

		return $this;
	}

	/**
	 * Set coach.
	 * 
	 * @param Property\Coach $coach
	 * @return SportsTeam
	 */
	public function setCoach(Property\Coach $coach) {
		$this->coach = $coach;

		return $this;
	}
}