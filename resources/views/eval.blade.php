@extends('layout')
    

@section('content')
<eval-form inline-template :subparts="{{$part->subparts()->with('spares')->get()}}">

    <div class="ui four column grid relaxed">
    <div class="ui longer modal">
        <div class="header">{{$part->name}}</div>
        <div class="scrolling content">
            <p>{!! html_entity_decode($part->tip) !!}</p>
        </div>
    </div>
        <div class="row">
            <form action="/information/print" method="post" class="column sixteen wide">
            {{csrf_field()}} 
               <div class="flex justify-between w-full">
               <h3>ข้อมูลลูกค้า</h3>
                <button type="submit" class="ui button">
                     Print
                </button>
                </div>
                <div class="ui fluid card">
                    <div class="content">
                        <div class="ui grid">
                            <div class="five column row">
                                <div class="column">
                                    <span class="ui horizontal label">ทะเบียน</span> {{$license_plate}}
                                    <input type="hidden" name="license_plate" value="{{$license_plate}}">
                                </div>
                                <div class="column">
                                    <span class="ui horizontal label">ยี่ห้อ</span> {{$brand->name}}
                                    <input type="hidden" name="brand" value="{{$brand->name}}">
                                </div>
                                <div class="column">
                                    <span class="ui horizontal label">รุ่น</span> {{$serie->name}}
                                    <input type="hidden" name="serie" value="{{$serie->name}}">
                                </div>
                                <div class="column">
                                    <span class="ui horizontal label">สี</span> {{$color}}
                                    <input type="hidden" name="color" value="{{$color}}">
                                </div>
                                <div class="column">
                                    <span class="ui horizontal label">ส่วนที่ซ่อม</span> {{$part->name}}
                                    <input type="hidden" name="part" value="{{$part->name}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mt-8">รายการ</h3>
                <table class="ui  green table">
                    <thead>
                        <tr>
                            <th>ชื่อ</th>
                            <th>จำนวน</th>
                            <th>ราคา</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(spare,key,index) in selectedSpares">
                            <input type="hidden" name="spares"  :value="JSON.stringify(selectedSpares)">
                            <td><strong>@{{ spare.name }}</strong></td>
                            <td>
                            <a @click="decrease(spare)" class="ui mini icon button">
                                <i class="minus icon"></i>
                            </a>
                                <span class="mx-4">@{{spare.qty}}</span>
                            <a  @click="increase(spare)" class="ui mini icon button">
                                <i class="plus icon"></i>
                            </a>
                            </td>
                            <td>
                                @{{spare.price}}
                            </td>
                            <td>
                            <a  @click="remove(key,spare)" class="ui mini basic icon button">
                                <i class="delete icon"></i>
                            </a>
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
                            <input type="hidden" name="total" :value="totalPrice">
                            <th>@{{ totalPrice  }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </form>
        </div>
       <div class="flex">
       <h3 class="ml-2 mt-8 mx-4">ชิ้นส่วน</h3>
        <div class="item">
           
         </div>
        </div>

        <div class="flex justify-center w-full my-8">
             <img src="/storage/{{$part->img}}" alt="">
        </div>

       <div class="w-full py-4">
                <div class="w-full bg-green py-4 text-white rounded-lg">
                        <div class="ml-6 mb-4">
                                <a class="ui label white">
                                        <i class="info icon"></i>
                                        Tips
                                </a>
                           </div>
                        <p>{!! html_entity_decode($part->tip) !!}</p>
        
                </div>
       </div>

        <div class="w-full my-8" v-for="subpart in subparts">
        <h3>@{{subpart.name}}</h3>
        <table class="ui basic table">
            <thead>
                <tr>
                    <th class="two wide">Number</th>
                    <th class="six wide">Name</th>
                    <th class="two wide">Price</th>
                    <th class="six wide">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="spare in subpart.spares">
                    <td>@{{ spare.number}}</td>
                    <td>@{{ spare.name}}</td>
                    <td>@{{ spare.price }}</td>
                    <td>          
                    <button @click="onAdd(spare)" class="ui labeled icon button">
                        <i class="add to cart icon"></i>
                        Add
                    </button>           
                    
                    </td>
                </tr>
            </tbody>    
        </table>
    
        </div>
        
    
        <!-- <div v-for="subpart in subparts" class="row">
             <p>@{{ subpart.name}}</p> 
            <div v-for="spare in subpart.spares" class="two wide column">
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
        </div> -->
    </div>

</eval-form>
@endsection