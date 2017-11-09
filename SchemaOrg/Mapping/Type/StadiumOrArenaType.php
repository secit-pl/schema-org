<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class StadiumOrArenaType.
 * 
 * @method StadiumOrArenaType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method StadiumOrArenaType setAddress(Property\AddressProperty $address)
 * @method StadiumOrArenaType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method StadiumOrArenaType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method StadiumOrArenaType setAlumni(Property\AlumniProperty $alumni)
 * @method StadiumOrArenaType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method StadiumOrArenaType setAward(Property\AwardProperty $award)
 * @method StadiumOrArenaType setBrand(Property\BrandProperty $brand)
 * @method StadiumOrArenaType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method StadiumOrArenaType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method StadiumOrArenaType setDepartment(Property\DepartmentProperty $department)
 * @method StadiumOrArenaType setDescription(Property\DescriptionProperty $description)
 * @method StadiumOrArenaType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method StadiumOrArenaType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method StadiumOrArenaType setDuns(Property\DunsProperty $duns)
 * @method StadiumOrArenaType setEmail(Property\EmailProperty $email)
 * @method StadiumOrArenaType setEmployee(Property\EmployeeProperty $employee)
 * @method StadiumOrArenaType setEvent(Property\EventProperty $event)
 * @method StadiumOrArenaType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method StadiumOrArenaType setFounder(Property\FounderProperty $founder)
 * @method StadiumOrArenaType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method StadiumOrArenaType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method StadiumOrArenaType setFunder(Property\FunderProperty $funder)
 * @method StadiumOrArenaType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method StadiumOrArenaType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method StadiumOrArenaType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method StadiumOrArenaType setIdentifier(Property\IdentifierProperty $identifier)
 * @method StadiumOrArenaType setImage(Property\ImageProperty $image)
 * @method StadiumOrArenaType setIsicV4(Property\IsicV4Property $isicV4)
 * @method StadiumOrArenaType setLegalName(Property\LegalNameProperty $legalName)
 * @method StadiumOrArenaType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method StadiumOrArenaType setLocation(Property\LocationProperty $location)
 * @method StadiumOrArenaType setLogo(Property\LogoProperty $logo)
 * @method StadiumOrArenaType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method StadiumOrArenaType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method StadiumOrArenaType setMember(Property\MemberProperty $member)
 * @method StadiumOrArenaType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method StadiumOrArenaType setNaics(Property\NaicsProperty $naics)
 * @method StadiumOrArenaType setName(Property\NameProperty $name)
 * @method StadiumOrArenaType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method StadiumOrArenaType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method StadiumOrArenaType setOwns(Property\OwnsProperty $owns)
 * @method StadiumOrArenaType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method StadiumOrArenaType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method StadiumOrArenaType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method StadiumOrArenaType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method StadiumOrArenaType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method StadiumOrArenaType setReview(Property\ReviewProperty $review)
 * @method StadiumOrArenaType setSameAs(Property\SameAsProperty $sameAs)
 * @method StadiumOrArenaType setSeeks(Property\SeeksProperty $seeks)
 * @method StadiumOrArenaType setSponsor(Property\SponsorProperty $sponsor)
 * @method StadiumOrArenaType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method StadiumOrArenaType setTaxID(Property\TaxIDProperty $taxID)
 * @method StadiumOrArenaType setTelephone(Property\TelephoneProperty $telephone)
 * @method StadiumOrArenaType setUrl(Property\UrlProperty $url)
 * @method StadiumOrArenaType setVatID(Property\VatIDProperty $vatID)
 */
class StadiumOrArenaType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/StadiumOrArena';
	}
}