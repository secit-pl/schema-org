<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Sculpture.
 * 
 * @method Sculpture setAccessMode(Property\AccessMode $accessMode)
 * @method Sculpture setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Sculpture setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Sculpture setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Sculpture setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Sculpture setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Sculpture setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Sculpture setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Sculpture setAdditionalType(Property\AdditionalType $additionalType)
 * @method Sculpture setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Sculpture setAlternateName(Property\AlternateName $alternateName)
 * @method Sculpture setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Sculpture setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Sculpture setAudience(Property\Audience $audience)
 * @method Sculpture setAudio(Property\Audio $audio)
 * @method Sculpture setAuthor(Property\Author $author)
 * @method Sculpture setAward(Property\Award $award)
 * @method Sculpture setCharacter(Property\Character $character)
 * @method Sculpture setCitation(Property\Citation $citation)
 * @method Sculpture setComment(Property\Comment $comment)
 * @method Sculpture setCommentCount(Property\CommentCount $commentCount)
 * @method Sculpture setContentLocation(Property\ContentLocation $contentLocation)
 * @method Sculpture setContentRating(Property\ContentRating $contentRating)
 * @method Sculpture setContributor(Property\Contributor $contributor)
 * @method Sculpture setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Sculpture setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Sculpture setCreator(Property\Creator $creator)
 * @method Sculpture setDateCreated(Property\DateCreated $dateCreated)
 * @method Sculpture setDateModified(Property\DateModified $dateModified)
 * @method Sculpture setDatePublished(Property\DatePublished $datePublished)
 * @method Sculpture setDescription(Property\Description $description)
 * @method Sculpture setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Sculpture setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Sculpture setEditor(Property\Editor $editor)
 * @method Sculpture setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Sculpture setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Sculpture setEncoding(Property\Encoding $encoding)
 * @method Sculpture setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Sculpture setExpires(Property\Expires $expires)
 * @method Sculpture setFileFormat(Property\FileFormat $fileFormat)
 * @method Sculpture setFunder(Property\Funder $funder)
 * @method Sculpture setGenre(Property\Genre $genre)
 * @method Sculpture setHasPart(Property\HasPart $hasPart)
 * @method Sculpture setHeadline(Property\Headline $headline)
 * @method Sculpture setIdentifier(Property\Identifier $identifier)
 * @method Sculpture setImage(Property\Image $image)
 * @method Sculpture setInLanguage(Property\InLanguage $inLanguage)
 * @method Sculpture setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Sculpture setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Sculpture setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Sculpture setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Sculpture setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Sculpture setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Sculpture setKeywords(Property\Keywords $keywords)
 * @method Sculpture setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Sculpture setLicense(Property\License $license)
 * @method Sculpture setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Sculpture setMainEntity(Property\MainEntity $mainEntity)
 * @method Sculpture setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Sculpture setMaterial(Property\Material $material)
 * @method Sculpture setMentions(Property\Mentions $mentions)
 * @method Sculpture setName(Property\Name $name)
 * @method Sculpture setOffers(Property\Offers $offers)
 * @method Sculpture setPosition(Property\Position $position)
 * @method Sculpture setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Sculpture setProducer(Property\Producer $producer)
 * @method Sculpture setProvider(Property\Provider $provider)
 * @method Sculpture setPublication(Property\Publication $publication)
 * @method Sculpture setPublisher(Property\Publisher $publisher)
 * @method Sculpture setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Sculpture setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Sculpture setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Sculpture setReview(Property\Review $review)
 * @method Sculpture setSameAs(Property\SameAs $sameAs)
 * @method Sculpture setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Sculpture setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Sculpture setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Sculpture setSponsor(Property\Sponsor $sponsor)
 * @method Sculpture setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Sculpture setText(Property\Text $text)
 * @method Sculpture setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Sculpture setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Sculpture setTranslator(Property\Translator $translator)
 * @method Sculpture setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Sculpture setUrl(Property\Url $url)
 * @method Sculpture setVersion(Property\Version $version)
 * @method Sculpture setVideo(Property\Video $video)
 * @method Sculpture setWorkExample(Property\WorkExample $workExample)
 */
class Sculpture extends CreativeWork {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Sculpture';
	}
}