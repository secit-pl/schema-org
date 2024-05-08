<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Event type: Sports event.
 * 
 * @method SportsEventType setAbout(Property\AboutProperty $about)
 * @method SportsEventType setActor(Property\ActorProperty $actor)
 * @method SportsEventType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SportsEventType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method SportsEventType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SportsEventType setAttendee(Property\AttendeeProperty $attendee)
 * @method SportsEventType setAudience(Property\AudienceProperty $audience)
 * @method SportsEventType setComposer(Property\ComposerProperty $composer)
 * @method SportsEventType setContributor(Property\ContributorProperty $contributor)
 * @method SportsEventType setDescription(Property\DescriptionProperty $description)
 * @method SportsEventType setDirector(Property\DirectorProperty $director)
 * @method SportsEventType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SportsEventType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method SportsEventType setDuration(Property\DurationProperty $duration)
 * @method SportsEventType setEndDate(Property\EndDateProperty $endDate)
 * @method SportsEventType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method SportsEventType setFunder(Property\FunderProperty $funder)
 * @method SportsEventType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SportsEventType setImage(Property\ImageProperty $image)
 * @method SportsEventType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method SportsEventType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method SportsEventType setKeywords(Property\KeywordsProperty $keywords)
 * @method SportsEventType setLocation(Property\LocationProperty $location)
 * @method SportsEventType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SportsEventType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method SportsEventType setName(Property\NameProperty $name)
 * @method SportsEventType setOffers(Property\OffersProperty $offers)
 * @method SportsEventType setOrganizer(Property\OrganizerProperty $organizer)
 * @method SportsEventType setPerformer(Property\PerformerProperty $performer)
 * @method SportsEventType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SportsEventType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method SportsEventType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method SportsEventType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method SportsEventType setReview(Property\ReviewProperty $review)
 * @method SportsEventType setSameAs(Property\SameAsProperty $sameAs)
 * @method SportsEventType setSponsor(Property\SponsorProperty $sponsor)
 * @method SportsEventType setStartDate(Property\StartDateProperty $startDate)
 * @method SportsEventType setSubEvent(Property\SubEventProperty $subEvent)
 * @method SportsEventType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SportsEventType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method SportsEventType setTranslator(Property\TranslatorProperty $translator)
 * @method SportsEventType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method SportsEventType setUrl(Property\UrlProperty $url)
 * @method SportsEventType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method SportsEventType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class SportsEventType extends EventType {

	/**
	 * @var Property\AwayTeamProperty
	 */
	private $awayTeam;

	/**
	 * @var Property\CompetitorProperty
	 */
	private $competitor;

	/**
	 * @var Property\HomeTeamProperty
	 */
	private $homeTeam;

	/**
	 * Get away team.
	 *
	 * @return Property\AwayTeamProperty
	 */
	public function getAwayTeam() {
		return $this->awayTeam;
	}

	/**
	 * Get competitor.
	 *
	 * @return Property\CompetitorProperty
	 */
	public function getCompetitor() {
		return $this->competitor;
	}

	/**
	 * Get home team.
	 *
	 * @return Property\HomeTeamProperty
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
	 * @param Property\AwayTeamProperty $awayTeam
	 * @return SportsEventType
	 */
	public function setAwayTeam(Property\AwayTeamProperty $awayTeam) {
		$this->awayTeam = $awayTeam;

		return $this;
	}

	/**
	 * Set competitor.
	 *
	 * @param Property\CompetitorProperty $competitor
	 * @return SportsEventType
	 */
	public function setCompetitor(Property\CompetitorProperty $competitor) {
		$this->competitor = $competitor;

		return $this;
	}

	/**
	 * Set home team.
	 *
	 * @param Property\HomeTeamProperty $homeTeam
	 * @return SportsEventType
	 */
	public function setHomeTeam(Property\HomeTeamProperty $homeTeam) {
		$this->homeTeam = $homeTeam;

		return $this;
	}
}