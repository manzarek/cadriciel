<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts  = ForumPost::select()
            ->orderBy('id', 'ASC')
            ->get();
 
        return view('forum.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->language == "french") {

            // Validation du français seulement
            $request->validate([
                'titleFrench' => 'required',
                'bodyFrench' => 'required'
            ]);

            $newPost = ForumPost::create([
                'title_fr' => $request->titleFrench,
                'body_fr' => $request->bodyFrench,
                'user_id' => Auth::user()->id,
                'language_id' => 2,
            ]);
        }
        elseif($request->language == "english") {
            
            // Validation de l'anglais seulement
            $request->validate([
                'titleEnglish' => 'required',
                'bodyEnglish' => 'required'
            ]);

            $newPost = ForumPost::create([
                'title' => $request->titleEnglish,
                'body' => $request->bodyEnglish,
                'user_id' => Auth::user()->id,
                'language_id' => 1,
            ]);
        }
        elseif($request->language == "bilingual") {
            
            // Validation des deux langues
            $request->validate([
                'titleEnglish' => 'required',
                'bodyEnglish' => 'required',
                'titleFrench' => 'required',
                'bodyFrench' => 'required'
            ]);

            $newPost = ForumPost::create([
                'title' => $request->titleEnglish,
                'body' => $request->bodyEnglish,
                'title_fr' => $request->titleFrench,
                'body_fr' => $request->bodyFrench,
                'user_id' => Auth::user()->id,
                'language_id' => 3,
            ]);
        }
        else {
            $request->validate([
                'language' => 'required'
            ]);
        }

        return redirect(route('forum.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(ForumPost $forumPost)
    {
        $user_id = Auth::user()->id;
        return view ('forum.show', ['forumPost' => $forumPost, 'user_id'=> $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumPost $forumPost)
    {
        $user_id = Auth::user()->id;
        if ($user_id != $forumPost->user_id) {
            abort(403);
        }

        return view('forum.edit', ['forumPost' => $forumPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost)
    {

        if ($request->language == "french") {

            // Validation du français seulement
            $request->validate([
                'titleFrench' => 'required',
                'bodyFrench' => 'required'
            ]);

            $forumPost->update([
                'title_fr' => $request->titleFrench,
                'body_fr' => $request->bodyFrench,
                'title' => null,
                'body' => null,
                'language_id' => 2,
            ]);
        }
        elseif($request->language == "english") {
            
            // Validation de l'anglais seulement
            $request->validate([
                'titleEnglish' => 'required',
                'bodyEnglish' => 'required'
            ]);

            $forumPost->update([
                'title_fr' => null,
                'body_fr' => null,
                'title' => $request->titleEnglish,
                'body' => $request->bodyEnglish,
                'language_id' => 1,
            ]);
        }
        elseif($request->language == "bilingual") {
            
            // Validation des deux langues
            $request->validate([
                'titleEnglish' => 'required',
                'bodyEnglish' => 'required',
                'titleFrench' => 'required',
                'bodyFrench' => 'required'
            ]);

            $forumPost->update([
                'title_fr' => $request->titleFrench,
                'body_fr' => $request->bodyFrench,
                'title' => $request->titleEnglish,
                'body' => $request->bodyEnglish,
                'language_id' => 3,
            ]);
        }

        return redirect(route('forum.show', $forumPost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        $user_id = Auth::user()->id;
        if ($user_id != $forumPost->user_id) {
            abort(403);
        }

        $forumPost->delete();

        return redirect(route('forum.index'));
    }
}
