@extends('layout')
    
@section('content')

<eval-form inline-template :subparts="{{$part->subparts()->with('spares')->get()}}">
    <div class="ui four column grid relaxed">
        <div class="row">
            <div class="column sixteen wide">
                <h3>ข้อมูลลูกค้า</h3>
                <div class="ui fluid card">
                    <div class="content">
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
                <h3 class="mt-8">รายการ</h3>
                <table class="ui basic table">
                    <thead>
                        <tr>
                            <th>ชื่อ</th>
                            <th>ราคา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="spare in selectedSpares">
                            <td><strong>@{{ spare.name }}</strong></td>
                            <td>
                                @{{spare.price}}
                            </td>
                            <!-- <td>
                                <button class="ui basic mini compact icon button"><i class="plus icon"></i></button>
                                <span style="padding:10px;">2</span>
                                <button class="ui basic mini compact icon button"><i class="minus icon"></i></button>
                            </td> -->
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th>@{{ totalPrice  }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <h3 class="ml-2 mt-8">ชิ้นส่วน</h3>
    
    
        <div v-for="subpart in subparts" class="row">
            <div v-for="spare in subpart.spares" class="four wide column">
                <div class="card">
                    <div class="flex flex-col ">
                        <div class="flex justify-center">
                            <img class="right floated h-48 ui image" src="http://cf.lnwfile.com/evh9g4.jpg">
                        </div>
                        <div class="flex justify-between my-4">
                            <div class="header text-xl font-bold">
                                @{{ spare.name }}
                            </div>
                            <div class="meta text-grey-darker">
                            @{{ spare.price }} Baht
                            </div>
                        </div>
                    </div>
                    <div class="extra content my-4">
                        <div class="ui basic green button w-full" @click="onAdd(spare)">Add</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</eval-form>


@endsection