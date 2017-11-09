<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CourseInstanceType.
 * 
 * @method CourseInstanceType setActor(Property\ActorProperty $actor)
 * @method CourseInstanceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CourseInstanceType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CourseInstanceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CourseInstanceType setAttendee(Property\AttendeeProperty $attendee)
 * @method CourseInstanceType setAudience(Property\AudienceProperty $audience)
 * @method CourseInstanceType setComposer(Property\ComposerProperty $composer)
 * @method CourseInstanceType setContributor(Property\ContributorProperty $contributor)
 * @method CourseInstanceType setDescription(Property\DescriptionProperty $description)
 * @method CourseInstanceType setDirector(Property\DirectorProperty $director)
 * @method CourseInstanceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CourseInstanceType setDoorTime(Property\DoorTimeProperty $doorTime)
 * @method CourseInstanceType setEndDate(Property\EndDateProperty $endDate)
 * @method CourseInstanceType setEventStatus(Property\EventStatusProperty $eventStatus)
 * @method CourseInstanceType setFunder(Property\FunderProperty $funder)
 * @method CourseInstanceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CourseInstanceType setImage(Property\ImageProperty $image)
 * @method CourseInstanceType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method CourseInstanceType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method CourseInstanceType setLocation(Property\LocationProperty $location)
 * @method CourseInstanceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CourseInstanceType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method CourseInstanceType setName(Property\NameProperty $name)
 * @method CourseInstanceType setOffers(Property\OffersProperty $offers)
 * @method CourseInstanceType setOrganizer(Property\OrganizerProperty $organizer)
 * @method CourseInstanceType setPerformer(Property\PerformerProperty $performer)
 * @method CourseInstanceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CourseInstanceType setPreviousStartDate(Property\PreviousStartDateProperty $previousStartDate)
 * @method CourseInstanceType setRecordedIn(Property\RecordedInProperty $recordedIn)
 * @method CourseInstanceType setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacityProperty $remainingAttendeeCapacity)
 * @method CourseInstanceType setReview(Property\ReviewProperty $review)
 * @method CourseInstanceType setSameAs(Property\SameAsProperty $sameAs)
 * @method CourseInstanceType setSponsor(Property\SponsorProperty $sponsor)
 * @method CourseInstanceType setStartDate(Property\StartDateProperty $startDate)
 * @method CourseInstanceType setSubEvent(Property\SubEventProperty $subEvent)
 * @method CourseInstanceType setSuperEvent(Property\SuperEventProperty $superEvent)
 * @method CourseInstanceType setTranslator(Property\TranslatorProperty $translator)
 * @method CourseInstanceType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method CourseInstanceType setUrl(Property\UrlProperty $url)
 * @method CourseInstanceType setWorkFeatured(Property\WorkFeaturedProperty $workFeatured)
 * @method CourseInstanceType setWorkPerformed(Property\WorkPerformedProperty $workPerformed)
 */
class CourseInstanceType extends EventType {

	/**
	 * @var Property\CourseModeProperty
	 */
	private $courseMode;

	/**
	 * @var Property\InstructorProperty
	 */
	private $instructor;

	/**
	 * Get course mode.
	 * 
	 * @return Property\CourseModeProperty
	 */
	public function getCourseMode() {
		return $this->courseMode;
	}

	/**
	 * Get instructor.
	 * 
	 * @return Property\InstructorProperty
	 */
	public function getInstructor() {
		return $this->instructor;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CourseInstance';
	}

	/**
	 * Set course mode.
	 * 
	 * @param Property\CourseModeProperty $courseMode
	 * @return CourseInstanceType
	 */
	public function setCourseMode(Property\CourseModeProperty $courseMode) {
		$this->courseMode = $courseMode;

		return $this;
	}

	/**
	 * Set instructor.
	 * 
	 * @param Property\InstructorProperty $instructor
	 * @return CourseInstanceType
	 */
	public function setInstructor(Property\InstructorProperty $instructor) {
		$this->instructor = $instructor;

		return $this;
	}
}