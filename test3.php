<?php

use Test3\Applicant;
use Test3\Employee;
use Test3\Position;

require "autoloader.php";


$applicant = new Applicant("Applicant Name", "Applicant CV Text", new DateTime());
$employee = new Employee("Employee Name", "Employee CV Text", new DateTime(), new Position("Test position"), new DateTime());

print $applicant . "\n";
print $employee . "\n";

assert($applicant->getAcceptedAt() === null);
assert($applicant->getPosition() === null);

assert($employee->getAcceptedAt() !== null);
assert($employee->getPosition() !== null);