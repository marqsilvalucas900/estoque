<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;




Route::resource('produtos', ProdutoController::class);

/*
[3]: https://blog.debugeverything.com/pt/controllers-no-laravel-um-guia-completo-para-iniciantes/ ""


No Laravel, `Route::resource` é um comando que cria automaticamente várias rotas para ações comuns de CRUD (Create, Read, Update, Delete) em um controlador de recursos. Quando você usa `Route::resource('produtos', ProdutoController::class);`, está dizendo ao Laravel para gerar as seguintes rotas para o controlador `ProdutoController`:

```php
// Cria as rotas para 'index', 'create', 'store', 'show', 'edit', 'update' e 'destroy'
GET /produtos -> index
GET /produtos/create -> create
POST /produtos -> store
GET /produtos/{produto} -> show
GET /produtos/{produto}/edit -> edit
PUT/PATCH /produtos/{produto} -> update
DELETE /produtos/{produto} -> destroy
```

Cada uma dessas rotas é mapeada para um método correspondente no `ProdutoController`. Por exemplo, a rota `GET /produtos` é mapeada para o método `index()` que normalmente retorna uma lista de todos os produtos. A rota `GET /produtos/create` é mapeada para o método `create()`, que geralmente exibe um formulário para criar um novo produto.

Além disso, você pode especificar quais ações deseja incluir ou excluir usando as opções `only` e `except`¹[1]. Por exemplo:

```php
// Inclui apenas as rotas para 'index' e 'show'
Route::resource('produtos', ProdutoController::class, ['only' => ['index', 'show']]);

// Exclui as rotas para 'create' e 'edit'
Route::resource('produtos', ProdutoController::class, ['except' => ['create', 'edit']]);
```

Isso simplifica a criação de rotas para um recurso, seguindo as convenções RESTful e evitando a necessidade de definir manualmente cada rota individualmente.


*/ 
// php artisan make:model Teste -mfscr 
// php artisan make:seeder CategoriasSeeder
// php artisan make:factory CategoriaFactory
// php artisan db:seed
// php artisan make:seeders UsersSeeder
// php artisan make:model Categoria -m -cr
// php artisan make:model Categoria --migration --controller --resource cria um controller padrão
// 
// php artisan make:model Categoria --migration
// php artisan make:migration produtos --create=produtos cria uma tabela reduzida
// php artisan make:migration create_produtos_table cria uma tabela pre-configurada se não for escrito o create_***_table cria uma tabela vazia
// php artisan migrate:model nome_do_model
// cria tabela predefinida
// php artisan migrate cria as tabelas
// php artisan migrate:rollback desfaz a migração recente
// o  comando hp artisan route:list lista as rotas da aplicação
//  o comando php artisan make:controller ProdutoController --resource
//  pode ser usado para criar controllers
// php artisan route:list
// Route::get('/',[ProdutoController::class, 'index'])->name('produto.index');

// Route::get('/produto/{id?}',[ProdutoController::class,'show'])->name("produto.show");



//Tambem poderia ser assim:
//Route::prefix('admin.')->group(function(){
// Route::get('/', function () {
//     return redirect()->route('admin.clientes');
// });

// Route::group([
//     'prefix'=> 'admin',
//     'as' => 'admin.'
// ], function(){
    
//     Route::get('dashboard',function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('users',function(){
//         return "users";
//     })->name('users');
    
//     Route::get('clientes',function(){
//         return "clientes";
//     })->name('clientes');
// });





// Route::name('admin.')->group(function(){
    
//     Route::get('admin/dashboard',function(){
//         return "dashboard";
//     })->name('dashboard');
    
//     Route::get('admin/users',function(){
//         return "users";
//     })->name('users');
    
//     Route::get('admin/clientes',function(){
//         return "clientes";
//     })->name('clientes');
// });


// Route::get('/empresa', function () {
//     return view('site/empresa');
// });

// Route::any('/any',function(){
//     return "Permite todo tipo de acesso http (put, delete, post, get)";
// });

// Route::match(['get','post'], '/match',function(){
//     return "Permite apenas acessos definidos";
// });

// Route::get('/produto/{id}/{cat?}',function($id,$cat=''){
//     return "id do produto é: ".$id."<br>"."A categoria é:".$cat;
// });


// Route::get('/sobre',function(){
//     return redirect('/empresa');
// });


// Route::redirect('/sobre','/empresa');
// Route::view('/empresa','site/empresa');

// Route::get('/timesnownews',function(){
//     return view('news');
// })->name("noticias");

// Route::get('/novidades',function(){
//     return redirect()->route("noticias");
// });


//Route::get('/produtos', [ProdutoController::class, 'lista']); // Corrigindo o uso do controlador


// malditos gnomos! Eu não sei o que está acontecendo, meu amigo.
// Ontem de noite minha horta foi completamente destruída por uma horda  
// de gnomos em plena madrugada. Desde quando gnomos roubam coisas, Lucio?

