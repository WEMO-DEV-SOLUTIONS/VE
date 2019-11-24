<?php

namespace App\Http\Controllers\forum;

use App\forumCategory;
use App\forumMessage;
use App\forumTopic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('forum_topic.index')->with([
            'topics'=>forumTopic::all(),
            'categories'=>forumCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'user_id'=> 1 // Auth::user()->id
        ]);
        $this->validate($request,forumTopic::rules());
        forumTopic::create($request->all());
        return back()->with('success','Sujet enregistrer avec success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(forumTopic $topic)
    {
        return view('forum_topic.show')->with([
            'topic'=> $topic,
            'messages'=>forumMessage::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param forumTopic $topic
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, forumTopic $topic)
    {
        $request->merge([
            'user_id'=> 1 // Auth::user()->id
        ]);
        $this->validate($request,forumTopic::rules());
        $topic->update($request->all());
        return back()->with('success','Sujet enregistrer avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param forumTopic $topic
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(forumTopic $topic)
    {
        $topic->delete();
        return back()->with('success','Sujet supprimer avec success');
    }
}
