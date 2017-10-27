@extends('common.admin')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
    .aa{
        margin-left:23px;
    }
</style>
<body>
<div class="aa">
    <table width="1100" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                    <thead>
                                        <tr>
                                            <th>用户ID</th>
                                            <th>汽车ID</th>
                                            <th>状态</th>
                                            <th>价格</th>
                                            <th>买车时间</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->uid}}</td>
                                            <td>{{$user->tid}}</td>
                                            <td>{{ ($user->status == 1)?'未售' : '交易中'}}</td>
                                            <td>{{$user->price}}</td>
                                            <td>{{$user->time}}</td>
                                        </tr>
                                    @endforeach
                                        <!-- more data -->
                                    </tbody>
                                </table>
</div>
</body>
</html>
                                
@endsection