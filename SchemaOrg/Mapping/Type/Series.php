<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Series.
 * 
 * @method Series setAbout(Property\About $about)
 * @method Series setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Series setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Series setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Series setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Series setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Series setAdditionalType(Property\AdditionalType $additionalType)
 * @method Series setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Series setAlternateName(Property\AlternateName $alternateName)
 * @method Series setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Series setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Series setAudience(Property\Audience $audience)
 * @method Series setAudio(Property\Audio $audio)
 * @method Series setAuthor(Property\Author $author)
 * @method Series setAward(Property\Award $award)
 * @method Series setCharacter(Property\Character $character)
 * @method Series setCitation(Property\Citation $citation)
 * @method Series setComment(Property\Comment $comment)
 * @method Series setCommentCount(Property\CommentCount $commentCount)
 * @method Series setContentLocation(Property\ContentLocation $contentLocation)
 * @method Series setContentRating(Property\ContentRating $contentRating)
 * @method Series setContributor(Property\Contributor $contributor)
 * @method Series setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Series setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Series setCreator(Property\Creator $creator)
 * @method Series setDateCreated(Property\DateCreated $dateCreated)
 * @method Series setDateModified(Property\DateModified $dateModified)
 * @method Series setDatePublished(Property\DatePublished $datePublished)
 * @method Series setDescription(Property\Description $description)
 * @method Series setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Series setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Series setEditor(Property\Editor $editor)
 * @method Series setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Series setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Series setEncoding(Property\Encoding $encoding)
 * @method Series setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Series setFileFormat(Property\FileFormat $fileFormat)
 * @method Series setFunder(Property\Funder $funder)
 * @method Series setGenre(Property\Genre $genre)
 * @method Series setHasPart(Property\HasPart $hasPart)
 * @method Series setHeadline(Property\Headline $headline)
 * @method Series setImage(Property\Image $image)
 * @method Series setInLanguage(Property\InLanguage $inLanguage)
 * @method Series setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Series setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Series setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Series setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Series setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Series setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Series setKeywords(Property\Keywords $keywords)
 * @method Series setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Series setLicense(Property\License $license)
 * @method Series setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Series setMainEntity(Property\MainEntity $mainEntity)
 * @method Series setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Series setMentions(Property\Mentions $mentions)
 * @method Series setName(Property\Name $name)
 * @method Series setOffers(Property\Offers $offers)
 * @method Series setPosition(Property\Position $position)
 * @method Series setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Series setProducer(Property\Producer $producer)
 * @method Series setProvider(Property\Provider $provider)
 * @method Series setPublication(Property\Publication $publication)
 * @method Series setPublisher(Property\Publisher $publisher)
 * @method Series setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Series setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Series setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Series setReview(Property\Review $review)
 * @method Series setSameAs(Property\SameAs $sameAs)
 * @method Series setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Series setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Series setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Series setSponsor(Property\Sponsor $sponsor)
 * @method Series setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Series setText(Property\Text $text)
 * @method Series setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Series setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Series setTranslator(Property\Translator $translator)
 * @method Series setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Series setUrl(Property\Url $url)
 * @method Series setVersion(Property\Version $version)
 * @method Series setVideo(Property\Video $video)
 * @method Series setWorkExample(Property\WorkExample $workExample)
 */
class Series extends CreativeWork {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Series';
	}
}