<html>

<body>

<table style="width: 700px;">
<tr><td>&nbsp;</td></tr>
<tr><td>   <img src="{{asset('itservices/cp_code_v1.3_09-09-2021/img/logo/theOne.png')}}" style="width:8%;height:8%" alt="logo"  ></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Hello Admin </td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>there are New place order  go  check your admin Account To Accept the order</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>Order No : {{$Order_id}}</td></tr>
<tr><td>&nbsp;</td></tr>
    <tr><td>fname : {{$fname}}</td></tr>
<tr><td>&nbsp;</td></tr>
    <tr><td>lname : {{$lname}}</td></tr>
<tr><td>&nbsp;</td></tr>
        <tr><td>email : {{$email}}</td></tr>
<tr><td>&nbsp;</td></tr>
            <tr><td>phone: {{$phone}}</td></tr>
<tr><td>&nbsp;</td></tr>
            <tr><td>total price : {{$totalprice}}</td></tr>
<tr><td>&nbsp;</td></tr>
<table  style="width: 95%"  cellpadding="5"   cellspacing="5" bgcolor="#f7f4f4" >
<tr bgcolor="#cccccc">

    <td>Product Name</td>
 <td>Product qty </td>
 <td>Product price</td>


</tr>
  @foreach ($OrderItemv as $item)



<tr bgcolor="#cccccc">

    <td>{{$item->name_en}}</td>
 <td>{{$item->qty}}</td>
 <td>{{$item->price}}</td>


</tr>



@endforeach






</table>


</table>

Thanks & Regards ,E-commerce website
</body>


















</html>
