<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function dashboard()
    {
    $articles = Article::latest()->take(2)->get();
    return view('dashboard', compact('articles'));
    }

    public function create() {
        $articles = Article::paginate(3); // Ambil semua artikel dari database
        return view('article.Create_Article', compact('articles')); // Kirim variabel $articles ke view
    }

    public function store(Request $request) {
        // Validasi input
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'title' => 'required|max:255',
            'category' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        $path = $request->file('photo')->storeAs('image', $request->file('photo')->getClientOriginalName(),
        'public');

        Article::create([
            'photo' => $path,
            'title' => $validatedData['title'],
            'category' => $validatedData['category'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('articles.create')->with('success', 'Article created successfully.'); // Kembali ke halaman artikel
    }

    public function delete($id){
        $data = Article::find($id);

        if($data){
            $data->delete();
            return redirect()->route('articles.create')->with('success', 'Article deleted.');
        }
    }

    public function index(Request $request) {
        $search = $request->input('search');

        // Query untuk mendapatkan data movie yang relevan dengan pencarian
        $articles = Article::query()
            ->when($search, function ($query, $search) {
                return $query
                    ->where('title', 'like', "%{$search}%");
            })
            ->paginate(4);
            
        return view('article.article', compact('articles'));
    }

    public function update(Request $request, Article $articles, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'title' => 'required|max:255',
            'category' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        $articles = Article::findOrFail($id);
        $articles->title  = $request->title;
        $articles->category = $request->category;
        $articles->content = $request->content;


        if($request->hasFile('photo')){
                if ($articles->photo) {
                    Storage::delete($articles->photo);
            }
            $path = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $path;
        }

        $articles->save();

        return redirect()->route('articles.create')->with('success', 'Data berhasil diperbarui !');
    }
}