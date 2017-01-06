<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DataFeed.
 * 
 * @method DataFeed setAbout(Property\About $about)
 * @method DataFeed setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method DataFeed setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method DataFeed setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method DataFeed setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method DataFeed setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method DataFeed setAdditionalType(Property\AdditionalType $additionalType)
 * @method DataFeed setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DataFeed setAlternateName(Property\AlternateName $alternateName)
 * @method DataFeed setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method DataFeed setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method DataFeed setAudience(Property\Audience $audience)
 * @method DataFeed setAudio(Property\Audio $audio)
 * @method DataFeed setAuthor(Property\Author $author)
 * @method DataFeed setAward(Property\Award $award)
 * @method DataFeed setCharacter(Property\Character $character)
 * @method DataFeed setCitation(Property\Citation $citation)
 * @method DataFeed setComment(Property\Comment $comment)
 * @method DataFeed setCommentCount(Property\CommentCount $commentCount)
 * @method DataFeed setContentLocation(Property\ContentLocation $contentLocation)
 * @method DataFeed setContentRating(Property\ContentRating $contentRating)
 * @method DataFeed setContributor(Property\Contributor $contributor)
 * @method DataFeed setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method DataFeed setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method DataFeed setCreator(Property\Creator $creator)
 * @method DataFeed setDateCreated(Property\DateCreated $dateCreated)
 * @method DataFeed setDateModified(Property\DateModified $dateModified)
 * @method DataFeed setDatePublished(Property\DatePublished $datePublished)
 * @method DataFeed setDescription(Property\Description $description)
 * @method DataFeed setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DataFeed setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method DataFeed setDistribution(Property\Distribution $distribution)
 * @method DataFeed setEditor(Property\Editor $editor)
 * @method DataFeed setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method DataFeed setEducationalUse(Property\EducationalUse $educationalUse)
 * @method DataFeed setEncoding(Property\Encoding $encoding)
 * @method DataFeed setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method DataFeed setFileFormat(Property\FileFormat $fileFormat)
 * @method DataFeed setFunder(Property\Funder $funder)
 * @method DataFeed setGenre(Property\Genre $genre)
 * @method DataFeed setHasPart(Property\HasPart $hasPart)
 * @method DataFeed setHeadline(Property\Headline $headline)
 * @method DataFeed setImage(Property\Image $image)
 * @method DataFeed setInLanguage(Property\InLanguage $inLanguage)
 * @method DataFeed setIncludedInDataCatalog(Property\IncludedInDataCatalog $includedInDataCatalog)
 * @method DataFeed setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method DataFeed setInteractivityType(Property\InteractivityType $interactivityType)
 * @method DataFeed setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method DataFeed setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method DataFeed setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method DataFeed setIsPartOf(Property\IsPartOf $isPartOf)
 * @method DataFeed setKeywords(Property\Keywords $keywords)
 * @method DataFeed setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method DataFeed setLicense(Property\License $license)
 * @method DataFeed setLocationCreated(Property\LocationCreated $locationCreated)
 * @method DataFeed setMainEntity(Property\MainEntity $mainEntity)
 * @method DataFeed setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DataFeed setMentions(Property\Mentions $mentions)
 * @method DataFeed setName(Property\Name $name)
 * @method DataFeed setOffers(Property\Offers $offers)
 * @method DataFeed setPosition(Property\Position $position)
 * @method DataFeed setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DataFeed setProducer(Property\Producer $producer)
 * @method DataFeed setProvider(Property\Provider $provider)
 * @method DataFeed setPublication(Property\Publication $publication)
 * @method DataFeed setPublisher(Property\Publisher $publisher)
 * @method DataFeed setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method DataFeed setRecordedAt(Property\RecordedAt $recordedAt)
 * @method DataFeed setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method DataFeed setReview(Property\Review $review)
 * @method DataFeed setSameAs(Property\SameAs $sameAs)
 * @method DataFeed setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method DataFeed setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method DataFeed setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method DataFeed setSponsor(Property\Sponsor $sponsor)
 * @method DataFeed setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method DataFeed setText(Property\Text $text)
 * @method DataFeed setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method DataFeed setTimeRequired(Property\TimeRequired $timeRequired)
 * @method DataFeed setTranslator(Property\Translator $translator)
 * @method DataFeed setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method DataFeed setUrl(Property\Url $url)
 * @method DataFeed setVersion(Property\Version $version)
 * @method DataFeed setVideo(Property\Video $video)
 * @method DataFeed setWorkExample(Property\WorkExample $workExample)
 */
class DataFeed extends Dataset {

	/**
	 * @var Property\DataFeedElement
	 */
	private $dataFeedElement;

	/**
	 * Get data feed element.
	 * 
	 * @return Property\DataFeedElement
	 */
	public function getDataFeedElement() {
		return $this->dataFeedElement;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DataFeed';
	}

	/**
	 * Set data feed element.
	 * 
	 * @param Property\DataFeedElement $dataFeedElement
	 * @return DataFeed
	 */
	public function setDataFeedElement(Property\DataFeedElement $dataFeedElement) {
		$this->dataFeedElement = $dataFeedElement;

		return $this;
	}
}