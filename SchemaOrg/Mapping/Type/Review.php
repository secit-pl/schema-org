<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Review.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ReviewType instead.
 * 
 * @method Review setAccessMode(Property\AccessMode $accessMode)
 * @method Review setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Review setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Review setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Review setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Review setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Review setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Review setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Review setAdditionalType(Property\AdditionalType $additionalType)
 * @method Review setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Review setAlternateName(Property\AlternateName $alternateName)
 * @method Review setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Review setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Review setAudience(Property\Audience $audience)
 * @method Review setAudio(Property\Audio $audio)
 * @method Review setAuthor(Property\Author $author)
 * @method Review setAward(Property\Award $award)
 * @method Review setCharacter(Property\Character $character)
 * @method Review setCitation(Property\Citation $citation)
 * @method Review setComment(Property\Comment $comment)
 * @method Review setCommentCount(Property\CommentCount $commentCount)
 * @method Review setContentLocation(Property\ContentLocation $contentLocation)
 * @method Review setContentRating(Property\ContentRating $contentRating)
 * @method Review setContributor(Property\Contributor $contributor)
 * @method Review setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Review setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Review setCreator(Property\Creator $creator)
 * @method Review setDateCreated(Property\DateCreated $dateCreated)
 * @method Review setDateModified(Property\DateModified $dateModified)
 * @method Review setDatePublished(Property\DatePublished $datePublished)
 * @method Review setDescription(Property\Description $description)
 * @method Review setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Review setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Review setEditor(Property\Editor $editor)
 * @method Review setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Review setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Review setEncoding(Property\Encoding $encoding)
 * @method Review setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Review setExpires(Property\Expires $expires)
 * @method Review setFileFormat(Property\FileFormat $fileFormat)
 * @method Review setFunder(Property\Funder $funder)
 * @method Review setGenre(Property\Genre $genre)
 * @method Review setHasPart(Property\HasPart $hasPart)
 * @method Review setHeadline(Property\Headline $headline)
 * @method Review setIdentifier(Property\Identifier $identifier)
 * @method Review setImage(Property\Image $image)
 * @method Review setInLanguage(Property\InLanguage $inLanguage)
 * @method Review setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Review setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Review setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Review setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Review setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Review setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Review setKeywords(Property\Keywords $keywords)
 * @method Review setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Review setLicense(Property\License $license)
 * @method Review setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Review setMainEntity(Property\MainEntity $mainEntity)
 * @method Review setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Review setMaterial(Property\Material $material)
 * @method Review setMentions(Property\Mentions $mentions)
 * @method Review setName(Property\Name $name)
 * @method Review setOffers(Property\Offers $offers)
 * @method Review setPosition(Property\Position $position)
 * @method Review setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Review setProducer(Property\Producer $producer)
 * @method Review setProvider(Property\Provider $provider)
 * @method Review setPublication(Property\Publication $publication)
 * @method Review setPublisher(Property\Publisher $publisher)
 * @method Review setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Review setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Review setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Review setReview(Property\Review $review)
 * @method Review setSameAs(Property\SameAs $sameAs)
 * @method Review setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Review setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Review setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Review setSponsor(Property\Sponsor $sponsor)
 * @method Review setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Review setText(Property\Text $text)
 * @method Review setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Review setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Review setTranslator(Property\Translator $translator)
 * @method Review setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Review setUrl(Property\Url $url)
 * @method Review setVersion(Property\Version $version)
 * @method Review setVideo(Property\Video $video)
 * @method Review setWorkExample(Property\WorkExample $workExample)
 */
class Review extends CreativeWork {

	/**
	 * @var Property\ItemReviewed
	 */
	private $itemReviewed;

	/**
	 * @var Property\ReviewBody
	 */
	private $reviewBody;

	/**
	 * @var Property\ReviewRating
	 */
	private $reviewRating;

	/**
	 * Get item reviewed.
	 * 
	 * @return Property\ItemReviewed
	 */
	public function getItemReviewed() {
		return $this->itemReviewed;
	}

	/**
	 * Get review body.
	 * 
	 * @return Property\ReviewBody
	 */
	public function getReviewBody() {
		return $this->reviewBody;
	}

	/**
	 * Get review rating.
	 * 
	 * @return Property\ReviewRating
	 */
	public function getReviewRating() {
		return $this->reviewRating;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Review';
	}

	/**
	 * Set item reviewed.
	 * 
	 * @param Property\ItemReviewed $itemReviewed
	 * @return Review
	 */
	public function setItemReviewed(Property\ItemReviewed $itemReviewed) {
		$this->itemReviewed = $itemReviewed;

		return $this;
	}

	/**
	 * Set review body.
	 * 
	 * @param Property\ReviewBody $reviewBody
	 * @return Review
	 */
	public function setReviewBody(Property\ReviewBody $reviewBody) {
		$this->reviewBody = $reviewBody;

		return $this;
	}

	/**
	 * Set review rating.
	 * 
	 * @param Property\ReviewRating $reviewRating
	 * @return Review
	 */
	public function setReviewRating(Property\ReviewRating $reviewRating) {
		$this->reviewRating = $reviewRating;

		return $this;
	}
}