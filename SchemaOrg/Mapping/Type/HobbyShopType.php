<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HobbyShopType.
 * 
 * @method HobbyShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HobbyShopType setAddress(Property\AddressProperty $address)
 * @method HobbyShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method HobbyShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HobbyShopType setAlumni(Property\AlumniProperty $alumni)
 * @method HobbyShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method HobbyShopType setAward(Property\AwardProperty $award)
 * @method HobbyShopType setBrand(Property\BrandProperty $brand)
 * @method HobbyShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method HobbyShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method HobbyShopType setDepartment(Property\DepartmentProperty $department)
 * @method HobbyShopType setDescription(Property\DescriptionProperty $description)
 * @method HobbyShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HobbyShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method HobbyShopType setDuns(Property\DunsProperty $duns)
 * @method HobbyShopType setEmail(Property\EmailProperty $email)
 * @method HobbyShopType setEmployee(Property\EmployeeProperty $employee)
 * @method HobbyShopType setEvent(Property\EventProperty $event)
 * @method HobbyShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method HobbyShopType setFounder(Property\FounderProperty $founder)
 * @method HobbyShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method HobbyShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method HobbyShopType setFunder(Property\FunderProperty $funder)
 * @method HobbyShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method HobbyShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method HobbyShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method HobbyShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HobbyShopType setImage(Property\ImageProperty $image)
 * @method HobbyShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method HobbyShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method HobbyShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method HobbyShopType setLocation(Property\LocationProperty $location)
 * @method HobbyShopType setLogo(Property\LogoProperty $logo)
 * @method HobbyShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HobbyShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method HobbyShopType setMember(Property\MemberProperty $member)
 * @method HobbyShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method HobbyShopType setNaics(Property\NaicsProperty $naics)
 * @method HobbyShopType setName(Property\NameProperty $name)
 * @method HobbyShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method HobbyShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method HobbyShopType setOwns(Property\OwnsProperty $owns)
 * @method HobbyShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method HobbyShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method HobbyShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HobbyShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method HobbyShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method HobbyShopType setReview(Property\ReviewProperty $review)
 * @method HobbyShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method HobbyShopType setSeeks(Property\SeeksProperty $seeks)
 * @method HobbyShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method HobbyShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method HobbyShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method HobbyShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method HobbyShopType setUrl(Property\UrlProperty $url)
 * @method HobbyShopType setVatID(Property\VatIDProperty $vatID)
 */
class HobbyShopType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HobbyShop';
	}
}