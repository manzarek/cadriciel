<?php

namespace App\Http\Controllers;

use App\Models\FilePost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FilePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = session('locale');

          $posts = FilePost::select('file_posts.*', 'users.name as name')
          ->join('users', 'users.id', '=','user_id')
          ->orderBy('id', 'ASC')
          ->paginate(5);

        return view('files.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('files.create');
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
                'file' => 'required|mimes:zip,doc,pdf'
            ]);

            $newFilename = $this->moveFile($request);

            $newPost = FilePost::create([
                'title_fr' => $request->titleFrench,
                'user_id' => Auth::user()->id,
                'filename' =>  $newFilename,
                'language_id' => 2,
            ]);
        }
        elseif($request->language == "english") {
            
            // Validation de l'anglais seulement
            $request->validate([
                'titleEnglish' => 'required',
                'file' => 'required|mimes:zip,doc,pdf'
            ]);

            $newFilename = $this->moveFile($request);

            $newPost = FilePost::create([
                'title' => $request->titleEnglish,
                'user_id' => Auth::user()->id,
                'filename' => $newFilename,
                'language_id' => 1,
            ]);
        }
        elseif($request->language == "bilingual") {
            
            // Validation des deux langues
            $request->validate([
                'titleEnglish' => 'required',
                'titleFrench' => 'required',
                'file' => 'required|mimes:zip,doc,pdf'
            ]);

            $newFilename = $this->moveFile($request);

            $newPost = FilePost::create([
                'title' => $request->titleEnglish,
                'title_fr' => $request->titleFrench,
                'user_id' => Auth::user()->id,
                'filename' => $newFilename,
                'language_id' => 3,
            ]);
        }
        else {
            $request->validate([
                'language' => 'required'
            ]);
        }

        return redirect(route('files.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FilePost  $filePost
     * @return \Illuminate\Http\Response
     */
    public function show(FilePost $filePost)
    {
        $user_id = Auth::user()->id;
        return view ('files.show', ['filePost' => $filePost, 'user_id'=> $user_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FilePost  $filePost
     * @return \Illuminate\Http\Response
     */
    public function edit(FilePost $filePost)
    {
        $user_id = Auth::user()->id;
        if ($user_id != $filePost->user_id) {
            abort(403);
        }

        return view('files.edit', ['filePost' => $filePost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FilePost  $filePost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FilePost $filePost)
    {
        if ($request->language == "french") {

            // Validation du français seulement
            $request->validate([
                'titleFrench' => 'required',
            ]);

            $filePost->update([
                'title_fr' => $request->titleFrench,
                'title' => null,
                'language_id' => 2,
            ]);
        }
        elseif($request->language == "english") {
            
            // Validation de l'anglais seulement
            $request->validate([
                'titleEnglish' => 'required',
            ]);

            $filePost->update([
                'title_fr' => null,
                'title' => $request->titleEnglish,
                'language_id' => 1,
            ]);
        }
        elseif($request->language == "bilingual") {
            
            // Validation des deux langues
            $request->validate([
                'titleEnglish' => 'required',
                'titleFrench' => 'required',
            ]);

            $filePost->update([
                'title_fr' => $request->titleFrench,
                'title' => $request->titleEnglish,
                'language_id' => 3,
            ]);
        }

        // Seulement si un nouveau fichier est uploadé
        if($request->hasFile('file')){ 
            $newFilename = $this->moveFile($request);
            $filePost->update([
                'filename' => $newFilename
            ]);
        }

        return redirect(route('files.show', $filePost));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FilePost  $filePost
     * @return \Illuminate\Http\Response
     */
    public function destroy(FilePost $filePost)
    {
        $user_id = Auth::user()->id;
        if ($user_id != $filePost->user_id) {
            abort(403);
        }

        $filePost->delete();

        return redirect(route('files.index'));
    }

    /**
     * Move the uploaded file to a public location
     * @param \Illuminate\Http\Request  $request
     * @return string the new filename
     */
    private function moveFile(Request $request) {

        $destinationFolder = 'uploads';
        $myFile = $request->file('file')->getClientOriginalName();
        $fileExtension = pathinfo($myFile, PATHINFO_EXTENSION);
        $fileName = pathinfo($myFile, PATHINFO_FILENAME);
        $newFilename =  $fileName . "_" . bin2hex(random_bytes(16)) . "." . $fileExtension;
        $request->file('file')->move(public_path($destinationFolder), $newFilename);

        return $newFilename;
    }
}
