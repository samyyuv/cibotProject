<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use APP\Models\Categorie;
use APP\Models\Oeuvre;
use APP\Models\Collection;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;
use ReflectionClass;

class AppHttpControllersCategorieControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_categories()
    {
        // Créer des données factices à l'aide des factories
        $categorie1 = Categorie::factory()->create(['titre' => 'Painting']);
        $categorie2 = Categorie::factory()->create(['titre' => 'Sculpture']);

        $collection1 = Collection::factory()->create();

        $oeuvre1 = Oeuvre::factory()->create(['collection_id' => $collection1->id,'categorie_id' => $categorie1->id]);
        $oeuvre2 = Oeuvre::factory()->create(['collection_id' => $collection1->id,'categorie_id' => $categorie2->id]);
        $oeuvre3 = Oeuvre::factory()->create(['collection_id' => $collection1->id,'categorie_id' => $categorie1->id]); // Duplicate category

        $arts = collect([$oeuvre1, $oeuvre2, $oeuvre3]);

        // Obtenir une instance du contrôleur (remplacer par votre contrôleur réel)
        $controller = new \App\Http\Controllers\CategorieController();

        // Utiliser Reflection pour accéder à la méthode privée
        $reflection = new ReflectionClass($controller);
        $method = $reflection->getMethod('categories');
        $method->setAccessible(true);

        // Invoquer la méthode privée
        $result = $method->invokeArgs($controller, [$arts]);

        // Résultat attendu
        $expected = [
            [$categorie1->titre, $categorie1->id],
            [$categorie2->titre, $categorie2->id],
        ];

        // Vérifier que le résultat correspond à la sortie attendue
        $this->assertEquals($expected, $result);
    }
}
