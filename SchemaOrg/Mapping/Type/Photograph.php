<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Photograph.
 * 
 * @method Photograph setAbout(Property\About $about)
 * @method Photograph setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Photograph setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Photograph setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Photograph setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Photograph setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Photograph setAdditionalType(Property\AdditionalType $additionalType)
 * @method Photograph setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Photograph setAlternateName(Property\AlternateName $alternateName)
 * @method Photograph setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Photograph setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Photograph setAudience(Property\Audience $audience)
 * @method Photograph setAudio(Property\Audio $audio)
 * @method Photograph setAuthor(Property\Author $author)
 * @method Photograph setAward(Property\Award $award)
 * @method Photograph setCharacter(Property\Character $character)
 * @method Photograph setCitation(Property\Citation $citation)
 * @method Photograph setComment(Property\Comment $comment)
 * @method Photograph setCommentCount(Property\CommentCount $commentCount)
 * @method Photograph setContentLocation(Property\ContentLocation $contentLocation)
 * @method Photograph setContentRating(Property\ContentRating $contentRating)
 * @method Photograph setContributor(Property\Contributor $contributor)
 * @method Photograph setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Photograph setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Photograph setCreator(Property\Creator $creator)
 * @method Photograph setDateCreated(Property\DateCreated $dateCreated)
 * @method Photograph setDateModified(Property\DateModified $dateModified)
 * @method Photograph setDatePublished(Property\DatePublished $datePublished)
 * @method Photograph setDescription(Property\Description $description)
 * @method Photograph setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Photograph setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Photograph setEditor(Property\Editor $editor)
 * @method Photograph setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Photograph setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Photograph setEncoding(Property\Encoding $encoding)
 * @method Photograph setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Photograph setFileFormat(Property\FileFormat $fileFormat)
 * @method Photograph setFunder(Property\Funder $funder)
 * @method Photograph setGenre(Property\Genre $genre)
 * @method Photograph setHasPart(Property\HasPart $hasPart)
 * @method Photograph setHeadline(Property\Headline $headline)
 * @method Photograph setImage(Property\Image $image)
 * @method Photograph setInLanguage(Property\InLanguage $inLanguage)
 * @method Photograph setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Photograph setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Photograph setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Photograph setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Photograph setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Photograph setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Photograph setKeywords(Property\Keywords $keywords)
 * @method Photograph setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Photograph setLicense(Property\License $license)
 * @method Photograph setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Photograph setMainEntity(Property\MainEntity $mainEntity)
 * @method Photograph setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Photograph setMentions(Property\Mentions $mentions)
 * @method Photograph setName(Property\Name $name)
 * @method Photograph setOffers(Property\Offers $offers)
 * @method Photograph setPosition(Property\Position $position)
 * @method Photograph setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Photograph setProducer(Property\Producer $producer)
 * @method Photograph setProvider(Property\Provider $provider)
 * @method Photograph setPublication(Property\Publication $publication)
 * @method Photograph setPublisher(Property\Publisher $publisher)
 * @method Photograph setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Photograph setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Photograph setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Photograph setReview(Property\Review $review)
 * @method Photograph setSameAs(Property\SameAs $sameAs)
 * @method Photograph setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Photograph setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Photograph setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Photograph setSponsor(Property\Sponsor $sponsor)
 * @method Photograph setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Photograph setText(Property\Text $text)
 * @method Photograph setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Photograph setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Photograph setTranslator(Property\Translator $translator)
 * @method Photograph setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Photograph setUrl(Property\Url $url)
 * @method Photograph setVersion(Property\Version $version)
 * @method Photograph setVideo(Property\Video $video)
 * @method Photograph setWorkExample(Property\WorkExample $workExample)
 */
class Photograph extends CreativeWork {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Photograph';
	}
}