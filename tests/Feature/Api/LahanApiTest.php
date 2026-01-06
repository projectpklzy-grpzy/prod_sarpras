<?php

namespace Tests\Feature\Api;

use App\Models\Lahan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LahanApiTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();
        
        // Create a test user
        $this->user = User::factory()->create();
    }

    /** @test */
    public function it_can_get_all_lahan()
    {
        // Create test data
        Lahan::factory()->count(3)->create();

        $response = $this->actingAs($this->user, 'api')
                         ->getJson('/api/v1/lahan');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'code',
                     'data' => [
                         '*' => [
                             'id',
                             'nama_lahan',
                             'luas_lahan',
                             'kepemilikan',
                             'harga_perolehan_lahan',
                             'status'
                         ]
                     ]
                 ]);
    }

    /** @test */
    public function it_can_create_lahan()
    {
        $lahanData = [
            'nama_lahan' => 'Test Lahan',
            'luas_lahan' => 1000.50,
            'kepemilikan' => 'Milik Sendiri',
            'harga_perolehan_lahan' => 5000000.00
        ];

        $response = $this->actingAs($this->user, 'api')
                         ->postJson('/api/v1/lahan', $lahanData);

        $response->assertStatus(201)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'code',
                     'data' => [
                         'id',
                         'nama_lahan',
                         'luas_lahan',
                         'kepemilikan',
                         'harga_perolehan_lahan'
                     ]
                 ]);

        $this->assertDatabaseHas('tbsar_lahan', [
            'nama_lahan' => 'Test Lahan',
            'luas_lahan' => 1000.50
        ]);
    }

    /** @test */
    public function it_validates_required_fields_when_creating_lahan()
    {
        $response = $this->actingAs($this->user, 'api')
                         ->postJson('/api/v1/lahan', []);

        $response->assertStatus(422)
                 ->assertJsonValidationErrors([
                     'nama_lahan',
                     'luas_lahan',
                     'kepemilikan',
                     'harga_perolehan_lahan'
                 ]);
    }

    /** @test */
    public function it_can_show_specific_lahan()
    {
        $lahan = Lahan::factory()->create();

        $response = $this->actingAs($this->user, 'api')
                         ->getJson("/api/v1/lahan/{$lahan->idsp_lahan}");

        $response->assertStatus(200)
                 ->assertJson([
                     'status' => 'success',
                     'data' => [
                         'id' => $lahan->idsp_lahan,
                         'nama_lahan' => $lahan->nama_lahan
                     ]
                 ]);
    }

    /** @test */
    public function it_returns_404_for_non_existent_lahan()
    {
        $response = $this->actingAs($this->user, 'api')
                         ->getJson('/api/v1/lahan/999');

        $response->assertStatus(404);
    }

    /** @test */
    public function it_can_update_lahan()
    {
        $lahan = Lahan::factory()->create();
        
        $updateData = [
            'nama_lahan' => 'Updated Lahan Name',
            'luas_lahan' => 2000.75,
            'kepemilikan' => 'Sewa',
            'harga_perolehan_lahan' => 10000000.00
        ];

        $response = $this->actingAs($this->user, 'api')
                         ->putJson("/api/v1/lahan/{$lahan->idsp_lahan}", $updateData);

        $response->assertStatus(200);

        $this->assertDatabaseHas('tbsar_lahan', [
            'idsp_lahan' => $lahan->idsp_lahan,
            'nama_lahan' => 'Updated Lahan Name',
            'luas_lahan' => 2000.75
        ]);
    }

    /** @test */
    public function it_can_delete_lahan()
    {
        $lahan = Lahan::factory()->create();

        $response = $this->actingAs($this->user, 'api')
                         ->deleteJson("/api/v1/lahan/{$lahan->idsp_lahan}");

        $response->assertStatus(200);

        $this->assertSoftDeleted('tbsar_lahan', [
            'idsp_lahan' => $lahan->idsp_lahan
        ]);
    }
}