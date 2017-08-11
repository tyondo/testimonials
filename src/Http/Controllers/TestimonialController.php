<?php

namespace Tyondo\Testimonial\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Tyondo\Aggregator\Models\Photo;
use Tyondo\Testimonial\Models\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*if(Auth::user()->can('access.all.posts')){

        }*/
        //$posts = Post::paginate(2);
        $testimony= Testimonial::all();

       //  return $testimony;
        return view(config('ttestimonial.views.back-end.testimonials.index'), compact('testimony'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*if(Auth::user()->can('create.posts')){

        }*/
        // $categories = Team::pluck('name', 'id')->all();
        return view(config('ttestimonial.views.back-end.testimonials.create'), compact(''));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*if(Auth::user()->can('store.posts')){

        }*/

        $testimonyData = [
            'user_id' => isset(Auth::user()->id)?Auth::user()->id : 1,
            'name' => $request->input('name'),
            'testimony_slug' => str_slug($request->input('name')) .'-'.time(),
            'testimony' => $request->input('testimony'),
            'location' => $request->input('location'),
            'testimony_image' => $request->input('testimony_image'),
            'testimony_status' => $request->input('testimony_status'),
            'activity' => $request->input('activity'),
        ];
        Testimonial::create($testimonyData);

        Session::flash('message', 'Testimony Created');
        return redirect()->route('tyondo.testimonial.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*if(Auth::user()->can('access.single.posts')){

        }*/
        $testimony = Testimonial::findOrFail($id);
        return view(config('ttestimonial.views.back-end.testimonials.show'), compact('testimony'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'here here';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
