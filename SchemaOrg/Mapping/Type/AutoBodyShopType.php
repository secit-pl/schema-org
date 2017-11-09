<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoBodyShopType.
 * 
 * @method AutoBodyShopType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoBodyShopType setAddress(Property\AddressProperty $address)
 * @method AutoBodyShopType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoBodyShopType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoBodyShopType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoBodyShopType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoBodyShopType setAward(Property\AwardProperty $award)
 * @method AutoBodyShopType setBrand(Property\BrandProperty $brand)
 * @method AutoBodyShopType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoBodyShopType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoBodyShopType setDepartment(Property\DepartmentProperty $department)
 * @method AutoBodyShopType setDescription(Property\DescriptionProperty $description)
 * @method AutoBodyShopType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoBodyShopType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoBodyShopType setDuns(Property\DunsProperty $duns)
 * @method AutoBodyShopType setEmail(Property\EmailProperty $email)
 * @method AutoBodyShopType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoBodyShopType setEvent(Property\EventProperty $event)
 * @method AutoBodyShopType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoBodyShopType setFounder(Property\FounderProperty $founder)
 * @method AutoBodyShopType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoBodyShopType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoBodyShopType setFunder(Property\FunderProperty $funder)
 * @method AutoBodyShopType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoBodyShopType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoBodyShopType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoBodyShopType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoBodyShopType setImage(Property\ImageProperty $image)
 * @method AutoBodyShopType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoBodyShopType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoBodyShopType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoBodyShopType setLocation(Property\LocationProperty $location)
 * @method AutoBodyShopType setLogo(Property\LogoProperty $logo)
 * @method AutoBodyShopType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoBodyShopType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoBodyShopType setMember(Property\MemberProperty $member)
 * @method AutoBodyShopType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoBodyShopType setNaics(Property\NaicsProperty $naics)
 * @method AutoBodyShopType setName(Property\NameProperty $name)
 * @method AutoBodyShopType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoBodyShopType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoBodyShopType setOwns(Property\OwnsProperty $owns)
 * @method AutoBodyShopType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoBodyShopType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoBodyShopType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoBodyShopType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoBodyShopType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoBodyShopType setReview(Property\ReviewProperty $review)
 * @method AutoBodyShopType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoBodyShopType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoBodyShopType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoBodyShopType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoBodyShopType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoBodyShopType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoBodyShopType setUrl(Property\UrlProperty $url)
 * @method AutoBodyShopType setVatID(Property\VatIDProperty $vatID)
 */
class AutoBodyShopType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoBodyShop';
	}
}