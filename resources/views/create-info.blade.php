@extends('layout')
    
@section('content')

<form class="ui form" method="GET" action="/information/eval" >
    <h4 class="ui dividing header">ข้อมูลลูกค้า</h4>
    <div class="field">
        <div class="two fields">
            <div class="field">
                <label>ทะเบียนรถ</label>
                <input type="text" name="license_plate" placeholder="License Plate">
            </div>
            <div class="field">
                <label>สี</label>
                <input type="text" name="color" placeholder="Color">
            </div>
        </div>
    </div>

    <div class="field">
        <div class="three fields">
            <div class="field">
                <label>ยี่ห้อ</label>
                <select class="ui fluid search dropdown" name="brand">

                    @foreach($brands as $b)
					    <option value="{{$b->id}}">{{ $b->name }}</option>
                    @endforeach

        		</select>
            </div>
            <div class="field">
                <label>รุ่น</label>
                <select class="ui fluid search dropdown" name="serie">

                    @foreach($series as $s)
						<option value="{{$s->id}}">{{ $s->name }}</option>
                    @endforeach
        		</select>
            </div>
            <div class="field">
                <label>ส่วนที่ซ่อม</label>
                <select class="ui fluid search dropdown" name="part">

                    @foreach($parts as $p)
						<option value="{{$p->id}}">{{ $p->name }}</option>
                    @endforeach

       			 </select>
            </div>
        </div>
    </div>

    <button type="submit" class="ui button" tabindex="0">ต่อไป</button>
</form>


@endsection