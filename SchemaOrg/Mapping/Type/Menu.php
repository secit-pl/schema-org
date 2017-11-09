<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Menu.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\MenuType instead.
 * 
 * @method Menu setAccessMode(Property\AccessMode $accessMode)
 * @method Menu setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Menu setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Menu setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Menu setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Menu setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Menu setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Menu setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Menu setAdditionalType(Property\AdditionalType $additionalType)
 * @method Menu setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Menu setAlternateName(Property\AlternateName $alternateName)
 * @method Menu setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Menu setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Menu setAudience(Property\Audience $audience)
 * @method Menu setAudio(Property\Audio $audio)
 * @method Menu setAuthor(Property\Author $author)
 * @method Menu setAward(Property\Award $award)
 * @method Menu setCharacter(Property\Character $character)
 * @method Menu setCitation(Property\Citation $citation)
 * @method Menu setComment(Property\Comment $comment)
 * @method Menu setCommentCount(Property\CommentCount $commentCount)
 * @method Menu setContentLocation(Property\ContentLocation $contentLocation)
 * @method Menu setContentRating(Property\ContentRating $contentRating)
 * @method Menu setContributor(Property\Contributor $contributor)
 * @method Menu setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Menu setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Menu setCreator(Property\Creator $creator)
 * @method Menu setDateCreated(Property\DateCreated $dateCreated)
 * @method Menu setDateModified(Property\DateModified $dateModified)
 * @method Menu setDatePublished(Property\DatePublished $datePublished)
 * @method Menu setDescription(Property\Description $description)
 * @method Menu setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Menu setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Menu setEditor(Property\Editor $editor)
 * @method Menu setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Menu setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Menu setEncoding(Property\Encoding $encoding)
 * @method Menu setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Menu setExpires(Property\Expires $expires)
 * @method Menu setFileFormat(Property\FileFormat $fileFormat)
 * @method Menu setFunder(Property\Funder $funder)
 * @method Menu setGenre(Property\Genre $genre)
 * @method Menu setHasPart(Property\HasPart $hasPart)
 * @method Menu setHeadline(Property\Headline $headline)
 * @method Menu setIdentifier(Property\Identifier $identifier)
 * @method Menu setImage(Property\Image $image)
 * @method Menu setInLanguage(Property\InLanguage $inLanguage)
 * @method Menu setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Menu setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Menu setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Menu setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Menu setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Menu setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Menu setKeywords(Property\Keywords $keywords)
 * @method Menu setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Menu setLicense(Property\License $license)
 * @method Menu setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Menu setMainEntity(Property\MainEntity $mainEntity)
 * @method Menu setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Menu setMaterial(Property\Material $material)
 * @method Menu setMentions(Property\Mentions $mentions)
 * @method Menu setName(Property\Name $name)
 * @method Menu setOffers(Property\Offers $offers)
 * @method Menu setPosition(Property\Position $position)
 * @method Menu setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Menu setProducer(Property\Producer $producer)
 * @method Menu setProvider(Property\Provider $provider)
 * @method Menu setPublication(Property\Publication $publication)
 * @method Menu setPublisher(Property\Publisher $publisher)
 * @method Menu setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Menu setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Menu setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Menu setReview(Property\Review $review)
 * @method Menu setSameAs(Property\SameAs $sameAs)
 * @method Menu setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Menu setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Menu setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Menu setSponsor(Property\Sponsor $sponsor)
 * @method Menu setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Menu setText(Property\Text $text)
 * @method Menu setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Menu setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Menu setTranslator(Property\Translator $translator)
 * @method Menu setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Menu setUrl(Property\Url $url)
 * @method Menu setVersion(Property\Version $version)
 * @method Menu setVideo(Property\Video $video)
 * @method Menu setWorkExample(Property\WorkExample $workExample)
 */
class Menu extends CreativeWork {

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
		return 'https://schema.org/Menu';
	}

	/**
	 * Set has menu item.
	 * 
	 * @param Property\HasMenuItem $hasMenuItem
	 * @return Menu
	 */
	public function setHasMenuItem(Property\HasMenuItem $hasMenuItem) {
		$this->hasMenuItem = $hasMenuItem;

		return $this;
	}

	/**
	 * Set has menu section.
	 * 
	 * @param Property\HasMenuSection $hasMenuSection
	 * @return Menu
	 */
	public function setHasMenuSection(Property\HasMenuSection $hasMenuSection) {
		$this->hasMenuSection = $hasMenuSection;

		return $this;
	}
}