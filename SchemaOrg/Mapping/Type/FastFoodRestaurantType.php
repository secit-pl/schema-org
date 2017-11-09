<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FastFoodRestaurantType.
 * 
 * @method FastFoodRestaurantType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method FastFoodRestaurantType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FastFoodRestaurantType setAddress(Property\AddressProperty $address)
 * @method FastFoodRestaurantType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method FastFoodRestaurantType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FastFoodRestaurantType setAlumni(Property\AlumniProperty $alumni)
 * @method FastFoodRestaurantType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method FastFoodRestaurantType setAward(Property\AwardProperty $award)
 * @method FastFoodRestaurantType setBrand(Property\BrandProperty $brand)
 * @method FastFoodRestaurantType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method FastFoodRestaurantType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method FastFoodRestaurantType setDepartment(Property\DepartmentProperty $department)
 * @method FastFoodRestaurantType setDescription(Property\DescriptionProperty $description)
 * @method FastFoodRestaurantType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FastFoodRestaurantType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method FastFoodRestaurantType setDuns(Property\DunsProperty $duns)
 * @method FastFoodRestaurantType setEmail(Property\EmailProperty $email)
 * @method FastFoodRestaurantType setEmployee(Property\EmployeeProperty $employee)
 * @method FastFoodRestaurantType setEvent(Property\EventProperty $event)
 * @method FastFoodRestaurantType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method FastFoodRestaurantType setFounder(Property\FounderProperty $founder)
 * @method FastFoodRestaurantType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method FastFoodRestaurantType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method FastFoodRestaurantType setFunder(Property\FunderProperty $funder)
 * @method FastFoodRestaurantType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method FastFoodRestaurantType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method FastFoodRestaurantType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method FastFoodRestaurantType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method FastFoodRestaurantType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FastFoodRestaurantType setImage(Property\ImageProperty $image)
 * @method FastFoodRestaurantType setIsicV4(Property\IsicV4Property $isicV4)
 * @method FastFoodRestaurantType setLegalName(Property\LegalNameProperty $legalName)
 * @method FastFoodRestaurantType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method FastFoodRestaurantType setLocation(Property\LocationProperty $location)
 * @method FastFoodRestaurantType setLogo(Property\LogoProperty $logo)
 * @method FastFoodRestaurantType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FastFoodRestaurantType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method FastFoodRestaurantType setMember(Property\MemberProperty $member)
 * @method FastFoodRestaurantType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method FastFoodRestaurantType setNaics(Property\NaicsProperty $naics)
 * @method FastFoodRestaurantType setName(Property\NameProperty $name)
 * @method FastFoodRestaurantType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method FastFoodRestaurantType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method FastFoodRestaurantType setOwns(Property\OwnsProperty $owns)
 * @method FastFoodRestaurantType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method FastFoodRestaurantType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method FastFoodRestaurantType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FastFoodRestaurantType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method FastFoodRestaurantType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method FastFoodRestaurantType setReview(Property\ReviewProperty $review)
 * @method FastFoodRestaurantType setSameAs(Property\SameAsProperty $sameAs)
 * @method FastFoodRestaurantType setSeeks(Property\SeeksProperty $seeks)
 * @method FastFoodRestaurantType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method FastFoodRestaurantType setSponsor(Property\SponsorProperty $sponsor)
 * @method FastFoodRestaurantType setStarRating(Property\StarRatingProperty $starRating)
 * @method FastFoodRestaurantType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method FastFoodRestaurantType setTaxID(Property\TaxIDProperty $taxID)
 * @method FastFoodRestaurantType setTelephone(Property\TelephoneProperty $telephone)
 * @method FastFoodRestaurantType setUrl(Property\UrlProperty $url)
 * @method FastFoodRestaurantType setVatID(Property\VatIDProperty $vatID)
 */
class FastFoodRestaurantType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FastFoodRestaurant';
	}
}