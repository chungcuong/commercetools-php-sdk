Feature: I want to search products

  Scenario: Search filters send as POST and parameters as GET
    Given i want to search products
    And filter "name" with value "Peter"
    And limit the result to 1
    Then the path should be "product-projections/search?limit=1"
    And the method should be "POST"
    And the body should be
    """
    filter=name%3A%22Peter%22
    """

  Scenario: Search products with limit
    Given i want to search products
    And limit the result to "10"
    Then the path should be "product-projections/search?limit=10"
    And the method should be "POST"

  Scenario: Search products with offset
    Given i want to search products
    And offset the result with "10"
    Then the path should be "product-projections/search?offset=10"
    And the method should be "POST"

  Scenario: Search products sorted
    Given i want to search products
    And sort them by "name"
    Then the path should be "product-projections/search?sort=name"
    And the method should be "POST"

  Scenario: Search parameters should be sorted
    Given i want to search products
    And sort them by "name"
    And offset the result with "10"
    Then the path should be "product-projections/search?offset=10&sort=name"
    And the method should be "POST"
