<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Task;
use CodeIgniter\HTTP\ResponseInterface;

class TaskController extends BaseController
{
    public function index()
    {
        $model = model(Task::class);
        $TaskCompleted = $model->where("status",true)->findAll();
        $TaskNotCompleted= $model->where("status",false)->findAll();
        return view('index', ['TaskCompleted'=>$TaskCompleted,"TaskNotCompleted"=>$TaskNotCompleted]);
    }
    public function create()
    {
        $post = $this->request->getPost(["title","description"]);
        if(!$this->validateData($post,[
            "title"=>"required|min_length[2]|max_length[100]",
            "description"=>"required|min_length[2]|max_length[255]"
        ])){
            return redirect()->back()->withInput();
        }
        $data=$this->validator->getValidated();
        $model = model(Task::class);
        $model->save([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);
        return redirect()->to(site_url("/"));
    }
    public function updateTaskStatus($id) {
        $model = model(Task::class);
        $data = $model->find($id);
        $data["status"]=!$data["status"];
        $model->update($id,$data);
        return redirect()->to(site_url("/"));
    }
    public function deleteTask($id){
        $model = model(Task::class);
        $model->delete($id);
        return redirect()->to(site_url("/"));
    }
}
