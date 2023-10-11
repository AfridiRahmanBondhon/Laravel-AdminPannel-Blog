<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    private static $blog;
    public static function saveInfo($request, $id=null){
        if($id!=null){
            self::$blog = Blog::find($id);
        }else{
            self::$blog = new Blog();
        }

        self::$blog->title = $request->title;
        self::$blog->slug= self::makeSlug($request);

        self::$blog->category_id= $request->category_id;
        self::$blog->author_name= $request->author_name;
        self::$blog->description= $request->description;
        if ($request->file('image')){
            if (self::$blog->image){
                if (file_exists(self::$blog->image)){
                    unlink(self::$blog->image);
                }
            }
            self::$blog->image= self::saveImage($request);
        }
        self::$blog->date = $request->date_input;
        self::$blog->save();
    }
    private static $slug;
    private static function makeSlug($request){
        if ($request->slug){
            self::$slug = Str::slug($request->slug, '-');
        }else{
            self::$slug = Str::slug($request->title, '-');
        }
        return self::$slug;
    }
    private static $image,$imageNewName,$dir,$imgUrl;
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'admin-assets/blog-image/';
        self::$imgUrl= self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public static function deleteInfo($id){
        self::$b=Blog::find($id);
        self::$b->delete();
    }
    public static $b;
    public static function statusCheck($id){
        self::$b = Blog::find($id);
        if (self::$b->status == 1){
            self::$b->status = 0;
        }else{
            self::$b->status = 1;
        }
        self::$b->save();
    }
}
