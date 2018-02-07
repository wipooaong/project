@extends('layout')
    
@section('content')

<div class="ui fluid card ">
					<div class="content">
						<h3>ข้อมูลลูกค้า</h3>
						<div class="ui grid">
							<div class="five column row">
								<div class="column">
									<span class="ui horizontal label">ทะเบียน</span> {{$license_plate}}
								</div>
								<div class="column">
									<span class="ui horizontal label">ยี่ห้อ</span> {{$brand->name}}
								</div>
								<div class="column">
									<span class="ui horizontal label">รุ่น</span> {{$serie->name}}
								</div>
								<div class="column">
									<span class="ui horizontal label">สี</span> {{$color}}
								</div>
								<div class="column">
									<span class="ui horizontal label">ส่วนที่ซ่อม</span> {{$part->name}}
								</div>
							</div>
						</div>
					</div>
				</div>



@endsection