<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use Validator;
use JWTAuth;

class MoviesController extends Controller
{
    /**
    *  Função para listar todos os filmes cadastrados no banco de dados
    *  
    *  @return json com os resultados
    */
    public function index(MovieRequest $request){
        $movies = Movie::all();
        return response()->json($movies);
    }

    /**
    *  Função para listar os dados do filme
    *
    *  @param $id
    *  @return json com os dados do filme
    */
    public function show($id){
        
        $movie = Movie::find($id);
        if(!$movie){
            return response()->json([
                'message' => 'Movie not found',
            ], 404);
        }
        return response()->json($movie);
    }
    /**
    *  Função para cadastrar o filme através da API
    *
    *  @param Request $request
    *  @return json com os dados do filme
    */
    public function store(Request $request){
        $movie = new Movie();
        $movie->fill($request->all());
        $movie->save();
        return response()->json($movie, 201);
    }
}
