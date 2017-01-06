<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Periodical.
 * 
 * @method Periodical setAbout(Property\About $about)
 * @method Periodical setAccessibilityAPI(Property\AccessibilityAPI $accessibilityAPI)
 * @method Periodical setAccessibilityControl(Property\AccessibilityControl $accessibilityControl)
 * @method Periodical setAccessibilityFeature(Property\AccessibilityFeature $accessibilityFeature)
 * @method Periodical setAccessibilityHazard(Property\AccessibilityHazard $accessibilityHazard)
 * @method Periodical setAccountablePerson(Property\AccountablePerson $accountablePerson)
 * @method Periodical setAdditionalType(Property\AdditionalType $additionalType)
 * @method Periodical setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Periodical setAlternateName(Property\AlternateName $alternateName)
 * @method Periodical setAlternativeHeadline(Property\AlternativeHeadline $alternativeHeadline)
 * @method Periodical setAssociatedMedia(Property\AssociatedMedia $associatedMedia)
 * @method Periodical setAudience(Property\Audience $audience)
 * @method Periodical setAudio(Property\Audio $audio)
 * @method Periodical setAuthor(Property\Author $author)
 * @method Periodical setAward(Property\Award $award)
 * @method Periodical setCharacter(Property\Character $character)
 * @method Periodical setCitation(Property\Citation $citation)
 * @method Periodical setComment(Property\Comment $comment)
 * @method Periodical setCommentCount(Property\CommentCount $commentCount)
 * @method Periodical setContentLocation(Property\ContentLocation $contentLocation)
 * @method Periodical setContentRating(Property\ContentRating $contentRating)
 * @method Periodical setContributor(Property\Contributor $contributor)
 * @method Periodical setCopyrightHolder(Property\CopyrightHolder $copyrightHolder)
 * @method Periodical setCopyrightYear(Property\CopyrightYear $copyrightYear)
 * @method Periodical setCreator(Property\Creator $creator)
 * @method Periodical setDateCreated(Property\DateCreated $dateCreated)
 * @method Periodical setDateModified(Property\DateModified $dateModified)
 * @method Periodical setDatePublished(Property\DatePublished $datePublished)
 * @method Periodical setDescription(Property\Description $description)
 * @method Periodical setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Periodical setDiscussionUrl(Property\DiscussionUrl $discussionUrl)
 * @method Periodical setEditor(Property\Editor $editor)
 * @method Periodical setEducationalAlignment(Property\EducationalAlignment $educationalAlignment)
 * @method Periodical setEducationalUse(Property\EducationalUse $educationalUse)
 * @method Periodical setEncoding(Property\Encoding $encoding)
 * @method Periodical setEndDate(Property\EndDate $endDate)
 * @method Periodical setExampleOfWork(Property\ExampleOfWork $exampleOfWork)
 * @method Periodical setFileFormat(Property\FileFormat $fileFormat)
 * @method Periodical setFunder(Property\Funder $funder)
 * @method Periodical setGenre(Property\Genre $genre)
 * @method Periodical setHasPart(Property\HasPart $hasPart)
 * @method Periodical setHeadline(Property\Headline $headline)
 * @method Periodical setImage(Property\Image $image)
 * @method Periodical setInLanguage(Property\InLanguage $inLanguage)
 * @method Periodical setInteractionStatistic(Property\InteractionStatistic $interactionStatistic)
 * @method Periodical setInteractivityType(Property\InteractivityType $interactivityType)
 * @method Periodical setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method Periodical setIsBasedOn(Property\IsBasedOn $isBasedOn)
 * @method Periodical setIsFamilyFriendly(Property\IsFamilyFriendly $isFamilyFriendly)
 * @method Periodical setIsPartOf(Property\IsPartOf $isPartOf)
 * @method Periodical setKeywords(Property\Keywords $keywords)
 * @method Periodical setLearningResourceType(Property\LearningResourceType $learningResourceType)
 * @method Periodical setLicense(Property\License $license)
 * @method Periodical setLocationCreated(Property\LocationCreated $locationCreated)
 * @method Periodical setMainEntity(Property\MainEntity $mainEntity)
 * @method Periodical setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Periodical setMentions(Property\Mentions $mentions)
 * @method Periodical setName(Property\Name $name)
 * @method Periodical setOffers(Property\Offers $offers)
 * @method Periodical setPosition(Property\Position $position)
 * @method Periodical setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Periodical setProducer(Property\Producer $producer)
 * @method Periodical setProvider(Property\Provider $provider)
 * @method Periodical setPublication(Property\Publication $publication)
 * @method Periodical setPublisher(Property\Publisher $publisher)
 * @method Periodical setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Periodical setRecordedAt(Property\RecordedAt $recordedAt)
 * @method Periodical setReleasedEvent(Property\ReleasedEvent $releasedEvent)
 * @method Periodical setReview(Property\Review $review)
 * @method Periodical setSameAs(Property\SameAs $sameAs)
 * @method Periodical setSchemaVersion(Property\SchemaVersion $schemaVersion)
 * @method Periodical setSourceOrganization(Property\SourceOrganization $sourceOrganization)
 * @method Periodical setSpatialCoverage(Property\SpatialCoverage $spatialCoverage)
 * @method Periodical setSponsor(Property\Sponsor $sponsor)
 * @method Periodical setStartDate(Property\StartDate $startDate)
 * @method Periodical setTemporalCoverage(Property\TemporalCoverage $temporalCoverage)
 * @method Periodical setText(Property\Text $text)
 * @method Periodical setThumbnailUrl(Property\ThumbnailUrl $thumbnailUrl)
 * @method Periodical setTimeRequired(Property\TimeRequired $timeRequired)
 * @method Periodical setTranslator(Property\Translator $translator)
 * @method Periodical setTypicalAgeRange(Property\TypicalAgeRange $typicalAgeRange)
 * @method Periodical setUrl(Property\Url $url)
 * @method Periodical setVersion(Property\Version $version)
 * @method Periodical setVideo(Property\Video $video)
 * @method Periodical setWorkExample(Property\WorkExample $workExample)
 */
class Periodical extends CreativeWorkSeries {

	/**
	 * @var Property\Issn
	 */
	private $issn;

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
		return 'https://schema.org/Periodical';
	}

	/**
	 * Set issn.
	 * 
	 * @param Property\Issn $issn
	 * @return Periodical
	 */
	public function setIssn(Property\Issn $issn) {
		$this->issn = $issn;

		return $this;
	}
}