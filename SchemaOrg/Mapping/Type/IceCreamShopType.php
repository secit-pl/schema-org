<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class IceCreamShopType.
 * 
 * @method IceCreamShopType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method IceCreamShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method IceCreamShopType setAddress(Property\AddressProperty $address)
 * @method IceCreamShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method IceCreamShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method IceCreamShopType setAlumni(Property\AlumniProperty $alumni)
 * @method IceCreamShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method IceCreamShopType setAward(Property\AwardProperty $award)
 * @method IceCreamShopType setBrand(Property\BrandProperty $brand)
 * @method IceCreamShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method IceCreamShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method IceCreamShopType setDepartment(Property\DepartmentProperty $department)
 * @method IceCreamShopType setDescription(Property\DescriptionProperty $description)
 * @method IceCreamShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method IceCreamShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method IceCreamShopType setDuns(Property\DunsProperty $duns)
 * @method IceCreamShopType setEmail(Property\EmailProperty $email)
 * @method IceCreamShopType setEmployee(Property\EmployeeProperty $employee)
 * @method IceCreamShopType setEvent(Property\EventProperty $event)
 * @method IceCreamShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method IceCreamShopType setFounder(Property\FounderProperty $founder)
 * @method IceCreamShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method IceCreamShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method IceCreamShopType setFunder(Property\FunderProperty $funder)
 * @method IceCreamShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method IceCreamShopType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method IceCreamShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method IceCreamShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method IceCreamShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method IceCreamShopType setImage(Property\ImageProperty $image)
 * @method IceCreamShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method IceCreamShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method IceCreamShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method IceCreamShopType setLocation(Property\LocationProperty $location)
 * @method IceCreamShopType setLogo(Property\LogoProperty $logo)
 * @method IceCreamShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method IceCreamShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method IceCreamShopType setMember(Property\MemberProperty $member)
 * @method IceCreamShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method IceCreamShopType setNaics(Property\NaicsProperty $naics)
 * @method IceCreamShopType setName(Property\NameProperty $name)
 * @method IceCreamShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method IceCreamShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method IceCreamShopType setOwns(Property\OwnsProperty $owns)
 * @method IceCreamShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method IceCreamShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method IceCreamShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method IceCreamShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method IceCreamShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method IceCreamShopType setReview(Property\ReviewProperty $review)
 * @method IceCreamShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method IceCreamShopType setSeeks(Property\SeeksProperty $seeks)
 * @method IceCreamShopType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method IceCreamShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method IceCreamShopType setStarRating(Property\StarRatingProperty $starRating)
 * @method IceCreamShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method IceCreamShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method IceCreamShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method IceCreamShopType setUrl(Property\UrlProperty $url)
 * @method IceCreamShopType setVatID(Property\VatIDProperty $vatID)
 */
class IceCreamShopType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/IceCreamShop';
	}
}