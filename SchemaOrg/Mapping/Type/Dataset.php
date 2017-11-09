<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Dataset.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\DatasetType instead.
 * 
 * @method Dataset setAccessMode(Property\AccessMode $accessMode)
 * @method Dataset setAccessModeSufficient(Property\AccessModeSufficient $accessModeSufficient)
 * @method Dataset setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Dataset setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Dataset setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Dataset setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Dataset setAccessibilitySummary(Property\AccessibilitySummary $accessibilitySummary)
 * @method Dataset setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Dataset setAdditionalType(Property\AdditionalType $additionalType)
 * @method Dataset setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Dataset setAlternateName(Property\AlternateName $alternateName)
 * @method Dataset setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Dataset setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Dataset setAudience(Property\Audience $audience)
 * @method Dataset setAudio(Property\Audio $audio)
 * @method Dataset setAuthor(Property\Author $author)
 * @method Dataset setAward(Property\Award $award)
 * @method Dataset setCharacter(Property\Character $character)
 * @method Dataset setCitation(Property\Citation $citation)
 * @method Dataset setComment(Property\Comment $comment)
 * @method Dataset setCommentCount(Property\CommentCount $commentCount)
 * @method Dataset setContentLocation(Property\ContentLocation $contentLocation)
 * @method Dataset setContentRating(Property\ContentRating $contentRating)
 * @method Dataset setContributor(Property\Contributor $contributor)
 * @method Dataset setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Dataset setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Dataset setCreator(Property\Creator $creator)
 * @method Dataset setDateCreated(Property\DateCreated $dateCreated)
 * @method Dataset setDateModified(Property\DateModified $dateModified)
 * @method Dataset setDatePublished(Property\DatePublished $datePublished)
 * @method Dataset setDescription(Property\Description $description)
 * @method Dataset setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Dataset setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Dataset setEditor(Property\Editor $editor)
 * @method Dataset setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Dataset setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Dataset setEncoding(Property\Encoding $encoding)
 * @method Dataset setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Dataset setExpires(Property\Expires $expires)
 * @method Dataset setFileFormat(Property\FileFormat $fileFormat)
 * @method Dataset setFunder(Property\Funder $funder)
 * @method Dataset setGenre(Property\Genre $genre)
 * @method Dataset setHasPart(Property\HasPart $hasPart)
 * @method Dataset setHeadline(Property\Headline $headline)
 * @method Dataset setIdentifier(Property\Identifier $identifier)
 * @method Dataset setImage(Property\Image $image)
 * @method Dataset setInLanguage(Property\InLanguage $inLanguage)
 * @method Dataset setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Dataset setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Dataset setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Dataset setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Dataset setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Dataset setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Dataset setKeywords(Property\Keywords $keywords)
 * @method Dataset setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Dataset setLicense(Property\License $license)
 * @method Dataset setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Dataset setMainEntity(Property\MainEntity $mainEntity)
 * @method Dataset setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Dataset setMaterial(Property\Material $material)
 * @method Dataset setMentions(Property\Mentions $mentions)
 * @method Dataset setName(Property\Name $name)
 * @method Dataset setOffers(Property\Offers $offers)
 * @method Dataset setPosition(Property\Position $position)
 * @method Dataset setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Dataset setProducer(Property\Producer $producer)
 * @method Dataset setProvider(Property\Provider $provider)
 * @method Dataset setPublication(Property\Publication $publication)
 * @method Dataset setPublisher(Property\Publisher $publisher)
 * @method Dataset setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Dataset setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Dataset setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Dataset setReview(Property\Review $review)
 * @method Dataset setSameAs(Property\SameAs $sameAs)
 * @method Dataset setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Dataset setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Dataset setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Dataset setSponsor(Property\Sponsor $sponsor)
 * @method Dataset setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Dataset setText(Property\Text $text)
 * @method Dataset setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Dataset setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Dataset setTranslator(Property\Translator $translator)
 * @method Dataset setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Dataset setUrl(Property\Url $url)
 * @method Dataset setVersion(Property\Version $version)
 * @method Dataset setVideo(Property\Video $video)
 * @method Dataset setWorkExample(Property\WorkExample $workExample)
 */
class Dataset extends CreativeWork {

	/**
	 * @var Property\Distribution
	 */
	private $distribution;

	/**
	 * @var Property\IncludedInDataCatalog
	 */
	private $includedInDataCatalog;

	/**
	 * @var Property\Issn
	 */
	private $issn;

	/**
	 * Get distribution.
	 * 
	 * @return Property\Distribution
	 */
	public function getDistribution() {
		return $this->distribution;
	}

	/**
	 * Get included in data catalog.
	 * 
	 * @return Property\IncludedInDataCatalog
	 */
	public function getIncludedInDataCatalog() {
		return $this->includedInDataCatalog;
	}

	/**
	 * Get issn.
	 * 
	 * @return Property\Issn
	 */
	public function getIssn() {
		return $this->issn;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dataset';
	}

	/**
	 * Set distribution.
	 * 
	 * @param Property\Distribution $distribution
	 * @return Dataset
	 */
	public function setDistribution(Property\Distribution $distribution) {
		$this->distribution = $distribution;

		return $this;
	}

	/**
	 * Set included in data catalog.
	 * 
	 * @param Property\IncludedInDataCatalog $includedInDataCatalog
	 * @return Dataset
	 */
	public function setIncludedInDataCatalog(Property\IncludedInDataCatalog $includedInDataCatalog) {
		$this->includedInDataCatalog = $includedInDataCatalog;

		return $this;
	}

	/**
	 * Set issn.
	 * 
	 * @param Property\Issn $issn
	 * @return Dataset
	 */
	public function setIssn(Property\Issn $issn) {
		$this->issn = $issn;

		return $this;
	}
}