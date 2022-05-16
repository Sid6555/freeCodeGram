<?php
// JAoFsUhibrtcLbPHF8EOHWxBjp6sE0w1
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\InstagramUser;

class InstagramUsers extends Controller
{
    private $id;
    private $name;
    private $friends;

    function __construct(){
        echo "Calling Instagram constructor"."<br />";
        echo $this->id;
        $this->name = 'tuki';
        $this->friends = ['gudgud', 'bhulu', 'pengu', 'pulpul'];
    }

    public function index($id){
        echo "Instagram users<br />";
        $this->id = $id;
        // $sample_data = $this->fetch_sample_data();
        // var_dump($sample_data);

        if(view()->exists('instausers')){
            // return view('/instausers', ['id'=>$this->id, 'name'=>$this->name, 'friends'=>$this->friends]);
            $data = InstagramUser::all();
            $result = [];
            // return InstagramUser::all();
            // var_dump(json_decode($data));
            // var_dump($data);
            $json_decode = json_decode($data);
            $i = 0;
            foreach($json_decode as $value){//var_dump((array)$value);
                $result[] = (array)$value;
                // $i++;
            }
            // var_dump($result);
            return view('/instausers', ['result'=>$data, 'id'=>$id]);
        }
        else{
            echo "Page not found.";
        }
    }

    private function fetch_sample_data(){
        return DB::select("select * from migrations");
    }

    public function fileupload(Request $req){
        // Shows all form data
        $req->all();
        $fileName = $req->input('picture_name').".".$req->file('picture')->getClientOriginalExtension();

        return $req->file('picture')->storeAs('docs', $fileName);
    }
}
