<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Http\Requests\BackEnd\Videos\Store;
use App\Http\Requests\BackEnd\Videos\Update;



class Videos extends BackEndController
{
    use CommentTrait;
    
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

    protected function with(){
        return ['cat' , 'user'];
    }

    protected function append(){

        $array = [
            'categories' => Category::get(),
            'skills' => Skill::get(),
            'tags' => Tag::get(),
            'selectedSkills' => [],
            'selectedTags' => [],
            'comments' => [],
        ];

        if (request()->route()->parameter('video')) {
           $array['selectedTags'] = $this->model->find(request()->route()->parameter('video'))
           ->tags()->pluck('tags.id')->toArray();

            $array['selectedSkills'] = $this->model->find(request()->route()->parameter('video'))
           ->skills()->pluck('skills.id')->toArray();

           $array['comments'] = $this->model->find(request()->route()->parameter('video'))
           ->comments()->orderby('id', 'desc')->with('user')->get();

        }

        return $array;
    }



    public function store(Store $request){

        $file = $request->file('image');
        $fileName = time().str_random('10').$file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $fileName);

        $requestArray = ['user_id' => auth()->user()->id, 'image' => $fileName] + $request->all();
        $row = $this->model->create($requestArray);

        if (isset($requestArray['skills']) && !empty($requestArray['skills'])) {
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags']) && !empty($requestArray['tags'])) {
            $row->tags()->sync($requestArray['tags']);
        }


        return redirect()->route('videos.index');
    }


    public function update(Update $request, $id){
        $requestArray = $request->all();

        if($request->hasFile('image')){

            $file = $request->file('image');
            $fileName = time().str_random('10').$file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $requestArray = ['image' => $fileName] + $requestArray;
        }

        $row = $this->model->findOrfail($id);
        $row->update($requestArray);

        if (isset($requestArray['skills']) && !empty($requestArray['skills'])) {
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags']) && !empty($requestArray['tags'])) {
            $row->tags()->sync($requestArray['tags']);
        }


        return redirect()->route('videos.index');
    }
}
