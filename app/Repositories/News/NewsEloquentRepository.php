<?php
/**
 * Created by PhpStorm.
 * User: LeThanh
 * Date: 10/19/2017
 * Time: 9:55 PM
 */

namespace App\Repositories\News;
use App\Repositories\EloquentRepository;
use App\Category;
use App\ChildCate;
use App\News;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class NewsEloquentRepository extends EloquentRepository implements NewsRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\News::class;
    }

    public function getDataMenu(){
        $cate= DB::table('categories')
            ->leftjoin('child_cates','categories.id','=','child_cates.cateParen_id')
            ->select('name','lvl','alias','metaName','description','weight','child_cates.cateParen_id')
            ->get();
        return $cate;
    }

    public function getCreateAndEdit($inputFile, $id=0){
        if($id==0){
            $news= new News();
            $news->title= $inputFile['txtName'];
            $news->Cate_id= $inputFile['slMenu'];
            if (!isset($inputFile['txtMetatitle'])){
                $news->metaTitle= $inputFile['txtName'];
            }else{
                $news->metaTitle= $inputFile['txtMetatitle'];
            }
            $news->alias= changeTitle($inputFile['txtName']);
            $news->summary= $inputFile['txtSummary'];
            if (!isset($inputFile['txtDescription'])){
                $news->description= $inputFile['txtSummary'];
            }else{
                $news->description= $inputFile['txtDescription'];
            }
            $news->content= $inputFile['txtContent'];
            $news->hot= $inputFile['checkHot'];
            $news->feature= $inputFile['checkFeature'];
            $news->active= $inputFile['checkActive'];
            $news->sort= $inputFile['txtWeight'];
            if (Input::hasFile('fileImg')){
                $file= Input::file('fileImg');
                $name= $file->getClientOriginalName();
                $file->move('uploads/thumbnail',$name);
                $news->images=$name;
            }
            var_dump($news);die();
            //return redirect()->route('news.index');

        }
    }

    public function getDelete($id)
    {
        $categet= ChildCate::where('lvl',$id)->count();
        if($categet==0){
            $getid= Category::find($id);
            $getid->delete();
            return redirect()->route('category.index')->with('thongbao','Xóa thành công');
        }else{
            return redirect()->route('category.index')->with('thongbaoloi','Đây là thư mục cha không thể xóa được');
        }
    }
}