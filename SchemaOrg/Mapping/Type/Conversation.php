<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Conversation.
 * 
 * @method Conversation setAbout(Property\About $about)
 * @method Conversation setAccessMode(Property\AccessMode $accessMode)
 * @method Conversation setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Conversation setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Conversation setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Conversation setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Conversation setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Conversation setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Conversation setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Conversation setAdditionalType(Property\AdditionalType $additionalType)
 * @method Conversation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Conversation setAlternateName(Property\AlternateName $alternateName)
 * @method Conversation setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Conversation setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Conversation setAudience(Property\Audience $audience)
 * @method Conversation setAudio(Property\Audio $audio)
 * @method Conversation setAuthor(Property\Author $author)
 * @method Conversation setAward(Property\Award $award)
 * @method Conversation setCharacter(Property\Character $character)
 * @method Conversation setCitation(Property\Citation $citation)
 * @method Conversation setComment(Property\Comment $comment)
 * @method Conversation setCommentCount(Property\CommentCount $commentCount)
 * @method Conversation setContentLocation(Property\ContentLocation $contentLocation)
 * @method Conversation setContentRating(Property\ContentRating $contentRating)
 * @method Conversation setContributor(Property\Contributor $contributor)
 * @method Conversation setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Conversation setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Conversation setCreator(Property\Creator $creator)
 * @method Conversation setDateCreated(Property\DateCreated $dateCreated)
 * @method Conversation setDateModified(Property\DateModified $dateModified)
 * @method Conversation setDatePublished(Property\DatePublished $datePublished)
 * @method Conversation setDescription(Property\Description $description)
 * @method Conversation setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Conversation setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Conversation setEditor(Property\Editor $editor)
 * @method Conversation setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Conversation setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Conversation setEncoding(Property\Encoding $encoding)
 * @method Conversation setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Conversation setFileFormat(Property\FileFormat $fileFormat)
 * @method Conversation setFunder(Property\Funder $funder)
 * @method Conversation setGenre(Property\Genre $genre)
 * @method Conversation setHasPart(Property\HasPart $hasPart)
 * @method Conversation setHeadline(Property\Headline $headline)
 * @method Conversation setIdentifier(Property\Identifier $identifier)
 * @method Conversation setImage(Property\Image $image)
 * @method Conversation setInLanguage(Property\InLanguage $inLanguage)
 * @method Conversation setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Conversation setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Conversation setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Conversation setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Conversation setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Conversation setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Conversation setKeywords(Property\Keywords $keywords)
 * @method Conversation setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Conversation setLicense(Property\License $license)
 * @method Conversation setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Conversation setMainEntity(Property\MainEntity $mainEntity)
 * @method Conversation setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Conversation setMaterial(Property\Material $material)
 * @method Conversation setMentions(Property\Mentions $mentions)
 * @method Conversation setName(Property\Name $name)
 * @method Conversation setOffers(Property\Offers $offers)
 * @method Conversation setPosition(Property\Position $position)
 * @method Conversation setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Conversation setProducer(Property\Producer $producer)
 * @method Conversation setProvider(Property\Provider $provider)
 * @method Conversation setPublication(Property\Publication $publication)
 * @method Conversation setPublisher(Property\Publisher $publisher)
 * @method Conversation setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Conversation setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Conversation setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Conversation setReview(Property\Review $review)
 * @method Conversation setSameAs(Property\SameAs $sameAs)
 * @method Conversation setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Conversation setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Conversation setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Conversation setSponsor(Property\Sponsor $sponsor)
 * @method Conversation setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Conversation setText(Property\Text $text)
 * @method Conversation setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Conversation setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Conversation setTranslator(Property\Translator $translator)
 * @method Conversation setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Conversation setUrl(Property\Url $url)
 * @method Conversation setVersion(Property\Version $version)
 * @method Conversation setVideo(Property\Video $video)
 * @method Conversation setWorkExample(Property\WorkExample $workExample)
 */
class Conversation extends CreativeWork {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Conversation';
	}
}