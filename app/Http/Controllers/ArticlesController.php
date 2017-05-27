<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Tag;
use Illuminate\Support\Facades\Auth; //modelo

class ArticlesController extends Controller
{


    public function __construct()
    {
        //con esto ocupariamos el middleware de autenticación para todos los metodos
        //Con only especificamos que solo en la función create ['only' => 'create']
        //tambien podemos usar except
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index()
    {
        //$articles = Article::all(); Muestra todos los articulos de la base de datos
        //$articles = Article::latest('published_at')->get(); //Muestra los datos ordenados por el campo especificado

        $articles = Article::latest('published_at')->published()->get(); //obtenemos el ultimo articulo con el query latest y vamos a la funcion scopePublished del modelo

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {

        $findedArticle = Article::findOrFail($id);

//        if (is_null($findArticle)){
//
//            abort('404');
//        }

        return view('articles.show', compact('findedArticle'));

    }

    public function create()
    {
        //$articles = Article::all();

        $tags = Tag::pluck('name', 'id');

        return view('articles.create', compact('tags'));
    }

    public function store(ArticleRequest $request)
    {

        //lineas para utilizar la información del usuario logeado
        //Es para decirle a laravel que el articulo que se creo pertenence al usuario logeado
        //$article = new Article ($request->all());
        $article =Auth::user()->articles()->create($request->all());

        $article->tags()->attach($request->input('tag_list'));
        //para enviar mensajes opcioón 1
        //session()->flash('flash_message', 'Your article has been created');

        //validation es primero


        //$input = Request::all();
        //$input['published_at'] = Carbon::now();

        //Article::create(Request::all());

        /* Ya no necesitariamos esta linea, pues se ocupa la de save*/
        //Article::create($request->all());


        return redirect('articles')->with([
            //opción 2
            'flash_message' => 'Your article has been created'

        ]);


    }

    public function edit($id)
    {
        $tags = Tag::pluck('name', 'id');

        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article', 'tags'));

    }

    public function update($id, ArticleRequest $request)
    {
//        Update se ejecuta conado despues de llamar a la vista edit y cuando se guarda la info
        $article = Article::findOrFail($id);
        $article->tags()->sync($request->input('tag_list'));
        $article->update($request->all());
        return redirect('articles');
        //return view('articles.edit', compact('article'));

    }


}
