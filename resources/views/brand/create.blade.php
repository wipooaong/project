@extends('layout')

@section('content')
    <h2 class="mb-8">เพิ่มยี่ห้อ</h2>
    <form class="ui form" action="">
            <div class="two field">
                <label>ยี่ห้อ</label>
                <input type="text" name="license_plate" placeholder="Brand">                      
            </div>
            <div class="field">
                    <button class="ui green button">
                            สร้าง
                    </button>
            </div>
    </form>
@endsection