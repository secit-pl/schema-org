<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MenuSection.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MenuSectionType instead.
 * 
 * @method MenuSection setAccessMode(Property\AccessMode $accessMode)
 * @method MenuSection setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method MenuSection setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method MenuSection setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method MenuSection setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method MenuSection setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method MenuSection setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method MenuSection setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method MenuSection setAdditionalType(Property\AdditionalType $additionalType)
 * @method MenuSection setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MenuSection setAlternateName(Property\AlternateName $alternateName)
 * @method MenuSection setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method MenuSection setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method MenuSection setAudience(Property\Audience $audience)
 * @method MenuSection setAudio(Property\Audio $audio)
 * @method MenuSection setAuthor(Property\Author $author)
 * @method MenuSection setAward(Property\Award $award)
 * @method MenuSection setCharacter(Property\Character $character)
 * @method MenuSection setCitation(Property\Citation $citation)
 * @method MenuSection setComment(Property\Comment $comment)
 * @method MenuSection setCommentCount(Property\CommentCount $commentCount)
 * @method MenuSection setContentLocation(Property\ContentLocation $contentLocation)
 * @method MenuSection setContentRating(Property\ContentRating $contentRating)
 * @method MenuSection setContributor(Property\Contributor $contributor)
 * @method MenuSection setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method MenuSection setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method MenuSection setCreator(Property\Creator $creator)
 * @method MenuSection setDateCreated(Property\DateCreated $dateCreated)
 * @method MenuSection setDateModified(Property\DateModified $dateModified)
 * @method MenuSection setDatePublished(Property\DatePublished $datePublished)
 * @method MenuSection setDescription(Property\Description $description)
 * @method MenuSection setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MenuSection setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method MenuSection setEditor(Property\Editor $editor)
 * @method MenuSection setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method MenuSection setEducationalUse(Property\EducationalUse $educationalUse)
 * @method MenuSection setEncoding(Property\Encoding $encoding)
 * @method MenuSection setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method MenuSection setExpires(Property\Expires $expires)
 * @method MenuSection setFileFormat(Property\FileFormat $fileFormat)
 * @method MenuSection setFunder(Property\Funder $funder)
 * @method MenuSection setGenre(Property\Genre $genre)
 * @method MenuSection setHasPart(Property\HasPart $hasPart)
 * @method MenuSection setHeadline(Property\Headline $headline)
 * @method MenuSection setIdentifier(Property\Identifier $identifier)
 * @method MenuSection setImage(Property\Image $image)
 * @method MenuSection setInLanguage(Property\InLanguage $inLanguage)
 * @method MenuSection setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method MenuSection setInteractivityType(Property\InteractivityType $interactivityType)
 * @method MenuSection setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method MenuSection setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method MenuSection setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method MenuSection setIsPartOf(Property\IsPartOf $isPartOf)
 * @method MenuSection setKeywords(Property\Keywords $keywords)
 * @method MenuSection setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method MenuSection setLicense(Property\License $license)
 * @method MenuSection setLocationCreated(Property\LocationCreated $locationCreated)
 * @method MenuSection setMainEntity(Property\MainEntity $mainEntity)
 * @method MenuSection setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MenuSection setMaterial(Property\Material $material)
 * @method MenuSection setMentions(Property\Mentions $mentions)
 * @method MenuSection setName(Property\Name $name)
 * @method MenuSection setOffers(Property\Offers $offers)
 * @method MenuSection setPosition(Property\Position $position)
 * @method MenuSection setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MenuSection setProducer(Property\Producer $producer)
 * @method MenuSection setProvider(Property\Provider $provider)
 * @method MenuSection setPublication(Property\Publication $publication)
 * @method MenuSection setPublisher(Property\Publisher $publisher)
 * @method MenuSection setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method MenuSection setRecordedAt(Property\RecordedAt $recordedAt)
 * @method MenuSection setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method MenuSection setReview(Property\Review $review)
 * @method MenuSection setSameAs(Property\SameAs $sameAs)
 * @method MenuSection setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method MenuSection setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method MenuSection setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method MenuSection setSponsor(Property\Sponsor $sponsor)
 * @method MenuSection setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method MenuSection setText(Property\Text $text)
 * @method MenuSection setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method MenuSection setTimeRequired(Property\TimeRequired $timeRequired)
 * @method MenuSection setTranslator(Property\Translator $translator)
 * @method MenuSection setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method MenuSection setUrl(Property\Url $url)
 * @method MenuSection setVersion(Property\Version $version)
 * @method MenuSection setVideo(Property\Video $video)
 * @method MenuSection setWorkExample(Property\WorkExample $workExample)
 */
class MenuSection extends CreativeWork {

	/**
	 * @var Property\HasMenuItem
	 */
	private $hasMenuItem;

	/**
	 * @var Property\HasMenuSection
	 */
	private $hasMenuSection;

	/**
	 * Get has menu item.
	 * 
	 * @return Property\HasMenuItem
	 */
	public function getHasMenuItem() {
		return $this->hasMenuItem;
	}

	/**
	 * Get has menu section.
	 * 
	 * @return Property\HasMenuSection
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
	 * @param Property\HasMenuItem $hasMenuItem
	 * @return MenuSection
	 */
	public function setHasMenuItem(Property\HasMenuItem $hasMenuItem) {
		$this->hasMenuItem = $hasMenuItem;

		return $this;
	}

	/**
	 * Set has menu section.
	 * 
	 * @param Property\HasMenuSection $hasMenuSection
	 * @return MenuSection
	 */
	public function setHasMenuSection(Property\HasMenuSection $hasMenuSection) {
		$this->hasMenuSection = $hasMenuSection;

		return $this;
	}
}