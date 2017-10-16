<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Table.
 * 
 * @method Table setAccessMode(Property\AccessMode $accessMode)
 * @method Table setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Table setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Table setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Table setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Table setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Table setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Table setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Table setAdditionalType(Property\AdditionalType $additionalType)
 * @method Table setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Table setAlternateName(Property\AlternateName $alternateName)
 * @method Table setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Table setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Table setAudience(Property\Audience $audience)
 * @method Table setAudio(Property\Audio $audio)
 * @method Table setAuthor(Property\Author $author)
 * @method Table setAward(Property\Award $award)
 * @method Table setCharacter(Property\Character $character)
 * @method Table setCitation(Property\Citation $citation)
 * @method Table setComment(Property\Comment $comment)
 * @method Table setCommentCount(Property\CommentCount $commentCount)
 * @method Table setContentLocation(Property\ContentLocation $contentLocation)
 * @method Table setContentRating(Property\ContentRating $contentRating)
 * @method Table setContributor(Property\Contributor $contributor)
 * @method Table setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Table setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Table setCreator(Property\Creator $creator)
 * @method Table setDateCreated(Property\DateCreated $dateCreated)
 * @method Table setDateModified(Property\DateModified $dateModified)
 * @method Table setDatePublished(Property\DatePublished $datePublished)
 * @method Table setDescription(Property\Description $description)
 * @method Table setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Table setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Table setEditor(Property\Editor $editor)
 * @method Table setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Table setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Table setEncoding(Property\Encoding $encoding)
 * @method Table setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Table setExpires(Property\Expires $expires)
 * @method Table setFileFormat(Property\FileFormat $fileFormat)
 * @method Table setFunder(Property\Funder $funder)
 * @method Table setGenre(Property\Genre $genre)
 * @method Table setHasPart(Property\HasPart $hasPart)
 * @method Table setHeadline(Property\Headline $headline)
 * @method Table setIdentifier(Property\Identifier $identifier)
 * @method Table setImage(Property\Image $image)
 * @method Table setInLanguage(Property\InLanguage $inLanguage)
 * @method Table setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Table setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Table setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Table setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Table setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Table setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Table setKeywords(Property\Keywords $keywords)
 * @method Table setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Table setLicense(Property\License $license)
 * @method Table setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Table setMainEntity(Property\MainEntity $mainEntity)
 * @method Table setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Table setMaterial(Property\Material $material)
 * @method Table setMentions(Property\Mentions $mentions)
 * @method Table setName(Property\Name $name)
 * @method Table setOffers(Property\Offers $offers)
 * @method Table setPosition(Property\Position $position)
 * @method Table setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Table setProducer(Property\Producer $producer)
 * @method Table setProvider(Property\Provider $provider)
 * @method Table setPublication(Property\Publication $publication)
 * @method Table setPublisher(Property\Publisher $publisher)
 * @method Table setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Table setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Table setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Table setReview(Property\Review $review)
 * @method Table setSameAs(Property\SameAs $sameAs)
 * @method Table setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Table setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Table setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Table setSponsor(Property\Sponsor $sponsor)
 * @method Table setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Table setText(Property\Text $text)
 * @method Table setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Table setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Table setTranslator(Property\Translator $translator)
 * @method Table setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Table setUrl(Property\Url $url)
 * @method Table setVersion(Property\Version $version)
 * @method Table setVideo(Property\Video $video)
 * @method Table setWorkExample(Property\WorkExample $workExample)
 */
class Table extends WebPageElement {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Table';
	}
}