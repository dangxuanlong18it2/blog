<?php


namespace App\Http\Services;


class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('tf_post_image')) {
            try {
                $name = $request->file('tf_post_image')->getClientOriginalName();
                $pathFull = 'uploads/' . date("Y/m/d");

                $request->file('tf_post_image')->storeAs(
                    'public/' . $pathFull, $name
                );

                return '/storage/' . $pathFull . '/' . $name;
            } catch (Exception $error) {
                return false;
            }
        }
    }
}