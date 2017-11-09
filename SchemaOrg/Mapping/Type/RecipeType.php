<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RecipeType.
 * 
 * @method RecipeType setAccessMode(Property\AccessModeProperty $accessMode)
 * @method RecipeType setAccessModeSufficient(Property\AccessModeSufficientProperty $accessModeSufficient)
 * @method RecipeType setAccessibilityAPI(Property\AccessibilityAPIProperty $accessibilityAPI)
 * @method RecipeType setAccessibilityControl(Property\AccessibilityControlProperty $accessibilityControl)
 * @method RecipeType setAccessibilityFeature(Property\AccessibilityFeatureProperty $accessibilityFeature)
 * @method RecipeType setAccessibilityHazard(Property\AccessibilityHazardProperty $accessibilityHazard)
 * @method RecipeType setAccessibilitySummary(Property\AccessibilitySummaryProperty $accessibilitySummary)
 * @method RecipeType setAccountablePerson(Property\AccountablePersonProperty $accountablePerson)
 * @method RecipeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RecipeType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RecipeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RecipeType setAlternativeHeadline(Property\AlternativeHeadlineProperty $alternativeHeadline)
 * @method RecipeType setAssociatedMedia(Property\AssociatedMediaProperty $associatedMedia)
 * @method RecipeType setAudience(Property\AudienceProperty $audience)
 * @method RecipeType setAudio(Property\AudioProperty $audio)
 * @method RecipeType setAuthor(Property\AuthorProperty $author)
 * @method RecipeType setAward(Property\AwardProperty $award)
 * @method RecipeType setCharacter(Property\CharacterProperty $character)
 * @method RecipeType setCitation(Property\CitationProperty $citation)
 * @method RecipeType setComment(Property\CommentProperty $comment)
 * @method RecipeType setCommentCount(Property\CommentCountProperty $commentCount)
 * @method RecipeType setContentLocation(Property\ContentLocationProperty $contentLocation)
 * @method RecipeType setContentRating(Property\ContentRatingProperty $contentRating)
 * @method RecipeType setContributor(Property\ContributorProperty $contributor)
 * @method RecipeType setCopyrightHolder(Property\CopyrightHolderProperty $copyrightHolder)
 * @method RecipeType setCopyrightYear(Property\CopyrightYearProperty $copyrightYear)
 * @method RecipeType setCreator(Property\CreatorProperty $creator)
 * @method RecipeType setDateCreated(Property\DateCreatedProperty $dateCreated)
 * @method RecipeType setDateModified(Property\DateModifiedProperty $dateModified)
 * @method RecipeType setDatePublished(Property\DatePublishedProperty $datePublished)
 * @method RecipeType setDescription(Property\DescriptionProperty $description)
 * @method RecipeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RecipeType setDiscussionUrl(Property\DiscussionUrlProperty $discussionUrl)
 * @method RecipeType setEditor(Property\EditorProperty $editor)
 * @method RecipeType setEducationalAlignment(Property\EducationalAlignmentProperty $educationalAlignment)
 * @method RecipeType setEducationalUse(Property\EducationalUseProperty $educationalUse)
 * @method RecipeType setEncoding(Property\EncodingProperty $encoding)
 * @method RecipeType setEstimatedCost(Property\EstimatedCostProperty $estimatedCost)
 * @method RecipeType setExampleOfWork(Property\ExampleOfWorkProperty $exampleOfWork)
 * @method RecipeType setExpires(Property\ExpiresProperty $expires)
 * @method RecipeType setFileFormat(Property\FileFormatProperty $fileFormat)
 * @method RecipeType setFunder(Property\FunderProperty $funder)
 * @method RecipeType setGenre(Property\GenreProperty $genre)
 * @method RecipeType setHasPart(Property\HasPartProperty $hasPart)
 * @method RecipeType setHeadline(Property\HeadlineProperty $headline)
 * @method RecipeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RecipeType setImage(Property\ImageProperty $image)
 * @method RecipeType setInLanguage(Property\InLanguageProperty $inLanguage)
 * @method RecipeType setInteractionStatistic(Property\InteractionStatisticProperty $interactionStatistic)
 * @method RecipeType setInteractivityType(Property\InteractivityTypeProperty $interactivityType)
 * @method RecipeType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method RecipeType setIsBasedOn(Property\IsBasedOnProperty $isBasedOn)
 * @method RecipeType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method RecipeType setIsPartOf(Property\IsPartOfProperty $isPartOf)
 * @method RecipeType setKeywords(Property\KeywordsProperty $keywords)
 * @method RecipeType setLearningResourceType(Property\LearningResourceTypeProperty $learningResourceType)
 * @method RecipeType setLicense(Property\LicenseProperty $license)
 * @method RecipeType setLocationCreated(Property\LocationCreatedProperty $locationCreated)
 * @method RecipeType setMainEntity(Property\MainEntityProperty $mainEntity)
 * @method RecipeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RecipeType setMaterial(Property\MaterialProperty $material)
 * @method RecipeType setMentions(Property\MentionsProperty $mentions)
 * @method RecipeType setName(Property\NameProperty $name)
 * @method RecipeType setOffers(Property\OffersProperty $offers)
 * @method RecipeType setPerformTime(Property\PerformTimeProperty $performTime)
 * @method RecipeType setPosition(Property\PositionProperty $position)
 * @method RecipeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RecipeType setPrepTime(Property\PrepTimeProperty $prepTime)
 * @method RecipeType setProducer(Property\ProducerProperty $producer)
 * @method RecipeType setProvider(Property\ProviderProperty $provider)
 * @method RecipeType setPublication(Property\PublicationProperty $publication)
 * @method RecipeType setPublisher(Property\PublisherProperty $publisher)
 * @method RecipeType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RecipeType setRecordedAt(Property\RecordedAtProperty $recordedAt)
 * @method RecipeType setReleasedEvent(Property\ReleasedEventProperty $releasedEvent)
 * @method RecipeType setReview(Property\ReviewProperty $review)
 * @method RecipeType setSameAs(Property\SameAsProperty $sameAs)
 * @method RecipeType setSchemaVersion(Property\SchemaVersionProperty $schemaVersion)
 * @method RecipeType setSourceOrganization(Property\SourceOrganizationProperty $sourceOrganization)
 * @method RecipeType setSpatialCoverage(Property\SpatialCoverageProperty $spatialCoverage)
 * @method RecipeType setSponsor(Property\SponsorProperty $sponsor)
 * @method RecipeType setStep(Property\StepProperty $step)
 * @method RecipeType setSupply(Property\SupplyProperty $supply)
 * @method RecipeType setTemporalCoverage(Property\TemporalCoverageProperty $temporalCoverage)
 * @method RecipeType setText(Property\TextProperty $text)
 * @method RecipeType setThumbnailUrl(Property\ThumbnailUrlProperty $thumbnailUrl)
 * @method RecipeType setTimeRequired(Property\TimeRequiredProperty $timeRequired)
 * @method RecipeType setTool(Property\ToolProperty $tool)
 * @method RecipeType setTotalTime(Property\TotalTimeProperty $totalTime)
 * @method RecipeType setTranslator(Property\TranslatorProperty $translator)
 * @method RecipeType setTypicalAgeRange(Property\TypicalAgeRangeProperty $typicalAgeRange)
 * @method RecipeType setUrl(Property\UrlProperty $url)
 * @method RecipeType setVersion(Property\VersionProperty $version)
 * @method RecipeType setVideo(Property\VideoProperty $video)
 * @method RecipeType setWorkExample(Property\WorkExampleProperty $workExample)
 * @method RecipeType setYield(Property\YieldProperty $yield)
 */
class RecipeType extends HowToType {

	/**
	 * @var Property\CookingMethodProperty
	 */
	private $cookingMethod;

	/**
	 * @var Property\CookTimeProperty
	 */
	private $cookTime;

	/**
	 * @var Property\NutritionProperty
	 */
	private $nutrition;

	/**
	 * @var Property\RecipeCategoryProperty
	 */
	private $recipeCategory;

	/**
	 * @var Property\RecipeCuisineProperty
	 */
	private $recipeCuisine;

	/**
	 * @var Property\RecipeIngredientProperty
	 */
	private $recipeIngredient;

	/**
	 * @var Property\RecipeInstructionsProperty
	 */
	private $recipeInstructions;

	/**
	 * @var Property\RecipeYieldProperty
	 */
	private $recipeYield;

	/**
	 * @var Property\SuitableForDietProperty
	 */
	private $suitableForDiet;

	/**
	 * Get cooking method.
	 * 
	 * @return Property\CookingMethodProperty
	 */
	public function getCookingMethod() {
		return $this->cookingMethod;
	}

	/**
	 * Get cook time.
	 * 
	 * @return Property\CookTimeProperty
	 */
	public function getCookTime() {
		return $this->cookTime;
	}

	/**
	 * Get nutrition.
	 * 
	 * @return Property\NutritionProperty
	 */
	public function getNutrition() {
		return $this->nutrition;
	}

	/**
	 * Get recipe category.
	 * 
	 * @return Property\RecipeCategoryProperty
	 */
	public function getRecipeCategory() {
		return $this->recipeCategory;
	}

	/**
	 * Get recipe cuisine.
	 * 
	 * @return Property\RecipeCuisineProperty
	 */
	public function getRecipeCuisine() {
		return $this->recipeCuisine;
	}

	/**
	 * Get recipe ingredient.
	 * 
	 * @return Property\RecipeIngredientProperty
	 */
	public function getRecipeIngredient() {
		return $this->recipeIngredient;
	}

	/**
	 * Get recipe instructions.
	 * 
	 * @return Property\RecipeInstructionsProperty
	 */
	public function getRecipeInstructions() {
		return $this->recipeInstructions;
	}

	/**
	 * Get recipe yield.
	 * 
	 * @return Property\RecipeYieldProperty
	 */
	public function getRecipeYield() {
		return $this->recipeYield;
	}

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Recipe';
	}

	/**
	 * Get suitable for diet.
	 * 
	 * @return Property\SuitableForDietProperty
	 */
	public function getSuitableForDiet() {
		return $this->suitableForDiet;
	}

	/**
	 * Set cooking method.
	 * 
	 * @param Property\CookingMethodProperty $cookingMethod
	 * @return RecipeType
	 */
	public function setCookingMethod(Property\CookingMethodProperty $cookingMethod) {
		$this->cookingMethod = $cookingMethod;

		return $this;
	}

	/**
	 * Set cook time.
	 * 
	 * @param Property\CookTimeProperty $cookTime
	 * @return RecipeType
	 */
	public function setCookTime(Property\CookTimeProperty $cookTime) {
		$this->cookTime = $cookTime;

		return $this;
	}

	/**
	 * Set nutrition.
	 * 
	 * @param Property\NutritionProperty $nutrition
	 * @return RecipeType
	 */
	public function setNutrition(Property\NutritionProperty $nutrition) {
		$this->nutrition = $nutrition;

		return $this;
	}

	/**
	 * Set recipe category.
	 * 
	 * @param Property\RecipeCategoryProperty $recipeCategory
	 * @return RecipeType
	 */
	public function setRecipeCategory(Property\RecipeCategoryProperty $recipeCategory) {
		$this->recipeCategory = $recipeCategory;

		return $this;
	}

	/**
	 * Set recipe cuisine.
	 * 
	 * @param Property\RecipeCuisineProperty $recipeCuisine
	 * @return RecipeType
	 */
	public function setRecipeCuisine(Property\RecipeCuisineProperty $recipeCuisine) {
		$this->recipeCuisine = $recipeCuisine;

		return $this;
	}

	/**
	 * Set recipe ingredient.
	 * 
	 * @param Property\RecipeIngredientProperty $recipeIngredient
	 * @return RecipeType
	 */
	public function setRecipeIngredient(Property\RecipeIngredientProperty $recipeIngredient) {
		$this->recipeIngredient = $recipeIngredient;

		return $this;
	}

	/**
	 * Set recipe instructions.
	 * 
	 * @param Property\RecipeInstructionsProperty $recipeInstructions
	 * @return RecipeType
	 */
	public function setRecipeInstructions(Property\RecipeInstructionsProperty $recipeInstructions) {
		$this->recipeInstructions = $recipeInstructions;

		return $this;
	}

	/**
	 * Set recipe yield.
	 * 
	 * @param Property\RecipeYieldProperty $recipeYield
	 * @return RecipeType
	 */
	public function setRecipeYield(Property\RecipeYieldProperty $recipeYield) {
		$this->recipeYield = $recipeYield;

		return $this;
	}

	/**
	 * Set suitable for diet.
	 * 
	 * @param Property\SuitableForDietProperty $suitableForDiet
	 * @return RecipeType
	 */
	public function setSuitableForDiet(Property\SuitableForDietProperty $suitableForDiet) {
		$this->suitableForDiet = $suitableForDiet;

		return $this;
	}
}