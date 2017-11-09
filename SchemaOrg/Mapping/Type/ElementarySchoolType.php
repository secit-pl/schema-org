<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ElementarySchoolType.
 * 
 * @method ElementarySchoolType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ElementarySchoolType setAddress(Property\AddressProperty $address)
 * @method ElementarySchoolType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method ElementarySchoolType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ElementarySchoolType setAlumni(Property\AlumniProperty $alumni)
 * @method ElementarySchoolType setAreaServed(Property\AreaServedProperty $areaServed)
 * @method ElementarySchoolType setAward(Property\AwardProperty $award)
 * @method ElementarySchoolType setBrand(Property\BrandProperty $brand)
 * @method ElementarySchoolType setContactPoint(Property\ContactPointProperty $contactPoint)
 * @method ElementarySchoolType setDepartment(Property\DepartmentProperty $department)
 * @method ElementarySchoolType setDescription(Property\DescriptionProperty $description)
 * @method ElementarySchoolType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ElementarySchoolType setDissolutionDate(Property\DissolutionDateProperty $dissolutionDate)
 * @method ElementarySchoolType setDuns(Property\DunsProperty $duns)
 * @method ElementarySchoolType setEmail(Property\EmailProperty $email)
 * @method ElementarySchoolType setEmployee(Property\EmployeeProperty $employee)
 * @method ElementarySchoolType setEvent(Property\EventProperty $event)
 * @method ElementarySchoolType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method ElementarySchoolType setFounder(Property\FounderProperty $founder)
 * @method ElementarySchoolType setFoundingDate(Property\FoundingDateProperty $foundingDate)
 * @method ElementarySchoolType setFoundingLocation(Property\FoundingLocationProperty $foundingLocation)
 * @method ElementarySchoolType setFunder(Property\FunderProperty $funder)
 * @method ElementarySchoolType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method ElementarySchoolType setHasOfferCatalog(Property\HasOfferCatalogProperty $hasOfferCatalog)
 * @method ElementarySchoolType setHasPOS(Property\HasPOSProperty $hasPOS)
 * @method ElementarySchoolType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ElementarySchoolType setImage(Property\ImageProperty $image)
 * @method ElementarySchoolType setIsicV4(Property\IsicV4Property $isicV4)
 * @method ElementarySchoolType setLegalName(Property\LegalNameProperty $legalName)
 * @method ElementarySchoolType setLeiCode(Property\LeiCodeProperty $leiCode)
 * @method ElementarySchoolType setLocation(Property\LocationProperty $location)
 * @method ElementarySchoolType setLogo(Property\LogoProperty $logo)
 * @method ElementarySchoolType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ElementarySchoolType setMakesOffer(Property\MakesOfferProperty $makesOffer)
 * @method ElementarySchoolType setMember(Property\MemberProperty $member)
 * @method ElementarySchoolType setMemberOf(Property\MemberOfProperty $memberOf)
 * @method ElementarySchoolType setNaics(Property\NaicsProperty $naics)
 * @method ElementarySchoolType setName(Property\NameProperty $name)
 * @method ElementarySchoolType setNumberOfEmployees(Property\NumberOfEmployeesProperty $numberOfEmployees)
 * @method ElementarySchoolType setOwns(Property\OwnsProperty $owns)
 * @method ElementarySchoolType setParentOrganization(Property\ParentOrganizationProperty $parentOrganization)
 * @method ElementarySchoolType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ElementarySchoolType setPublishingPrinciples(Property\PublishingPrinciplesProperty $publishingPrinciples)
 * @method ElementarySchoolType setReview(Property\ReviewProperty $review)
 * @method ElementarySchoolType setSameAs(Property\SameAsProperty $sameAs)
 * @method ElementarySchoolType setSeeks(Property\SeeksProperty $seeks)
 * @method ElementarySchoolType setSponsor(Property\SponsorProperty $sponsor)
 * @method ElementarySchoolType setSubOrganization(Property\SubOrganizationProperty $subOrganization)
 * @method ElementarySchoolType setTaxID(Property\TaxIDProperty $taxID)
 * @method ElementarySchoolType setTelephone(Property\TelephoneProperty $telephone)
 * @method ElementarySchoolType setUrl(Property\UrlProperty $url)
 * @method ElementarySchoolType setVatID(Property\VatIDProperty $vatID)
 */
class ElementarySchoolType extends EducationalOrganizationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ElementarySchool';
	}
}