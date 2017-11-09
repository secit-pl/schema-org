<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Comment.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CommentType instead.
 * 
 * @method Comment setAccessMode(Property\AccessMode $accessMode)
 * @method Comment setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Comment setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Comment setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Comment setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Comment setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Comment setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Comment setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Comment setAdditionalType(Property\AdditionalType $additionalType)
 * @method Comment setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Comment setAlternateName(Property\AlternateName $alternateName)
 * @method Comment setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Comment setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Comment setAudience(Property\Audience $audience)
 * @method Comment setAudio(Property\Audio $audio)
 * @method Comment setAuthor(Property\Author $author)
 * @method Comment setAward(Property\Award $award)
 * @method Comment setCharacter(Property\Character $character)
 * @method Comment setCitation(Property\Citation $citation)
 * @method Comment setComment(Property\Comment $comment)
 * @method Comment setCommentCount(Property\CommentCount $commentCount)
 * @method Comment setContentLocation(Property\ContentLocation $contentLocation)
 * @method Comment setContentRating(Property\ContentRating $contentRating)
 * @method Comment setContributor(Property\Contributor $contributor)
 * @method Comment setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Comment setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Comment setCreator(Property\Creator $creator)
 * @method Comment setDateCreated(Property\DateCreated $dateCreated)
 * @method Comment setDateModified(Property\DateModified $dateModified)
 * @method Comment setDatePublished(Property\DatePublished $datePublished)
 * @method Comment setDescription(Property\Description $description)
 * @method Comment setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Comment setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Comment setEditor(Property\Editor $editor)
 * @method Comment setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Comment setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Comment setEncoding(Property\Encoding $encoding)
 * @method Comment setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Comment setExpires(Property\Expires $expires)
 * @method Comment setFileFormat(Property\FileFormat $fileFormat)
 * @method Comment setFunder(Property\Funder $funder)
 * @method Comment setGenre(Property\Genre $genre)
 * @method Comment setHasPart(Property\HasPart $hasPart)
 * @method Comment setHeadline(Property\Headline $headline)
 * @method Comment setIdentifier(Property\Identifier $identifier)
 * @method Comment setImage(Property\Image $image)
 * @method Comment setInLanguage(Property\InLanguage $inLanguage)
 * @method Comment setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Comment setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Comment setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Comment setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Comment setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Comment setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Comment setKeywords(Property\Keywords $keywords)
 * @method Comment setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Comment setLicense(Property\License $license)
 * @method Comment setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Comment setMainEntity(Property\MainEntity $mainEntity)
 * @method Comment setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Comment setMaterial(Property\Material $material)
 * @method Comment setMentions(Property\Mentions $mentions)
 * @method Comment setName(Property\Name $name)
 * @method Comment setOffers(Property\Offers $offers)
 * @method Comment setPosition(Property\Position $position)
 * @method Comment setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Comment setProducer(Property\Producer $producer)
 * @method Comment setProvider(Property\Provider $provider)
 * @method Comment setPublication(Property\Publication $publication)
 * @method Comment setPublisher(Property\Publisher $publisher)
 * @method Comment setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Comment setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Comment setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Comment setReview(Property\Review $review)
 * @method Comment setSameAs(Property\SameAs $sameAs)
 * @method Comment setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Comment setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Comment setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Comment setSponsor(Property\Sponsor $sponsor)
 * @method Comment setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Comment setText(Property\Text $text)
 * @method Comment setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Comment setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Comment setTranslator(Property\Translator $translator)
 * @method Comment setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Comment setUrl(Property\Url $url)
 * @method Comment setVersion(Property\Version $version)
 * @method Comment setVideo(Property\Video $video)
 * @method Comment setWorkExample(Property\WorkExample $workExample)
 */
class Comment extends CreativeWork {

	/**
	 * @var Property\DownvoteCount
	 */
	private $downvoteCount;

	/**
	 * @var Property\ParentItem
	 */
	private $parentItem;

	/**
	 * @var Property\UpvoteCount
	 */
	private $upvoteCount;

	/**
	 * Get downvote count.
	 * 
	 * @return Property\DownvoteCount
	 */
	public function getDownvoteCount() {
		return $this->downvoteCount;
	}

	/**
	 * Get parent item.
	 * 
	 * @return Property\ParentItem
	 */
	public function getParentItem() {
		return $this->parentItem;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Comment';
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
	 * Set downvote count.
	 * 
	 * @param Property\DownvoteCount $downvoteCount
	 * @return Comment
	 */
	public function setDownvoteCount(Property\DownvoteCount $downvoteCount) {
		$this->downvoteCount = $downvoteCount;

		return $this;
	}

	/**
	 * Set parent item.
	 * 
	 * @param Property\ParentItem $parentItem
	 * @return Comment
	 */
	public function setParentItem(Property\ParentItem $parentItem) {
		$this->parentItem = $parentItem;

		return $this;
	}

	/**
	 * Set upvote count.
	 * 
	 * @param Property\UpvoteCount $upvoteCount
	 * @return Comment
	 */
	public function setUpvoteCount(Property\UpvoteCount $upvoteCount) {
		$this->upvoteCount = $upvoteCount;

		return $this;
	}
}