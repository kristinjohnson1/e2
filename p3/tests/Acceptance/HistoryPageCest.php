<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HistoryPageCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        # Act
        $I->amOnPage('/game?id=1');

        # Assert the correct title is set on the page
        $I->seeInTitle('Round 1');

        # Assert the existence of certain text on the page
        $I->see('Player 1');

        // # Assert the existence of a certain element on the page
        // $I->seeElement('.product-thumb');

        // # Assert the existence of text within a specific element on the page
        // $I->see('$4.99', '.product-price');
    }
}
