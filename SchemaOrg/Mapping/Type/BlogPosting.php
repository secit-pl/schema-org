<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BlogPosting.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BlogPostingType instead.
 * 
 * @method BlogPosting setAccessMode(Property\AccessMode $accessMode)
 * @method BlogPosting setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method BlogPosting setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method BlogPosting setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method BlogPosting setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method BlogPosting setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method BlogPosting setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method BlogPosting setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method BlogPosting setAdditionalType(Property\AdditionalType $additionalType)
 * @method BlogPosting setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BlogPosting setAlternateName(Property\AlternateName $alternateName)
 * @method BlogPosting setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method BlogPosting setArticleBody(Property\ArticleBody $articleBody)
 * @method BlogPosting setArticleSection(Property\ArticleSection $articleSection)
 * @method BlogPosting setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method BlogPosting setAudience(Property\Audience $audience)
 * @method BlogPosting setAudio(Property\Audio $audio)
 * @method BlogPosting setAuthor(Property\Author $author)
 * @method BlogPosting setAward(Property\Award $award)
 * @method BlogPosting setCharacter(Property\Character $character)
 * @method BlogPosting setCitation(Property\Citation $citation)
 * @method BlogPosting setComment(Property\Comment $comment)
 * @method BlogPosting setCommentCount(Property\CommentCount $commentCount)
 * @method BlogPosting setContentLocation(Property\ContentLocation $contentLocation)
 * @method BlogPosting setContentRating(Property\ContentRating $contentRating)
 * @method BlogPosting setContributor(Property\Contributor $contributor)
 * @method BlogPosting setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method BlogPosting setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method BlogPosting setCreator(Property\Creator $creator)
 * @method BlogPosting setDateCreated(Property\DateCreated $dateCreated)
 * @method BlogPosting setDateModified(Property\DateModified $dateModified)
 * @method BlogPosting setDatePublished(Property\DatePublished $datePublished)
 * @method BlogPosting setDescription(Property\Description $description)
 * @method BlogPosting setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BlogPosting setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method BlogPosting setEditor(Property\Editor $editor)
 * @method BlogPosting setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method BlogPosting setEducationalUse(Property\EducationalUse $educationalUse)
 * @method BlogPosting setEncoding(Property\Encoding $encoding)
 * @method BlogPosting setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method BlogPosting setExpires(Property\Expires $expires)
 * @method BlogPosting setFileFormat(Property\FileFormat $fileFormat)
 * @method BlogPosting setFunder(Property\Funder $funder)
 * @method BlogPosting setGenre(Property\Genre $genre)
 * @method BlogPosting setHasPart(Property\HasPart $hasPart)
 * @method BlogPosting setHeadline(Property\Headline $headline)
 * @method BlogPosting setIdentifier(Property\Identifier $identifier)
 * @method BlogPosting setImage(Property\Image $image)
 * @method BlogPosting setInLanguage(Property\InLanguage $inLanguage)
 * @method BlogPosting setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method BlogPosting setInteractivityType(Property\InteractivityType $interactivityType)
 * @method BlogPosting setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method BlogPosting setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method BlogPosting setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method BlogPosting setIsPartOf(Property\IsPartOf $isPartOf)
 * @method BlogPosting setKeywords(Property\Keywords $keywords)
 * @method BlogPosting setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method BlogPosting setLicense(Property\License $license)
 * @method BlogPosting setLocationCreated(Property\LocationCreated $locationCreated)
 * @method BlogPosting setMainEntity(Property\MainEntity $mainEntity)
 * @method BlogPosting setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BlogPosting setMaterial(Property\Material $material)
 * @method BlogPosting setMentions(Property\Mentions $mentions)
 * @method BlogPosting setName(Property\Name $name)
 * @method BlogPosting setOffers(Property\Offers $offers)
 * @method BlogPosting setPageEnd(Property\PageEnd $pageEnd)
 * @method BlogPosting setPageStart(Property\PageStart $pageStart)
 * @method BlogPosting setPagination(Property\Pagination $pagination)
 * @method BlogPosting setPosition(Property\Position $position)
 * @method BlogPosting setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BlogPosting setProducer(Property\Producer $producer)
 * @method BlogPosting setProvider(Property\Provider $provider)
 * @method BlogPosting setPublication(Property\Publication $publication)
 * @method BlogPosting setPublisher(Property\Publisher $publisher)
 * @method BlogPosting setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method BlogPosting setRecordedAt(Property\RecordedAt $recordedAt)
 * @method BlogPosting setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method BlogPosting setReview(Property\Review $review)
 * @method BlogPosting setSameAs(Property\SameAs $sameAs)
 * @method BlogPosting setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method BlogPosting setSharedContent(Property\SharedContent $sharedContent)
 * @method BlogPosting setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method BlogPosting setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method BlogPosting setSponsor(Property\Sponsor $sponsor)
 * @method BlogPosting setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method BlogPosting setText(Property\Text $text)
 * @method BlogPosting setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method BlogPosting setTimeRequired(Property\TimeRequired $timeRequired)
 * @method BlogPosting setTranslator(Property\Translator $translator)
 * @method BlogPosting setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method BlogPosting setUrl(Property\Url $url)
 * @method BlogPosting setVersion(Property\Version $version)
 * @method BlogPosting setVideo(Property\Video $video)
 * @method BlogPosting setWordCount(Property\WordCount $wordCount)
 * @method BlogPosting setWorkExample(Property\WorkExample $workExample)
 */
class BlogPosting extends SocialMediaPosting {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BlogPosting';
	}
}