<?php
//
//namespace App\Models;
//
//use MongoDB\Laravel\Eloquent\Model;
//
//class Category extends Model
//{
//    protected $connection = 'mongodb';
//    protected $collection = 'categories';
//    protected $fillable=['title','slug','summary','photo','status','is_parent','parent_id','added_by'];
//
//    public function parent_info(){
//        return $this->hasOne('App\Models\Category','id','parent_id');
//    }
//    public static function getAllCategory(){
//        return  Category::orderBy('id','DESC')->with('parent_info')->paginate(10);
//    }
//
//    public static function shiftChild($cat_id){
//        return Category::whereIn('id',$cat_id)->update(['is_parent'=>1]);
//    }
//    public static function getChildByParentID($id){
//        return Category::where('parent_id',$id)->orderBy('id','ASC')->pluck('title','id');
//    }
//
//    public function child_cat(){
//        return $this->hasMany('App\Models\Category','parent_id','id')->where('status','active');
//
//    }
//
//    public static function getAllParentWithChild() {
//        return Category::with('child_cat')
//            ->where('is_parent', 1)
//            ->where('status', 'active')
//            ->orderBy('title', 'ASC')
//            ->get();
//    }
//
//    public function products(){
//        return $this->hasMany('App\Models\Product','cat_id','id')->where('status','active');
//    }
//    public function sub_products(){
//        return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
//    }
//    public static function getProductByCat($slug){
//        // dd($slug);
//        return Category::with('products')->where('slug',$slug)->first();
//        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
//    }
//    public static function getProductBySubCat($slug){
//        // return $slug;
//        return Category::with('sub_products')->where('slug',$slug)->first();
//    }
//    public static function countActiveCategory(){
//        $data=Category::where('status','active')->count();
//        if($data){
//            return $data;
//        }
//        return 0;
//    }
//}


namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'categories';

    protected $fillable = [
        'title',
        'slug',
        'summary',
        'photo',
        'status',
        'is_parent',
        'parent_id',
        'added_by'
    ];


    // Relationship to parent category
    public function parent_info()
    {
        return $this->hasOne(Category::class, '_id', 'parent_id');
    }

    // Relationship to child categories
    public function child_cat()
    {
        return $this->hasMany(Category::class, 'parent_id', '_id')
            ->where('status', 'active');
    }

    // Relationship to products under this category
    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id', '_id')
            ->where('status', 'active');
    }

    // Relationship to products under sub-category
    public function sub_products()
    {
        return $this->hasMany(Product::class, 'child_cat_id', '_id')
            ->where('status', 'active');
    }

    // Get all categories with their parent info
    public static function getAllCategory()
    {
        return Category::orderBy('title', 'DESC')
            ->with('parent_info')
            ->paginate(10);
    }

    // Mark child categories as parents
    public static function shiftChild($cat_id)
    {
        return Category::whereIn('_id', $cat_id)
            ->update(['is_parent' => 1]);
    }

    // Get child categories by parent ID
    public static function getChildByParentID($id)
    {
        return Category::where('parent_id', $id)
            ->orderBy('title', 'ASC')
            ->pluck('title', '_id');
    }

    // Get all parent categories with their child categories
    public static function getAllParentWithChild()
    {
        return Category::with('child_cat')
            ->where('is_parent', "1")
            ->where('status', 'active')
            ->orderBy('title', 'ASC')
            ->get();
    }

    // Get a category and its products by slug
    public static function getProductByCat($slug)
    {
        return Category::with('products')
            ->where('slug', $slug)
            ->first();
    }

    // Get a sub-category and its products by slug
    public static function getProductBySubCat($slug)
    {
        return Category::with('sub_products')
            ->where('slug', $slug)
            ->first();
    }

    // Count all active categories
    public static function countActiveCategory()
    {
        $data = Category::where('status', 'active')->count();
        return $data ?? 0;
    }
}
