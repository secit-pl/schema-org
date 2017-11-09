<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Book.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\BookType instead.
 * 
 * @method Book setAccessMode(Property\AccessMode $accessMode)
 * @method Book setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Book setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Book setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Book setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Book setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Book setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Book setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Book setAdditionalType(Property\AdditionalType $additionalType)
 * @method Book setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Book setAlternateName(Property\AlternateName $alternateName)
 * @method Book setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Book setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Book setAudience(Property\Audience $audience)
 * @method Book setAudio(Property\Audio $audio)
 * @method Book setAuthor(Property\Author $author)
 * @method Book setAward(Property\Award $award)
 * @method Book setCharacter(Property\Character $character)
 * @method Book setCitation(Property\Citation $citation)
 * @method Book setComment(Property\Comment $comment)
 * @method Book setCommentCount(Property\CommentCount $commentCount)
 * @method Book setContentLocation(Property\ContentLocation $contentLocation)
 * @method Book setContentRating(Property\ContentRating $contentRating)
 * @method Book setContributor(Property\Contributor $contributor)
 * @method Book setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Book setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Book setCreator(Property\Creator $creator)
 * @method Book setDateCreated(Property\DateCreated $dateCreated)
 * @method Book setDateModified(Property\DateModified $dateModified)
 * @method Book setDatePublished(Property\DatePublished $datePublished)
 * @method Book setDescription(Property\Description $description)
 * @method Book setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Book setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Book setEditor(Property\Editor $editor)
 * @method Book setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Book setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Book setEncoding(Property\Encoding $encoding)
 * @method Book setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Book setExpires(Property\Expires $expires)
 * @method Book setFileFormat(Property\FileFormat $fileFormat)
 * @method Book setFunder(Property\Funder $funder)
 * @method Book setGenre(Property\Genre $genre)
 * @method Book setHasPart(Property\HasPart $hasPart)
 * @method Book setHeadline(Property\Headline $headline)
 * @method Book setIdentifier(Property\Identifier $identifier)
 * @method Book setImage(Property\Image $image)
 * @method Book setInLanguage(Property\InLanguage $inLanguage)
 * @method Book setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Book setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Book setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Book setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Book setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Book setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Book setKeywords(Property\Keywords $keywords)
 * @method Book setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Book setLicense(Property\License $license)
 * @method Book setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Book setMainEntity(Property\MainEntity $mainEntity)
 * @method Book setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Book setMaterial(Property\Material $material)
 * @method Book setMentions(Property\Mentions $mentions)
 * @method Book setName(Property\Name $name)
 * @method Book setOffers(Property\Offers $offers)
 * @method Book setPosition(Property\Position $position)
 * @method Book setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Book setProducer(Property\Producer $producer)
 * @method Book setProvider(Property\Provider $provider)
 * @method Book setPublication(Property\Publication $publication)
 * @method Book setPublisher(Property\Publisher $publisher)
 * @method Book setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Book setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Book setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Book setReview(Property\Review $review)
 * @method Book setSameAs(Property\SameAs $sameAs)
 * @method Book setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Book setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Book setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Book setSponsor(Property\Sponsor $sponsor)
 * @method Book setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Book setText(Property\Text $text)
 * @method Book setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Book setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Book setTranslator(Property\Translator $translator)
 * @method Book setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Book setUrl(Property\Url $url)
 * @method Book setVersion(Property\Version $version)
 * @method Book setVideo(Property\Video $video)
 * @method Book setWorkExample(Property\WorkExample $workExample)
 */
class Book extends CreativeWork {

	/**
	 * @var Property\BookEdition
	 */
	private $bookEdition;

	/**
	 * @var Property\BookFormat
	 */
	private $bookFormat;

	/**
	 * @var Property\Illustrator
	 */
	private $illustrator;

	/**
	 * @var Property\Isbn
	 */
	private $isbn;

	/**
	 * @var Property\NumberOfPages
	 */
	private $numberOfPages;

	/**
	 * Get book edition.
	 * 
	 * @return Property\BookEdition
	 */
	public function getBookEdition() {
		return $this->bookEdition;
	}

	/**
	 * Get book format.
	 * 
	 * @return Property\BookFormat
	 */
	public function getBookFormat() {
		return $this->bookFormat;
	}

	/**
	 * Get illustrator.
	 * 
	 * @return Property\Illustrator
	 */
	public function getIllustrator() {
		return $this->illustrator;
	}

	/**
	 * Get isbn.
	 * 
	 * @return Property\Isbn
	 */
	public function getIsbn() {
		return $this->isbn;
	}

	/**
	 * Get number of pages.
	 * 
	 * @return Property\NumberOfPages
	 */
	public function getNumberOfPages() {
		return $this->numberOfPages;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Book';
	}

	/**
	 * Set book edition.
	 * 
	 * @param Property\BookEdition $bookEdition
	 * @return Book
	 */
	public function setBookEdition(Property\BookEdition $bookEdition) {
		$this->bookEdition = $bookEdition;

		return $this;
	}

	/**
	 * Set book format.
	 * 
	 * @param Property\BookFormat $bookFormat
	 * @return Book
	 */
	public function setBookFormat(Property\BookFormat $bookFormat) {
		$this->bookFormat = $bookFormat;

		return $this;
	}

	/**
	 * Set illustrator.
	 * 
	 * @param Property\Illustrator $illustrator
	 * @return Book
	 */
	public function setIllustrator(Property\Illustrator $illustrator) {
		$this->illustrator = $illustrator;

		return $this;
	}

	/**
	 * Set isbn.
	 * 
	 * @param Property\Isbn $isbn
	 * @return Book
	 */
	public function setIsbn(Property\Isbn $isbn) {
		$this->isbn = $isbn;

		return $this;
	}

	/**
	 * Set number of pages.
	 * 
	 * @param Property\NumberOfPages $numberOfPages
	 * @return Book
	 */
	public function setNumberOfPages(Property\NumberOfPages $numberOfPages) {
		$this->numberOfPages = $numberOfPages;

		return $this;
	}
}