<?php

use App\Models\Employer;
use App\Models\Job;

test('it belongs to an employer', function () {
    //Arrange - Create the world in which the test will run
    $employer = Employer::factory()->create();
    $job = Job::factory()->create(['employer_id' => $employer->id]);
    //Act - Perform the test/action
    //Assert - Check if the result is what you expected
    expect($job->employer->is($employer))->toBeTrue();

    it('can have tags', function () {
        //AAA
        //Arrange the world
        $job = Job::factory()->create();
        //Act
        $job->tag('');
        //Assert
        expect($job->tags)->toHaveCount(1);
    });
});
