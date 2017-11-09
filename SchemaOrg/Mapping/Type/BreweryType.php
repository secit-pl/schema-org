<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BreweryType.
 * 
 * @method BreweryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BreweryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BreweryType setAddress(Property\AddressProperty $address)
 * @method BreweryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BreweryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BreweryType setAlumni(Property\AlumniProperty $alumni)
 * @method BreweryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BreweryType setAward(Property\AwardProperty $award)
 * @method BreweryType setBrand(Property\BrandProperty $brand)
 * @method BreweryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BreweryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BreweryType setDepartment(Property\DepartmentProperty $department)
 * @method BreweryType setDescription(Property\DescriptionProperty $description)
 * @method BreweryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BreweryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BreweryType setDuns(Property\DunsProperty $duns)
 * @method BreweryType setEmail(Property\EmailProperty $email)
 * @method BreweryType setEmployee(Property\EmployeeProperty $employee)
 * @method BreweryType setEvent(Property\EventProperty $event)
 * @method BreweryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BreweryType setFounder(Property\FounderProperty $founder)
 * @method BreweryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BreweryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BreweryType setFunder(Property\FunderProperty $funder)
 * @method BreweryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BreweryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BreweryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BreweryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BreweryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BreweryType setImage(Property\ImageProperty $image)
 * @method BreweryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BreweryType setLegalName(Property\LegalNameProperty $legalName)
 * @method BreweryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BreweryType setLocation(Property\LocationProperty $location)
 * @method BreweryType setLogo(Property\LogoProperty $logo)
 * @method BreweryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BreweryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BreweryType setMember(Property\MemberProperty $member)
 * @method BreweryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BreweryType setNaics(Property\NaicsProperty $naics)
 * @method BreweryType setName(Property\NameProperty $name)
 * @method BreweryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BreweryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BreweryType setOwns(Property\OwnsProperty $owns)
 * @method BreweryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BreweryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BreweryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BreweryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BreweryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BreweryType setReview(Property\ReviewProperty $review)
 * @method BreweryType setSameAs(Property\SameAsProperty $sameAs)
 * @method BreweryType setSeeks(Property\SeeksProperty $seeks)
 * @method BreweryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BreweryType setSponsor(Property\SponsorProperty $sponsor)
 * @method BreweryType setStarRating(Property\StarRatingProperty $starRating)
 * @method BreweryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BreweryType setTaxID(Property\TaxIDProperty $taxID)
 * @method BreweryType setTelephone(Property\TelephoneProperty $telephone)
 * @method BreweryType setUrl(Property\UrlProperty $url)
 * @method BreweryType setVatID(Property\VatIDProperty $vatID)
 */
class BreweryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Brewery';
	}
}