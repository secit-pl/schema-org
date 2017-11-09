<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CafeOrCoffeeShopType.
 * 
 * @method CafeOrCoffeeShopType setAcceptsReservations(Property\AcceptsReservationsProperty $acceptsReservations)
 * @method CafeOrCoffeeShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CafeOrCoffeeShopType setAddress(Property\AddressProperty $address)
 * @method CafeOrCoffeeShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CafeOrCoffeeShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CafeOrCoffeeShopType setAlumni(Property\AlumniProperty $alumni)
 * @method CafeOrCoffeeShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method CafeOrCoffeeShopType setAward(Property\AwardProperty $award)
 * @method CafeOrCoffeeShopType setBrand(Property\BrandProperty $brand)
 * @method CafeOrCoffeeShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method CafeOrCoffeeShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method CafeOrCoffeeShopType setDepartment(Property\DepartmentProperty $department)
 * @method CafeOrCoffeeShopType setDescription(Property\DescriptionProperty $description)
 * @method CafeOrCoffeeShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CafeOrCoffeeShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method CafeOrCoffeeShopType setDuns(Property\DunsProperty $duns)
 * @method CafeOrCoffeeShopType setEmail(Property\EmailProperty $email)
 * @method CafeOrCoffeeShopType setEmployee(Property\EmployeeProperty $employee)
 * @method CafeOrCoffeeShopType setEvent(Property\EventProperty $event)
 * @method CafeOrCoffeeShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method CafeOrCoffeeShopType setFounder(Property\FounderProperty $founder)
 * @method CafeOrCoffeeShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method CafeOrCoffeeShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method CafeOrCoffeeShopType setFunder(Property\FunderProperty $funder)
 * @method CafeOrCoffeeShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method CafeOrCoffeeShopType setHasMenu(Property\HasMenuProperty $hasMenu)
 * @method CafeOrCoffeeShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method CafeOrCoffeeShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method CafeOrCoffeeShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CafeOrCoffeeShopType setImage(Property\ImageProperty $image)
 * @method CafeOrCoffeeShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method CafeOrCoffeeShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method CafeOrCoffeeShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method CafeOrCoffeeShopType setLocation(Property\LocationProperty $location)
 * @method CafeOrCoffeeShopType setLogo(Property\LogoProperty $logo)
 * @method CafeOrCoffeeShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CafeOrCoffeeShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method CafeOrCoffeeShopType setMember(Property\MemberProperty $member)
 * @method CafeOrCoffeeShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method CafeOrCoffeeShopType setNaics(Property\NaicsProperty $naics)
 * @method CafeOrCoffeeShopType setName(Property\NameProperty $name)
 * @method CafeOrCoffeeShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method CafeOrCoffeeShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method CafeOrCoffeeShopType setOwns(Property\OwnsProperty $owns)
 * @method CafeOrCoffeeShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method CafeOrCoffeeShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method CafeOrCoffeeShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CafeOrCoffeeShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method CafeOrCoffeeShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method CafeOrCoffeeShopType setReview(Property\ReviewProperty $review)
 * @method CafeOrCoffeeShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method CafeOrCoffeeShopType setSeeks(Property\SeeksProperty $seeks)
 * @method CafeOrCoffeeShopType setServesCuisine(Property\ServesCuisineProperty $servesCuisine)
 * @method CafeOrCoffeeShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method CafeOrCoffeeShopType setStarRating(Property\StarRatingProperty $starRating)
 * @method CafeOrCoffeeShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method CafeOrCoffeeShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method CafeOrCoffeeShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method CafeOrCoffeeShopType setUrl(Property\UrlProperty $url)
 * @method CafeOrCoffeeShopType setVatID(Property\VatIDProperty $vatID)
 */
class CafeOrCoffeeShopType extends FoodEstablishmentType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CafeOrCoffeeShop';
	}
}