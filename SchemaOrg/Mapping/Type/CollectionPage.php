<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CollectionPage.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CollectionPageType instead.
 * 
 * @method CollectionPage setAccessMode(Property\AccessMode $accessMode)
 * @method CollectionPage setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method CollectionPage setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method CollectionPage setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method CollectionPage setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method CollectionPage setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method CollectionPage setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method CollectionPage setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method CollectionPage setAdditionalType(Property\AdditionalType $additionalType)
 * @method CollectionPage setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CollectionPage setAlternateName(Property\AlternateName $alternateName)
 * @method CollectionPage setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method CollectionPage setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method CollectionPage setAudience(Property\Audience $audience)
 * @method CollectionPage setAudio(Property\Audio $audio)
 * @method CollectionPage setAuthor(Property\Author $author)
 * @method CollectionPage setAward(Property\Award $award)
 * @method CollectionPage setBreadcrumb(Property\Breadcrumb $breadcrumb)
 * @method CollectionPage setCharacter(Property\Character $character)
 * @method CollectionPage setCitation(Property\Citation $citation)
 * @method CollectionPage setComment(Property\Comment $comment)
 * @method CollectionPage setCommentCount(Property\CommentCount $commentCount)
 * @method CollectionPage setContentLocation(Property\ContentLocation $contentLocation)
 * @method CollectionPage setContentRating(Property\ContentRating $contentRating)
 * @method CollectionPage setContributor(Property\Contributor $contributor)
 * @method CollectionPage setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method CollectionPage setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method CollectionPage setCreator(Property\Creator $creator)
 * @method CollectionPage setDateCreated(Property\DateCreated $dateCreated)
 * @method CollectionPage setDateModified(Property\DateModified $dateModified)
 * @method CollectionPage setDatePublished(Property\DatePublished $datePublished)
 * @method CollectionPage setDescription(Property\Description $description)
 * @method CollectionPage setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CollectionPage setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method CollectionPage setEditor(Property\Editor $editor)
 * @method CollectionPage setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method CollectionPage setEducationalUse(Property\EducationalUse $educationalUse)
 * @method CollectionPage setEncoding(Property\Encoding $encoding)
 * @method CollectionPage setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method CollectionPage setExpires(Property\Expires $expires)
 * @method CollectionPage setFileFormat(Property\FileFormat $fileFormat)
 * @method CollectionPage setFunder(Property\Funder $funder)
 * @method CollectionPage setGenre(Property\Genre $genre)
 * @method CollectionPage setHasPart(Property\HasPart $hasPart)
 * @method CollectionPage setHeadline(Property\Headline $headline)
 * @method CollectionPage setIdentifier(Property\Identifier $identifier)
 * @method CollectionPage setImage(Property\Image $image)
 * @method CollectionPage setInLanguage(Property\InLanguage $inLanguage)
 * @method CollectionPage setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method CollectionPage setInteractivityType(Property\InteractivityType $interactivityType)
 * @method CollectionPage setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method CollectionPage setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method CollectionPage setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method CollectionPage setIsPartOf(Property\IsPartOf $isPartOf)
 * @method CollectionPage setKeywords(Property\Keywords $keywords)
 * @method CollectionPage setLastReviewed(Property\LastReviewed $lastReviewed)
 * @method CollectionPage setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method CollectionPage setLicense(Property\License $license)
 * @method CollectionPage setLocationCreated(Property\LocationCreated $locationCreated)
 * @method CollectionPage setMainContentOfPage(Property\MainContentOfPage $mainContentOfPage)
 * @method CollectionPage setMainEntity(Property\MainEntity $mainEntity)
 * @method CollectionPage setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CollectionPage setMaterial(Property\Material $material)
 * @method CollectionPage setMentions(Property\Mentions $mentions)
 * @method CollectionPage setName(Property\Name $name)
 * @method CollectionPage setOffers(Property\Offers $offers)
 * @method CollectionPage setPosition(Property\Position $position)
 * @method CollectionPage setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CollectionPage setPrimaryImageOfPage(Property\PrimaryImageOfPage $primaryImageOfPage)
 * @method CollectionPage setProducer(Property\Producer $producer)
 * @method CollectionPage setProvider(Property\Provider $provider)
 * @method CollectionPage setPublication(Property\Publication $publication)
 * @method CollectionPage setPublisher(Property\Publisher $publisher)
 * @method CollectionPage setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method CollectionPage setRecordedAt(Property\RecordedAt $recordedAt)
 * @method CollectionPage setRelatedLink(Property\RelatedLink $relatedLink)
 * @method CollectionPage setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method CollectionPage setReview(Property\Review $review)
 * @method CollectionPage setReviewedBy(Property\ReviewedBy $reviewedBy)
 * @method CollectionPage setSameAs(Property\SameAs $sameAs)
 * @method CollectionPage setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method CollectionPage setSignificantLink(Property\SignificantLink $significantLink)
 * @method CollectionPage setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method CollectionPage setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method CollectionPage setSpecialty(Property\Specialty $specialty)
 * @method CollectionPage setSponsor(Property\Sponsor $sponsor)
 * @method CollectionPage setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method CollectionPage setText(Property\Text $text)
 * @method CollectionPage setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method CollectionPage setTimeRequired(Property\TimeRequired $timeRequired)
 * @method CollectionPage setTranslator(Property\Translator $translator)
 * @method CollectionPage setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method CollectionPage setUrl(Property\Url $url)
 * @method CollectionPage setVersion(Property\Version $version)
 * @method CollectionPage setVideo(Property\Video $video)
 * @method CollectionPage setWorkExample(Property\WorkExample $workExample)
 */
class CollectionPage extends WebPage {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CollectionPage';
	}
}