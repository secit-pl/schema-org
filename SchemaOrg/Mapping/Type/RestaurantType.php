<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RestaurantType.
 * 
 * @method RestaurantType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method RestaurantType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RestaurantType setAddress(Property\AddressProperty $address)
 * @method RestaurantType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method RestaurantType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RestaurantType setAlumni(Property\AlumniProperty $alumni)
 * @method RestaurantType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method RestaurantType setAward(Property\AwardProperty $award)
 * @method RestaurantType setBrand(Property\BrandProperty $brand)
 * @method RestaurantType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method RestaurantType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method RestaurantType setDepartment(Property\DepartmentProperty $department)
 * @method RestaurantType setDescription(Property\DescriptionProperty $description)
 * @method RestaurantType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RestaurantType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method RestaurantType setDuns(Property\DunsProperty $duns)
 * @method RestaurantType setEmail(Property\EmailProperty $email)
 * @method RestaurantType setEmployee(Property\EmployeeProperty $employee)
 * @method RestaurantType setEvent(Property\EventProperty $event)
 * @method RestaurantType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method RestaurantType setFounder(Property\FounderProperty $founder)
 * @method RestaurantType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method RestaurantType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method RestaurantType setFunder(Property\FunderProperty $funder)
 * @method RestaurantType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method RestaurantType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method RestaurantType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method RestaurantType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method RestaurantType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RestaurantType setImage(Property\ImageProperty $image)
 * @method RestaurantType setIsicV4(Property\IsicV4Property $isicV4)
 * @method RestaurantType setLegalName(Property\LegalNameProperty $legalName)
 * @method RestaurantType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method RestaurantType setLocation(Property\LocationProperty $location)
 * @method RestaurantType setLogo(Property\LogoProperty $logo)
 * @method RestaurantType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RestaurantType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method RestaurantType setMember(Property\MemberProperty $member)
 * @method RestaurantType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method RestaurantType setNaics(Property\NaicsProperty $naics)
 * @method RestaurantType setName(Property\NameProperty $name)
 * @method RestaurantType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method RestaurantType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method RestaurantType setOwns(Property\OwnsProperty $owns)
 * @method RestaurantType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method RestaurantType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method RestaurantType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RestaurantType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method RestaurantType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method RestaurantType setReview(Property\ReviewProperty $review)
 * @method RestaurantType setSameAs(Property\SameAsProperty $sameAs)
 * @method RestaurantType setSeeks(Property\SeeksProperty $seeks)
 * @method RestaurantType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method RestaurantType setSponsor(Property\SponsorProperty $sponsor)
 * @method RestaurantType setStarRating(Property\StarRatingProperty $starRating)
 * @method RestaurantType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method RestaurantType setTaxID(Property\TaxIDProperty $taxID)
 * @method RestaurantType setTelephone(Property\TelephoneProperty $telephone)
 * @method RestaurantType setUrl(Property\UrlProperty $url)
 * @method RestaurantType setVatID(Property\VatIDProperty $vatID)
 */
class RestaurantType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Restaurant';
	}
}