<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Report.
 * 
 * @method Report setAccessMode(Property\AccessMode $accessMode)
 * @method Report setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Report setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Report setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Report setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Report setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Report setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Report setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Report setAdditionalType(Property\AdditionalType $additionalType)
 * @method Report setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Report setAlternateName(Property\AlternateName $alternateName)
 * @method Report setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Report setArticleBody(Property\ArticleBody $articleBody)
 * @method Report setArticleSection(Property\ArticleSection $articleSection)
 * @method Report setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Report setAudience(Property\Audience $audience)
 * @method Report setAudio(Property\Audio $audio)
 * @method Report setAuthor(Property\Author $author)
 * @method Report setAward(Property\Award $award)
 * @method Report setCharacter(Property\Character $character)
 * @method Report setCitation(Property\Citation $citation)
 * @method Report setComment(Property\Comment $comment)
 * @method Report setCommentCount(Property\CommentCount $commentCount)
 * @method Report setContentLocation(Property\ContentLocation $contentLocation)
 * @method Report setContentRating(Property\ContentRating $contentRating)
 * @method Report setContributor(Property\Contributor $contributor)
 * @method Report setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Report setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Report setCreator(Property\Creator $creator)
 * @method Report setDateCreated(Property\DateCreated $dateCreated)
 * @method Report setDateModified(Property\DateModified $dateModified)
 * @method Report setDatePublished(Property\DatePublished $datePublished)
 * @method Report setDescription(Property\Description $description)
 * @method Report setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Report setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Report setEditor(Property\Editor $editor)
 * @method Report setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Report setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Report setEncoding(Property\Encoding $encoding)
 * @method Report setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Report setExpires(Property\Expires $expires)
 * @method Report setFileFormat(Property\FileFormat $fileFormat)
 * @method Report setFunder(Property\Funder $funder)
 * @method Report setGenre(Property\Genre $genre)
 * @method Report setHasPart(Property\HasPart $hasPart)
 * @method Report setHeadline(Property\Headline $headline)
 * @method Report setIdentifier(Property\Identifier $identifier)
 * @method Report setImage(Property\Image $image)
 * @method Report setInLanguage(Property\InLanguage $inLanguage)
 * @method Report setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Report setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Report setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Report setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Report setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Report setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Report setKeywords(Property\Keywords $keywords)
 * @method Report setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Report setLicense(Property\License $license)
 * @method Report setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Report setMainEntity(Property\MainEntity $mainEntity)
 * @method Report setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Report setMaterial(Property\Material $material)
 * @method Report setMentions(Property\Mentions $mentions)
 * @method Report setName(Property\Name $name)
 * @method Report setOffers(Property\Offers $offers)
 * @method Report setPageEnd(Property\PageEnd $pageEnd)
 * @method Report setPageStart(Property\PageStart $pageStart)
 * @method Report setPagination(Property\Pagination $pagination)
 * @method Report setPosition(Property\Position $position)
 * @method Report setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Report setProducer(Property\Producer $producer)
 * @method Report setProvider(Property\Provider $provider)
 * @method Report setPublication(Property\Publication $publication)
 * @method Report setPublisher(Property\Publisher $publisher)
 * @method Report setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Report setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Report setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Report setReview(Property\Review $review)
 * @method Report setSameAs(Property\SameAs $sameAs)
 * @method Report setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Report setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Report setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Report setSponsor(Property\Sponsor $sponsor)
 * @method Report setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Report setText(Property\Text $text)
 * @method Report setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Report setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Report setTranslator(Property\Translator $translator)
 * @method Report setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Report setUrl(Property\Url $url)
 * @method Report setVersion(Property\Version $version)
 * @method Report setVideo(Property\Video $video)
 * @method Report setWordCount(Property\WordCount $wordCount)
 * @method Report setWorkExample(Property\WorkExample $workExample)
 */
class Report extends Article {

	/**
	 * @var Property\ReportNumber
	 */
	private $reportNumber;

	/**
	 * Get report number.
	 * 
	 * @return Property\ReportNumber
	 */
	public function getReportNumber() {
		return $this->reportNumber;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Report';
	}

	/**
	 * Set report number.
	 * 
	 * @param Property\ReportNumber $reportNumber
	 * @return Report
	 */
	public function setReportNumber(Property\ReportNumber $reportNumber) {
		$this->reportNumber = $reportNumber;

		return $this;
	}
}