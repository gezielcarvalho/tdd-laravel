<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Account;

class AccountTest extends TestCase
{

    public function test_getDepositFeePercentage_Should_Return_ExpectedValue(){
        // Arrange
        $account = new Account;
        $expectedValue = 0.02;
        // Act
        $testResultValue = $account->getDepositFee();
        // Assert
        $this->assertEquals($expectedValue,$testResultValue);
    }
}
