<?php

namespace App\Http\Controllers;

use App\forumTopic;
use App\News;
use App\Notifications\NewNotification;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
<<<<<<< HEAD
        $news = News::all()->where('auteur', '=', auth()->user()->name ?? session('comite_user.nom_comite') );
=======
        $news = News::all()->where('auteur', '=', auth()->user()->name ?? session('comite_user.nom_comite'));
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
        return view('News.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'content' => 'required',
            'image' => "image|max:2048",
            'auteur' => 'required'
        ]);
           $new = $request->file('image');
           $imagedata= file_get_contents($new->getRealPath());
           $base64= base64_encode($imagedata);
           $act = new News([
               'subject' => $request->get('subject'),
               'content' => $request->get('content'),
               'image' =>  $base64,
               'auteur' =>  $request->get('auteur'),
           ]);
           $act->save();
      return redirect()->route('news.index')->with('success', 'information ajouter avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param News $news
     * @return void
     */
    public function edit(Request $request, News $news)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return Response
     */
    public function update(Request $request, News $news)
    {
        $data =  $request->validate([
            'subject' => 'required',
            'content' => 'required',
            'image' => "image|max:2048",
            'auteur' => 'required'
        ]);
        $image_file = $request->file('image');
        if ( !empty($image_file) ) {
            $imagedata= file_get_contents($image_file->getRealPath());
            $base64 = base64_encode($imagedata);
            $news->image = $base64;
        }

        $news->update([
            'subject' => $request->get('subject'),
            'content' => $request->get('content'),
            'auteur' =>  $request->get('auteur'),
        ]);
       return back()->with('success', 'information modifier avec succes');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return Response
     * @throws Exception
     */
    public function destroy($id)
    {
        News::findorfail($id)->delete();
        return redirect()->route('news.index')->with('success', 'supprimer avec success');
    }
}
