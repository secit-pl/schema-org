<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Blog.
 * 
 * @method Blog setAbout(Property\About $about)
 * @method Blog setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Blog setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Blog setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Blog setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Blog setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Blog setAdditionalType(Property\AdditionalType $additionalType)
 * @method Blog setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Blog setAlternateName(Property\AlternateName $alternateName)
 * @method Blog setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Blog setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Blog setAudience(Property\Audience $audience)
 * @method Blog setAudio(Property\Audio $audio)
 * @method Blog setAuthor(Property\Author $author)
 * @method Blog setAward(Property\Award $award)
 * @method Blog setCharacter(Property\Character $character)
 * @method Blog setCitation(Property\Citation $citation)
 * @method Blog setComment(Property\Comment $comment)
 * @method Blog setCommentCount(Property\CommentCount $commentCount)
 * @method Blog setContentLocation(Property\ContentLocation $contentLocation)
 * @method Blog setContentRating(Property\ContentRating $contentRating)
 * @method Blog setContributor(Property\Contributor $contributor)
 * @method Blog setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Blog setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Blog setCreator(Property\Creator $creator)
 * @method Blog setDateCreated(Property\DateCreated $dateCreated)
 * @method Blog setDateModified(Property\DateModified $dateModified)
 * @method Blog setDatePublished(Property\DatePublished $datePublished)
 * @method Blog setDescription(Property\Description $description)
 * @method Blog setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Blog setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Blog setEditor(Property\Editor $editor)
 * @method Blog setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Blog setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Blog setEncoding(Property\Encoding $encoding)
 * @method Blog setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Blog setFileFormat(Property\FileFormat $fileFormat)
 * @method Blog setFunder(Property\Funder $funder)
 * @method Blog setGenre(Property\Genre $genre)
 * @method Blog setHasPart(Property\HasPart $hasPart)
 * @method Blog setHeadline(Property\Headline $headline)
 * @method Blog setImage(Property\Image $image)
 * @method Blog setInLanguage(Property\InLanguage $inLanguage)
 * @method Blog setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Blog setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Blog setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Blog setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Blog setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Blog setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Blog setKeywords(Property\Keywords $keywords)
 * @method Blog setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Blog setLicense(Property\License $license)
 * @method Blog setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Blog setMainEntity(Property\MainEntity $mainEntity)
 * @method Blog setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Blog setMentions(Property\Mentions $mentions)
 * @method Blog setName(Property\Name $name)
 * @method Blog setOffers(Property\Offers $offers)
 * @method Blog setPosition(Property\Position $position)
 * @method Blog setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Blog setProducer(Property\Producer $producer)
 * @method Blog setProvider(Property\Provider $provider)
 * @method Blog setPublication(Property\Publication $publication)
 * @method Blog setPublisher(Property\Publisher $publisher)
 * @method Blog setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Blog setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Blog setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Blog setReview(Property\Review $review)
 * @method Blog setSameAs(Property\SameAs $sameAs)
 * @method Blog setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Blog setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Blog setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Blog setSponsor(Property\Sponsor $sponsor)
 * @method Blog setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Blog setText(Property\Text $text)
 * @method Blog setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Blog setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Blog setTranslator(Property\Translator $translator)
 * @method Blog setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Blog setUrl(Property\Url $url)
 * @method Blog setVersion(Property\Version $version)
 * @method Blog setVideo(Property\Video $video)
 * @method Blog setWorkExample(Property\WorkExample $workExample)
 */
class Blog extends CreativeWork {

	/**
	 * @var Property\BlogPost
	 */
	private $blogPost;

	/**
	 * Get blog post.
	 * 
	 * @return Property\BlogPost
	 */
	public function getBlogPost() {
		return $this->blogPost;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Blog';
	}

	/**
	 * Set blog post.
	 * 
	 * @param Property\BlogPost $blogPost
	 * @return Blog
	 */
	public function setBlogPost(Property\BlogPost $blogPost) {
		$this->blogPost = $blogPost;

		return $this;
	}
}