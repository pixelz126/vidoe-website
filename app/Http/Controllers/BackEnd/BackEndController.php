<?php
namespace App\Http\Controllers\BackEnd;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BackEndController extends Controller{

    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(){
        $rows = $this->model;
        $rowa = $this->filter($rows);
        $with = $this->witth();
        if (!empty($with)) {
            $rows = $rows->with($with);
        }
        $rows = $rows->paginate(10);

        $moduleName = $this->pluralModelName();
        $sModuleName = $this->getModelName();
        $routeName = $this->getClassNameFromModel();
        $pageTitle = $moduleName .' '. "Control";
        $pageDesc = "Here You Can Add - Edit - Delete" .' '. $moduleName;


        return view('back-end.'.$this->getClassNameFromModel().'.index', compact(
            'rows',
            'moduleName',
            'pageTitle',
            'pageDesc',
            'sModuleName',
            'routeName'
        ));
    }

    public function create(){

            $moduleName = $this->getModelName();
            $pageTitle = "Create"  .' '. $moduleName ;
            $pageDesc = "Here You Can Add" .' '. $moduleName;
            $folderName = $this->getClassNameFromModel();
            $routeName = $folderName;
            $append = $this->append();
        return view('back-end.'.$folderName.'.create', compact(
            'moduleName',
            'pageTitle',
            'pageDesc',
            'folderName',
            'routeName'



        ))->with($append);
    }

    public function edit($id){
        $row = $this->model->findOrfail($id);

            $moduleName = $this->getModelName();
            $pageTitle =  "Edit".' '.$moduleName;
            $pageDesc = " Here You Can Edit" .' '. $moduleName;
            $folderName = $this->getClassNameFromModel();
            $routeName = $folderName;
            $append = $this->append();

        return view('back-end.'.$folderName.'.edit', compact(
            'row',
            'moduleName',
            'pageTitle',
            'pageDesc',
            'folderName',
            'routeName'
        ))->with($append);
    }

    public function destroy($id){
        $row = $this->model->findOrfail($id)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }

    protected function filter($rows){
        return $rows;
    }

    protected function witth(){
        return [];
    }



    protected function getClassNameFromModel(){
        return strtolower($this->pluralModelName());
    }

    protected function pluralModelName(){
        return str_plural($this->getModelName());
    }

    protected function getModelName(){
        return class_basename($this->model);
    }

    protected function append(){
        return [];
    }
}
