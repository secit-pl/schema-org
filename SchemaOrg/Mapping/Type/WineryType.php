<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WineryType.
 * 
 * @method WineryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method WineryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WineryType setAddress(Property\AddressProperty $address)
 * @method WineryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method WineryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WineryType setAlumni(Property\AlumniProperty $alumni)
 * @method WineryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method WineryType setAward(Property\AwardProperty $award)
 * @method WineryType setBrand(Property\BrandProperty $brand)
 * @method WineryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method WineryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method WineryType setDepartment(Property\DepartmentProperty $department)
 * @method WineryType setDescription(Property\DescriptionProperty $description)
 * @method WineryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WineryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method WineryType setDuns(Property\DunsProperty $duns)
 * @method WineryType setEmail(Property\EmailProperty $email)
 * @method WineryType setEmployee(Property\EmployeeProperty $employee)
 * @method WineryType setEvent(Property\EventProperty $event)
 * @method WineryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method WineryType setFounder(Property\FounderProperty $founder)
 * @method WineryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method WineryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method WineryType setFunder(Property\FunderProperty $funder)
 * @method WineryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method WineryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method WineryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method WineryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method WineryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WineryType setImage(Property\ImageProperty $image)
 * @method WineryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method WineryType setLegalName(Property\LegalNameProperty $legalName)
 * @method WineryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method WineryType setLocation(Property\LocationProperty $location)
 * @method WineryType setLogo(Property\LogoProperty $logo)
 * @method WineryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WineryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method WineryType setMember(Property\MemberProperty $member)
 * @method WineryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method WineryType setNaics(Property\NaicsProperty $naics)
 * @method WineryType setName(Property\NameProperty $name)
 * @method WineryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method WineryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method WineryType setOwns(Property\OwnsProperty $owns)
 * @method WineryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method WineryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method WineryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WineryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method WineryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method WineryType setReview(Property\ReviewProperty $review)
 * @method WineryType setSameAs(Property\SameAsProperty $sameAs)
 * @method WineryType setSeeks(Property\SeeksProperty $seeks)
 * @method WineryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method WineryType setSponsor(Property\SponsorProperty $sponsor)
 * @method WineryType setStarRating(Property\StarRatingProperty $starRating)
 * @method WineryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method WineryType setTaxID(Property\TaxIDProperty $taxID)
 * @method WineryType setTelephone(Property\TelephoneProperty $telephone)
 * @method WineryType setUrl(Property\UrlProperty $url)
 * @method WineryType setVatID(Property\VatIDProperty $vatID)
 */
class WineryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Winery';
	}
}