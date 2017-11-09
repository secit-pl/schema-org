<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Map.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MapType instead.
 * 
 * @method Map setAccessMode(Property\AccessMode $accessMode)
 * @method Map setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Map setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Map setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Map setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Map setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Map setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Map setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Map setAdditionalType(Property\AdditionalType $additionalType)
 * @method Map setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Map setAlternateName(Property\AlternateName $alternateName)
 * @method Map setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Map setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Map setAudience(Property\Audience $audience)
 * @method Map setAudio(Property\Audio $audio)
 * @method Map setAuthor(Property\Author $author)
 * @method Map setAward(Property\Award $award)
 * @method Map setCharacter(Property\Character $character)
 * @method Map setCitation(Property\Citation $citation)
 * @method Map setComment(Property\Comment $comment)
 * @method Map setCommentCount(Property\CommentCount $commentCount)
 * @method Map setContentLocation(Property\ContentLocation $contentLocation)
 * @method Map setContentRating(Property\ContentRating $contentRating)
 * @method Map setContributor(Property\Contributor $contributor)
 * @method Map setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Map setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Map setCreator(Property\Creator $creator)
 * @method Map setDateCreated(Property\DateCreated $dateCreated)
 * @method Map setDateModified(Property\DateModified $dateModified)
 * @method Map setDatePublished(Property\DatePublished $datePublished)
 * @method Map setDescription(Property\Description $description)
 * @method Map setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Map setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Map setEditor(Property\Editor $editor)
 * @method Map setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Map setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Map setEncoding(Property\Encoding $encoding)
 * @method Map setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Map setExpires(Property\Expires $expires)
 * @method Map setFileFormat(Property\FileFormat $fileFormat)
 * @method Map setFunder(Property\Funder $funder)
 * @method Map setGenre(Property\Genre $genre)
 * @method Map setHasPart(Property\HasPart $hasPart)
 * @method Map setHeadline(Property\Headline $headline)
 * @method Map setIdentifier(Property\Identifier $identifier)
 * @method Map setImage(Property\Image $image)
 * @method Map setInLanguage(Property\InLanguage $inLanguage)
 * @method Map setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Map setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Map setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Map setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Map setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Map setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Map setKeywords(Property\Keywords $keywords)
 * @method Map setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Map setLicense(Property\License $license)
 * @method Map setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Map setMainEntity(Property\MainEntity $mainEntity)
 * @method Map setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Map setMaterial(Property\Material $material)
 * @method Map setMentions(Property\Mentions $mentions)
 * @method Map setName(Property\Name $name)
 * @method Map setOffers(Property\Offers $offers)
 * @method Map setPosition(Property\Position $position)
 * @method Map setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Map setProducer(Property\Producer $producer)
 * @method Map setProvider(Property\Provider $provider)
 * @method Map setPublication(Property\Publication $publication)
 * @method Map setPublisher(Property\Publisher $publisher)
 * @method Map setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Map setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Map setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Map setReview(Property\Review $review)
 * @method Map setSameAs(Property\SameAs $sameAs)
 * @method Map setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Map setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Map setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Map setSponsor(Property\Sponsor $sponsor)
 * @method Map setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Map setText(Property\Text $text)
 * @method Map setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Map setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Map setTranslator(Property\Translator $translator)
 * @method Map setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Map setUrl(Property\Url $url)
 * @method Map setVersion(Property\Version $version)
 * @method Map setVideo(Property\Video $video)
 * @method Map setWorkExample(Property\WorkExample $workExample)
 */
class Map extends CreativeWork {

	/**
	 * @var Property\MapType
	 */
	private $mapType;

	/**
	 * Get map type.
	 * 
	 * @return Property\MapType
	 */
	public function getMapType() {
		return $this->mapType;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Map';
	}

	/**
	 * Set map type.
	 * 
	 * @param Property\MapType $mapType
	 * @return Map
	 */
	public function setMapType(Property\MapType $mapType) {
		$this->mapType = $mapType;

		return $this;
	}
}