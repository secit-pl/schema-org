<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PawnShopType.
 * 
 * @method PawnShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PawnShopType setAddress(Property\AddressProperty $address)
 * @method PawnShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method PawnShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PawnShopType setAlumni(Property\AlumniProperty $alumni)
 * @method PawnShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method PawnShopType setAward(Property\AwardProperty $award)
 * @method PawnShopType setBrand(Property\BrandProperty $brand)
 * @method PawnShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method PawnShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method PawnShopType setDepartment(Property\DepartmentProperty $department)
 * @method PawnShopType setDescription(Property\DescriptionProperty $description)
 * @method PawnShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PawnShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method PawnShopType setDuns(Property\DunsProperty $duns)
 * @method PawnShopType setEmail(Property\EmailProperty $email)
 * @method PawnShopType setEmployee(Property\EmployeeProperty $employee)
 * @method PawnShopType setEvent(Property\EventProperty $event)
 * @method PawnShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method PawnShopType setFounder(Property\FounderProperty $founder)
 * @method PawnShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method PawnShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method PawnShopType setFunder(Property\FunderProperty $funder)
 * @method PawnShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method PawnShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method PawnShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method PawnShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PawnShopType setImage(Property\ImageProperty $image)
 * @method PawnShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method PawnShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method PawnShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method PawnShopType setLocation(Property\LocationProperty $location)
 * @method PawnShopType setLogo(Property\LogoProperty $logo)
 * @method PawnShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PawnShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method PawnShopType setMember(Property\MemberProperty $member)
 * @method PawnShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method PawnShopType setNaics(Property\NaicsProperty $naics)
 * @method PawnShopType setName(Property\NameProperty $name)
 * @method PawnShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method PawnShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method PawnShopType setOwns(Property\OwnsProperty $owns)
 * @method PawnShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method PawnShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method PawnShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PawnShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method PawnShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method PawnShopType setReview(Property\ReviewProperty $review)
 * @method PawnShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method PawnShopType setSeeks(Property\SeeksProperty $seeks)
 * @method PawnShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method PawnShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method PawnShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method PawnShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method PawnShopType setUrl(Property\UrlProperty $url)
 * @method PawnShopType setVatID(Property\VatIDProperty $vatID)
 */
class PawnShopType extends StoreType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PawnShop';
	}
}