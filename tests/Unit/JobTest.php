<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_belongs_to_an_employer(): void
    {
        // Arange
        // Act
        // Assert

        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id
        ]);

        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        // Arange
        // Act
        // Assert

        $job = Job::factory()->create();

        $job->tag('Frontend');

        $this->assertCount(1, $job->tags);
    }
}
