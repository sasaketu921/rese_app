@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                   {{ Auth::user()->name }}さん、ようこそReseへ！</div>
                <div id="app">
                    <a class="shop-link" href="/shop">・店舗一覧</a>
                    <a href="/mypage" class="mypage-link">・マイページ</a>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <router-view/>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
     .shop-link {
        margin-right: 10px;
    }
</style>