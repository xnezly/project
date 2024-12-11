<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class TovarCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
    }

    // tests
    public function CreateTovar(AcceptanceTester $I)
    {
        $I->click('#CreateTovar');
        $I->fillField('name','qwerty');
        $I->fillField('price','21');
        $I->fillField('quantity','12');
        $I->click('.submit');
        $I->canSee('qwerty');
    }
    public function CreateEntrance(AcceptanceTester $I)
    {
        $I->click('#CreateEntrance');
        $I->selectOption('product', 'qwerty');
        $I->fillField('date','12-10-2024');
        $I->fillField('quantity','120');
        $I->click('.submit');
        $I->canSee('2024-10-12');
    }
    public function EditEntrance(AcceptanceTester $I)
    {
        $I->click('#EditEntrance');
        $I->selectOption('product', 'qwerty');
        $I->fillField('datetime','12-10-2024');
        $I->fillField('Quantity','125');
        $I->click('.submit');
        $I->canSee('125');
    }
    public function EditTovar(AcceptanceTester $I)
    {
        $I->click('#EditTovar');
        $I->fillField('price','30');
        $I->fillField('quantity','5');
        $I->click('.submit');
        $I->canSee('30');
        $I->canSee('5');
    }
    public function DeleteEntrance(AcceptanceTester $I)
    {
        $I->click('#DeleteEntrance');
        $I->dontSee('2024-11-12');
    }
    public function DeleteTovar(AcceptanceTester $I)
    {
        $I->click('#DeleteTovar');
        $I->dontSee('qwerty');
    }
}

