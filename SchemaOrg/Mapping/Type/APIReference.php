<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class APIReference.
 * 
 * @method APIReference setAbout(Property\About $about)
 * @method APIReference setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method APIReference setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method APIReference setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method APIReference setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method APIReference setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method APIReference setAdditionalType(Property\AdditionalType $additionalType)
 * @method APIReference setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method APIReference setAlternateName(Property\AlternateName $alternateName)
 * @method APIReference setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method APIReference setArticleBody(Property\ArticleBody $articleBody)
 * @method APIReference setArticleSection(Property\ArticleSection $articleSection)
 * @method APIReference setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method APIReference setAudience(Property\Audience $audience)
 * @method APIReference setAudio(Property\Audio $audio)
 * @method APIReference setAuthor(Property\Author $author)
 * @method APIReference setAward(Property\Award $award)
 * @method APIReference setCharacter(Property\Character $character)
 * @method APIReference setCitation(Property\Citation $citation)
 * @method APIReference setComment(Property\Comment $comment)
 * @method APIReference setCommentCount(Property\CommentCount $commentCount)
 * @method APIReference setContentLocation(Property\ContentLocation $contentLocation)
 * @method APIReference setContentRating(Property\ContentRating $contentRating)
 * @method APIReference setContributor(Property\Contributor $contributor)
 * @method APIReference setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method APIReference setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method APIReference setCreator(Property\Creator $creator)
 * @method APIReference setDateCreated(Property\DateCreated $dateCreated)
 * @method APIReference setDateModified(Property\DateModified $dateModified)
 * @method APIReference setDatePublished(Property\DatePublished $datePublished)
 * @method APIReference setDependencies(Property\Dependencies $dependencies)
 * @method APIReference setDescription(Property\Description $description)
 * @method APIReference setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method APIReference setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method APIReference setEditor(Property\Editor $editor)
 * @method APIReference setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method APIReference setEducationalUse(Property\EducationalUse $educationalUse)
 * @method APIReference setEncoding(Property\Encoding $encoding)
 * @method APIReference setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method APIReference setFileFormat(Property\FileFormat $fileFormat)
 * @method APIReference setFunder(Property\Funder $funder)
 * @method APIReference setGenre(Property\Genre $genre)
 * @method APIReference setHasPart(Property\HasPart $hasPart)
 * @method APIReference setHeadline(Property\Headline $headline)
 * @method APIReference setImage(Property\Image $image)
 * @method APIReference setInLanguage(Property\InLanguage $inLanguage)
 * @method APIReference setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method APIReference setInteractivityType(Property\InteractivityType $interactivityType)
 * @method APIReference setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method APIReference setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method APIReference setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method APIReference setIsPartOf(Property\IsPartOf $isPartOf)
 * @method APIReference setKeywords(Property\Keywords $keywords)
 * @method APIReference setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method APIReference setLicense(Property\License $license)
 * @method APIReference setLocationCreated(Property\LocationCreated $locationCreated)
 * @method APIReference setMainEntity(Property\MainEntity $mainEntity)
 * @method APIReference setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method APIReference setMentions(Property\Mentions $mentions)
 * @method APIReference setName(Property\Name $name)
 * @method APIReference setOffers(Property\Offers $offers)
 * @method APIReference setPageEnd(Property\PageEnd $pageEnd)
 * @method APIReference setPageStart(Property\PageStart $pageStart)
 * @method APIReference setPagination(Property\Pagination $pagination)
 * @method APIReference setPosition(Property\Position $position)
 * @method APIReference setPotentialAction(Property\PotentialAction $potentialAction)
 * @method APIReference setProducer(Property\Producer $producer)
 * @method APIReference setProficiencyLevel(Property\ProficiencyLevel $proficiencyLevel)
 * @method APIReference setProvider(Property\Provider $provider)
 * @method APIReference setPublication(Property\Publication $publication)
 * @method APIReference setPublisher(Property\Publisher $publisher)
 * @method APIReference setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method APIReference setRecordedAt(Property\RecordedAt $recordedAt)
 * @method APIReference setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method APIReference setReview(Property\Review $review)
 * @method APIReference setSameAs(Property\SameAs $sameAs)
 * @method APIReference setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method APIReference setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method APIReference setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method APIReference setSponsor(Property\Sponsor $sponsor)
 * @method APIReference setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method APIReference setText(Property\Text $text)
 * @method APIReference setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method APIReference setTimeRequired(Property\TimeRequired $timeRequired)
 * @method APIReference setTranslator(Property\Translator $translator)
 * @method APIReference setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method APIReference setUrl(Property\Url $url)
 * @method APIReference setVersion(Property\Version $version)
 * @method APIReference setVideo(Property\Video $video)
 * @method APIReference setWordCount(Property\WordCount $wordCount)
 * @method APIReference setWorkExample(Property\WorkExample $workExample)
 */
class APIReference extends TechArticle {

	/**
	 * @var Property\AssemblyVersion
	 */
	private $assemblyVersion;

	/**
	 * @var Property\ExecutableLibraryName
	 */
	private $executableLibraryName;

	/**
	 * @var Property\ProgrammingModel
	 */
	private $programmingModel;

	/**
	 * @var Property\TargetPlatform
	 */
	private $targetPlatform;

	/**
	 * Get assembly version.
	 * 
	 * @return Property\AssemblyVersion
	 */
	public function getAssemblyVersion() {
		return $this->assemblyVersion;
	}

	/**
	 * Get executable library name.
	 * 
	 * @return Property\ExecutableLibraryName
	 */
	public function getExecutableLibraryName() {
		return $this->executableLibraryName;
	}

	/**
	 * Get programming model.
	 * 
	 * @return Property\ProgrammingModel
	 */
	public function getProgrammingModel() {
		return $this->programmingModel;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/APIReference';
	}

	/**
	 * Get target platform.
	 * 
	 * @return Property\TargetPlatform
	 */
	public function getTargetPlatform() {
		return $this->targetPlatform;
	}

	/**
	 * Set assembly version.
	 * 
	 * @param Property\AssemblyVersion $assemblyVersion
	 * @return APIReference
	 */
	public function setAssemblyVersion(Property\AssemblyVersion $assemblyVersion) {
		$this->assemblyVersion = $assemblyVersion;

		return $this;
	}

	/**
	 * Set executable library name.
	 * 
	 * @param Property\ExecutableLibraryName $executableLibraryName
	 * @return APIReference
	 */
	public function setExecutableLibraryName(Property\ExecutableLibraryName $executableLibraryName) {
		$this->executableLibraryName = $executableLibraryName;

		return $this;
	}

	/**
	 * Set programming model.
	 * 
	 * @param Property\ProgrammingModel $programmingModel
	 * @return APIReference
	 */
	public function setProgrammingModel(Property\ProgrammingModel $programmingModel) {
		$this->programmingModel = $programmingModel;

		return $this;
	}

	/**
	 * Set target platform.
	 * 
	 * @param Property\TargetPlatform $targetPlatform
	 * @return APIReference
	 */
	public function setTargetPlatform(Property\TargetPlatform $targetPlatform) {
		$this->targetPlatform = $targetPlatform;

		return $this;
	}
}