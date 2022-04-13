<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cookie;

class Products extends Model
{
    public $table = "products";

    public $fillable = ['id', 'name',
        'avatar', 'summary',
        'language_id',
        'category_id',
        'created_at', 'updated_at'];

    public $dates = ['created_at', 'updated_at'];
    public $primaryKey = 'id';

    public function User()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function Language()
    {
        return $this->belongsTo(Language::class, "language_id", "id");
    }

    public function Category()
    {
        return $this->belongsTo(Category::class, "category_id", "id");
    }

    public function Products()
    {
        return $this->hasMany(ProductsTranslate::class, "products_id", "id");
    }

    public function Translate($o2)
    {
        return $this->hasOne(ProductsTranslate::class, "products_id", "id")
            ->where('language_id', '=', $o2)->first();
    }

    public function select_lang()
    {
        return $select_lan_choice = Language::where('select', '=', '1')->first();
    }

    public function Translatex(){
        return $this->hasMany(ProductsTranslate::class,"products_id","id");
    }

    public function date(){
        return date_format($this->created_at,'d M Y');
    }

    public function select_lan()
    {
        $select_lan = Language::where('dir', '=', app()->getLocale())->first();
        if ($select_lan == null) {
            $select_lan = Language::where('select', '=', '1')->first();
        }
        return $select_lan;
    }

    public function CurrentTranslate()
    {
        return $this->hasMany(ProductsTranslate::class, "products_id", "id");
    }

    public function name()
    {
        if (app()->getLocale() == $this->select_lang()->dir) {
            return $this->name;
        } else {
            return $this->Translate($this->select_lan()->id) != null ? $this->Translate($this->select_lan()->id)->name : "";
        }
    }

    public function sub_name()
    {
        if (app()->getLocale() == $this->select_lang()->dir) {
            return $this->sub_name;
        } else {
            return $this->Translate($this->select_lan()->id) != null ? $this->Translate($this->select_lan()->id)->sub_name : "";
        }
    }

    public function summary()
    {
        if (app()->getLocale() == $this->select_lang()->dir) {
            return $this->summary;
        } else {
            return $this->Translate($this->select_lan()->id) != null ? $this->Translate($this->select_lan()->id)->summary : "";
        }
    }

    public function summary1()
    {
        if (app()->getLocale() == $this->select_lang()->dir) {
            return $this->summary1;
        } else {
            return $this->Translate($this->select_lan()->id) != null ? $this->Translate($this->select_lan()->id)->summary1 : "";
        }
    }

    public function sub_summary()
    {
        if (app()->getLocale() == $this->select_lang()->dir) {
            return $this->sub_summary;
        } else {
            return $this->Translate($this->select_lan()->id) != null ? $this->Translate($this->select_lan()->id)->sub_summary : "";
        }
    }

    public function img()
    {
        return url('/') . env('PATH_IMAGE') . $this->avatar;
    }

    public function route()
    {
        return route('service', ['id' => $this->id, 'name' => $this->name]);
    }

    public function Related()
    {
        $related_products = $this->related_products;
        $count_list_re = explode(",", $related_products);
        $ret = "";
        if (count($count_list_re) != 0) {
            foreach ($count_list_re as $key => $value) {
                if ($value) {
                    $item2 = Products::where("id", $value)->first();
                    if ($item2) {
                        $ret = $ret . "<div>
                            <div class=\"project-feature-box\">
                                <img src=\"{$item2->img()}\" alt=\"{$item2->img()}\" class=\"\">
                                <h3><a href=\"{$item2->route()}\">{$item2->name()}</a></h3>
                            </div>
                        </div>" ;
                    }
                }
            }
        }
        return $ret;
    }

    function share($type)
    {
        if ($type == "face") {
            $face = "https://www.facebook.com/sharer.php?u=" . $this->route();
            return $face;
        } else if ($type == "twitter") {
            $face = "https://twitter.com/share?url=" . $this->route();
            return $face;
        } else if ($type == "linkedin") {
            $face = "https://linkedin.com/share?url=" . $this->route();
            return $face;
        } else if ($type == "whatsapp") {
            $face = "whatsapp://send?text=" . $this->route();
            return $face;
        }
        return null;
    }

}
