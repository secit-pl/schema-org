<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BarOrPubType.
 * 
 * @method BarOrPubType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method BarOrPubType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BarOrPubType setAddress(Property\AddressProperty $address)
 * @method BarOrPubType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BarOrPubType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BarOrPubType setAlumni(Property\AlumniProperty $alumni)
 * @method BarOrPubType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BarOrPubType setAward(Property\AwardProperty $award)
 * @method BarOrPubType setBrand(Property\BrandProperty $brand)
 * @method BarOrPubType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BarOrPubType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BarOrPubType setDepartment(Property\DepartmentProperty $department)
 * @method BarOrPubType setDescription(Property\DescriptionProperty $description)
 * @method BarOrPubType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BarOrPubType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BarOrPubType setDuns(Property\DunsProperty $duns)
 * @method BarOrPubType setEmail(Property\EmailProperty $email)
 * @method BarOrPubType setEmployee(Property\EmployeeProperty $employee)
 * @method BarOrPubType setEvent(Property\EventProperty $event)
 * @method BarOrPubType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BarOrPubType setFounder(Property\FounderProperty $founder)
 * @method BarOrPubType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BarOrPubType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BarOrPubType setFunder(Property\FunderProperty $funder)
 * @method BarOrPubType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BarOrPubType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method BarOrPubType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BarOrPubType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BarOrPubType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BarOrPubType setImage(Property\ImageProperty $image)
 * @method BarOrPubType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BarOrPubType setLegalName(Property\LegalNameProperty $legalName)
 * @method BarOrPubType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BarOrPubType setLocation(Property\LocationProperty $location)
 * @method BarOrPubType setLogo(Property\LogoProperty $logo)
 * @method BarOrPubType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BarOrPubType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BarOrPubType setMember(Property\MemberProperty $member)
 * @method BarOrPubType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BarOrPubType setNaics(Property\NaicsProperty $naics)
 * @method BarOrPubType setName(Property\NameProperty $name)
 * @method BarOrPubType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BarOrPubType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BarOrPubType setOwns(Property\OwnsProperty $owns)
 * @method BarOrPubType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BarOrPubType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BarOrPubType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BarOrPubType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BarOrPubType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BarOrPubType setReview(Property\ReviewProperty $review)
 * @method BarOrPubType setSameAs(Property\SameAsProperty $sameAs)
 * @method BarOrPubType setSeeks(Property\SeeksProperty $seeks)
 * @method BarOrPubType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method BarOrPubType setSponsor(Property\SponsorProperty $sponsor)
 * @method BarOrPubType setStarRating(Property\StarRatingProperty $starRating)
 * @method BarOrPubType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BarOrPubType setTaxID(Property\TaxIDProperty $taxID)
 * @method BarOrPubType setTelephone(Property\TelephoneProperty $telephone)
 * @method BarOrPubType setUrl(Property\UrlProperty $url)
 * @method BarOrPubType setVatID(Property\VatIDProperty $vatID)
 */
class BarOrPubType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BarOrPub';
	}
}