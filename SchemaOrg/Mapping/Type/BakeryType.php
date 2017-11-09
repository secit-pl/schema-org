<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BakeryType.
 * 
 * @method BakeryType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BakeryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BakeryType setAddress(Property\AddressProperty $address)
 * @method BakeryType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BakeryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BakeryType setAlumni(Property\AlumniProperty $alumni)
 * @method BakeryType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BakeryType setAward(Property\AwardProperty $award)
 * @method BakeryType setBrand(Property\BrandProperty $brand)
 * @method BakeryType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BakeryType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BakeryType setDepartment(Property\DepartmentProperty $department)
 * @method BakeryType setDescription(Property\DescriptionProperty $description)
 * @method BakeryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BakeryType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BakeryType setDuns(Property\DunsProperty $duns)
 * @method BakeryType setEmail(Property\EmailProperty $email)
 * @method BakeryType setEmployee(Property\EmployeeProperty $employee)
 * @method BakeryType setEvent(Property\EventProperty $event)
 * @method BakeryType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BakeryType setFounder(Property\FounderProperty $founder)
 * @method BakeryType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BakeryType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BakeryType setFunder(Property\FunderProperty $funder)
 * @method BakeryType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BakeryType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BakeryType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BakeryType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BakeryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BakeryType setImage(Property\ImageProperty $image)
 * @method BakeryType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BakeryType setLegalName(Property\LegalNameProperty $legalName)
 * @method BakeryType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BakeryType setLocation(Property\LocationProperty $location)
 * @method BakeryType setLogo(Property\LogoProperty $logo)
 * @method BakeryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BakeryType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BakeryType setMember(Property\MemberProperty $member)
 * @method BakeryType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BakeryType setNaics(Property\NaicsProperty $naics)
 * @method BakeryType setName(Property\NameProperty $name)
 * @method BakeryType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BakeryType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BakeryType setOwns(Property\OwnsProperty $owns)
 * @method BakeryType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BakeryType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BakeryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BakeryType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BakeryType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BakeryType setReview(Property\ReviewProperty $review)
 * @method BakeryType setSameAs(Property\SameAsProperty $sameAs)
 * @method BakeryType setSeeks(Property\SeeksProperty $seeks)
 * @method BakeryType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BakeryType setSponsor(Property\SponsorProperty $sponsor)
 * @method BakeryType setStarRating(Property\StarRatingProperty $starRating)
 * @method BakeryType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BakeryType setTaxID(Property\TaxIDProperty $taxID)
 * @method BakeryType setTelephone(Property\TelephoneProperty $telephone)
 * @method BakeryType setUrl(Property\UrlProperty $url)
 * @method BakeryType setVatID(Property\VatIDProperty $vatID)
 */
class BakeryType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Bakery';
	}
}