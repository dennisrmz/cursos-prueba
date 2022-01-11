<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::included()->sort()->getOrPaginate();
        return response()->json($courses, 201);
        /* return CourseResource::collection($courses); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course = Course::create($data);        
        /* return new CourseResource($course); */
        return response()->json($course, 201);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $course = Course::included()->findOrFail($id);

        /* return new CourseResource($course); */

        return response()->json($course, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);

        $course->update($data);

        /* return new CourseResource($course); */
        return response()->json($course, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json(null, 204);
    }
}
