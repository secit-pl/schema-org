<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class SportsEvent.
 * 
 * @method SportsEvent setActor(Property\Actor $actor)
 * @method SportsEvent setAdditionalType(Property\AdditionalType $additionalType)
 * @method SportsEvent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method SportsEvent setAlternateName(Property\AlternateName $alternateName)
 * @method SportsEvent setAttendee(Property\Attendee $attendee)
 * @method SportsEvent setComposer(Property\Composer $composer)
 * @method SportsEvent setContributor(Property\Contributor $contributor)
 * @method SportsEvent setDescription(Property\Description $description)
 * @method SportsEvent setDirector(Property\Director $director)
 * @method SportsEvent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method SportsEvent setDoorTime(Property\DoorTime $doorTime)
 * @method SportsEvent setDuration(Property\Duration $duration)
 * @method SportsEvent setEndDate(Property\EndDate $endDate)
 * @method SportsEvent setEventStatus(Property\EventStatus $eventStatus)
 * @method SportsEvent setFunder(Property\Funder $funder)
 * @method SportsEvent setImage(Property\Image $image)
 * @method SportsEvent setInLanguage(Property\InLanguage $inLanguage)
 * @method SportsEvent setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method SportsEvent setLocation(Property\Location $location)
 * @method SportsEvent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method SportsEvent setName(Property\Name $name)
 * @method SportsEvent setOffers(Property\Offers $offers)
 * @method SportsEvent setOrganizer(Property\Organizer $organizer)
 * @method SportsEvent setPerformer(Property\Performer $performer)
 * @method SportsEvent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method SportsEvent setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method SportsEvent setRecordedIn(Property\RecordedIn $recordedIn)
 * @method SportsEvent setReview(Property\Review $review)
 * @method SportsEvent setSameAs(Property\SameAs $sameAs)
 * @method SportsEvent setSponsor(Property\Sponsor $sponsor)
 * @method SportsEvent setStartDate(Property\StartDate $startDate)
 * @method SportsEvent setSubEvent(Property\SubEvent $subEvent)
 * @method SportsEvent setSuperEvent(Property\SuperEvent $superEvent)
 * @method SportsEvent setTranslator(Property\Translator $translator)
 * @method SportsEvent setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method SportsEvent setUrl(Property\Url $url)
 * @method SportsEvent setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method SportsEvent setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class SportsEvent extends Event {

	/**
	 * @var Property\AwayTeam
	 */
	private $awayTeam;

	/**
	 * @var Property\Competitor
	 */
	private $competitor;

	/**
	 * @var Property\HomeTeam
	 */
	private $homeTeam;

	/**
	 * Get away team.
	 * 
	 * @return Property\AwayTeam
	 */
	public function getAwayTeam() {
		return $this->awayTeam;
	}

	/**
	 * Get competitor.
	 * 
	 * @return Property\Competitor
	 */
	public function getCompetitor() {
		return $this->competitor;
	}

	/**
	 * Get home team.
	 * 
	 * @return Property\HomeTeam
	 */
	public function getHomeTeam() {
		return $this->homeTeam;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SportsEvent';
	}

	/**
	 * Set away team.
	 * 
	 * @param Property\AwayTeam $awayTeam
	 * @return SportsEvent
	 */
	public function setAwayTeam(Property\AwayTeam $awayTeam) {
		$this->awayTeam = $awayTeam;

		return $this;
	}

	/**
	 * Set competitor.
	 * 
	 * @param Property\Competitor $competitor
	 * @return SportsEvent
	 */
	public function setCompetitor(Property\Competitor $competitor) {
		$this->competitor = $competitor;

		return $this;
	}

	/**
	 * Set home team.
	 * 
	 * @param Property\HomeTeam $homeTeam
	 * @return SportsEvent
	 */
	public function setHomeTeam(Property\HomeTeam $homeTeam) {
		$this->homeTeam = $homeTeam;

		return $this;
	}
}