<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Course.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CourseType instead.
 * 
 * @method Course setAccessMode(Property\AccessMode $accessMode)
 * @method Course setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Course setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Course setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Course setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Course setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Course setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Course setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Course setAdditionalType(Property\AdditionalType $additionalType)
 * @method Course setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Course setAlternateName(Property\AlternateName $alternateName)
 * @method Course setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Course setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Course setAudience(Property\Audience $audience)
 * @method Course setAudio(Property\Audio $audio)
 * @method Course setAuthor(Property\Author $author)
 * @method Course setAward(Property\Award $award)
 * @method Course setCharacter(Property\Character $character)
 * @method Course setCitation(Property\Citation $citation)
 * @method Course setComment(Property\Comment $comment)
 * @method Course setCommentCount(Property\CommentCount $commentCount)
 * @method Course setContentLocation(Property\ContentLocation $contentLocation)
 * @method Course setContentRating(Property\ContentRating $contentRating)
 * @method Course setContributor(Property\Contributor $contributor)
 * @method Course setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Course setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Course setCreator(Property\Creator $creator)
 * @method Course setDateCreated(Property\DateCreated $dateCreated)
 * @method Course setDateModified(Property\DateModified $dateModified)
 * @method Course setDatePublished(Property\DatePublished $datePublished)
 * @method Course setDescription(Property\Description $description)
 * @method Course setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Course setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Course setEditor(Property\Editor $editor)
 * @method Course setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Course setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Course setEncoding(Property\Encoding $encoding)
 * @method Course setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Course setExpires(Property\Expires $expires)
 * @method Course setFileFormat(Property\FileFormat $fileFormat)
 * @method Course setFunder(Property\Funder $funder)
 * @method Course setGenre(Property\Genre $genre)
 * @method Course setHasPart(Property\HasPart $hasPart)
 * @method Course setHeadline(Property\Headline $headline)
 * @method Course setIdentifier(Property\Identifier $identifier)
 * @method Course setImage(Property\Image $image)
 * @method Course setInLanguage(Property\InLanguage $inLanguage)
 * @method Course setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Course setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Course setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Course setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Course setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Course setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Course setKeywords(Property\Keywords $keywords)
 * @method Course setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Course setLicense(Property\License $license)
 * @method Course setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Course setMainEntity(Property\MainEntity $mainEntity)
 * @method Course setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Course setMaterial(Property\Material $material)
 * @method Course setMentions(Property\Mentions $mentions)
 * @method Course setName(Property\Name $name)
 * @method Course setOffers(Property\Offers $offers)
 * @method Course setPosition(Property\Position $position)
 * @method Course setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Course setProducer(Property\Producer $producer)
 * @method Course setProvider(Property\Provider $provider)
 * @method Course setPublication(Property\Publication $publication)
 * @method Course setPublisher(Property\Publisher $publisher)
 * @method Course setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Course setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Course setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Course setReview(Property\Review $review)
 * @method Course setSameAs(Property\SameAs $sameAs)
 * @method Course setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Course setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Course setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Course setSponsor(Property\Sponsor $sponsor)
 * @method Course setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Course setText(Property\Text $text)
 * @method Course setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Course setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Course setTranslator(Property\Translator $translator)
 * @method Course setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Course setUrl(Property\Url $url)
 * @method Course setVersion(Property\Version $version)
 * @method Course setVideo(Property\Video $video)
 * @method Course setWorkExample(Property\WorkExample $workExample)
 */
class Course extends CreativeWork {

	/**
	 * @var Property\CourseCode
	 */
	private $courseCode;

	/**
	 * @var Property\CoursePrerequisites
	 */
	private $coursePrerequisites;

	/**
	 * @var Property\HasCourseInstance
	 */
	private $hasCourseInstance;

	/**
	 * Get course code.
	 * 
	 * @return Property\CourseCode
	 */
	public function getCourseCode() {
		return $this->courseCode;
	}

	/**
	 * Get course prerequisites.
	 * 
	 * @return Property\CoursePrerequisites
	 */
	public function getCoursePrerequisites() {
		return $this->coursePrerequisites;
	}

	/**
	 * Get has course instance.
	 * 
	 * @return Property\HasCourseInstance
	 */
	public function getHasCourseInstance() {
		return $this->hasCourseInstance;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Course';
	}

	/**
	 * Set course code.
	 * 
	 * @param Property\CourseCode $courseCode
	 * @return Course
	 */
	public function setCourseCode(Property\CourseCode $courseCode) {
		$this->courseCode = $courseCode;

		return $this;
	}

	/**
	 * Set course prerequisites.
	 * 
	 * @param Property\CoursePrerequisites $coursePrerequisites
	 * @return Course
	 */
	public function setCoursePrerequisites(Property\CoursePrerequisites $coursePrerequisites) {
		$this->coursePrerequisites = $coursePrerequisites;

		return $this;
	}

	/**
	 * Set has course instance.
	 * 
	 * @param Property\HasCourseInstance $hasCourseInstance
	 * @return Course
	 */
	public function setHasCourseInstance(Property\HasCourseInstance $hasCourseInstance) {
		$this->hasCourseInstance = $hasCourseInstance;

		return $this;
	}
}