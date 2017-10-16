<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CourseInstance.
 * 
 * @method CourseInstance setActor(Property\Actor $actor)
 * @method CourseInstance setAdditionalType(Property\AdditionalType $additionalType)
 * @method CourseInstance setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CourseInstance setAlternateName(Property\AlternateName $alternateName)
 * @method CourseInstance setAttendee(Property\Attendee $attendee)
 * @method CourseInstance setAudience(Property\Audience $audience)
 * @method CourseInstance setComposer(Property\Composer $composer)
 * @method CourseInstance setContributor(Property\Contributor $contributor)
 * @method CourseInstance setDescription(Property\Description $description)
 * @method CourseInstance setDirector(Property\Director $director)
 * @method CourseInstance setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CourseInstance setDoorTime(Property\DoorTime $doorTime)
 * @method CourseInstance setEndDate(Property\EndDate $endDate)
 * @method CourseInstance setEventStatus(Property\EventStatus $eventStatus)
 * @method CourseInstance setFunder(Property\Funder $funder)
 * @method CourseInstance setIdentifier(Property\Identifier $identifier)
 * @method CourseInstance setImage(Property\Image $image)
 * @method CourseInstance setInLanguage(Property\InLanguage $inLanguage)
 * @method CourseInstance setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method CourseInstance setLocation(Property\Location $location)
 * @method CourseInstance setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CourseInstance setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method CourseInstance setName(Property\Name $name)
 * @method CourseInstance setOffers(Property\Offers $offers)
 * @method CourseInstance setOrganizer(Property\Organizer $organizer)
 * @method CourseInstance setPerformer(Property\Performer $performer)
 * @method CourseInstance setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CourseInstance setPreviousStartDate(Property\PreviousStartDate $previousStartDate)
 * @method CourseInstance setRecordedIn(Property\RecordedIn $recordedIn)
 * @method CourseInstance setRemainingAttendeeCapacity(Property\RemainingAttendeeCapacity $remainingAttendeeCapacity)
 * @method CourseInstance setReview(Property\Review $review)
 * @method CourseInstance setSameAs(Property\SameAs $sameAs)
 * @method CourseInstance setSponsor(Property\Sponsor $sponsor)
 * @method CourseInstance setStartDate(Property\StartDate $startDate)
 * @method CourseInstance setSubEvent(Property\SubEvent $subEvent)
 * @method CourseInstance setSuperEvent(Property\SuperEvent $superEvent)
 * @method CourseInstance setTranslator(Property\Translator $translator)
 * @method CourseInstance setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method CourseInstance setUrl(Property\Url $url)
 * @method CourseInstance setWorkFeatured(Property\WorkFeatured $workFeatured)
 * @method CourseInstance setWorkPerformed(Property\WorkPerformed $workPerformed)
 */
class CourseInstance extends Event {

	/**
	 * @var Property\CourseMode
	 */
	private $courseMode;

	/**
	 * @var Property\Instructor
	 */
	private $instructor;

	/**
	 * Get course mode.
	 * 
	 * @return Property\CourseMode
	 */
	public function getCourseMode() {
		return $this->courseMode;
	}

	/**
	 * Get instructor.
	 * 
	 * @return Property\Instructor
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
	 * @param Property\CourseMode $courseMode
	 * @return CourseInstance
	 */
	public function setCourseMode(Property\CourseMode $courseMode) {
		$this->courseMode = $courseMode;

		return $this;
	}

	/**
	 * Set instructor.
	 * 
	 * @param Property\Instructor $instructor
	 * @return CourseInstance
	 */
	public function setInstructor(Property\Instructor $instructor) {
		$this->instructor = $instructor;

		return $this;
	}
}