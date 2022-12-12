<?php

namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HistoryPageCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        # Game 1 page
        $I->amOnPage('/game?id=1');

        # Look for round #
        $I->seeInTitle('Round 1');

        # Check for 'player 1'
        $I->see('Player 1');

        # check for results class
        $I->seeElement('.results');

        # Check for redirect class in <a>
        $I->seeElement('.redirect');
    }

    public function home(AcceptanceTester $I)
    {
        # Home page
        $I->amOnPage('/');
        # Check for icon 
        $I->seeElement('.icon');
        # Check for form
        $I->seeElement('form');
        # Check for redirect class in <a>
        $I->seeElement('.redirect');
    }
}
