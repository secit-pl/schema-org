<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks', etc.), or some other classification made by the menu provider.
 * 
 * @method MenuSectionType setAbout(Property\AboutProperty $about)
 * @method MenuSectionType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method MenuSectionType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method MenuSectionType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method MenuSectionType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method MenuSectionType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method MenuSectionType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method MenuSectionType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method MenuSectionType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method MenuSectionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MenuSectionType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MenuSectionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MenuSectionType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method MenuSectionType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method MenuSectionType setAudience(Property\AudienceProperty $audience)
 * @method MenuSectionType setAudio(Property\AudioProperty $audio)
 * @method MenuSectionType setAuthor(Property\AuthorProperty $author)
 * @method MenuSectionType setAward(Property\AwardProperty $award)
 * @method MenuSectionType setCharacter(Property\CharacterProperty $character)
 * @method MenuSectionType setCitation(Property\CitationProperty $citation)
 * @method MenuSectionType setComment(Property\CommentProperty $comment)
 * @method MenuSectionType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method MenuSectionType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method MenuSectionType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method MenuSectionType setContributor(Property\ContributorProperty $contributor)
 * @method MenuSectionType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method MenuSectionType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method MenuSectionType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method MenuSectionType setCreator(Property\CreatorProperty $creator)
 * @method MenuSectionType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method MenuSectionType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method MenuSectionType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method MenuSectionType setDescription(Property\DescriptionProperty $description)
 * @method MenuSectionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MenuSectionType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method MenuSectionType setEditor(Property\EditorProperty $editor)
 * @method MenuSectionType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method MenuSectionType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method MenuSectionType setEncoding(Property\EncodingProperty $encoding)
 * @method MenuSectionType setEncodingFormat(Property\EncodingFormatProperty $encodingFormat)
 * @method MenuSectionType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method MenuSectionType setExpires(Property\ExpiresProperty $expires)
 * @method MenuSectionType setFunder(Property\FunderProperty $funder)
 * @method MenuSectionType setGenre(Property\GenreProperty $genre)
 * @method MenuSectionType setHasPart(Property\HasPartProperty $hasPart)
 * @method MenuSectionType setHeadline(Property\HeadlineProperty $headline)
 * @method MenuSectionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MenuSectionType setImage(Property\ImageProperty $image)
 * @method MenuSectionType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method MenuSectionType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method MenuSectionType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method MenuSectionType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MenuSectionType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method MenuSectionType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method MenuSectionType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method MenuSectionType setKeywords(Property\KeywordsProperty $keywords)
 * @method MenuSectionType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method MenuSectionType setLicense(Property\LicenseProperty $license)
 * @method MenuSectionType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method MenuSectionType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method MenuSectionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MenuSectionType setMaterial(Property\MaterialProperty $material)
 * @method MenuSectionType setMentions(Property\MentionsProperty $mentions)
 * @method MenuSectionType setName(Property\NameProperty $name)
 * @method MenuSectionType setOffers(Property\OffersProperty $offers)
 * @method MenuSectionType setPosition(Property\PositionProperty $position)
 * @method MenuSectionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MenuSectionType setProducer(Property\ProducerProperty $producer)
 * @method MenuSectionType setPublication(Property\PublicationProperty $publication)
 * @method MenuSectionType setPublisher(Property\PublisherProperty $publisher)
 * @method MenuSectionType setPublisherImprint(Property\PublisherImprintProperty $publisherImprint)
 * @method MenuSectionType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method MenuSectionType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method MenuSectionType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method MenuSectionType setReview(Property\ReviewProperty $review)
 * @method MenuSectionType setSameAs(Property\SameAsProperty $sameAs)
 * @method MenuSectionType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method MenuSectionType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method MenuSectionType setSpatial(Property\SpatialProperty $spatial)
 * @method MenuSectionType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method MenuSectionType setSponsor(Property\SponsorProperty $sponsor)
 * @method MenuSectionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MenuSectionType setTemporal(Property\TemporalProperty $temporal)
 * @method MenuSectionType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method MenuSectionType setText(Property\TextProperty $text)
 * @method MenuSectionType setThumbnail(Property\ThumbnailProperty $thumbnail)
 * @method MenuSectionType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method MenuSectionType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method MenuSectionType setTranslationOfWork(Property\TranslationOfWorkProperty $translationOfWork)
 * @method MenuSectionType setTranslator(Property\TranslatorProperty $translator)
 * @method MenuSectionType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method MenuSectionType setUrl(Property\UrlProperty $url)
 * @method MenuSectionType setVersion(Property\VersionProperty $version)
 * @method MenuSectionType setVideo(Property\VideoProperty $video)
 * @method MenuSectionType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method MenuSectionType setWorkTranslation(Property\WorkTranslationProperty $workTranslation)
 */
class MenuSectionType extends CreativeWorkType {

	/**
	 * @var Property\HasMenuItemProperty
	 */
	private $hasMenuItem;

	/**
	 * @var Property\HasMenuSectionProperty
	 */
	private $hasMenuSection;

	/**
	 * Get has menu item.
	 *
	 * @return Property\HasMenuItemProperty
	 */
	public function getHasMenuItem() {
		return $this->hasMenuItem;
	}

	/**
	 * Get has menu section.
	 *
	 * @return Property\HasMenuSectionProperty
	 */
	public function getHasMenuSection() {
		return $this->hasMenuSection;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MenuSection';
	}

	/**
	 * Set has menu item.
	 *
	 * @param Property\HasMenuItemProperty $hasMenuItem
	 * @return MenuSectionType
	 */
	public function setHasMenuItem(Property\HasMenuItemProperty $hasMenuItem) {
		$this->hasMenuItem = $hasMenuItem;

		return $this;
	}

	/**
	 * Set has menu section.
	 *
	 * @param Property\HasMenuSectionProperty $hasMenuSection
	 * @return MenuSectionType
	 */
	public function setHasMenuSection(Property\HasMenuSectionProperty $hasMenuSection) {
		$this->hasMenuSection = $hasMenuSection;

		return $this;
	}
}