<?php
/**
 * Created by PhpStorm.
 * User: LeThanh
 * Date: 10/19/2017
 * Time: 9:55 PM
 */

namespace App\Repositories\Tags;
use App\Repositories\EloquentRepository;
use App\Category;
use App\ChildCate;
use  App\Tag;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class TagsEloquentRepository extends EloquentRepository implements TagsRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\Tag::class;
    }

    public function getDataMenu(){
//        $cate= DB::table('categories')
//            ->leftjoin('child_cates','categories.id','=','child_cates.cateParen_id')
//            ->select('name','lvl','alias','metaName','description','weight','child_cates.cateParen_id')
//            ->get();
//        return $cate;
    }

    public function getCreateAndEdit($inputFile, $id=0){
        if ($id==0){
            $tag= new Tag();
            $tag->title= $inputFile['txtName'];
            $tag->alias=changeTitle($inputFile['txtName']);
            $tag->active=1;
            var_dump($tag);die();
            $tag->save();
            return redirect()->route('tags.list')->with(['thongbao'=>'Tag tạo thành công']);
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