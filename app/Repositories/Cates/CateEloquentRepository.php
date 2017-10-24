<?php
/**
 * Created by PhpStorm.
 * User: LeThanh
 * Date: 10/19/2017
 * Time: 9:55 PM
 */

namespace App\Repositories\Cates;
use App\Repositories\EloquentRepository;
use App\Category;
use App\ChildCate;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class CateEloquentRepository extends EloquentRepository implements CateRepositoryInterface
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \App\Category::class;
    }

    public function getDataMenu(){
        $cate= DB::table('categories')
            ->leftjoin('child_cates','categories.id','=','child_cates.cateParen_id')
            ->select('name','lvl','alias','metaName','description','weight','child_cates.cateParen_id')
            ->get()->toArray();
        return $cate;
    }

    public function getCreateAndEdit($inputFile, $id=0){
				if($id==0){
				$cateData= new Category();
				$cateData->name= $inputFile['txtName'];
				$cateData->alias= changeTitle($inputFile['txtName']);
				// khuc !empty -> không để trống thì thực hiện tức là có nhập vào text form
				if(!empty($inputFile['txtMeta'])){
                    $cateData->metaName= $inputFile['txtMeta'];

				}else{
                    $cateData->metaName= $inputFile['txtName'];
				}
				$cateData->description= $inputFile['txtDescription'];
				$cateData->save();
					$cateChildData= new ChildCate();
					$cateChildData->cateParen_id= $cateData->id;
					$cateChildData->lvl= $inputFile['slMenu'];
					$cateChildData->save();
			}else{
				$cateData= Category::find($id);
				$cateData->name= $inputFile['txtName'];
				$cateData->alias= changeTitle($inputFile['txtName']);
				$cateData->metaName= $inputFile['txtMeta'];
				$cateData->description= $inputFile['txtDescription'];
				$cateData->save();
                    $getIDParent= DB::table('categories')
                        ->leftjoin('child_cates','categories.id','=','child_cates.cateParen_id')
                        ->select('child_cates.cateParen_id')
                        ->where('child_cates.cateParen_id','=',$id)
                        ->get();
					$cateChildData= ChildCate::find($getIDParent);
					$cateChildData->lvl= $inputFile['slMenu'];
					$cateChildData->save();
			}

    }
}