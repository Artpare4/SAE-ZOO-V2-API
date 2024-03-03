<?php

namespace App\Tests\Api\User;

use App\Entity\User;
use App\Factory\UserFactory;
use App\Tests\Support\ApiTester;

class UserGetMeCest
{
    protected static function expectedProperties(): array
    {
        return [
            'id' => 'integer',
            'email' => 'string',
            'reservations' => 'array',
            'phoneUser' => 'string',
            'nomUser' => 'string',
            'pnomUser' => 'string',
        ];
    }

    public function anonymousMeIsUnauthorized(ApiTester $I): void
    {
        // 1. Arrange
        UserFactory::createOne();

        // 2. Act
        $I->sendGet('/api/me');

        // 3. Assert
        $I->seeResponseCodeIs(401);
    }

    public function authenticatedUserCanGetMe(ApiTester $I): void
    {
        // 1. Arrange
        $user = UserFactory::createOne()->object();
        $I->amLoggedInAs($user);
        UserFactory::createOne();

        // 2. Act
        $I->sendGet('/api/me');

        // 3. Assert
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseIsJson();
        $I->seeResponseIsAnEntity(User::class, '/api/me');
        $I->seeResponseIsAnItem(self::expectedProperties());

    }
}
