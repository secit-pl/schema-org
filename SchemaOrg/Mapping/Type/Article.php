<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Article.
 * 
 * @method Article setAbout(Property\About $about)
 * @method Article setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Article setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Article setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Article setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Article setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Article setAdditionalType(Property\AdditionalType $additionalType)
 * @method Article setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Article setAlternateName(Property\AlternateName $alternateName)
 * @method Article setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Article setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Article setAudience(Property\Audience $audience)
 * @method Article setAudio(Property\Audio $audio)
 * @method Article setAuthor(Property\Author $author)
 * @method Article setAward(Property\Award $award)
 * @method Article setCharacter(Property\Character $character)
 * @method Article setCitation(Property\Citation $citation)
 * @method Article setComment(Property\Comment $comment)
 * @method Article setCommentCount(Property\CommentCount $commentCount)
 * @method Article setContentLocation(Property\ContentLocation $contentLocation)
 * @method Article setContentRating(Property\ContentRating $contentRating)
 * @method Article setContributor(Property\Contributor $contributor)
 * @method Article setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Article setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Article setCreator(Property\Creator $creator)
 * @method Article setDateCreated(Property\DateCreated $dateCreated)
 * @method Article setDateModified(Property\DateModified $dateModified)
 * @method Article setDatePublished(Property\DatePublished $datePublished)
 * @method Article setDescription(Property\Description $description)
 * @method Article setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Article setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Article setEditor(Property\Editor $editor)
 * @method Article setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Article setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Article setEncoding(Property\Encoding $encoding)
 * @method Article setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Article setFileFormat(Property\FileFormat $fileFormat)
 * @method Article setFunder(Property\Funder $funder)
 * @method Article setGenre(Property\Genre $genre)
 * @method Article setHasPart(Property\HasPart $hasPart)
 * @method Article setHeadline(Property\Headline $headline)
 * @method Article setImage(Property\Image $image)
 * @method Article setInLanguage(Property\InLanguage $inLanguage)
 * @method Article setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Article setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Article setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Article setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Article setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Article setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Article setKeywords(Property\Keywords $keywords)
 * @method Article setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Article setLicense(Property\License $license)
 * @method Article setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Article setMainEntity(Property\MainEntity $mainEntity)
 * @method Article setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Article setMentions(Property\Mentions $mentions)
 * @method Article setName(Property\Name $name)
 * @method Article setOffers(Property\Offers $offers)
 * @method Article setPosition(Property\Position $position)
 * @method Article setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Article setProducer(Property\Producer $producer)
 * @method Article setProvider(Property\Provider $provider)
 * @method Article setPublication(Property\Publication $publication)
 * @method Article setPublisher(Property\Publisher $publisher)
 * @method Article setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Article setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Article setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Article setReview(Property\Review $review)
 * @method Article setSameAs(Property\SameAs $sameAs)
 * @method Article setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Article setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Article setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Article setSponsor(Property\Sponsor $sponsor)
 * @method Article setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Article setText(Property\Text $text)
 * @method Article setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Article setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Article setTranslator(Property\Translator $translator)
 * @method Article setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Article setUrl(Property\Url $url)
 * @method Article setVersion(Property\Version $version)
 * @method Article setVideo(Property\Video $video)
 * @method Article setWorkExample(Property\WorkExample $workExample)
 */
class Article extends CreativeWork {

	/**
	 * @var Property\ArticleBody
	 */
	private $articleBody;

	/**
	 * @var Property\ArticleSection
	 */
	private $articleSection;

	/**
	 * @var Property\PageEnd
	 */
	private $pageEnd;

	/**
	 * @var Property\PageStart
	 */
	private $pageStart;

	/**
	 * @var Property\Pagination
	 */
	private $pagination;

	/**
	 * @var Property\WordCount
	 */
	private $wordCount;

	/**
	 * Get article body.
	 * 
	 * @return Property\ArticleBody
	 */
	public function getArticleBody() {
		return $this->articleBody;
	}

	/**
	 * Get article section.
	 * 
	 * @return Property\ArticleSection
	 */
	public function getArticleSection() {
		return $this->articleSection;
	}

	/**
	 * Get page end.
	 * 
	 * @return Property\PageEnd
	 */
	public function getPageEnd() {
		return $this->pageEnd;
	}

	/**
	 * Get page start.
	 * 
	 * @return Property\PageStart
	 */
	public function getPageStart() {
		return $this->pageStart;
	}

	/**
	 * Get pagination.
	 * 
	 * @return Property\Pagination
	 */
	public function getPagination() {
		return $this->pagination;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Article';
	}

	/**
	 * Get word count.
	 * 
	 * @return Property\WordCount
	 */
	public function getWordCount() {
		return $this->wordCount;
	}

	/**
	 * Set article body.
	 * 
	 * @param Property\ArticleBody $articleBody
	 * @return Article
	 */
	public function setArticleBody(Property\ArticleBody $articleBody) {
		$this->articleBody = $articleBody;

		return $this;
	}

	/**
	 * Set article section.
	 * 
	 * @param Property\ArticleSection $articleSection
	 * @return Article
	 */
	public function setArticleSection(Property\ArticleSection $articleSection) {
		$this->articleSection = $articleSection;

		return $this;
	}

	/**
	 * Set page end.
	 * 
	 * @param Property\PageEnd $pageEnd
	 * @return Article
	 */
	public function setPageEnd(Property\PageEnd $pageEnd) {
		$this->pageEnd = $pageEnd;

		return $this;
	}

	/**
	 * Set page start.
	 * 
	 * @param Property\PageStart $pageStart
	 * @return Article
	 */
	public function setPageStart(Property\PageStart $pageStart) {
		$this->pageStart = $pageStart;

		return $this;
	}

	/**
	 * Set pagination.
	 * 
	 * @param Property\Pagination $pagination
	 * @return Article
	 */
	public function setPagination(Property\Pagination $pagination) {
		$this->pagination = $pagination;

		return $this;
	}

	/**
	 * Set word count.
	 * 
	 * @param Property\WordCount $wordCount
	 * @return Article
	 */
	public function setWordCount(Property\WordCount $wordCount) {
		$this->wordCount = $wordCount;

		return $this;
	}
}