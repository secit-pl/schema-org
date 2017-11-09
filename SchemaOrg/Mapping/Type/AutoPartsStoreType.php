<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutoPartsStoreType.
 * 
 * @method AutoPartsStoreType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AutoPartsStoreType setAddress(Property\AddressProperty $address)
 * @method AutoPartsStoreType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method AutoPartsStoreType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AutoPartsStoreType setAlumni(Property\AlumniProperty $alumni)
 * @method AutoPartsStoreType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method AutoPartsStoreType setAward(Property\AwardProperty $award)
 * @method AutoPartsStoreType setBrand(Property\BrandProperty $brand)
 * @method AutoPartsStoreType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method AutoPartsStoreType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method AutoPartsStoreType setDepartment(Property\DepartmentProperty $department)
 * @method AutoPartsStoreType setDescription(Property\DescriptionProperty $description)
 * @method AutoPartsStoreType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AutoPartsStoreType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method AutoPartsStoreType setDuns(Property\DunsProperty $duns)
 * @method AutoPartsStoreType setEmail(Property\EmailProperty $email)
 * @method AutoPartsStoreType setEmployee(Property\EmployeeProperty $employee)
 * @method AutoPartsStoreType setEvent(Property\EventProperty $event)
 * @method AutoPartsStoreType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method AutoPartsStoreType setFounder(Property\FounderProperty $founder)
 * @method AutoPartsStoreType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method AutoPartsStoreType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method AutoPartsStoreType setFunder(Property\FunderProperty $funder)
 * @method AutoPartsStoreType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method AutoPartsStoreType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method AutoPartsStoreType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method AutoPartsStoreType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AutoPartsStoreType setImage(Property\ImageProperty $image)
 * @method AutoPartsStoreType setIsicV4(Property\IsicV4Property $isicV4)
 * @method AutoPartsStoreType setLegalName(Property\LegalNameProperty $legalName)
 * @method AutoPartsStoreType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method AutoPartsStoreType setLocation(Property\LocationProperty $location)
 * @method AutoPartsStoreType setLogo(Property\LogoProperty $logo)
 * @method AutoPartsStoreType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AutoPartsStoreType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method AutoPartsStoreType setMember(Property\MemberProperty $member)
 * @method AutoPartsStoreType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method AutoPartsStoreType setNaics(Property\NaicsProperty $naics)
 * @method AutoPartsStoreType setName(Property\NameProperty $name)
 * @method AutoPartsStoreType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method AutoPartsStoreType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method AutoPartsStoreType setOwns(Property\OwnsProperty $owns)
 * @method AutoPartsStoreType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method AutoPartsStoreType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method AutoPartsStoreType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AutoPartsStoreType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method AutoPartsStoreType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method AutoPartsStoreType setReview(Property\ReviewProperty $review)
 * @method AutoPartsStoreType setSameAs(Property\SameAsProperty $sameAs)
 * @method AutoPartsStoreType setSeeks(Property\SeeksProperty $seeks)
 * @method AutoPartsStoreType setSponsor(Property\SponsorProperty $sponsor)
 * @method AutoPartsStoreType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method AutoPartsStoreType setTaxID(Property\TaxIDProperty $taxID)
 * @method AutoPartsStoreType setTelephone(Property\TelephoneProperty $telephone)
 * @method AutoPartsStoreType setUrl(Property\UrlProperty $url)
 * @method AutoPartsStoreType setVatID(Property\VatIDProperty $vatID)
 */
class AutoPartsStoreType extends AutomotiveBusinessType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutoPartsStore';
	}
}