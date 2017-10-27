<?php

namespace App\Http\Controllers\admin\ad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Ad;
use App\Org\Image;
use Intervention\Image\ImageManagerStaticImage;
class AddController extends Controller
{
    public function index()
    {
        $list = Ad::all();
        return view('admin.ad.list.list', ['lists'=>$list]);
    }

    public function create()
    {
        return view('admin.ad.add.add');
    }

    public function store(Request $request)
    {
        //删除token
        // $data = $request->except('_token');
        

        // dd($data);
         // //判断请求对象中是否有需要上传的文件
        if ($request->hasFile('ad_picture')) {
            //判断文件是否有效
            if ($request->file('ad_picture')->isValid()){
                //生成上传文件对象
                $file = $request->file('ad_picture');
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
                // 随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 另存为
                $file->move('./upload', $picname);
                
                // dd($data);
                if($file->getError() > 0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                    echo "<img src='./upload/{$picname}'>";
                }
            }
        }
            //图片缩放
            $img = new Image();
            $img->open('./upload/'.$picname);
            $img->thumb('1000','500');
            $img->save('./upload/s_'.$picname);
            $data = $request->except('_token','ad_picture');
            $data['ad_picture'] = 's_'.$picname;
            //执行添加
            $id = Ad::insertGetId($data);
        //判断有没有id
        if($id > 0){
            //重定向到列表页，并带一个闪存
            return redirect('admin/Ad')->with('msg','添加成功！');
        }
    }


    public function edit($id)
    {
        $data = Ad::where('id', $id)->first();
        // dd($data);
        return view('admin.ad.add.edit', ['datas'=>$data]);
    }

    public function update(Request $request,$id)
    {
    // dd($request->ad_name);
        if ($request->hasFile('ad_picture')) {
            //判断文件是否有效
            if ($request->file('ad_picture')->isValid()){
                //生成上传文件对象
                $file = $request->file('ad_picture');
                //获取后缀名
                $ext = $file->getClientOriginalExtension();
                // 随机生成新文件名
                $picname = time().rand(1000,9999).'.'.$ext;
                // 另存为
                $file->move('./upload', $picname);
                
                // dd($data);
                if($file->getError() > 0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                    echo "<img src='./upload/{$picname}'>";
                }
            }
        }
            //图片缩放
            $img = new Image();
            $img->open('./upload/'.$picname);
            $img->thumb('1000','500');
            $img->save('./upload/s_'.$picname);
        //删除token,method;
        $xiu = $request->except('_token', '_method');

            $xiu['ad_picture'] = 's_'.$picname;
        //查询ID,进行修改
         // dd($xiu);
        $res = Ad::where('id', $id)->update($xiu);
        //进行判断,如果大于0说明有修改，如果不大于0说明失败!
        // dd($res);
        if($res > 0){
            return redirect('admin/Ad')->with('msg', '修改成功！');
        } else {
            return redirect('admin/Ad')->with('msg', '修改失败！');
        }
    }

    public function destroy($id)
    {   
        //执行删除
        $res = Ad::where('id', $id)->delete();

        //进行判断，并携带闪存                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
        if($res > 0){
            return redirect('/admin/Ad')->with('msg', '删除成功');
        }else{
            return redirect('/admin/Ad')->with('msg', '删除失败');
        }

    }

}
