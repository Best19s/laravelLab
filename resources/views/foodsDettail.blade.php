<h1>ร้านข้าวป้านาง</h1>
<table border="1px" style="border-collapse: collapse;">
   <tr>
   <th>ลำดับ</th>
   <th>เมนู</th>
   <th>ประเภทเมนู</th>
   <th>ราคา</th>
   </tr>

      @foreach ($foods as $food)
      <tr>
         <td>{{$food->id}}</td>
         <td>{{$food->food_name}}</td>
         <td>{{$food->food_type}}</td>
         <td>{{$food->price}}</td>
      </tr>
      @endforeach


</table>
