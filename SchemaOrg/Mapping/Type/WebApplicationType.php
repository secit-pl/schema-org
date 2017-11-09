<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WebApplicationType.
 * 
 * @method WebApplicationType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method WebApplicationType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method WebApplicationType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method WebApplicationType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method WebApplicationType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method WebApplicationType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method WebApplicationType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method WebApplicationType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method WebApplicationType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WebApplicationType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WebApplicationType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WebApplicationType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method WebApplicationType setApplicationCategory(Property\ApplicationCategoryProperty $applicationCategory)
 * @method WebApplicationType setApplicationSubCategory(Property\ApplicationSubCategoryProperty $applicationSubCategory)
 * @method WebApplicationType setApplicationSuite(Property\ApplicationSuiteProperty $applicationSuite)
 * @method WebApplicationType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method WebApplicationType setAudience(Property\AudienceProperty $audience)
 * @method WebApplicationType setAudio(Property\AudioProperty $audio)
 * @method WebApplicationType setAuthor(Property\AuthorProperty $author)
 * @method WebApplicationType setAvailableOnDevice(Property\AvailableOnDeviceProperty $availableOnDevice)
 * @method WebApplicationType setAward(Property\AwardProperty $award)
 * @method WebApplicationType setCharacter(Property\CharacterProperty $character)
 * @method WebApplicationType setCitation(Property\CitationProperty $citation)
 * @method WebApplicationType setComment(Property\CommentProperty $comment)
 * @method WebApplicationType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method WebApplicationType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method WebApplicationType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method WebApplicationType setContributor(Property\ContributorProperty $contributor)
 * @method WebApplicationType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method WebApplicationType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method WebApplicationType setCountriesNotSupported(Property\CountriesNotSupportedProperty $countriesNotSupported)
 * @method WebApplicationType setCountriesSupported(Property\CountriesSupportedProperty $countriesSupported)
 * @method WebApplicationType setCreator(Property\CreatorProperty $creator)
 * @method WebApplicationType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method WebApplicationType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method WebApplicationType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method WebApplicationType setDescription(Property\DescriptionProperty $description)
 * @method WebApplicationType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WebApplicationType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method WebApplicationType setDownloadUrl(Property\DownloadUrlProperty $downloadUrl)
 * @method WebApplicationType setEditor(Property\EditorProperty $editor)
 * @method WebApplicationType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method WebApplicationType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method WebApplicationType setEncoding(Property\EncodingProperty $encoding)
 * @method WebApplicationType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method WebApplicationType setExpires(Property\ExpiresProperty $expires)
 * @method WebApplicationType setFeatureList(Property\FeatureListProperty $featureList)
 * @method WebApplicationType setFileFormat(Property\FileFormatProperty $fileFormat)
 * @method WebApplicationType setFileSize(Property\FileSizeProperty $fileSize)
 * @method WebApplicationType setFunder(Property\FunderProperty $funder)
 * @method WebApplicationType setGenre(Property\GenreProperty $genre)
 * @method WebApplicationType setHasPart(Property\HasPartProperty $hasPart)
 * @method WebApplicationType setHeadline(Property\HeadlineProperty $headline)
 * @method WebApplicationType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WebApplicationType setImage(Property\ImageProperty $image)
 * @method WebApplicationType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method WebApplicationType setInstallUrl(Property\InstallUrlProperty $installUrl)
 * @method WebApplicationType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method WebApplicationType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method WebApplicationType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method WebApplicationType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method WebApplicationType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method WebApplicationType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method WebApplicationType setKeywords(Property\KeywordsProperty $keywords)
 * @method WebApplicationType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method WebApplicationType setLicense(Property\LicenseProperty $license)
 * @method WebApplicationType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method WebApplicationType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method WebApplicationType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WebApplicationType setMaterial(Property\MaterialProperty $material)
 * @method WebApplicationType setMemoryRequirements(Property\MemoryRequirementsProperty $memoryRequirements)
 * @method WebApplicationType setMentions(Property\MentionsProperty $mentions)
 * @method WebApplicationType setName(Property\NameProperty $name)
 * @method WebApplicationType setOffers(Property\OffersProperty $offers)
 * @method WebApplicationType setOperatingSystem(Property\OperatingSystemProperty $operatingSystem)
 * @method WebApplicationType setPermissions(Property\PermissionsProperty $permissions)
 * @method WebApplicationType setPosition(Property\PositionProperty $position)
 * @method WebApplicationType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WebApplicationType setProcessorRequirements(Property\ProcessorRequirementsProperty $processorRequirements)
 * @method WebApplicationType setProducer(Property\ProducerProperty $producer)
 * @method WebApplicationType setProvider(Property\ProviderProperty $provider)
 * @method WebApplicationType setPublication(Property\PublicationProperty $publication)
 * @method WebApplicationType setPublisher(Property\PublisherProperty $publisher)
 * @method WebApplicationType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method WebApplicationType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method WebApplicationType setReleaseNotes(Property\ReleaseNotesProperty $releaseNotes)
 * @method WebApplicationType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method WebApplicationType setReview(Property\ReviewProperty $review)
 * @method WebApplicationType setSameAs(Property\SameAsProperty $sameAs)
 * @method WebApplicationType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method WebApplicationType setScreenshot(Property\ScreenshotProperty $screenshot)
 * @method WebApplicationType setSoftwareAddOn(Property\SoftwareAddOnProperty $softwareAddOn)
 * @method WebApplicationType setSoftwareHelp(Property\SoftwareHelpProperty $softwareHelp)
 * @method WebApplicationType setSoftwareRequirements(Property\SoftwareRequirementsProperty $softwareRequirements)
 * @method WebApplicationType setSoftwareVersion(Property\SoftwareVersionProperty $softwareVersion)
 * @method WebApplicationType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method WebApplicationType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method WebApplicationType setSponsor(Property\SponsorProperty $sponsor)
 * @method WebApplicationType setStorageRequirements(Property\StorageRequirementsProperty $storageRequirements)
 * @method WebApplicationType setSupportingData(Property\SupportingDataProperty $supportingData)
 * @method WebApplicationType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method WebApplicationType setText(Property\TextProperty $text)
 * @method WebApplicationType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method WebApplicationType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method WebApplicationType setTranslator(Property\TranslatorProperty $translator)
 * @method WebApplicationType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method WebApplicationType setUrl(Property\UrlProperty $url)
 * @method WebApplicationType setVersion(Property\VersionProperty $version)
 * @method WebApplicationType setVideo(Property\VideoProperty $video)
 * @method WebApplicationType setWorkExample(Property\WorkExampleProperty $workExample)
 */
class WebApplicationType extends SoftwareApplicationType {

	/**
	 * @var Property\BrowserRequirementsProperty
	 */
	private $browserRequirements;

	/**
	 * Get browser requirements.
	 * 
	 * @return Property\BrowserRequirementsProperty
	 */
	public function getBrowserRequirements() {
		return $this->browserRequirements;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WebApplication';
	}

	/**
	 * Set browser requirements.
	 * 
	 * @param Property\BrowserRequirementsProperty $browserRequirements
	 * @return WebApplicationType
	 */
	public function setBrowserRequirements(Property\BrowserRequirementsProperty $browserRequirements) {
		$this->browserRequirements = $browserRequirements;

		return $this;
	}
}