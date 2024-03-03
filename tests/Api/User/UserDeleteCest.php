<?php

namespace App\Tests\Api\User;

use App\Factory\UserFactory;
use App\Tests\Support\ApiTester;

class UserDeleteCest
{
    // tests
    public function UserCanDeleteHimself(ApiTester $I)
    {
        // 1. Arrange
        $user = UserFactory::createOne()->object();

        // 2. Act
        $I->amLoggedInAs($user);
        $I->sendDelete('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(204);
    }

    public function anonymousCantDeleteAnyUser(ApiTester $I)
    {
        // 1. Arrange
        UserFactory::createOne();

        // 2. Act
        $I->sendDelete('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(401);
    }

    public function authenticatedUserCantDeleteAnotherUser(ApiTester $I)
    {
        // 1. Arrange
        UserFactory::createOne();
        $user = UserFactory::createOne()->object();

        // 2. Act
        $I->amLoggedInAs($user);
        $I->sendDelete('/api/users/1');

        // 3. Assert
        $I->seeResponseCodeIs(403);
    }
}
