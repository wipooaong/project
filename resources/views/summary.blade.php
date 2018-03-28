<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew.ttf')}}") format('truetype');
}

@font-face {
  font-family: 'THSarabunNew';
  font-style: normal;
  font-weight: bold;
  src: url("{{asset('fonts/THSarabunNew/THSarabunNew Bold.ttf')}}") format('truetype');
}

body,td,tr,th,h4 {
  font-family : 'THSarabunNew'
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<center><h1>ใบประเมินราคาค่าบริการซ่อม</h1></center></br>
<center><h3>ศูนย์&nbsp; อะไหล่ยนต์&nbsp; ลำพูน</h3></center></br>
<center><h>โทร&nbsp; 053-520011, &nbsp;081-8846227&nbsp;&nbsp; Line:&nbsp; Suthep333</h4></center></br>


<h4>ข้อมูลลูกค้า</h4>
<table>
  <tr>
      <th>ทะเบียน</th>
      <th>ยี่ห้อ</th>
      <th>รุ่น</th>
      <th>สี</th>
      <th>ส่วนที่ซ่อม</th>
  </tr>
  <tr>
    <td>{{$license_plate}}</td>
    <td>{{$brand}}</td>
    <td>{{$serie}}</td>
    <td>{{$color}}</td>
    <td>{{$part}}</td>
  </tr>
</table>
<h4>รายการส่วนที่ซ่อม</h4>

<table>
<tr>
    <th>ชื่อ</th>
    <th>จำนวน</th>
    <th>ราคา</th>
  </tr>
  @foreach($spares as $s)
  <tr>
    <td>{{$s['name']}}</td>
    <td>{{$s['qty']}}</td>
    <td>{{$s['price']}}</td>
  </tr>
  @endforeach
  <tr>
    <td colspan="3">Total :  <right>{{$total}}</right></td>
  </tr>
</table>
<div style="display: flex; justify-content: flex-end; flex-direction: row;">
  <div style="float:right">
      <p style="margin-bottom:20px;">...................................ลูกค้า</p>
      <p>....................................ช่าง</p>
  </div>
</div>
</body>
</html>
