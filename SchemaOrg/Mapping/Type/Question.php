<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Question.
 * 
 * @method Question setAccessMode(Property\AccessMode $accessMode)
 * @method Question setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Question setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Question setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Question setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Question setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Question setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Question setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Question setAdditionalType(Property\AdditionalType $additionalType)
 * @method Question setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Question setAlternateName(Property\AlternateName $alternateName)
 * @method Question setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Question setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Question setAudience(Property\Audience $audience)
 * @method Question setAudio(Property\Audio $audio)
 * @method Question setAuthor(Property\Author $author)
 * @method Question setAward(Property\Award $award)
 * @method Question setCharacter(Property\Character $character)
 * @method Question setCitation(Property\Citation $citation)
 * @method Question setComment(Property\Comment $comment)
 * @method Question setCommentCount(Property\CommentCount $commentCount)
 * @method Question setContentLocation(Property\ContentLocation $contentLocation)
 * @method Question setContentRating(Property\ContentRating $contentRating)
 * @method Question setContributor(Property\Contributor $contributor)
 * @method Question setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Question setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Question setCreator(Property\Creator $creator)
 * @method Question setDateCreated(Property\DateCreated $dateCreated)
 * @method Question setDateModified(Property\DateModified $dateModified)
 * @method Question setDatePublished(Property\DatePublished $datePublished)
 * @method Question setDescription(Property\Description $description)
 * @method Question setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Question setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Question setEditor(Property\Editor $editor)
 * @method Question setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Question setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Question setEncoding(Property\Encoding $encoding)
 * @method Question setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Question setExpires(Property\Expires $expires)
 * @method Question setFileFormat(Property\FileFormat $fileFormat)
 * @method Question setFunder(Property\Funder $funder)
 * @method Question setGenre(Property\Genre $genre)
 * @method Question setHasPart(Property\HasPart $hasPart)
 * @method Question setHeadline(Property\Headline $headline)
 * @method Question setIdentifier(Property\Identifier $identifier)
 * @method Question setImage(Property\Image $image)
 * @method Question setInLanguage(Property\InLanguage $inLanguage)
 * @method Question setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Question setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Question setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Question setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Question setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Question setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Question setKeywords(Property\Keywords $keywords)
 * @method Question setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Question setLicense(Property\License $license)
 * @method Question setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Question setMainEntity(Property\MainEntity $mainEntity)
 * @method Question setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Question setMaterial(Property\Material $material)
 * @method Question setMentions(Property\Mentions $mentions)
 * @method Question setName(Property\Name $name)
 * @method Question setOffers(Property\Offers $offers)
 * @method Question setPosition(Property\Position $position)
 * @method Question setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Question setProducer(Property\Producer $producer)
 * @method Question setProvider(Property\Provider $provider)
 * @method Question setPublication(Property\Publication $publication)
 * @method Question setPublisher(Property\Publisher $publisher)
 * @method Question setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Question setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Question setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Question setReview(Property\Review $review)
 * @method Question setSameAs(Property\SameAs $sameAs)
 * @method Question setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Question setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Question setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Question setSponsor(Property\Sponsor $sponsor)
 * @method Question setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Question setText(Property\Text $text)
 * @method Question setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Question setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Question setTranslator(Property\Translator $translator)
 * @method Question setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Question setUrl(Property\Url $url)
 * @method Question setVersion(Property\Version $version)
 * @method Question setVideo(Property\Video $video)
 * @method Question setWorkExample(Property\WorkExample $workExample)
 */
class Question extends CreativeWork {

	/**
	 * @var Property\AcceptedAnswer
	 */
	private $acceptedAnswer;

	/**
	 * @var Property\AnswerCount
	 */
	private $answerCount;

	/**
	 * @var Property\DownvoteCount
	 */
	private $downvoteCount;

	/**
	 * @var Property\SuggestedAnswer
	 */
	private $suggestedAnswer;

	/**
	 * @var Property\UpvoteCount
	 */
	private $upvoteCount;

	/**
	 * Get accepted answer.
	 * 
	 * @return Property\AcceptedAnswer
	 */
	public function getAcceptedAnswer() {
		return $this->acceptedAnswer;
	}

	/**
	 * Get answer count.
	 * 
	 * @return Property\AnswerCount
	 */
	public function getAnswerCount() {
		return $this->answerCount;
	}

	/**
	 * Get downvote count.
	 * 
	 * @return Property\DownvoteCount
	 */
	public function getDownvoteCount() {
		return $this->downvoteCount;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Question';
	}

	/**
	 * Get suggested answer.
	 * 
	 * @return Property\SuggestedAnswer
	 */
	public function getSuggestedAnswer() {
		return $this->suggestedAnswer;
	}

	/**
	 * Get upvote count.
	 * 
	 * @return Property\UpvoteCount
	 */
	public function getUpvoteCount() {
		return $this->upvoteCount;
	}

	/**
	 * Set accepted answer.
	 * 
	 * @param Property\AcceptedAnswer $acceptedAnswer
	 * @return Question
	 */
	public function setAcceptedAnswer(Property\AcceptedAnswer $acceptedAnswer) {
		$this->acceptedAnswer = $acceptedAnswer;

		return $this;
	}

	/**
	 * Set answer count.
	 * 
	 * @param Property\AnswerCount $answerCount
	 * @return Question
	 */
	public function setAnswerCount(Property\AnswerCount $answerCount) {
		$this->answerCount = $answerCount;

		return $this;
	}

	/**
	 * Set downvote count.
	 * 
	 * @param Property\DownvoteCount $downvoteCount
	 * @return Question
	 */
	public function setDownvoteCount(Property\DownvoteCount $downvoteCount) {
		$this->downvoteCount = $downvoteCount;

		return $this;
	}

	/**
	 * Set suggested answer.
	 * 
	 * @param Property\SuggestedAnswer $suggestedAnswer
	 * @return Question
	 */
	public function setSuggestedAnswer(Property\SuggestedAnswer $suggestedAnswer) {
		$this->suggestedAnswer = $suggestedAnswer;

		return $this;
	}

	/**
	 * Set upvote count.
	 * 
	 * @param Property\UpvoteCount $upvoteCount
	 * @return Question
	 */
	public function setUpvoteCount(Property\UpvoteCount $upvoteCount) {
		$this->upvoteCount = $upvoteCount;

		return $this;
	}
}