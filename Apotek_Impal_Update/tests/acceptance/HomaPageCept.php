<?php 

$I = new AcceptanceTester($scenario);
$I->wantTo('verify that the home page welcomes me');
$I->amOnPage('/');
$I->see('Username');