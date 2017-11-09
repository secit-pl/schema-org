<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BowlingAlleyType.
 * 
 * @method BowlingAlleyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BowlingAlleyType setAddress(Property\AddressProperty $address)
 * @method BowlingAlleyType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method BowlingAlleyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BowlingAlleyType setAlumni(Property\AlumniProperty $alumni)
 * @method BowlingAlleyType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method BowlingAlleyType setAward(Property\AwardProperty $award)
 * @method BowlingAlleyType setBrand(Property\BrandProperty $brand)
 * @method BowlingAlleyType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method BowlingAlleyType setCurrenciesAccepted(Property\CurrenciesAcceptedProperty $currenciesAccepted)
 * @method BowlingAlleyType setDepartment(Property\DepartmentProperty $department)
 * @method BowlingAlleyType setDescription(Property\DescriptionProperty $description)
 * @method BowlingAlleyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BowlingAlleyType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method BowlingAlleyType setDuns(Property\DunsProperty $duns)
 * @method BowlingAlleyType setEmail(Property\EmailProperty $email)
 * @method BowlingAlleyType setEmployee(Property\EmployeeProperty $employee)
 * @method BowlingAlleyType setEvent(Property\EventProperty $event)
 * @method BowlingAlleyType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method BowlingAlleyType setFounder(Property\FounderProperty $founder)
 * @method BowlingAlleyType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method BowlingAlleyType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method BowlingAlleyType setFunder(Property\FunderProperty $funder)
 * @method BowlingAlleyType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method BowlingAlleyType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method BowlingAlleyType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method BowlingAlleyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BowlingAlleyType setImage(Property\ImageProperty $image)
 * @method BowlingAlleyType setIsicV4(Property\IsicV4Property $isicV4)
 * @method BowlingAlleyType setLegalName(Property\LegalNameProperty $legalName)
 * @method BowlingAlleyType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method BowlingAlleyType setLocation(Property\LocationProperty $location)
 * @method BowlingAlleyType setLogo(Property\LogoProperty $logo)
 * @method BowlingAlleyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BowlingAlleyType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method BowlingAlleyType setMember(Property\MemberProperty $member)
 * @method BowlingAlleyType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method BowlingAlleyType setNaics(Property\NaicsProperty $naics)
 * @method BowlingAlleyType setName(Property\NameProperty $name)
 * @method BowlingAlleyType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method BowlingAlleyType setOpeningHours(Property\OpeningHoursProperty $openingHours)
 * @method BowlingAlleyType setOwns(Property\OwnsProperty $owns)
 * @method BowlingAlleyType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method BowlingAlleyType setPaymentAccepted(Property\PaymentAcceptedProperty $paymentAccepted)
 * @method BowlingAlleyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BowlingAlleyType setPriceRange(Property\PriceRangeProperty $priceRange)
 * @method BowlingAlleyType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method BowlingAlleyType setReview(Property\ReviewProperty $review)
 * @method BowlingAlleyType setSameAs(Property\SameAsProperty $sameAs)
 * @method BowlingAlleyType setSeeks(Property\SeeksProperty $seeks)
 * @method BowlingAlleyType setSponsor(Property\SponsorProperty $sponsor)
 * @method BowlingAlleyType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method BowlingAlleyType setTaxID(Property\TaxIDProperty $taxID)
 * @method BowlingAlleyType setTelephone(Property\TelephoneProperty $telephone)
 * @method BowlingAlleyType setUrl(Property\UrlProperty $url)
 * @method BowlingAlleyType setVatID(Property\VatIDProperty $vatID)
 */
class BowlingAlleyType extends SportsActivityLocationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BowlingAlley';
	}
}