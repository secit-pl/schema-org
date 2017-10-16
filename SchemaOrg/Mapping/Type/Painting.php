<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Painting.
 * 
 * @method Painting setAccessMode(Property\AccessMode $accessMode)
 * @method Painting setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Painting setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Painting setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Painting setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Painting setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Painting setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Painting setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Painting setAdditionalType(Property\AdditionalType $additionalType)
 * @method Painting setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Painting setAlternateName(Property\AlternateName $alternateName)
 * @method Painting setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Painting setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Painting setAudience(Property\Audience $audience)
 * @method Painting setAudio(Property\Audio $audio)
 * @method Painting setAuthor(Property\Author $author)
 * @method Painting setAward(Property\Award $award)
 * @method Painting setCharacter(Property\Character $character)
 * @method Painting setCitation(Property\Citation $citation)
 * @method Painting setComment(Property\Comment $comment)
 * @method Painting setCommentCount(Property\CommentCount $commentCount)
 * @method Painting setContentLocation(Property\ContentLocation $contentLocation)
 * @method Painting setContentRating(Property\ContentRating $contentRating)
 * @method Painting setContributor(Property\Contributor $contributor)
 * @method Painting setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Painting setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Painting setCreator(Property\Creator $creator)
 * @method Painting setDateCreated(Property\DateCreated $dateCreated)
 * @method Painting setDateModified(Property\DateModified $dateModified)
 * @method Painting setDatePublished(Property\DatePublished $datePublished)
 * @method Painting setDescription(Property\Description $description)
 * @method Painting setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Painting setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Painting setEditor(Property\Editor $editor)
 * @method Painting setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Painting setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Painting setEncoding(Property\Encoding $encoding)
 * @method Painting setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Painting setExpires(Property\Expires $expires)
 * @method Painting setFileFormat(Property\FileFormat $fileFormat)
 * @method Painting setFunder(Property\Funder $funder)
 * @method Painting setGenre(Property\Genre $genre)
 * @method Painting setHasPart(Property\HasPart $hasPart)
 * @method Painting setHeadline(Property\Headline $headline)
 * @method Painting setIdentifier(Property\Identifier $identifier)
 * @method Painting setImage(Property\Image $image)
 * @method Painting setInLanguage(Property\InLanguage $inLanguage)
 * @method Painting setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Painting setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Painting setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Painting setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Painting setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Painting setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Painting setKeywords(Property\Keywords $keywords)
 * @method Painting setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Painting setLicense(Property\License $license)
 * @method Painting setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Painting setMainEntity(Property\MainEntity $mainEntity)
 * @method Painting setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Painting setMaterial(Property\Material $material)
 * @method Painting setMentions(Property\Mentions $mentions)
 * @method Painting setName(Property\Name $name)
 * @method Painting setOffers(Property\Offers $offers)
 * @method Painting setPosition(Property\Position $position)
 * @method Painting setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Painting setProducer(Property\Producer $producer)
 * @method Painting setProvider(Property\Provider $provider)
 * @method Painting setPublication(Property\Publication $publication)
 * @method Painting setPublisher(Property\Publisher $publisher)
 * @method Painting setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Painting setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Painting setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Painting setReview(Property\Review $review)
 * @method Painting setSameAs(Property\SameAs $sameAs)
 * @method Painting setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Painting setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Painting setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Painting setSponsor(Property\Sponsor $sponsor)
 * @method Painting setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Painting setText(Property\Text $text)
 * @method Painting setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Painting setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Painting setTranslator(Property\Translator $translator)
 * @method Painting setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Painting setUrl(Property\Url $url)
 * @method Painting setVersion(Property\Version $version)
 * @method Painting setVideo(Property\Video $video)
 * @method Painting setWorkExample(Property\WorkExample $workExample)
 */
class Painting extends CreativeWork {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Painting';
	}
}